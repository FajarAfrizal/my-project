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
     
     /* Dengan Rupiah */
     var dengan_rupiah = document.getElementById('rupiah');
     dengan_rupiah.addEventListener('keyup', function(e)
     {
         dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
     });
     
     /* Fungsi */
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