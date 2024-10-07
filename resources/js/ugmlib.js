const dropdownDigital = () => {
    let content = document.getElementById('digitalNavbar');
    let nonactive = content.classList.contains('hidden');
    if(nonactive){
        content.classList.remove('hidden');
    }else{
        content.classList.add('hidden');
    }
}

const hamburgerMenu = () => {
    let content = document.getElementById('navbarHamburger');
    let nonactive = content.classList.contains('hidden');
    if(nonactive){
        content.classList.remove('hidden');
    }else{
        content.classList.add('hidden');
    }
}