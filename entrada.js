const selectores = [...document.querySelectorAll('.selector')];
const links = [...document.querySelectorAll('.link-main a')];

let modal = document.querySelector( '.modal-idioma');
let tempDiv = document.createElement('div');
tempDiv.classList.add('backdrop');

modal.insertAdjacentElement('afterend',tempDiv);

selectores.forEach( (item)=> {
    item.addEventListener('click', (e)=> {
        let lang = e.target.dataset.lang;
        links.forEach( (item) => {
            let path = item.getAttribute('href');
            let newPath =  lang + '/'+ path;
            item.setAttribute('href', newPath );
            console.log(newPath);    
        });
        modal.remove();
        tempDiv.remove();    
        console.log(lang);
    })
})