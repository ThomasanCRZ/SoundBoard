btnSound = document.getElementsByClassName("btnSound");
let arraySounds = [ 
     "assets/sounds/2 Hours Later.mp3",
     "assets/sounds/Air Horn.mp3",
     "assets/sounds/Anime Punch.mp3",
     "assets/sounds/Bababooey.mp3",
     "assets/sounds/Bite Sound.mp3",
     "assets/sounds/Boxing Bell.mp3",
     "assets/sounds/Bruh.mp3",
     "assets/sounds/Clapping.mp3",
     "assets/sounds/DBZ Dramatic.mp3",
     "assets/sounds/Dog Sniff.mp3",
     "assets/sounds/Dun Dun.mp3",
     "assets/sounds/elevator music.mp3",
     "assets/sounds/Enemy Spotted.mp3",
     "assets/sounds/Evil Morty Theme.mp3",
     "assets/sounds/Explosion Sound.mp3",
     "assets/sounds/FBI Open Up.mp3",
     "assets/sounds/Giggity.mp3",
     "assets/sounds/helicopterr.mp3",
     "assets/sounds/jeopardy.mp3",
     "assets/sounds/Lego Bricks Falling.mp3",
]

console.log(btnSound);
 for (let i = 0; i < btnSound.length; i++) {
    document.getElementsByClassName("nameSound")[i].innerHTML = arraySounds[i].replace("assets/sounds/", "").replace(".mp3", "");
    btnSound[i].addEventListener("click", function () {
        const sound = document.createElement("audio");
        sound.src = arraySounds[i];
        sound.play();
        this.querySelector("img").style.opacity = "0%";
        this.querySelector(".loader").style.display = "flex";
        this.querySelector(".loader").style.position = "absolute";
        this.querySelector(".loader").style.top = "39%";
        this.querySelector(".loader").style.left = "43.5%";
        setTimeout(() => {
            this.querySelector(".loader").style.display = "none";
            this.querySelector("img").style.opacity = "100%";
        }, 1000)
    

    });
}