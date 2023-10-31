<?php 
(!empty($_POST["Login"])){
    $emailID=$_POST["EmailID"];
    $clave=$_POST["Clave"];
    $sql=$mysqli ->query(" SELECT * FROM Registro WHERE EmailID = ? AND Clave= ? ", [$emailID, $clave]);
}



?>