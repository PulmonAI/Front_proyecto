<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="../Front_proyecto/imagenes/10px">
    <link rel="Registro.php" href="Registro.php">
</head>
<body>
    <style>
body{
    margin: 0;
}
button {
    color:black;
    background-color: rgb(164, 229, 255);
    width: 50%;
    height: 8%;
    margin-left: 25%;
    margin-bottom: 15px;
    border-radius: 5px;
    border-color: rgb(164, 229, 255);
    border-style: dotted;
    font-family: Georgia, 'Times New Roman', Times, serif;
    cursor: pointer;
    font-size: medium;
}
button:active{
    color: white;
    background-color: rgb(38, 181, 233);
}
header {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    margin-right: 0%;
    align-items: flex-start;
    position: absolute;
    gap: 80px;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
nav{
    font-size: 20px;
    cursor: pointer;
    color: white;
}
.HOME{
text-shadow: 2px 4px 10px rgb(255, 255, 255);
}
form{
    justify-content: center;
    display: flex;
}
label{
    margin-bottom: 18px;
}
input{
    margin-bottom: 18px;
    margin-left: 10px;
    margin-right: 15px;
    margin-top: 10px;
    border-radius: 5px;
    border-color: white;
    height: 30px;
    width: 300px;
}
container{
    background-color: rgb(157, 156, 156);
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    border-radius: 15px;
    width: 350px;
    height: 400px;
    margin-top: 150px;
}
h1{
    margin-left: 15px;
    margin-bottom: 5px;
    margin-top: 0px;
    font-size: 30px;
}
h2{
    margin-left: 15px;
    margin-top: 0px;
    font-size: 17px;
}
.fondo{
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    position: fixed;
    background-image: url(../imagenes/fondo_pulmoAi_inicio.jpg);
    background-size: cover;
    background-position: center;
    z-index: -1;
}
    </style>
<header>
<figure>
        <img src="" alt="logo" class="logo">
    </figure>
    <nav class="HOME"> HOME </nav> 
    <nav class="NEW_PATIENT"> NEW PATIENT </nav>
    <nav class="RECORD"> RECORD </nav>
    <nav class="SUPPORT"> SUPPORT </nav>
    <nav class="ABOUT_US"> ABOUT US </nav>
    <figure>
        <img src="" alt="perfil" class="perfil">
    </figure>
</header>
<?php
include("modelo/index.php")
include("modelo/Registro.php")
?>
<section>
    <p>  </p>  
    <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
    <form method="POST"> 
        <container>
            <h1>Welcome</h1>
            <h2>Please, register your account.</h2>
            <input type = "text" id = "Nombre" placeholder="Name" required>
            <input type ="text" id = "Apellido" placeholder = "Surename" required>
            <input type ="email" id = "EmailID" placeholder="Email" required>
            <input type = "text" id = "Obra social" placeholder="Medical assurance" required>
            <button type="submit">Start</button>   
        </container>
    </form>
</section>
</body>
</html>