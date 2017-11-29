let divDamier = document.getElementById("damier");

for (var i = 1; i <= 16; i++) {
    
    var myDiv = document.createElement('div');
    
    myDiv.className = "elementDuDamier";
    
    divDamier.appendChild(myDiv);
}

function random(number) {

    return Math.floor(Math.random()*number);
}

function bgChange() {

    var rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';

    return rndCol;
}

function activateChangeColor() {
    
    var divs = document.getElementsByClassName("elementDuDamier");

    for (var i = 0; i < divs.length; i++) {

        divs[i].onclick = function(e) {

            e.target.style.backgroundColor = bgChange();
        };
    }
}

var goButton = document.getElementById("go");

goButton.addEventListener("click", activateChangeColor);


var stopButton = document.getElementById("stop");

stopButton.addEventListener("click", function() {
    
    var divs = document.getElementsByClassName("elementDuDamier");

    for (var i = 0; i < divs.length; i++) {

        divs[i].onclick = "";
    }
});