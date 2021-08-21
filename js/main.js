$(document).ready(function() {


    $("#project-page-read-more").click(function() {
      var elem = $("#project-page-read-more").text();
      if (elem == "Read More....") {
        //Stuff to do when btn is in the read more state
        $("#project-page-read-more").text("Read Less....");
        $(".project-page-project-description-bottom").slideDown();
        $(".tech-stack-list").slideDown();
      } else {
        //Stuff to do when btn is in the read less state
        $("#project-page-read-more").text("Read More....");
        $(".project-page-project-description-bottom").slideUp();
        $(".tech-stack-list").slideUp();
        
      }
    }); 

  const scrollToTheTop = document.querySelector(".scroll-to-the-top-btn");
  scrollToTheTop.addEventListener("click" ,function(){
    $("html, body").animate({scrollTop: 0} , 'slow');
  });
  
  const menuDrawerBtn = document.querySelector(".mobile-menu-drawer");
  const body = document.querySelector("body");
  const menuSlider = document.querySelector(".mobile-menu-slider");
  menuDrawerBtn.addEventListener("click", ()=>{
  menuDrawerBtn.classList.toggle("open-drawer-btn");
  body.classList.toggle("open");
  menuSlider.style.display="flex";
  menuSlider.classList.toggle("open-slider");
});
  });

