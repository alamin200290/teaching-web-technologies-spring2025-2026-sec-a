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

let move = document.getElementById('btn1');

move.addEventListener('click', ()=>{

    let d1 = document.getElementById('d1');

    // for(let a=0; a<50;a++){ 
    //     setTimeout(function(){
    //         let current = window.getComputedStyle(d1).left;
    //         if(current == ""){
    //             current = "10px";
    //         }else{
    //             //let newPos = current.replace('px', '').trim();
    //             current = parseInt(current)+10+"px";
    //         }
    //         d1.style.left = current;
    //     }, 70* (a+1));
    // }

    let counter = 0;
    let interval = setInterval(function(){
        if(counter >10){
            clearInterval(interval);
        }else{
            let current = window.getComputedStyle(d1).left;
            if(current == ""){
                current = "10px";
            }else{
                //let newPos = current.replace('px', '').trim();
                current = parseInt(current)+10+"px";
            }
            d1.style.left = current;
        }
        counter++;
    }, 200);
});