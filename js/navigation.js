const toggleMenu = document.querySelector('.toggle-menu');
const menu = document.querySelector('.menu');

toggleMenu.addEventListener('click', function () {
    const open = JSON.parse(toggleMenu.getAttribute('aria-expanded'));
    toggleMenu.setAttribute('aria-expanded', !open);
    menu.hidden = !menu.hidden;
    document.body.dataset.burger = !open;
});


const linkIndex = document.getElementById('linkIndex');
const linkFormation = document.getElementById('linkFormation');
const linkStudents = document.getElementById('linkStudents');
const linkNews = document.getElementById('linkNews');
const linkContact = document.getElementById('linkContact');

if(window.location.href.includes("index")){
    linkIndex.className = "active";
}else if(window.location.href.includes("formation") || window.location.href.includes("Formation")){
    linkFormation.className = "active";
}else if(window.location.href.includes("student") || window.location.href.includes("Student")){
    linkStudents.className = "active";
}else if(window.location.href.includes("new") || window.location.href.includes("New")){
    linkNews.className = "active";
}else if(window.location.href.includes("contact")){
    linkContact.className = "active";
}
