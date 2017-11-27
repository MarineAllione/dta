function User(name, age) {
    
    this.name = name;
    
    this.age = age;
    
    this.sayHi = function() {
        
        return (this.name + " a " + this.age + "ans.");
    };
}

let user1 = new User("John", 25);

let user2 = new User("Kate", 32);

let user3 = new User("Younes", 19);

let user4 = new User("Nathan", 21);

let usersSet = new Set();

usersSet.add(user1);

usersSet.add(user2);

usersSet.add(user3);

usersSet.add(user4);

for (let user of usersSet) {
    
    console.log(user.sayHi());
}