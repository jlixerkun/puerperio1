console.log('este es entrada.js');
const selectores = [...document.querySelectorAll('.selector')];
const links = [...document.querySelectorAll('.link-main a')];
let modal = document.querySelector( '.modal-idioma');

selectores.forEach( (item)=> {
    item.addEventListener('click', (e)=> {
        let lang = e.target.dataset.lang;
        links.forEach( (item) => {
            let path = item.getAttribute('href');
            let newPath =  lang + '/'+ path;
            item.setAttribute('href', newPath );
        });
        modal.classList.add('oculto');
    })
})