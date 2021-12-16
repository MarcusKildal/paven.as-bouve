const test = document.getElementById("groupstates_turbin");

$(test).click(function() {

    img = document.querySelector("#turbin > div > img");
    ee = document.querySelector("#hastighet");
    deg = 0;
    speed = 1;
    
    ee.addEventListener("change",function() {
        speed = ee.value;
    });
    img.addEventListener("click", function() {
        if (img.turtel == undefined) {
            img.src = "bilder-video/turbin-på-2.png";
            img.turtel = setInterval(function(){
                deg += parseInt(speed);
                img.style.transform = "rotate("+deg+"deg)";
            },10);
        } else {
            img.src = "bilder-video/turbin-av-2.png";
            clearInterval(img.turtel);
            img.turtel = undefined;
        }
    })
    
});

function rotate(obj,speed) {
    let deg;
    if (obj.style.translate == undefined) {
        deg = "rotate(0deg)";
    } else {
        deg = obj.style.translate;
        
    }
    return obj.style;
}