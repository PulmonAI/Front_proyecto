<?php
include("./conexion.php");

// Obtener el término de búsqueda desde el formulario
$busqueda = $_POST["busqueda"];

// Consulta SQL para buscar pacientes por nombre o DNI
$query = "SELECT * FROM Paciente WHERE NombreYapellido LIKE ? OR dna = ?";

$stmt = $mysqli->prepare($query);
echo "Valor de búsqueda: " . $busqueda;

if ($stmt) {
    // Agregar comodines para la búsqueda parcial en el nombre
    $busqueda = "%" . $busqueda . "%";
    
    $stmt->bind_param("ss", $busqueda, $busqueda); // Cambia a "ss" para ambos parámetros
    
    // Ejecutar la consulta
    $stmt->execute();
    
    // Obtener resultados
    $result = $stmt->get_result();
    
    // Verificar si se encontraron pacientes
    if ($result->num_rows > 0) {
        // Mostrar resultados
        while ($row = $result->fetch_assoc()) {
            // Imprimir los detalles de los pacientes encontrados
            echo "Nombre: " . $row["NombreYapellido"] . "<br>";
            echo "DNI: " . $row["dna"] . "<br>";
            echo "Obra Social: " . $row["Obrasocial"] . "<br>";
            echo "Fecha de Nacimiento: " . $row["FechaDeNacimiento"] . "<br>";
        echo "FEV1(1): " . $row["FEV1(1)"] . "<br>";
        echo "FEV1(2): " . $row["FEV1(2)"] . "<br>";
        echo "FEV1(3): " . $row["FEV1(3)"] . "<br>";
        echo "FEV1(4): " . $row["FEV1(4)"] . "<br>";
        echo "FVC(1): " . $row["FVC(1)"] . "<br>";
        echo "FVC(2): " . $row["FVC(2)"] . "<br>";
        echo "FVC(3): " . $row["FVC(3)"] . "<br>";
        echo "FVC(4): " . $row["FVC(4)"] . "<br>";
        echo "FEF(1): " . $row["FEF(1)"] . "<br>";
        echo "FEF(2): " . $row["FEF(2)"] . "<br>";
        echo "FEF(3): " . $row["FEF(3)"] . "<br>";
        echo "FEF(4): " . $row["FEF(4)"] . "<br>";
            echo "<hr>";
        }
    } else {
        // Si no se encontraron resultados, mostrar "Paciente inexistente"
        echo "Paciente inexistente";
    }
    
    $stmt->close();
}

$mysqli->close();
?>
