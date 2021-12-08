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
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>


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
        <p>Welcome to our website! On our website you get alot of information and status for hydropower.</p>
      </div>

    </div>

  </div>


</section>

<!-- about section End -->


<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Powerprice</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Powerprice<span class="typing-2"></span></div>
        <p>Welcomes to our website and in our website you can get lots of information and status for hydropower. Navigate around the website and enjoy our website.</p>
      </div>
    </div>
  </div>

  <div id="myPlot"></div>

</section>



<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Waterpower</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Waterpower<span class="typing-2"></span></div>
        <p>Welcomes to our website and in our website you can get lots of information and status for hydropower. Navigate around the website and enjoy our website.</p>
      </div>
        
    </div>

  </div>

  <div id="myPlot-2"></div>

</section>



<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Electricity price</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Electricity price<span class="typing-2"></span></div>
        <p>Welcomes to our website and in our website you can get lots of information and status for hydropower. Navigate around the website and enjoy our website.</p>
      </div>
        
    </div>

  </div>

</section>



<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Earnings</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Earnings<span class="typing-2"></span></div>
        <p>Welcome to our website. On our website you can get alot of information and status for hydropower.</p>
      </div>
        
    </div>

  </div>

</section>


<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Waterheight</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Waterheight<span class="typing-2"></span></div>
        <p>Welcomes to our website and in our website you can get lots of information and status for hydropower. Navigate around the website and enjoy our website.</p>
      </div>
        
    </div>

  </div>

</section>


<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Nature Cost</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Nature cost<span class="typing-2"></span></div>
        <p>Welcomes to our website and in our website you can get lots of information and status for hydropower. Navigate around the website and enjoy our website.</p>
      </div>
        
    </div>

  </div>

</section>

<section class="api" id="api">

  <div class="max-width">

    <h2 class="api-title">Turbins</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Turbins<span class="typing-2"></span></div>
        <p>viser GIF (av av å på turbiner).</p>
      </div>

      <video class="vdo" id = "vdo" onclick="play();" loop>
       <source src="../bilder-video/turbin-hoved.mp4" type="video/mp4">
      </video>

  </div>
  <br>

Strompris: <span id="eksempelPlassForStrompris"></span> <br>
vanninnstromning: <span id="vanninnstromning"></span> <br>
Money: <span id="groupstates_money"></span> <br>
EnvironmentCost: <span id="groupstates_environmentCost"></span> <br>
WaterLevel: <span id="groupstates_waterLevel"></span><br>
turbin: <span id="groupstates_turbin"></span>

        <script>
          let turbiner = [];
          let watervalue;
          let strompriser = [];
          let vannstrom = [];
          let tidspunkt = [];

          const eksempelPlassForStromprisElement = document.getElementById("eksempelPlassForStrompris");
          const vanninnstromning = document.getElementById("vanninnstromning");
          const money = document.getElementById("groupstates_money");
          const environmentCost = document.getElementById("groupstates_environmentCost");
          const waterLevel = document.getElementById("groupstates_waterLevel");
          const test = document.getElementById("groupstates_turbin");

          function strompris() {

            fetch("https://innafjord.azurewebsites.net/api/PowerPrice").then(response => response.json()).then(value => {
                eksempelPlassForStromprisElement.innerText = value;
                strompriser.push(value);
                tidspunkt.push(Date.now());

          
            var data = [{
              x: tidspunkt,
              y: strompriser,
              mode: "lines",
              type: "scatter"
            }];

            // Define Layout
            var layout = {
              xaxis: {title: "tidspunkt"},
              yaxis: {title: "Strømpris"},
              title: "Strøm"
            };

              // Display using Plotly
              Plotly.newPlot("myPlot", data, layout);
              
              });
             
            };

          setInterval(strompris,1000)



          function water () {
            fetch("https://innafjord.azurewebsites.net/api/WaterInflux").then(response => response.json()).then(value => {
                vanninnstromning.innerText = value;
                vannstrom.push(value);
                tidspunkt.push(Date.now());

            var data = [{
              x: tidspunkt,
              y: vannstrom,
              mode: "lines",
              type: "scatter"
            }];

            // Define Layout
            var layout = {
              xaxis: {title: "tidspunkt"},
              yaxis: {title: "vannstrøm"},
              title: "Vannstrøm"
            };

              // Display using Plotly
              Plotly.newPlot("myPlot-2", data, layout);

            });

            };
            setInterval(water,1000)
       


            function verdier(){
            fetch("https://innafjord.azurewebsites.net/api/GroupState",{
              headers: {
              "GroupId": "Paven AS",
              "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}}).then(response => response.json()).then(value => {
                money.innerText = value.money;
                environmentCost.innerText = value.environmentCost;
                waterLevel.innerText = value.waterLevel;
                watervalue = value.waterLevel
              
              })
            };
            setInterval(verdier,1000)


            

            function FTurbiner(){
            fetch("https://innafjord.azurewebsites.net/api/Turbines",{
              headers: {
              "GroupId": "Paven AS",
              "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}}).then(response => response.json()).then(value => {
                
                test.innerHTML = "";
                for (let id = 0; id < value.length; id++){
                  test.innerHTML += "<br> " + value[id].id + "&nbsp;&nbsp;&nbsp;&nbsp;" + value[id].capacityUsage;
                  turbiner.push(value[id]);
                }})

            if (watervalue < 43) {
              for(let turbin of turbiner){
                fetch(`https://innafjord.azurewebsites.net/api/Turbines/${turbin.id}?capacityUsage=0`, {
                method: "PUT",
                headers: {
                "GroupId": "Paven AS",
                "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}});
              }

            }else if (watervalue > 45){
              for(let turbin of turbiner){
                fetch(`https://innafjord.azurewebsites.net/api/Turbines/${turbin.id}?capacityUsage=1`, {
                method: "PUT",
                headers: {
                "GroupId": "Paven AS",
                "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}});
              }
            }
          };
          setInterval(FTurbiner,1000)

        </script>

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



<!-- linker til javascript -->

  <script src="scripts-2.js"></script>

 </body>

</html>

