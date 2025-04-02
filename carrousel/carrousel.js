var back_button = document.getElementById("back_button");
var next_button = document.getElementById("next_button");
var image = document.getElementsByClassName("carrousel_photo");

for(let i = 1; i < image.length; i++) {
    image[i].classList.add("display_none");
}

var actual_image = 0;

function change(action) {
    image[actual_image].classList.add("display_none");
    if (action=="back") {
        actual_image--;
        if (actual_image<0) {
            actual_image = image.length-1;
        }
    }
    else if (action=="next") {
        actual_image++;
        if (actual_image==image.length) {
            actual_image=0;
        }
    }
    else {
        console.log("error")
    }
    image[actual_image].classList.remove("display_none");
}