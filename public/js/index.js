var btnStart = document.getElementById("btn_start");
var taskMenu = document.getElementById("taskMenu");

btnStart.addEventListener('click', () => {
  taskMenu.style.display = taskMenu.style.display === 'block' ? 'none' : 'block';
});

btnStart.addEventListener('dblclick', () => {
  alert("Parabéns! Você encontrou um Easter Egg! :D");
  let easterEgg = "https://www.youtube.com/watch?v=TSr8WW4eKP4";
  window.open(easterEgg, '_blank', 'noopener,noreferrer');
});
