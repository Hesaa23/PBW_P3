function salam() {
    alert("Selamat datang di website kami");
}

function contohLet() {
    let y = 10;
    if (true) {
        let y = 20;
        console.log("Nilai dalam Blok: ",y);
    }
    console.log("Nilai luar Blok: ",y);
}
contohLet();

// const z = 100;
// z = 200;

let nama = "Budi"
let umur = 30;
let isStudent = false;
let buah = ["Apel", "Mangga", "Jeruk"];
let Mahasiswa = {nama:"Rina", usia: 20, jurusan: "Informatika"};

console.log(nama);
console.log(buah[1]);
console.log(Mahasiswa.jurusan);
