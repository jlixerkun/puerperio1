if(!window.location.pathname.toString().includes('index')){
  // Se desplaza la distancia correspondiente al alto actual del viewport
  document.querySelector(".scrollear").addEventListener("click", function() {
    // Se obtiene la altura actual del viewport
    var viewportHeight = window.innerHeight;
  
    // Se desplaza la ventana a la posición actual más la altura del viewport
    window.scrollTo({
      top: window.scrollY + viewportHeight,
      left: 0,
    });
  });
  
  
  let thettas = document.getElementById('thettas');
  let menuList = document.getElementById('menu');
  
  thettas.addEventListener('click', (e)=>{
    menuList.classList.toggle('active');
    if (thettas.classList.contains('active')) {
      thettas.classList.remove('active');
      thettas.classList.add('inactive');
    } else {
      thettas.classList.add('active');
      thettas.classList.remove('inactive');
      setTimeout(() => {
        thettas.classList.remove('active');
        thettas.classList.add('inactive');
        menuList.classList.toggle('active');
      }, 5000);
    }
  });
}

if(window.location.pathname.toString().includes('artistas')){
  let artistas = [...document.querySelectorAll('.grid-item a')];
  
  console.log(artistas);
  
  artistas.forEach((item)=> {
    item.style.setProperty('--width-transpose', (Math.random()*6 ) + 'rem');
    item.style.setProperty('--height-transpose', (Math.random()*6 ) + 'rem');
  })
}


// document.ready(function() {

//   /* Pick a random number and apply it to the first slide */
//   $('.carousel-item').eq(Math.floor((Math.random() * $('.carousel-item').length))).addClass("active");

//   /* Pick random next slide */
//   $('#topslide').carousel(Math.floor((Math.random() * $('.carousel-item').length)));

//  });