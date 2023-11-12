console.log("read messages");
fetch("../msg.json")
  .then((response) => response.json())
  .then((data) => {
    const commentContainer = document.getElementById("comentarios");
    // console.log(commentContainer);
    data.forEach((item) => {
      if (item.comentario) {
        const itemDiv = document.createElement("div");
        itemDiv.className = "row comentario";
        itemDiv.innerHTML = `
        <div class="col-2 text-center" style="padding-bottom: 40px;">
            <img class="img-fluid avatar" src="../assets/img/art_ret/noavatar.svg">
        </div>
        <div class="col-9">
            <h5 class="text-start comAut">${item.nombre}</h5>
            <p class="fst-italic comBox">${item.mensaje}</p>
        </div>
      `;
        commentContainer.appendChild(itemDiv);
      }
    });
  });
