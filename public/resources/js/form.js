const elem = document.getElementById("artifact");
const submitBtn = document.getElementById("submitBtn");

const inputID = document.getElementById("inputID");
const inputTitolo = document.getElementById("inputTitolo");
const inputAut = document.getElementById("inputAut");
const inputNumero = document.getElementById("inputNumero");
const inputPub = document.getElementById("inputPub");
const inputPag = document.getElementById("inputPag");
const inputISBN = document.getElementById("inputISBN");
const inputCasa = document.getElementById("inputCasa");
const inputModello = document.getElementById("inputModello");
const inputType = document.getElementById("inputType");
const inputAnno = document.getElementById("inputAnno");
const inputCPU = document.getElementById("inputCPU");
const inputVelocita = document.getElementById("inputVelocita");
const inputMemoria = document.getElementById("inputMemoria");
const inputHardDisk = document.getElementById("inputHardDisk");
const inputOS = document.getElementById("inputOS");
const inputSupp = document.getElementById("inputSupp");
const inputNote = document.getElementById("inputNote");
const inputURL = document.getElementById("inputURL");
const inputTag = document.getElementById("inputTag");

let value = "";

elem.addEventListener("change", function (e) {
    value = document.getElementById("artifact").value;

    if (value == "") {
        inputID.style.display = "none";
        inputCPU.style.display = "none";
        inputTitolo.style.display = "none";
        inputAut.style.display = "none";
        inputNumero.style.display = "none";
        inputPub.style.display = "none";      
        inputPag.style.display = "none";
        inputISBN.style.display = "none";
        inputCasa.style.display = "none";
        inputModello.style.display = "none";
        inputType.style.display = "none";
        inputAnno.style.display = "none";
        inputCPU.style.display = "none";
        inputVelocita.style.display = "none";
        inputMemoria.style.display = "none";
        inputHardDisk.style.display = "none";
        inputOS.style.display = "none";
        inputSupp.style.display = "none";
        inputNote.style.display = "none";
        inputURL.style.display = "none";
        inputTag.style.display = "none";

        submitBtn.style.display = "none";
    }else{
        inputID.style.display = "block";
        inputNote.style.display = "block";
        inputURL.style.display = "block";
        inputTag.style.display = "block";

        submitBtn.style.display = "block";
    }

    if (value == "computer") {
        inputTitolo.style.display = "none";
        inputAut.style.display = "none";
        inputNumero.style.display = "none";
        inputPub.style.display = "none";      
        inputPag.style.display = "none";
        inputISBN.style.display = "none";
        inputCasa.style.display = "none";
        inputModello.style.display = "block";
        inputType.style.display = "none";
        inputAnno.style.display = "block";
        inputCPU.style.display = "block";
        inputVelocita.style.display = "block";
        inputMemoria.style.display = "block";
        inputHardDisk.style.display = "block";
        inputOS.style.display = "block";
        inputSupp.style.display = "none";
    }

    if (value == "rivista") {
        inputTitolo.style.display = "block";
        inputAut.style.display = "none";
        inputNumero.style.display = "block";
        inputPub.style.display = "none";      
        inputPag.style.display = "none";
        inputISBN.style.display = "none";
        inputCasa.style.display = "block";
        inputModello.style.display = "none";
        inputType.style.display = "none";
        inputAnno.style.display = "block";
        inputCPU.style.display = "none";
        inputVelocita.style.display = "none";
        inputMemoria.style.display = "none";
        inputHardDisk.style.display = "none";
        inputOS.style.display = "none";
        inputSupp.style.display = "none";
    }

    if (value == "software") {
        inputTitolo.style.display = "block";
        inputAut.style.display = "none";
        inputNumero.style.display = "none";
        inputPub.style.display = "none";      
        inputPag.style.display = "none";
        inputISBN.style.display = "none";
        inputCasa.style.display = "none";
        inputModello.style.display = "none";
        inputType.style.display = "block";
        inputAnno.style.display = "none";
        inputCPU.style.display = "none";
        inputVelocita.style.display = "none";
        inputMemoria.style.display = "none";
        inputHardDisk.style.display = "none";
        inputOS.style.display = "block";
        inputSupp.style.display = "block";
    }

    if (value == "libro") {
        inputTitolo.style.display = "block";
        inputAut.style.display = "block";
        inputNumero.style.display = "none";
        inputPub.style.display = "block";      
        inputPag.style.display = "block";
        inputISBN.style.display = "block";
        inputCasa.style.display = "block";
        inputModello.style.display = "none";
        inputType.style.display = "none";
        inputAnno.style.display = "none";
        inputCPU.style.display = "none";
        inputVelocita.style.display = "none";
        inputMemoria.style.display = "none";
        inputHardDisk.style.display = "none";
        inputOS.style.display = "none";
        inputSupp.style.display = "none";
    }

    if (value == "periferica") {
        inputTitolo.style.display = "none";
        inputAut.style.display = "none";
        inputNumero.style.display = "none";
        inputPub.style.display = "none";      
        inputPag.style.display = "none";
        inputISBN.style.display = "none";
        inputCasa.style.display = "none";
        inputModello.style.display = "block";
        inputType.style.display = "block";
        inputAnno.style.display = "none";
        inputCPU.style.display = "none";
        inputVelocita.style.display = "none";
        inputMemoria.style.display = "none";
        inputHardDisk.style.display = "none";
        inputOS.style.display = "none";
        inputSupp.style.display = "none";
    }

});
