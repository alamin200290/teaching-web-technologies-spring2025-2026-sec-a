 // name = "alamin";
// var name = "alamin";
// let name = "alamin";
// const name = "alamin";

let std = [1, 'alamin', 2.5];
std[1];

// if(1 === "1"){

// }else if(){

// }

// for(let a=0; a<10;a++){

// }

// function sum(a, b){
//     return a+b;
// }

// sum(10,20);

let sum = function(a, b){
    return a+b;
}
// let sum = (a,b)=>a+b;

// function test(a, b){
//     let d = 10+b;
//     let c= a(d,b);
//     return c;
// }

// test(function(a, b){
//     return a+b;
// }, 20);
// console.log(std);
//alert('test');

//document.write('test from js ....');

let btn = document.getElementById('btn');

btn.addEventListener('click', function(){
    let username = document.getElementById('username').value;
    let msg = document.getElementById('msg');

    if(username == ""){
        msg.innerHTML = "please type username first!";
        msg.style.color = 'red';
    }else{
        let head = document.getElementsByTagName('h1')[0];
        head.innerHTML = username;
        msg.innerHTML = "";
    }
})