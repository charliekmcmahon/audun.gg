function closeError() {
  let div = document.getElementById('errorMsg');
  div.style.opacity = 0;
}

try {
  function showError() {
    let x = document.getElementById('errorMsg');
    x.style.opacity = 1;
    setInterval(() => {
      if ((x.opacity = '0')) {
        x.style.opacity = '0';
        console.log('[INFO] Error melding forsvant');
      } else {
        x.style.opacity = '1';
      }
    }, 10000);
  }
} catch (error) {
  console.log(error.message);
}
