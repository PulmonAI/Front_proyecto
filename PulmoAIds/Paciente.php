<?php
include("./conexion.php");

    $DNI = $_POST["dna"];
    $email = $_POST["Email"];
    $nombreYapellido = $_POST["NombreYapellido"];
    $obrasocialPaciente = $_POST["Obrasocial"]; 
    $Fechadenacimiento = $_POST["FechaDeNacimiento"];
    $FEV1 = $_POST["FEV1(1)"];
    $FEV12 = $_POST["FEV1(2)"];
    $FEV13 = $_POST["FEV1(3)"];
    $FEV14 = $_POST["FEV1(4)"];
    $FVC = $_POST["FVC(1)"];
    $FVC2 = $_POST["FVC(2)"];
    $FVC3 = $_POST["FVC(3)"];
    $FVC4 = $_POST["FVC(4)"];
    $FEF = $_POST["FEF(1)"];
    $FEF2 = $_POST["FEF(2)"];
    $FEF3 = $_POST["FEF(3)"];
    $FEF4 = $_POST["FEF(4)"];
   

    var_dump($_POST);

    
    $query = "INSERT INTO Paciente ( dna, NombreYapellido, Email, Obrasocial, FechaDeNacimiento, `FEV1(1)`, `FEV1(2)`, `FEV1(3)`, `FEV1(4)`, `FVC(1)`, `FVC(2)`, `FVC(3)`, `FVC(4)`, `FEF(1)`, `FEF(2)`, `FEF(3)`, `FEF(4)`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    var_dump($stmt);  
    if ($stmt) {
        $stmt->bind_param("issiiiiiiiiiiiiii",$DNI, $nombreYapellido, $email, $obrasocialPaciente, $Fechadenacimiento, $FEV1, $FEV12, $FEV13, $FEV14, $FVC, $FVC2, $FVC3, $FVC4, $FEF, $FEF2, $FEF3, $FEF4);
    
    $sql = $mysqli->query($query);
    echo $sql;
   
    if ($stmt -> execute()) {
        echo '<div class="Success">Datos guardados correctamente</div>';
        // header("Location: FormerpatientFront.php");
    } else {
        echo '<div class="alerta">No se guardaron los datos. Error: ' . $stmt->error . '</div>';
    }
    
    
    
        $stmt->close();
}

  $mysqli->close();
  ?>