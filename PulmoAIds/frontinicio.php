<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="../Front_proyecto/imagenes/10px">
</head>
<body>
 <style>
    *{
    margin: 0;
    }
body{
    margin: 0;
}
 header {
    display: flex;
    justify-content: space-between;
    align-self: center;
    padding: 25px;
    margin-right: 0%;
    margin-left: 20px;
    margin-top: 0%;
    align-items: flex-start;
    position: absolute;
    gap: 100px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
.perfil{
    width: 50px;
    height: 50px;
    margin-right: 0%;
}
.logo{
    width: 55px;
    height: 55px;
    margin-top: 0%;
    margin-left: 0%;
    padding: 0px;
    border: 0px;
}
nav{
    font-size: 20px;
    margin-left: 20px;
    margin-top: 1.5%;
    cursor: pointer;
    color: white;
}
.menu:hover{
    text-decoration: underline;
}
#HOME{
    text-shadow: 2px 4px 10px rgb(255, 255, 255);  
}
a{
    color: white;
    text-decoration: none;
}
h1{
    font-size: 60px;
    font-family: serif;
    margin-bottom: 0;
    margin-top: 175px;
    margin-left: 30px;
    position: absolute;
    color: white;
}
p::before{
    content: "Watch the future of modern medicine";
    color: white;
    cursor: pointer;
    margin-top: 0;
    margin-left: 45px;
    position: absolute;
    margin-top: 250px;
    font-size: 20px;
    font-style: italic;
}
p:hover::before{
    content: "Breathing for life";
    color: rgb(151, 214, 255);
}
 </style>
 <header>
    <figure>
        <img src="../imagenes/Icono Pulmo AI.png" alt="logo" class="logo">
    </figure>
    <nav class="menu" id="HOME"><a href="../pantalla_registro/registro.html"> HOME</a> </nav>
    <nav class="menu"><a href="../pantalla_newpatient/newpatient.html">NEW PATIENT</a></nav>
    <nav class="menu"><a href="../pantalla_formerpatient/formerpatient.html">FORMER PATIENT</a></nav>
    <nav class="menu"> <a href="../pantalla_aboutus/aboutus.html"> ABOUT US</a></nav>
    <figure>
        <img src="../imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
    </figure>
 </header>
 <section>
    <h1> Welcome to Pulmo. AI</h1>
    <p> </p>
    <img src="../imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
</body>
</html>