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

  <!-- linker til favicon bildet -->
  
    <link rel="icon" type="image/x-icon" href="bilder-video/CEO.ico">

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

  <ul class="menu">
    <li><a href="#api-1">Power price</a></li>
    <li><a href="#api-2">Water influx</a></li>
    <li><a href="#api-3">Money</a></li>
    <li><a href="#api-4">EnvironmentCost</a></li>
    <li><a href="#api-5">Water level</a></li>
    <li><a href="#api-6">Turbins</a></li>
  </ul>

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
      <video src="bilder-video/Amazing-Hydropower-Video.mp4" controls></video>
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


<section class="api" id="api-1">

  <div class="max-width">

    <h2 class="api-title">Power price</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Power price</div>
        <p>This is the price of the power right now in kroners per MWh:</p>
      </div>
    </div>
  </div>

  <div id="myPlot"></div>
<div id="eksempelPlassForStrompris"></div>
</section>



<section class="api" id="api-2">

  <div class="max-width">

    <h2 class="api-title">Water power</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Water influx</div>
        <p>This is the Water influx of cubic meters per secound. The water influx is around:</p>
      </div>
        
    </div>

  </div>

   <div id="myPlot-2"></div>
  <div id ="vanninnstromning"></div>

</section>




<section class="api" id="api-3">

  <div class="max-width">

    <h2 class="api-title">Moeny</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Money</div>
        <p>This is how much money we have earned in kroners:</p>
      </div>
        
    </div>

  </div>

    <div id="myPlot-3"></div>
    <div id="groupstates_money"></div>
</section>




<section class="api" id="api-4">

  <div class="max-width">

    <h2 class="api-title">EnvironmentCost</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">EnvironmentCost</div>
        <p>This is how much it has cost the environment in kroners:</p>
      </div>
        
    </div>
  </div>

  <div id="myPlot-4"></div>
  <div id="groupstates_environmentCost"></div>
</section>



<section class="api" id="api-5">

  <div class="max-width">

    <h2 class="api-title">Water level</h2>

    <div class="api-at">

      <div class="api-left">
        <div class="api-text">Water level</div>
        <p>This is the water level right now in meters:</p>
      </div>
        
    </div>

  </div>

  <div id="myPlot-5"></div>
  <div id="groupstates_waterLevel"></div>

</section>




<section class="api" id="api-6">


