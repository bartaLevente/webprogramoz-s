
var members=document.querySelector(".member")
var competitions=document.querySelector(".comp")
var jaws=document.querySelector(".jaw")
var timers = [members,competitions,jaws]

const memberValue = parseInt(members.textContent);
const compValue = parseInt(competitions.textContent);
const jawValue = parseInt(jaws.textContent);


const timerConfigurations = [
  { targetNumber: memberValue, duration: 2000 },
  { targetNumber: compValue, duration: 2000 },
  { targetNumber: jawValue, duration: 2000 }
];

const triggerOffset = 300; 


let timersStarted = false;

timers.forEach(timer=>{
    timer.textContent = 0
})

window.addEventListener('scroll', function () {
  
  const scrollPosition = window.scrollY;

  
  if (scrollPosition >= triggerOffset && !timersStarted) {
    startTimers();
    timersStarted = true;
  }
});


function startTimers() {
  timers.forEach((timer, index) => {
    const config = timerConfigurations[index];
    startTimer(timer, config.targetNumber, config.duration);
  });
}


function startTimer(timerElement, targetNumber, animationDuration) {
  const startTime = performance.now();

  function updateTimer() {
    
    const elapsedTime = performance.now() - startTime;

    const progress = Math.min(elapsedTime / animationDuration, 1);

    const currentNumber = Math.round(progress * targetNumber);


    timerElement.textContent = currentNumber;

    if (progress < 1) {
      requestAnimationFrame(updateTimer);
    }
  }
  updateTimer();
}


function toggleDropdown(trigger,contentid) {

  const dropdownContent = document.getElementById(contentid);

  
  trigger.classList.toggle('active');

  dropdownContent.style.display = trigger.classList.contains('active') ? 'block' : 'none';
}
