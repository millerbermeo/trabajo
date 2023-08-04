const express = require('express')
const app = express();
const port = 3000

app.get('/', (req, res,) => {
    res.send("hola mundo")
})

app.listen(port, ()=> {
    console.log(`servidor escuchando en el puerto ${port}`);
})

let numero = -2

if (numero === 0) {
    console.log(`el numero es cero`)
} else if (numero > 0) {
    console.log(`el numero ingresado ${numero} es postivo`)
} else if (numero < 0) {
    console.log(`el numero ingresado ${numero} es negativo`)
}

console.log("")
console.log("Ejercicio numero dos")
console.log("")

let materia1 = 3,
materia2 = 4,
materia3 = 4

let resultado = (materia1 + materia2 + materia3) / 3

console.log(resultado)


if(resultado < 3.5) {
    console.log(`Usted reprobo la materia con ${resultado}`)
} else if(resultado >= 3.5) {
    console.log(`Usted aprobo la materia con ${resultado}`)
}

console.log("")
console.log("Ejercicio numero cuatro")
console.log("")

let edad = 20;

if (edad > 0 && edad <= 12) {
    console.log(`su edad es ${edad} y usted es un NIÑO`)
} else if (edad > 12 && edad <= 21) {
    console.log(`su edad es ${edad} y usted es un ADOLECENTE`)
}else if (edad > 21 && edad <= 31) {
    console.log(`su edad es ${edad} y usted es un JOVEN`)
}else if (edad > 31 && edad <= 60) {
    console.log(`su edad es ${edad} y usted es un ADULTO`)
} else {
    console.log(`su edad es ${edad} y usted es un ADULTO MAYOR`)
}

