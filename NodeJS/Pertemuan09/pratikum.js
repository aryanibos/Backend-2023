const fruits = ["Apple", "Watermelon", "Orange", "Pear"];

// memanggil semua isi array menggunakan for of
// for of digunakan untuk mengambil semua value dari array
for (const fruit of fruits) {
    console.log(fruit);
}

// spasi
console.log("=====================================");

// object literal
const mhs1 = {
    name: "Arya Isnaidi",
    nim: "0110222146",
    class: "SE02"
}

// memanggil semua isi object menggunakan for in
// for in digunakan untuk mengambil semua key dari object
for (const m in mhs1) {
    console.log(mhs1[m]);
}

// spasi
console.log("=====================================");

// memanggil semua object menggunakan Desctructuring
// Desctructuring digunakan untuk mengambil semua key dari object
const { name, nim, class: kelas } = mhs1;