let user = document.querySelector("#campoReferencia");
user.addEventListener("change", function (e) {
  fetch("../server/peticiones/userNames.php", {
    method: "GET",
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((res) => res.json())
    .then(function (json) {
      let html =
        `<div class="container-modal"><img src="data:image/jpeg;base64,` +
        json[0].foto +
        `" width="200px" height="200px">
        <h3>` +
        json[0].usuario +
        `</h3>
      <h3>` +
        json[0].nombre +
        ` ` +
        json[0].apellido +
        `</h3>
      <h2> ` +
        json[0].fecha +
        `</h2>
      <p class="btn-modal" onclick="cerrarModal()">Aceptar</p></div>`;
    });
});
