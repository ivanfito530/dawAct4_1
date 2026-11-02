const productos = [
"Monitor",
"Teclado",
"Ratón",
"Impresora"
];

console.log(productos[0]);
console.log(productos[3]);
productos.unshift("Webcam");
productos.push("Portatil");
productos.shift();
productos.pop();
productos.splice(2,0,"Altavoces")
productos.splice(3,1,"Raton Inalambrico")