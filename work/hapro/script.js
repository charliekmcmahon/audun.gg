function closeError() {
  let div = document.getElementById('errorMsg');
  div.style.display = 'hidden';
}

function showError() {
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
}

const admin = document.getElementById('isOpenAdmin');
const tilbud = document.getElementById('isOpenTilbud');

function openTilbud() {
  tilbud.classList.toggle('hidden');
  admin.classList.add('hidden');
}
function openAdmin() {
  admin.classList.toggle('hidden');
  tilbud.classList.add('hidden');
}

function closeAllMenus() {
  admin.classList.add('hidden');
  tilbud.classList.add('hidden');
}
