const clickMe = document.querySelector('.one');
const hoverMe = document.querySelector('.two');
const resizeMe = document.querySelector('.three');
const dblClickMe = document.querySelector('.four');
const mystery = document.querySelector('.five');
const clickMeInner = "Click Me!";

function click(e){
  if(clickMe.firstChild.innerText === clickMeInner){
    clickMe.firstChild.innerText = "I've Been Clicked!";
  } else {
    clickMe.firstChild.innerText = 'Click Me!';
  }
}

function hover(e){
  hoverMe.classList.toggle('two-hovered');
}

function doubleClick(e) {
  dblClickMe.classList.toggle('four-double');
}

function resizeWindow(e){
  resizeMe.innerHTML = '<strong> You Resized The Window</Strong>';
}

function pressKey(e){
  if (e.keyCode == 69){
    mystery.innerHTML = `<h1>Now Press P</h1>`;
  } else if(e.keyCode == 80){
    mystery.innerHTML = `<h1>Press The E Key</h1>`;
  }
}


clickMe.addEventListener('click', click);
hoverMe.addEventListener('mouseenter', hover);
hoverMe.addEventListener('mouseleave', hover);
dblClickMe.addEventListener('dblclick', doubleClick);
window.addEventListener('resize', resizeWindow);
window.addEventListener('keydown', pressKey);