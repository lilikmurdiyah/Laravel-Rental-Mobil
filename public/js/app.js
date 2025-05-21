console.log("hello word")
document.onload = function(){
    
}

const harga_mobil = document.getElementById("harga_mobil");
const lama_sewa = document.getElementById("lama_sewa");
const total_bayar = document.getElementById("total_bayar");

function hitungTotal(){
    hasil = harga_mobil.value * lama_sewa.value;
    total_bayar.value = hasil;
}


harga_mobil.addEventListener("change", hitungTotal);
lama_sewa.addEventListener("change", hitungTotal);
