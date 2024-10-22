const navbarMenu = document.querySelector('.navbar-menu');
// ketika hamburger menu di klik
document.querySelector('#hamburger-menu').onclick = () => {
  navbarMenu.classList.toggle('active');
};

const navbarLinks = document.querySelectorAll('.navbar-menu a');
navbarLinks.forEach(link => {
  link.onclick = () => {
    navbarMenu.classList.remove('active');
  };
});