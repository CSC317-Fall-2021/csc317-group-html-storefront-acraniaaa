function displayNextImage() {
        x = (x === images.length - 1) ? 0 : x + 1;
	document.getElementById("img").src = images[x];
}

function displayPreviousImage() {
        x = (x <= 0) ? images.length - 1 : x - 1;
        document.getElementById("img").src = images[x];
}

function startTimer() {
        setInterval(displayNextImage, 10000);
}

var images = [], x = -1;
images[0] = "Images/ad_athlead.png";
images[1] = "Images/ad_sabre.png";
images[2] = "Images/ad_vance.jpg.png";
