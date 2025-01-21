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