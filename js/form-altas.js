function seleccionarArchivo() {
  let input = document.querySelector(".inputFile");
  if (input) {
    input.click();
  }
}

let input = document.querySelector(".inputFile");
input.addEventListener("change", function () {
  let img = document.querySelector("#imgPerfil");
  const archivos = input.files;
  if (!archivos || !archivos.length) {
    img.src = "";
    return;
  }
  const primerArchivo = archivos[0];
  const objectURL = URL.createObjectURL(primerArchivo);

  img.src = objectURL;
  img.style = "width:200px;height:200px;border-radius: 100%";
});
