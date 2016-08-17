<?

//si es necesario cambiar la config. del php.ini desde tu script
ini_set("session.use_only_cookies","1");
ini_set("session.use_trans_sid","0");

//vemos si el usuario y contraseña es váildo
if ($_POST["user"]=="lobogriscreativo" && $_POST["password"]=="PandorA976"){
    //usuario y contraseña válidos
    session_name("usuariologueado");
    //asigno un nombre a la sesión para poder guardar diferentes datos
    session_start();
    // inicio la sesión
    session_set_cookie_params(0, "/", $HTTP_SERVER_VARS["HTTP_HOST"], 0);
    //cambiamos la duración a la cookie de la sesión
    $_SESSION["autentificado"]= "SI";
    //defino la sesión que demuestra que el usuario está autorizado
    $_SESSION["lastacces"]= date("Y-n-j H:i:s");
    //defino la fecha y hora de inicio de sesión en formato aaaa-mm-dd hh:mm:ss
    header ("Location: section/data.php");
}else {
    //si no existe le mando otra vez a la portada
    header("Location: ../index.php?errorusuario=si");
}
?>
