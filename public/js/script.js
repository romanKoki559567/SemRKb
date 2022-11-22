
console.log('start');

function overMeno() {
    console.log('nieco3');
    let name = document.getElementById('idName').value;
    let obrazok = document.getElementById('idFoto').value;
    let cena = document.getElementById('idCena').value;
    //let err = document.getElementById('err');

    if (name == "" || obrazok == "" || cena == "") {
        //err.innerHTML = "nezadali ste vsetky polia";
        alert("nezadali ste vsetky polia");
    } else {
        console.log("dobre zadane polia")
    }
}

let button = document.getElementById('subm');
button.addEventListener("click", overMeno);