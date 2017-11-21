function User(name, age) {
    
    this.name = name;
    
    this.age = age;
    
    this.sayHi = function() {
        
        console.log(this.name + " a " + this.age + "ans.");
    };
}

let user1 = new User("John", 25);

let user2 = new User("Kate", 32);

user1.sayHi();

user2.sayHi();

let user3 = new User("Younes", 19);

user3.sayHi();