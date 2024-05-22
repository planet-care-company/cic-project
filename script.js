const hamburger = document.querySelector('.hamburger');

hamburger.addEventListener('click', () =>{
    hamburger.classList.toggle('active')
})


function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }
  
  const counters = document.querySelectorAll('.no1, .no2, .no3');
  counters.forEach(counter => {
    const endValue = parseInt(counter.getAttribute('data-target'));
    animateValue(counter, 0, endValue, 9000); // Duration is 5000ms (5 seconds)
});
  



