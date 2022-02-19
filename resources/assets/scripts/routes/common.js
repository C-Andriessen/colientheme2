export default {
  init() {
    // JavaScript to be fired on all pages
    const menu = document.querySelector('.menu'); 
const menuItems = document.querySelector('.menu-items'); 

// const image = document.querySelector('img')

menu.addEventListener('click', () => {
    if (menu.innerText == 'Menu //') {
    menuItems.className = 'menu-items-active d-flex fixed-top';
    menu.innerText = 'X'
    } else {
        menuItems.className = 'menu-items'
        menu.innerText = 'Menu //'
    }

})
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
