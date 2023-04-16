console.log('hello world!');

const cross = document.getElementById('cross');
const x = document.getElementById('x');
const text = document.getElementById('text')
const button = document.getElementById('controll')
const shapes = document.getElementById('shapes')

const showCrossHandler = () => {
    x.style.display = "none"
    cross.style.display = "flex"
};

const showXHandler = () => {
    cross.style.display = "none"
    x.style.display = "flex"
};

setTimeout(()=>{
    shapes.style.display = "flex"
    text.className = "textClosed"
    button.style.display = "flex"
}, 3000)