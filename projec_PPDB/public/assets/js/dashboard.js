document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready
    });
    
    var dengan_rupiah = document.getElementById('rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    function formatRupiah(angka, prefix)
     {
         var number_string = angka.replace(/[^,\d]/g, '').toString(),
             split    = number_string.split(','),
             sisa     = split[0].length % 3,
             rupiah     = split[0].substr(0, sisa),
             ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
             
         if (ribuan) {
             separator = sisa ? '.' : '';
             rupiah += separator + ribuan.join('.');
         }
         
         rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
         return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
     }