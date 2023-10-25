'use strict';


var button1 = document.querySelector('.submit2');

button1.addEventListener('click', function() {
    window.location.href = 'skills.php';
    
})

var button2 = document.querySelector('.submit3');

button2.addEventListener('click', function() {
    window.location.href = 'projects.php';
    
})

const scrollcon = document.querySelector(".scrollcon");
let isMouseDown = false;
let startX;
let startY;
let scrollLeft;
let scrollTop;

scrollcon.addEventListener("mousedown", (e) => {
  isMouseDown = true;
  startX = e.pageX - scrollcon.offsetLeft;
  startY = e.pageY - scrollcon.offsetTop;
  scrollLeft = scrollcon.scrollLeft;
  scrollTop = scrollcon.scrollTop;
});

document.addEventListener("mouseup", () => {
  isMouseDown = false;
});

document.addEventListener("mousemove", (e) => {
  if (!isMouseDown) return;
  e.preventDefault();
  const x = e.pageX - scrollcon.offsetLeft;
  const y = e.pageY - scrollcon.offsetTop;
  const moveX = x - startX;
  const moveY = y - startY;
  scrollcon.scrollLeft = scrollLeft - moveX;
  scrollcon.scrollTop = scrollTop - moveY;
});


var buttons = document.querySelectorAll('.sidebarbtn');

buttons.forEach(function(button) {
  button.addEventListener('click', function() {
    var value = button.value;
    var hidden1 = "#"+value;
    var arrow1 = "#"+value+"arrow";
    const hiddenDiv = document.querySelector(String(hidden1));
    const arrowDiv = document.querySelector(String(arrow1));

    const isHidden = hiddenDiv.style.display === 'none' || hiddenDiv.style.display === '';

    // If it's hidden, make it visible; otherwise, hide it
    if (isHidden) {
      hiddenDiv.style.display = 'block';
      arrowDiv.classList.remove('down');
      arrowDiv.classList.add('up');

    } else {
      hiddenDiv.style.display = 'none';
      arrowDiv.classList.remove('up');
      arrowDiv.classList.add('down');
    }
    
  });
});







