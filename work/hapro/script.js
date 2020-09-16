function closeError() {
  let div = document.getElementById('errorMsg');
  div.style.display = 'hidden';
}
let errorMessages = [
  {
    name: 'error1',
    title: 'Feil!',
    description:
      "Baking av PCB - Does not have a price group : Se 'bug' for mer informasjon.",
  },
];
/*
kan ikke lukke error
hvert trykk gir ikke flere error, forsåvidt
*/
function throwError() {
  let elem = document.createElement('div');
  let x = document.getElementById('errorMsg');
  x.style.display = 'block';
  elem.classList =
    'top-0 right-0 mr-6 mt-4 fixed z-50 bg-red-500 border-2 border-red-600 text-white text-md px-4 py-4 rounded-md shadow hidden transition ease-in duration-200';
  elem.innerHTML = errorMessages;
  document.getElementById('errorMsg').appendChild(elem);
  console.log(errorMessages);
}

/*function showError() {
  let x = document.getElementById('errorMsg');
  x.style.display = 'block';
  setInterval(function () {
    if ((x.style.display = 'hidden')) {
      x.style.display = 'hidden';
      console.log('[INFO] Error melding forsvant');
    } else {
      x.style.display = 'hidden';
    }
  }, 500);
}*/
const calculus = document.getElementById('newCalculus');

function newCalculus() {
  calculus.classList.toggle('hidden');
}
function closeCalculus() {
  calculus.classList.add('hidden');
}
const kebab = document.getElementById('isOpenKebab');
const admin = document.getElementById('isOpenAdmin');
const tilbud = document.getElementById('isOpenTilbud');
function openKebab() {
  kebab.classList.toggle('hidden');
  admin.classList.add('hidden');
  tilbud.classList.add('hidden');
}
function openTilbud() {
  tilbud.classList.toggle('hidden');
  admin.classList.add('hidden');
  kebab.classList.add('hidden');
}
function openAdmin() {
  admin.classList.toggle('hidden');
  tilbud.classList.add('hidden');
  kebab.classList.add('hidden');
}

function closeAllMenus() {
  admin.classList.add('hidden');
  tilbud.classList.add('hidden');
}

const calcElem = document.getElementsByClassName('baking');

let posts = [];
function addCalc(num) {
  posts.push(calcElem);
  document.querySelector('.nåverende').innerHTML = posts.join('');
}

function moveMe() {
  addCalc();
  if ((calcElem.classList = 'block')) {
    calcElem.classList.add = 'hidden';
  } else {
    console.log('nja');
  }
}
