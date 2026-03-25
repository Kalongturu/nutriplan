const body = document.body;
const navCollapse = document.getElementById('navbarSupportedContent')

navCollapse.addEventListener('shown.bs.collapse', () => {
    body.style.overflow = 'hidden';
})
navCollapse.addEventListener('hidden.bs.collapse', () => {
    body.style.overflow = '';
})