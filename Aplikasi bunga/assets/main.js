document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    

    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{

    nav.classList.toggle('show')
    // ganti icon
    toggle.classList.toggle('bx-x')
    // menambahkan padding ke body
    bodypd.classList.toggle('body-pd')
    // menambahkan padding ke header
    headerpd.classList.toggle('body-pd')
    }) }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    

    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    }); 