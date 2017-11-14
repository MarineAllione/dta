for (var i = 1; i <= 16; i++) {
    
    var myDiv = document.createElement('div');
    
    document.body.appendChild(myDiv);
}

function random(number) {

    return Math.floor(Math.random()*number);
}

function bgChange() {

    var rndCol = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';

    return rndCol;
}


document.body.onclick = function(e) {

    e.target.style.backgroundColor = bgChange();
}