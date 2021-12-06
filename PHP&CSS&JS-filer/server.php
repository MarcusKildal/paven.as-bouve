<?php
session_start();
// Tilkoblingsinformasjon
$tellFeil = "";
$tjener = "localhost";
$brukernavn = "root";
$passord = "root";
$database = "Login-system_db"; //Endre på denne til din database

// Opprette en kobling
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

// Sjekk om koblingen virker
if($kobling->connect_error) {
  die("Something went wrong: " . $kobling->connect_error);
} else {
  // echo "Koblingen virker.<br>";
}


// registrering
// når brukeren trykker på registrer knappen
if(isset($_POST["registrer"])) {
  $brukernavn = $_POST["brukernavn"];
  $fornavn = $_POST["fornavn"];
  $etternavn = $_POST["etternavn"];
  $epost = $_POST["epost"];
  $passord_1 = $_POST["passord_1"]; // lager passord
  $passord_2 = $_POST["passord_2"]; // bekreft passord (skal vise hvorfor)




// if-setning, teller feilmeldinger

  if(empty($brukernavn)) {
    $tomtBrukernavn = "A username is required.<br>";
    $tellFeil = 1;
  }
  if(empty($epost)) {
    $tomtBrukernavn = "A email is required.<br>";
    $tellFeil = 1;
  }
  if(empty($fornavn)) {
    $tomtBrukernavn = "Firstname is required.<br>";
    $tellFeil = 1;
  }
  if(empty($etternavn)) {
    $tomtBrukernavn = "Lastname is required.<br>";
    echo "Lastname is required.<br><br>";
    $tellFeil = 1;
  }
  if(empty($passord_1)) {
    $tomtBrukernavn = "A password is required.<br>";
    $tellFeil = 1;
  }
  if(empty($passord_2)) {
    $tomtBrukernavn = "You must confirm your password.<br>";
    $tellFeil = 1;
  }

  // er passordene ulike?
  if($passord_1 != $passord_2) {
    $tomtBrukernavn = "The passwords have to be equal<br>";
    $tellFeil = 1;
  }

// er eposten gyldig?
if (!filter_var($epost, FILTER_VALIDATE_EMAIL)) {
  echo "Wrong email format.";
  $tellFeil = 1;
}

$sql_sjekkOmBrukernavnEllerEpostFinnes = "SELECT * FROM brukere
WHERE epost='$epost' OR brukernavn = '$brukernavn'";
$resultat_sjekkOmBrukernavnEllerEpostFinnes = $kobling->query($sql_sjekkOmBrukernavnEllerEpostFinnes);

if($resultat_sjekkOmBrukernavnEllerEpostFinnes->num_rows > 0) {
  echo "The email is already in use or the username is taken.";
  $tellFeil = 1;
}

if($tellFeil < 1) {
  $passord = md5($passord_1); // kryptere passord

  $sql_registrerBruker = "INSERT INTO brukere (epost, fornavn, etternavn, passord, brukernavn)
  VALUES ('$epost','$fornavn','$etternavn','$passord','$brukernavn')";
  if($kobling->query($sql_registrerBruker)) {
    echo "The username is registered. You can log in now.:";
  } else {
    echo "Unexpected error during the process.";
    }
  }
}





if(isset($_POST["logginn"])) {
  $brukernavn = $_POST["brukernavn"];
  $passord = $_POST["passord"]; // lager passord
  
  // sjekk om bruker finnes (brukernavn eller passord)
  if(empty($brukernavn)) {
    echo "A username is required.<br>";
    $tellFeil = 1;
  }
  if(empty($passord)) {
    echo "A password is required.<br>";
    $tellFeil = 1;
  }


  // hvis det ikke er noen feil
  if($tellFeil < 1) {
  $passordKrypter = md5($passord);
  $sql_sjekkOmBrukerFinnes = "SELECT * FROM brukere
  WHERE brukernavn='$brukernavn' AND passord = '$passordKrypter'";
  $resultat_sjekkOmBrukerFinnes = $kobling->query($sql_sjekkOmBrukerFinnes);
  if($resultat_sjekkOmBrukerFinnes->num_rows > 0) {
    $row_bruker = $resultat_sjekkOmBrukerFinnes->fetch_object(); // henter info om brukeren
    $_SESSION["id"] = $row_bruker->id;
    $_SESSION["fornavn"] = $row_bruker->fornavn;
    $_SESSION["etternavn"] = $row_bruker->etternavn;
    $_SESSION["epost"] = $row_bruker->epost;
    $_SESSION["brukernavn"] = $row_bruker->brukernavn;
    $_SESSION["passord"] = $row_bruker->passord;

    header("location: main.php");
  } else {
    echo "The user is not registered. Either the username or password is wrong!";
    }
  }
}


 ?>
