const alumnos = [
    {
        nombre: "Juan",
        apellido: "Gomez",
        dni: 46345678,
        anio: 4,
        curso: "A",
        nota: 8,
    },
    {
        nombre: "María",
        apellido: "López",
        dni: 45789234,
        anio: 4,
        curso: "B",
        nota: 5,
    },
    {
        nombre: "Pedro",
        apellido: "Martínez",
        dni: 46871245,
        anio: 5,
        curso: "A",
        nota: 6,
    },
    {
        nombre: "Ana",
        apellido: "Rodriguez",
        dni: 45987654,
        anio: 5,
        curso: "B",
        nota: 7,
    },
    {
        nombre: "Luis",
        apellido: "Fernández",
        dni: 46458721,
        anio: 4,
        curso: "A",
        nota: 4,
    },
    {
        nombre: "Sofía",
        apellido: "García",
        dni: 46892317,
        anio: 3,
        curso: "B",
        nota: 8,
    },
    {
        nombre: "Carlos",
        apellido: "Pérez",
        dni: 45789123,
        anio: 3,
        curso: "A",
        nota: 3,
    },
    {
        nombre: "Laura",
        apellido: "Hernández",
        dni: 46983127,
        anio: 4,
        curso: "B",
        nota: 9,
    },
    {
        nombre: "Daniel",
        apellido: "Sanchez",
        dni: 46981235,
        anio: 5,
        curso: "B",
        nota: 2,
    },
    {
        nombre: "Patricia",
        apellido: "Gonzalez",
        dni: 45987123,
        anio: 3,
        curso: "B",
        nota: 6,
    },
];

console.log(alumnos);
const capitalizar = (string) => {
    if (typeof string !== 'string') {
        return "Por favor, ingresa una cadena de texto.";
    }

    if (string.length === 0) {
        return "La cadena está vacía.";
    }

    return string.charAt(0).toUpperCase() + string.slice(1);
};

const alumnos = [
    // ... (los objetos de alumnos del ejercicio anterior)
];

console.log(alumnos);

console.log(capitalizar("hola")); // Salida: "Hola"
console.log(capitalizar("esto es una prueba")); // Salida: "Esto es una prueba"
console.log(capitalizar("")); // Salida: "La cadena está vacía."
console.log(capitalizar(123)); // Salida: "Por favor, ingresa una cadena de texto."
