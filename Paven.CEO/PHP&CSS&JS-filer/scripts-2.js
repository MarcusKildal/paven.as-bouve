$(document).ready(function(){

  // lager funksjon som gjør at, når blar ned så kommer det blå bakgrunn på menu bar.

    $(window).scroll(function(){

     // sticky menu-bar on scroll script Start


    // hvis scrollY er større enn 20, så skal menu bar få blå bakgrunn.

        if (this.scrollY > 20) {
            $('.menu-bar').addClass("sticky");
        }

   // hvis ikke scrollY er større enn 20, så skal bakgrunne til menu bar fjernes.

        else {
              $('.menu-bar').removeClass("sticky");
            }

      });

     // sticky menu-bar on scroll script End



    // typing text animation script Start


    // lager variabel for animation til tekst nummer 1.
    // Etter det legger jeg til teksten som skal bli skrevet.
    // Også bestemmer jeg hastiget til teksten, som blir skrevet og blir slettet.
    // Hvis det er sant, så skal det gjenta igjen og igjen

    var typed = new Typed(".typing", {
        strings: ["Bilal Hussain", "Marcus Kildal-Santome", "Alexander Carl Brunskow", "Karl Ludvig Theodor Ringdal", "Web Designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // lager variabel for animation til tekst nummer 2.
    // Etter det legger jeg til teksten som skal bli skrevet.
    // Også bestemmer jeg hastiget til teksten, som blir skrevet og blir slettet.
    // Hvis det er sant, så skal det gjenta igjen og igjen

    var typed = new Typed(".typing-2", {
        strings: ["Bilal Hussain", "Marcus Kildal-Santome", "Alexander Carl Brunskow", "Karl Ludvig Theodor Ringdal", "Web Designer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

  // typing text animation script End




 // creating menu-bar/menu-icon script Start

 // lager funksjon som gjør at, man kan klikke på menu icon og kryss icon til menu bar,
 // så hvis man klikker menu icon da popper opp menu bar og hvis man klikker kryss icon da tar det bort menu bar.
 // gjør menu icon om til kryss icon.

        $('.menu-icon').click(function(){
        $('.menu-bar .menu').toggleClass("active");
        $('.menu-icon i').toggleClass("active");
  });

 // creating menu-bar/menu-icon script End



 // owl carousel script Start

 // kode for å aktivere teams bokser, som er i My teams.

     $('.ts').owlCarousel({

  });

 // owl carousel script End

});





// creating play button script Start


 // lager funksjon som gjør at, man kan klikke på play icon/play teksten og kryss icon til video.
 // så hvis man klikker play icon/play teksten da popper opp video og hvis man klikker kryss icon da tar det bort video.


 // lager variabel for play icon/play teksten og sier at ta fram, den videoen som er valgt.
 // Deretter aktivere kode, så man klikke på de.

function toggle() {

  var film = document.querySelector('.video')
  film.classList.toggle('active')


// lager variabel for video og sier at ta det bort, den videoen som er valgt.
// Deretter stopper videoen, når man klikker på kryss icon.
// når man klikker igjen på play icon/play teksten, så er tiden til videoen tilbake til 0.

  var video = document.querySelector('video')
  video.pause()
  video.currentTime = 0;
  
}
// creating play button script End




// lager til slide animasjon for teams boksen.

$('.ts').owlCarousel({
  margin: 5,
  loop: true,
  autoplay: true,
  autoplayTimeout:2500,  
  autoplayHoverPause: true,
  
});

