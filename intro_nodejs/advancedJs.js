/*
function makeCounter() {
    
    let count = 0;
    
    return function() {
        
        count = count + 1;
        
        return count;
    }
}

let c1 = makeCounter();

let c2 = makeCounter();

console.log("c1 : " + c1());

console.log("c1 : " + c1());

console.log("c1 : " + c1());

console.log("c2 : " + c2());

console.log("c2 : " + c2());
*/

/*
(function() {
  
    let u1 = {
        name: "John",
        age: 25
    };
    
    let u2 = {
        name: "Kate",
        age: 35
    };
    
    console.log(u1.name + " a " + u1.age);
    
    console.log(u2.name + " a " + u2.age);
})();



(function() {
   
    let u1 = {
        name: "Peter",
        age: 45
    };
    
    let u2 = {
        name: "Mary",
        age: 55
    };
    
    console.log(u1.name + " a " + u1.age);
    
    console.log(u2.name + " a " + u2.age);
})();
*/

/*
let multiply = (param1, param2) => param1 * param2;

console.log(multiply(12, 24));

(() => {
    
    let u1 = {
        name: "Peter",
        age: 45
    };
    
    let u2 = {
        name: "Mary",
        age: 55
    };
    
    console.log(u1.name + " a " + u1.age);
    
    console.log(u2.name + " a " + u2.age);
    
})();
*/
/*
function User(name, age) {
    
    this.name = name;
    
    this.age = age;    
}

let user1 = new User("John", 25);

let user2 = new User("Kate", 32);

let sayHi = function(begin, end) {
  
    return begin + this.name + " a " + this.age + " ans." + end;
};

// console.log(sayHi.apply(user1, ["<<", ">>"]));

// console.log(sayHi.apply(user2, ["[[", "]]"]));

let user1SayHi = sayHi.bind(user1);

let user2SayHi = sayHi.bind(user2);

console.log(user1SayHi("<<", ">>"));

console.log(user2SayHi("[[", "]]"));
*/

/*
let userAsString = "{ \"firstName\" : \"Remy\", \"age\" : 39 }";

let userAsObject = JSON.parse(userAsString);

console.log(userAsObject.firstName + " a " + userAsObject.age + " ans.");

userAsObject.ville = "Paris";

let userAsStringAfterModification = JSON.stringify(userAsObject);

console.log(userAsStringAfterModification);
*/

/*
function User(name, age) {
    
    this.name = name;
    
    this.age = age;    
}

let user1 = new User("John", 25);

let user2 = new User("Kate", 32);

let user3 = new User("Tom", 43);

let users = [
    user1,
    user2,
    user3
];


let youngUsers = users.filter(item => item.age < 35);

console.log("Nb éléments trouvés : " + youngUsers.length);

youngUsers.forEach(
    youngUser => console.log("Elément trouvé : " + youngUser.name + "(" + youngUser.age + ")")
);
*/

/*
let array = ["str1", "str2", 100];

console.log("array : " + array);

let [var1, var2, var3] = array;

console.log("var1 : " + var1);
console.log("var2 : " + var2);
console.log("var3 : " + var3);
*/

/*
let obj = {
    espagnol: "Buenos dias",
    anglais: "Good morning"
};


console.log("obj : " + JSON.stringify(obj));

let {var4, var5, var6} = obj;


function displayVars({francais = "Coucou", 
                      anglais = "Hello", 
                      espagnol = "Hola",
                      italien = "Ciao"}) {
    
    console.log("francais : " + francais);
    console.log("anglais : " + anglais);
    console.log("espagnol : " + espagnol);
    console.log("italien : " + italien);
}

displayVars(obj);
*/

/*
let nino = {
  
    prenom : "Rafael",
    
    nomDuPere : "Nadal",
    
    nomDelaMere : "Ramos",
    
    get nomComplet() {
        
        return this.nomDuPere + " - " + this.nomDelaMere;
    }
};

console.log(nino.prenom + " " 
            + nino.nomDuPere 
            + " - " + nino.nomDelaMere);

console.log("Nom complet : " + nino.nomComplet);
*/
/*
let animal = {
    eats() {
        console.log("Je mange !");
    }
};

function Rabbit(name) {
    
    this.name = name;
    
    this.jumps = function() {
        console.log("Je saute !");
    }
}

Rabbit.prototype = animal;

let r1 = new Rabbit("Bugs Bunny"); 

let r2 = new Rabbit("Roger Rabbit");

let r3 = new Rabbit("White Rabbit");

let r4 = new Rabbit("Lapin crétin");

console.log(r1.name);
r1.jumps();
r1.eats();

console.log(r2.name);
r2.jumps();
r2.eats();

console.log(r3.name);
r3.jumps();
r3.eats();

console.log(r4.name);
r4.jumps();
r4.eats();
*/

function Animal() { 
}

Animal.prototype.eats = function() {
    
    console.log("Je mange !");
};

function Rabbit(name) {
    
    this.name = name;
}

Rabbit.prototype.__proto__ = Animal.prototype;

Rabbit.prototype.jumps = function() {
    
    console.log(this.name + " saute !");
};

let r1 = new Rabbit("Bugs Bunny"); 

let r2 = new Rabbit("Roger Rabbit");

r1.jumps();
r1.eats();

r2.jumps();
r2.eats();

