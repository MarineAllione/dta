var myImage = document.querySelector('img');

myImage.onclick = function() {
	
    var mySrc = myImage.getAttribute('src');
	
    if (mySrc === 'img/logo_tse.jpg') {
        
      myImage.setAttribute ('src','img/logo_dta.jpg');
	} 
    else {
	  myImage.setAttribute ('src','img/logo_tse.jpg');
	}
}

var myButton = document.querySelector('button');

var myHeading = document.querySelector('h1');

function setUserName() {
  
    var myName = prompt('Entrez votre nom.');
    
    localStorage.setItem('name', myName);
  
    myHeading.innerHTML = 'Bienvenue à la Design Tech Académie, ' + myName;
}

if (!localStorage.getItem('name')) {
    
    setUserName();
} 
else {  
    var storedName = localStorage.getItem('name');
  
    myHeading.innerHTML = 'Bienvenue à la Design Tech Académie, ' + storedName;
}

myButton.onclick = setUserName;