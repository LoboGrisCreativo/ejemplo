<?
//vemos si el usuario y contraseña es váildo
if ($_POST["user"]=="lobogriscreativo" && $_POST["password"]=="PandorA976"){
    //usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
    $_SESSION["autentificado"]= "SI";
    header ("Location: section/data.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location: ../index.php?errorusuario=si");
}
?>