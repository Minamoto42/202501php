let person={
    name: "乌萨奇",
    age: 3,
    greet: function(){
        console.log("乌拉,呀哈~ " + this.name);
    }
};

console.log(person.name);
person.greet();

function Human(name, age){
    this.name = name;
    this.age = age;
}
console.log(typeof Human);
let person1 = new Human("chiikawa", 20);
console.log(typeof person1);
console.log(person1.name);

class Character {
    constructor(name) {
        this.name = name;
    }
    speak() {
        console.log(this.name + ' say something.');
    }
    jump() {
        console.log(this.name + ' is jumpping.');
    }
}

let usagi = new Character('Usagi');
usagi.speak();
usagi.jump();

class Hachi extends Character {
    constructor(name) {
        super(name);
        this.type = 'Hachi';
    }

    speak() {
        console.log(this.name + ' say something, hello.');
    }
}

let hachi = new Hachi('hachi');
hachi.speak();

function fetchData(callback) {
    setTimeout(function() {
        console.log("completion complete")
        callback('Data fetched')
    }, 2000);
}

fetchData((data) => {
    console.log(data);
});

let promise = new Promise((resolve, reject) => {
    let success = false;
    if (success) {
        resolve('Data fetched!');
    } else {
        reject('Error!');
    }
});

promise.then((message) => {
    console.log("success: " + message);
}).catch((message) => {
    console.log("fail: " + message);
});

function fetchData() {
    return new Promise((resolve) => {
        setTimeout(function () {
            console.log("Data fetched!");
            resolve('Data fetched!');        
        }, 2000);
    });
}

async function fetchDataAsunc() {
    console.log("Fetching data...");
    let data = await fetchData();
    console.log(data);
}
    
fetchDataAsunc();