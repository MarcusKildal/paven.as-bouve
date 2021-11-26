<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- linker til css filen -->
    
       <link rel="stylesheet" href="registrer-1.css">
    
    <!-- gir tittel for nettsiden min -->
    
      <title>Welcome to PAVEN.CEO</title>
    
    <!-- Legger til script kode for menu-bar og skrivene tekst.  -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    
  </head>




  <body>

<!-- menu-bar navigaistion Start -->


<!-- lager klasse for, men-bar og kallenavn min.
     Derettter linker jeg de forsjellige sider. -->


<nav class="menu-bar">

  <div class="max-width">

  <div class="nickname"> <a href="index.php">PAVEN<span>.CEO</span></a></div>

  </div>

</nav>

<!-- menu-bar navigaistion End -->


<!-- Homepage section Start -->


<!-- legger til seksjon, gir den en klasse.
 Etter det lager jeg forsjellige klasse for setninger.
 Deretter legger jeg til setninger. -->


<section class="homepage">

<div class="max-width">

  <div class="text-1"></div>
  <div class="text-2">Names of webdesigners:</div>
  <div class="text-3"><span class="typing"></span></div>

</div>




<!-- Lager forsjellige id for selve boksen, bruker-icon,
     brukernavn kog passord osv. Etter det gjør jeg dem 
     til knapper (brukernavn og passord osv.). -->

<div id="box">
<img src="bruker-icon.png" alt="bruker">

    <form method="post">
      <input type="email" name="epost" required placeholder="Email" id="text">
      <input type="text" name="fornavn" placeholder="Fornavn" id="text">
      <input type="text" name="etternavn" placeholder="Etternavn" id="text">
      <input type="text" name="brukernavn" placeholder="Brukernavn" id="text">
      <input type="password" name="passord_1" placeholder="Passord" id="psd">
      <input type="password" name="passord_2" placeholder="Bekreft Passord" id="psd">



       <!-- lager id for server.php og for teksten (Har du konto?).
          Etter det gir jeg id for (Logg deg inn) og linker jeg den med logginn.php. 
          Lager også en Logg deg inn knapp. --> 

        <div id ="msg">
            <?php
            //inkluderer server.php
            include ("server.php");
            ?>
        </div>

    <input type="submit" name="registrer" value="Registrer" id="button">
      <p id="txt">Har du konto? <a href="logginn.php"id="button">Logg deg inn</a></p>
    </form>

</div>

</section>

<!-- Homepage section End -->








<!-- footer section Start -->



<!-- legger til bunntekst -->

<footer>
     <h3>Created By <a href="index.php">Paven.CEO</a></h3>
   </footer>

<!-- footer section End -->






<!-- linker til javascript -->

<script src="scripts.js"></script>

  </body>
</html>
