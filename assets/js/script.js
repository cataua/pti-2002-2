const loadDataFromReq = (req) => {
  const searchData = new URLSearchParams(req.target.location.search);
  const usuario = searchData.get('user');

  const userPlaceholder = document.querySelector('#user')
  const welcomeBox = document.querySelector('.welcome.hide')
  const loadingBox = document.querySelector('.loading.show')
  userPlaceholder.innerHTML = usuario;
  welcomeBox.classList.remove('hide');
  loadingBox.classList.remove('show');
}


window.addEventListener('load', loadDataFromReq)
window.removeEventListener('unload', loadDataFromReq)