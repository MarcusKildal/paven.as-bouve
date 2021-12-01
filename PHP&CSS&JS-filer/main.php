<?php
//inkluderer server.php.
include("server.php");

// det gjør sånn at du blir logget ut
if(isset($_GET["loggut"])) {
  session_destroy();
  header("location: index.php");
}
if(empty($_SESSION["id"])) {
  header("location: index.php");
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

 <head>

    <meta charset="utf-8">

  <!-- linker til css filen -->

    <link rel="stylesheet" href="style-10.css">

  <!-- gir tittel for nettsiden min -->

    <title>Welcome to PAVEN.CEO</title>

  <!-- Legger til script kode for menu-bar icon -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Legger til script kode for menu-bar, menu-bar icon, skrivene tekst og teams bokser -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

  <!-- Legger til script kode og link, for teams bokser. -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

 </head>



<body>


<!-- menu-bar navigaistion Start -->


<!-- lager klasse for, men-bar, menu-icon, kallenavn min.
     Derettter linker jeg de forsjellige sider og legger til menu-icon. -->

   <nav class="menu-bar">

      <div class="max-width">
      <div class="nickname"> <a href="main.php" >PAVEN<span>.CEO</span></a></div>



<!-- lager klasse for menu-bar (Din profil) 
        og deretter gjør jeg den til en knapp. 
        Etter det lager jeg drop-menu for dette og lager logg ut knapp. -->

  <div class="right-menu">
    <button class="menu-button">Your Profile</button>
    
    <div class="dropdown-menu">
      <p><b>Firstname:</b> <?php echo $_SESSION["fornavn"]?></p> <br>
      <p><b>Surname:</b> <?php echo $_SESSION["etternavn"]?></p> <br>
      <p><b>Email:</b> <?php echo $_SESSION["epost"]?></p><br>
      <a href="?loggut" id= "button">Logg ut</a>
    </div>

  </div>

 
</div>

      </div>

   </nav>

<!-- menu-bar navigaistion End -->




<!-- Homepage section Start -->


<!-- legger til seksjon, gir den en klasse.
     Etter det lager jeg forsjellige klasse for, setninger, bilder, play icon, kryss icon og video.
     Deretter legger jeg til setninger, play-icon, kryss-icon (bilde) og en video. -->


<section class="homepage">

    <div class="max-width">

        <div class="text-2">Webdesingers:</div>
        <div class="text-3"><span class="typing"></span></div>

    <div class="play">
      <a href="#" class="play" onclick="toggle();"><img src="/bilder-video/play.png" alt="Play">Watch Video</a>
    </div>

    <div class="video">
      <img src="/bilder-video/close.png" class="close" onclick="toggle();">
      <video src="bilder-video/video/Amazing-Hydropower-Video.mp4" controls></video>
    </div>

  </div>



</section>

<!-- Homepage section End -->





<!-- about section start -->



<!-- lager seksjon, gir den en klasse og en id. Også lager jeg forsjellige klasse for,
     overskrift, bilde, avsnitt og setningen.
     Etter det legger jeg til bilde, avsnitt, overskrift, og setningen. -->


<section class="about" id="about">

  <div class="max-width">

    <h2 class="title">About us</h2>

    <div class="at">


     <div class="left">

      <div class="about-image">
        <img src="bilder-video/vann/vannkraft-2.jpeg" alt="Bilde av meg">
      </div>

     </div>


      <div class="right">
        <div class="text">We are the Paven organization: <span class="typing-2"></span></div>
        <p>Welcome to our website and in our website you can get lots of information and status for hydropower. Navigate around the website and enjoy our website.</p>
      </div>

    </div>

  </div>


</section>

<!-- about section End -->


<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">API</h2>

    <div class="api-at">



      <div class="api-right">
        <div class="api-text">powerprice<span></span></div>
        <p>This is innafjords powerprice to their turbins as you can see on the grapfs u see how much it is NOW and how much it has been latly.</p>
      </div>
        Strømpris: <span id="eksempelPlassForStrompris"></span>
        vanninnstrømning: <span id="vanninnstrømning"></span>
        <script>
            const eksempelPlassForStromprisElement = document.getElementById("eksempelPlassForStrompris");
            fetch("https://innafjord.azurewebsites.net/api/PowerPrice").then(response => response.json()).then(value => {
                eksempelPlassForStromprisElement.innerText = value;});
                
            const vanninnstrømning = document.getElementById("vanninnstrømning");
            fetch("https://innafjord.azurewebsites.net/api/WaterInflux").then(response => response.json()).then(value => {
                vanninnstrømning.innerText = value;
            });
        </script>
    </div>

  </div>


</section>





  <!-- teams section Start -->




  <!-- lager seksjon, gir den en klasse. Deretter lager jeg forsjellige klasse for,
       overskrift, overskrift for avsnitter, bilder og selve avsnitter.
       Etter det legger jeg til overskrift, overskrift for avsnitter, bilder og selve avsnitter  -->


 <section class="teams">

  <div class="max-width">

     <h2 class="title">Our teams</h2>

     <div class="ts owl-carousel">

        <div class="foto">

            <div class="box">
               <img src="bilder-video/personer/BlueAvengerZ.jpg" alt="">
               <div class="text">Bilal Hussain</div>
               <p>Hi, my name is Bilal and I like to use my time perfect.</p>
            </div>

       </div>


        <div class="foto">

             <div class="box">
                 <img src="bilder-video/personer/Marcus.jpeg" alt="Marcus">
                 <div class="text">Marcus Kildal-Santome</div>
                 <p>Hi, my name is Marcus and I like play games and watch anime.</p>
             </div>

        </div>


        <div class="foto">

             <div class="box">
                <img src="bilder-video/personer/Alexander.png" alt="Alexander">
                <div class="text">Alexander Carl Brunskow</div>
                <p>Hi, my name is Alexander and I like to watch youtube videos.</p>
             </div>

       </div>


       <div class="foto">

          <div class="box">
            <img src="bilder-video/personer/Ludvig.jpeg" alt="Ludvig">
            <div class="text">Karl Ludvig Theodor Ringdal</div>
            <p>Hi, my name is "Ludvig, I like playing games and watch football.</p>
          </div>

        </div>
        <div class="foto">

          <div class="box">
            <img src="bilder-video/personer/Daniel.jpeg" alt="Daniel">
            <div class="text">Daniel Eren Yüceyurt Olsen</div>
            <p>Hi, my name is Daniel, I like playing games and technology.</p>
          </div>

        </div>
        <div class="foto">

          <div class="box">
            <img src="bilder-video/personer/Benjamin.jpeg" alt="Benjamin">
            <div class="text">Benjamin Reiten</div>
            <p>Hi, my name is benjamin, I like playing games and watch football.</p>
          </div>

        </div>
   </div>

  </div>

</section>

<!-- teams section End -->





<!-- footer section Start -->



<!-- legger til bunntekst -->

   <footer>
     <h3>Created By <a href="main.php">Paven.CEO</a></h3>
   </footer>

<!-- footer section End -->



Strømpris: <span id="eksempelPlassForStrompris"></span>
<script>
    const eksempelPlassForStromprisElement = document.getElementById("eksempelPlassForStrompris");
    fetch(" https://innafjord.azurewebsites.net/api/PowerPrice").then(response =>response.json()).then(value => {
        eksempelPlassForStromprisElement.innerText = value;
    });
</script>

<!-- linker til javascript -->

  <script src="scripts-2.js"></script>

 </body>

</html>
