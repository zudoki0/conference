import './bootstrap.js';

const element = document.getElementById("button");
element.addEventListener("click", addHelloWorld);

function addHelloWorld() {
    document.getElementById("hi").innerHTML = "Hello, World!";
}