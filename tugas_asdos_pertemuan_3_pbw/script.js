
document.getElementById("cek").onclick = function () {

let nim = document.getElementById('nim').value;
let nilai =document.getElementById('nilai').value;
let hasil = document.getElementById('hasil');

if (nilai < 0 ){
    hasil.innerHTML = "Nilai tidak valid!";
}else if (nilai > 79){
 hasil.innerHTML = "Nim :" + nim + "<br> Nilai : A";
}else if (nilai > 69){
    hasil.innerHTML = "Nim :" + nim + "<br> Nilai : B";
}else if (nilai > 59){
    hasil.innerHTML = "Nim :" + nim + "<br> Nilai : C";
}else if (nilai > 49){
    hasil.innerHTML = "Nim :" + nim + "<br> Nilai : D";
}else {
    hasil.innerHTML = "Nim :" + nim +"<br> Nilai : E";
}
}