var currentStep = 0;
var numberOfSteps = document.getElementsByClassName('step').length;

function formReact(ev) {

  // handle indicator dots
  var dotEls = document.getElementsByClassName('dot');
  dotEls[currentStep].className = "dot";
  dotEls[currentStep + 1].className = "dot current";

  // handle transition animations
  var stepEls = document.getElementsByClassName('step');
  stepEls[currentStep + 1].className += " is-showing animate-in";
  stepEls[currentStep].className += " animate-out";

  // reset classes
  setTimeout(function () {
    // currentStep - 1 because variable "currentStep" is already incremented
    stepEls[currentStep - 1].className = "step";
    stepEls[currentStep].className = "step is-showing";
  }, 500);


  currentStep++;

};

function showForm(ev) {
  var formWrap = document.getElementsByClassName('form-wrap');
  formWrap[0].className += ' visible';

  var contentBg = document.getElementById('content');
  contentBg.className += ' dimmed';

  document.getElementById('add-quote').removeEventListener('click', showForm);

  setTimeout(function() {
    contentBg.addEventListener('click', closeForm);
  }, 300);

};

function closeForm(ev) {
  var formWrap = document.getElementsByClassName('form-wrap');
  formWrap[0].classList.remove('visible');
  formWrap[0].className += ' hide';

  var contentBg = document.getElementById('content');
  contentBg.classList.remove('dimmed');
  contentBg.removeEventListener('click', closeForm);

  setTimeout(function() {
    formWrap[0].classList.remove('hide');
    document.getElementById('add-quote').addEventListener('click', showForm);
  }, 300);
};

window.onload = function() {
  var buttonEls = document.getElementsByClassName('button-next');
  for (i = 0; i < buttonEls.length; i++) {
    buttonEls[i].addEventListener('click', formReact);
  }

  document.getElementById('add-quote').addEventListener('click', showForm);

};
