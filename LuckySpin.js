// Immediately invoked function expression
// to not pollute the global scope
(function() {
  const wheel = document.querySelector('.wheel');
  const startButton = document.querySelector('.button');
  const display = document.querySelector('.display');
  
  let deg = 0;
  let zoneSize = 45; // deg

  // Counter clockwise
  const symbolSegments = {
    1: "5% off",
    2: "Bad Luck!",
    3: "30% off",
    4: "Bad Luck!",
    5: "15% off",
    6: "Bad Luck!",
    7: "10% Off",
    8: "Bad Luck!",
  }

  const handleWin = (actualDeg) => {
    const winningSymbolNr = Math.ceil(actualDeg / zoneSize);
    display.innerHTML = symbolSegments[winningSymbolNr];
  }

  startButton.addEventListener('click', () => {
    display.innerHTML = "-";
    startButton.style.pointerEvents = 'none';
    deg = Math.floor(5000 + Math.random() * 5000);
    wheel.style.transition = 'all 10s ease-out';
    wheel.style.transform = `rotate(${deg}deg)`;
    // wheel.classList.add('blur');
  });

  wheel.addEventListener('transitionend', () => {
    wheel.classList.remove('blur');
    startButton.style.pointerEvents = 'auto';
    wheel.style.transition = 'none';
    const actualDeg = deg % 360;
    wheel.style.transform = `rotate(${actualDeg}deg)`;
    handleWin(actualDeg);
  });
})();