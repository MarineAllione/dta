var link = document.querySelector('a');

link.textContent = 'Mozilla Developer Network';

link.href = 'https://developer.mozilla.org';

link.onclick = function(e) {
    alert("Vous avez cliqué sur le lien!");
    e.preventDefault();
};

var sect = document.querySelector('section');

var para = document.createElement('p');

para.textContent = 'We hope you enjoyed the ride.';

para.setAttribute('class', 'highlight');

sect.appendChild(para);

var text = document.createTextNode(' — the premier source for web development knowledge.');

var linkPara = document.querySelector('p');

linkPara.appendChild(text);

sect.appendChild(linkPara);

// linkPara.parentNode.removeChild(linkPara);

