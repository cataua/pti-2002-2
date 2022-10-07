const loadDataFromReq = (req) => {
  const welcomeBox = document.querySelector('.welcome.hide')
  const loadingBox = document.querySelector('.loading.show')
  welcomeBox.classList.remove('hide');
  loadingBox.classList.remove('show');
}


window.addEventListener('load', loadDataFromReq)
window.removeEventListener('unload', loadDataFromReq)