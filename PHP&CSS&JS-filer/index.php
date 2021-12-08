<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login-register-4.css"/>
    <link rel="icon" type="image/x-icon" href="bilder-video/favicon.ico">
    <title>Welcome to PAVEN.CEO</title>
  </head>

  <!-- lager id for server.php og for teksten (Har du ikke konto?).
          Etter det gir jeg id for (Registrer deg) og linker jeg den med registrer.php. 
          Lager også en Registrer deg knapp. --> 

   
         
   
<body>


<!-- menu-bar navigaistion Start -->


<!-- lager klasse for, men-bar og kallenavn min.
     Derettter linker jeg de forsjellige sider. -->

<nav class="menu-bar">
  <div class="max-width">
  <div class="nickname"><a href="index.php">PAVEN<span>.CEO</span></a></div>
  </div>
</nav>

<!-- menu-bar navigaistion End -->


<section>

  <div class="box">
  <div class="box-container">
   <div class="signin-signup">



    <form method="post" class="sign-in-form">
     <div class="title"></div>
      <h2 class="tle">Sign in</h2>

      <div class="tekst-felt"> 
         <input type="text" name="brukernavn" placeholder="Username">
      </div>

        <div class="tekst-felt"> 
          <input type="password" name="passord" placeholder="Password">
        </div>

         <input type="submit" name="logginn" value="Login" class="button"/>

      </form>






      <form method="post" class="sign-up-form">

        <div class="title"></div>
        <h2 class="tle">Sign up</h2>


        <div class="tekst-felt">
          <input type="text" name="brukernavn" required placeholder="Username">
        </div>

        <div class="tekst-felt">
          <input type="text" name="fornavn" placeholder="Firstname">
        </div>

        <div class="tekst-felt">
          <input type="text" name="etternavn" placeholder="Surname">
        </div>

        <div class="tekst-felt">
            <input type="email" name="epost" required placeholder="Email">
        </div>

        <div class="tekst-felt">
           <input type="password" name="passord_1" placeholder="Password">
        </div>

        <div class="tekst-felt">
           <input type="password" name="passord_2" placeholder="Conform password">
        </div>


          <input type="submit" name="registrer" value="Sign up" class="button-2">
          
        </form>



        
          <div id ="msg">
            <?php
              //inkluderer server.php
              include ("server.php"); 
             ?>
          </div>
          
          <div class="msg-2"></div>

        </div>
      



      <div class="paneler-container">
        <div class="panel left-panel">
        <div class="content">
          
          <h3>Are you new here ?</h3>

          <p>Welcome to PAVEN.CEO, if you have an account press "LOGIN" and if you do not have an account, then register by pressing "SIGN UP"</p>

          <button class="button gjennomsiktig" id="sign-up-btn">Sign up</button>

        </div>
       </div>




        <div class="panel right-panel">
          <div class="content">

            <h3>Are you one of us ?</h3>

             <p>Welcome to Paven.ceo, once you have created an account, press "SIGN IN" to go to the login page.</p>

           <button class="button gjennomsiktig" id="sign-in-btn">Sign in</button>

         </div>
        </div>
       </div>

</section>





<!-- footer section Start -->


<!-- legger til bunntekst -->

<footer>
     <h3>Created By <a href="index.php">Paven.CEO</a></h3>
   </footer>

<!-- footer section End -->






<!-- script kode section Start -->



<!-- script kode for logginn system design -->

<script>
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const box = document.querySelector(".box");

  sign_up_btn.addEventListener("click", () => {
    box.classList.add("sign-up-mode");
  });

  sign_in_btn.addEventListener("click", () => {
    box.classList.remove("sign-up-mode");
  });

</script>

<!-- script kode section End -->





<!-- linker til javascript -->

    <script src="scripts-2.js"></script>

  </body>
</html>
