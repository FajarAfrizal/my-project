var swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 30,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      
      clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });

  // EMAIL js
  function validate() {
    let name = document.querySelector(".name");
    let email = document.querySelector(".email");
    let msg = document.querySelector(".message");
    let sendBtn = document.querySelector(".send-btn");

    sendBtn.addEventListener('click', (e) => {
      e.preventDefault();
      if (name.value == "" || email.value == "" || msg.value == ""){
        emptyerror();
      } else{
        sendmail(name.value, email.value, msg.value)
        success();
      }
    });
  }
  validate();

  function sendmail(name,email,msg){
    emailjs.send("service_rptq5wa","template_9p1e12h",{
      to_name: name,
      from_name: email,
      message: msg,
      });
  }


  
  function emptyerror() {
    swal({
      title: "Oh No...",
      text: "Fields cannot be empty!",
      icon: "error",
    });
  }
  function success() {
    swal({
      title: "Email sent successfully",
      text: "We try to reply in 24 hours",
      icon: "success",
    });
  }
 // header backgruound change on scroll
 let header = document.querySelector("header");

 window.addEventListener("scroll", () => {
   header.classList.toggle("header-active", window.scrollY > 0)
 })

 // Scroll Top
 let scrollTop = document.querySelector(".scroll-top");

 window.addEventListener("scroll", () => {
   scrollTop.classList.toggle("scroll-active", window.scrollY >= 400);
 })
