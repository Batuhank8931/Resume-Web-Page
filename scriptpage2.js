'use strict';


var button1 = document.querySelector('.submit1');

button1.addEventListener('click', function() {
    window.location.href = 'experience.php';
    
})

var button2 = document.querySelector('.submit3');

button2.addEventListener('click', function() {
    window.location.href = 'projects.php';
    
})


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