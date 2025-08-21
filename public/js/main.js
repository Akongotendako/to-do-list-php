const sideBar = () => {
  const sideBar = document.getElementById('sideBar');
  if (sideBar.classList.contains('d-flex')) {
    sideBar.classList.remove('d-flex');
    sideBar.classList.add('d-none');
  } else {
    sideBar.classList.remove('d-none');
    sideBar.classList.add('d-flex');
  }
};