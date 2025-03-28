/*Dogukan--Javascript*/
/*Javascript-openingstijden*/
document.addEventListener('DOMContentLoaded', function() {
  const map = L.map('map').setView([52.1601, 4.4970], 15);
 
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
 
  const marker = L.marker([52.1601, 4.4970]).addTo(map);
 
  const popupContent = `
    <strong>Umami Sushi</strong><br>
    Galgewater 12, 2311VZ Leiden<br>
    <a href="https://www.google.com/maps/place/Galgewater+12,+2311+VZ+Leiden/@52.1608605,4.4811669,17z/data=!3m1!4b1!4m6!3m5!1s0x47c5c6ee75920585:0xb2bf2814cb018432!8m2!3d52.1608605!4d4.4837418!16s%2Fg%2F11c5cg9s14?entry=ttu&g_ep=EgoyMDI1MDMxOS4yIKXMDSoASAFQAw%3D%3D" target="_blank">Route plannen</a>
  `;
 
  marker.bindPopup(popupContent).openPopup();
});
  //*///////////////////////////////*//
function toggleMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.classList.toggle('active');
}
 
// carousel js //////////////////////////////
 
 
document.addEventListener('DOMContentLoaded',()=>{
    document.querySelectorAll('.carousel-container').forEach(c=>{
      const car=c.querySelector('.carousel'),
            items=c.querySelectorAll('.carousel-item'),
            n=items.length;
      let p=0;
 
     
      const getVisibleItems=()=>innerWidth<=480?1:innerWidth<=768?2:4;
 
   
      const updatePosition=()=>{
        const visibleItems=getVisibleItems();
        p=Math.max(0,Math.min(p,n-visibleItems));
        car.style.transform=`translateX(-${p*(100/visibleItems)}%)`;
      };
 
     
      window.addEventListener('resize',updatePosition);
      c.querySelector('.prev').onclick=()=>{p--;updatePosition()};
      c.querySelector('.next').onclick=()=>{p++;updatePosition()};
 
   
      let startX;
      car.addEventListener('touchstart',e=>startX=e.changedTouches[0].screenX);
      car.addEventListener('touchend',e=>{
        const diff=e.changedTouches[0].screenX-startX;
        if(Math.abs(diff)>=50){
          diff<0?p++:p--;
          updatePosition();
        }
      });
 
     
      updatePosition();
    });
  });
 
 
 
  // javascripy-vacatures//
  function toggleDetails(id) {
    const details = document.getElementById(id);
    if (details.style.display === "block") {
        details.style.display = "none";
    } else {
        details.style.display = "block";
    }
}
/*/////////////////////////////////////*/
 
 
$(document).ready(function() {
  $('.allergy-info').click(function(e) {
      e.stopPropagation();
      $('.allergy-popup').remove();
      $('<section class="allergy-popup">' + $(this).data('allergy') + '</section>')
          .css({top: $(this).offset().top + 20, left: $(this).offset().left})
          .appendTo('body')
          .show();
  });
 
  $(document).click(function() {
      $('.allergy-popup').remove();
  });
});
 
 
 
/*///////////////////////////////////*/


// Jv van Halisdzhan Atla //
 
function toggleMenu() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.classList.toggle('active');
}
 
function redirectToMenu() {
    window.location.href = "menu.php";
    console.log('Redirecting to menu page');
}
 
 
 
 
 