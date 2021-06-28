console.log("Enjoy your game");

let a = Math.ceil(6*Math.random());
// let a = 100*Math.random();
// let a = Math.ceil(50+(100-50)*Math.random()); //to print a complete random number netween 0-100 usinf ceil
// console.log(a);
let dice = document.getElementById('btn')
dice.addEventListener('click',function(){
    a = Math.ceil(6*Math.random());
    // console.log(a)
    div = document.getElementById('div')
    // console.log(a);
    div.innerHTML = a;
    console.clear();
})


console.log("Enjoy your game");

// let a = Math.ceil(6*Math.random());
// // let a = 100*Math.random();
// // let a = Math.ceil(50+(100-50)*Math.random()); //to print a complete random number netween 0-100 usinf ceil
// // console.log(a);
// let dice = document.getElementById('btn')
// dice.addEventListener('click',function(){
//     a = Math.ceil(6*Math.random());
//     // console.log(a)
//     div = document.getElementById('div')
//     div.innerHTML = a;
//     console.clear();
//     // setTimeout(() => {
//     //     a = Math.ceil(6*Math.random());
//     //     // console.log(a)
//     //     div = document.getElementById('div')
//     //     div.innerHTML = a;
//     // }, 1000);
    
    
// });











