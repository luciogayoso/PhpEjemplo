let user = document.querySelector("#campoReferencia");
user.addEventListener("keyup", function (e) {
  let inputUserModificar = document.querySelector("#campoReferencia").value;
  let listaBusqueda = document.querySelector(".busqueda");
  let img = document.querySelector("#imgPerfilModificar");
  let clave = document.querySelector("#clave");
  let apellido = document.querySelector("#apellido");
  let nombre = document.querySelector("#nombre");
  let fecha = document.querySelector("#fecha");
  if (inputUserModificar !== "") {
    fetch("../server/peticiones/userNames.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((res) => res.json())
      .then(function (json) {
        let html = "";
        for (let i = 0; i < json.length; i++) {
          if (json[i].usuario.includes(inputUserModificar)) {
            html =
              html + `<li class="listaModificar">` + json[i].usuario + `</li>`;
          }
        }
        listaBusqueda.innerHTML = html;
      });
  }
  if (inputUserModificar == "") {
    img.src = "../images/fotoPerfil.png";
    img.style = "width:200px;border-radius:100%";
    clave.value = "";
    apellido.value = "";
    nombre.value = "";
    fecha.value = "";
    listaBusqueda.innerHTML = "";
  }
});

let ulbusqueda = document.querySelector(".busqueda");
ulbusqueda.addEventListener("click", function (e) {
  let userName = e.target.textContent;
  let img = document.querySelector("#imgPerfilModificar");
  let clave = document.querySelector("#clave");
  let apellido = document.querySelector("#apellido");
  let nombre = document.querySelector("#nombre");
  let fecha = document.querySelector("#fecha");
  fetch("../server/peticiones/user.php", {
    method: "POST",
    body: JSON.stringify({
      solicitud: userName,
    }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then(function (json) {
      console.dir(json);
      img.src = "data:image/jpeg;base64," + json[0].foto;
      img.style = "width:200px;border-radius:100%";
      clave.value = json[0].clave;
      apellido.value = json[0].apellido;
      nombre.value = json[0].nombre;
      fecha.value = json[0].fecha;
    });
});