<div class="max-width">
    
  <h2 class="api-title">Turbins</h2>
  <input type="checkbox" onclick = "auto()">

    <div class="api-at">
     <div class="api-left">
     <div class="api-text"></div>
    </div>

    <div id="turbinpannel">
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
          <div><img src="bilder-video/turbin-av.png"></div>
       </div>
  </div>



  <!--<div id="groupstates_turbin"></div>-->
  


        <script>

          let turbiner = [];
          let watervalue;
          let start_tid = Date.now();
          let Auto = false;

          const eksempelPlassForStromprisElement = document.getElementById("eksempelPlassForStrompris");
          const vanninnstromning = document.getElementById("vanninnstromning");
          const money = document.getElementById("groupstates_money");
          const environmentCost = document.getElementById("groupstates_environmentCost");
          const waterLevel = document.getElementById("groupstates_waterLevel");
          const test = document.getElementById("groupstates_turbin");



          function strompris() {
            let strompriser = [];
            let tidspunkt = [];
            
            setInterval( () => {
              fetch("https://innafjord.azurewebsites.net/api/PowerPrice").then(response => response.json()).then(value => {
                eksempelPlassForStromprisElement.innerText = value;
                strompriser.push(value);
                tidspunkt.push(Math.round((Date.now()-start_tid)/1000));

                
                var data = [{
                  x: tidspunkt,
                  y: strompriser,
                  mode: "lines",
                  type: "scatter"
                }];

                // Define Layout
                var layout = {
                  xaxis: {title: "Time in seconds"},
                  yaxis: {title: "Powerprice"},
                  title: "Power"
                };

                  // Display using Plotly
                  Plotly.newPlot("myPlot", data, layout);
                  
                  });
            }
            ,1000)
               
          };
          strompris();



          function water () {
            let vannstrom = [];
            let tidspunkt = [];

          setInterval( () => {
            fetch("https://innafjord.azurewebsites.net/api/WaterInflux").then(response => response.json()).then(value => {
                vanninnstromning.innerText = value;
                vannstrom.push(value);
                tidspunkt.push(Math.round((Date.now()-start_tid)/1000));

            var data = [{
              x: tidspunkt,
              y: vannstrom,
              mode: "lines",
              type: "scatter"
            }];

            // Define Layout
            var layout = {
              xaxis: {title: "Time in seconds"},
              yaxis: {title: "Waterpower"},
              title: "Water"
            };

              // Display using Plotly
              Plotly.newPlot("myPlot-2", data, layout);

            });
            }
              ,1000)
            };

            water ();



            function verdier() {
              let penger = [];
              let natur = [];
              let vannivå = [];
              let tidspunkt = []; 

           setInterval( () => {  
            fetch("https://innafjord.azurewebsites.net/api/GroupState",{
              headers: {
              "GroupId": "Paven AS",
              "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}}).then(response => response.json()).then(value => {
                money.innerText = value.money;
                environmentCost.innerText = value.environmentCost;
                waterLevel.innerText = value.waterLevel;
                watervalue = value.waterLevel

              penger.push(value.money);
              tidspunkt.push(Math.round((Date.now()-start_tid)/1000));


            var data = [{
              x: tidspunkt,
              y: penger,
              mode: "lines",
              type: "scatter"
            }];

            // Define Layout
            var layout = {
              xaxis: {title: "Time in seconds"},
              yaxis: {title: "Money"},
              title: "Earnings"
            };

              // Display using Plotly
              Plotly.newPlot("myPlot-3", data, layout);




              natur.push(value.environmentCost);
              tidspunkt.push(Math.round((Date.now()-start_tid)/1000));

              var data = [{
                x: tidspunkt,
                y: natur,
                mode: "lines",
                type: "scatter"
              }];

              // Define Layout
              var layout = {
                xaxis: {title: "Time in seconds"},  
                yaxis: {title: "Nature Cost"},
                title: "Nature"
              };

                // Display using Plotly
                Plotly.newPlot("myPlot-4", data, layout);



              vannivå.push(value.waterLevel);
              tidspunkt.push(Math.round((Date.now()-start_tid)/1000));

              var data = [{
                x: tidspunkt,
                y: vannivå,
                mode: "lines",
                type: "scatter"
              }];

              // Define Layout
              var layout = {
                xaxis: {title: "Time in seconds"},
                yaxis: {title: "Waterheight"},
                title: "Water Level"
              };

              // Display using Plotly
              Plotly.newPlot("myPlot-5", data, layout)


              })
            }
            ,1000)
          };
          verdier ();

          function auto(){
            if(Auto==false){
              Auto=true;
            }else if(Auto==true){
              Auto=false;
            } 
          }
          
          function toggleTurbin () {
          if(turbin.classList=='newClass'){
            turbin.classList.add('newClass')
          }
          else {
            turbin.classList.remove('newClass');
          }
        }

        

      

          
            function FTurbiner(){
            fetch("https://innafjord.azurewebsites.net/api/Turbines",{
              headers: {
              "GroupId": "Paven AS",
              "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}}).then(response => response.json()).then(value => {
                test.innerHTML = "";
                for (let id = 0; id < value.length; id++){
                  test.innerHTML += "<br> " + value[id].id + "&nbsp;&nbsp;&nbsp;&nbsp;" + value[id].capacityUsage;
                  //test.innerHTML += "<img src='bilder-video/turbin-av-2.png' onclick='toggleTurbin(`" +value[id].id + "`)' >";
                  turbiner.push(value[id]);
                }})
              if (Auto == true){
                if (watervalue < 25) {
                  for(let turbin of turbiner){
                    fetch(`https://innafjord.azurewebsites.net/api/Turbines/${turbin.id}?capacityUsage=0`, {
                    method: "PUT",
                    headers: {
                    "GroupId": "Paven AS",
                    "GroupKey": "LlbAb6n6pUqbJUSZ2nbNSA=="}});
                  }
                }
              } 
              else if (watervalue > 39){
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
          
          
  function changeTurbineState(e){
      const target = Array.from(turbiner).indexOf(e.target);
      const target_src = turbiner[target].src;
      if (target_src.indexOf("turbin_av") > -1){
          changeTurbineUsage(target, 1);
      } else {
          changeTurbineUsage(target, 0);
      }
}



const turbiner = document.querySelectorAll("#turbinpannel > div > img");
for (let i = 0; i < turbiner.length; i++){
    turbiner[i].addEventListener("click", changeTurbineState);
}



let rotation = 0;
let turbineState = new Array(20).fill({'capacityUsage': 0}); // so i dont get undefined, when not having the values

setInterval(() => {
          turbines().then(value => {
              turbineState = value.slice();
              for (let i = 0; i < turbiner.length; i++){
                  if (turbineState[i].capacityUsage){
                      turbiner[i].src = "bilder-video/turbin-av.png";
                  } else {
                      turbiner[i].src = "bilder-video/turbin-av-2.png";
                  }
              }
          });
      }, 1000);

      setInterval(() => {
        for (let i = 0; i < turbiner.length; i++){
            if (turbineState[i].capacityUsage){
                turbiner[i].style.transform = "rotate(" + (rotation + 1) + "deg)";
            }
        }
        rotation++;
      }, 10);

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

