let user = {
    name: "John",
    age: 25
};

console.log(user.name);

console.log(user.age);

user.name = "Peter";

user.age = 17;

console.log(user.name + " a " + user.age);

user.address = "83 Rue de la République 42100 St-Etienne";

console.log(user.address);

let user2 = {
    name: "John",
    age: 25,
    address: {
        numero: 83,
        rue: "Rue de la République",
        codePostal : 42100,
        ville : "St-Etienne"
    }
};

console.log(user2.address.codePostal);