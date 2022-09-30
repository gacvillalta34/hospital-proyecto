 <?php
	$conect = @mysql_connect('localhost:3306', 'administrador',"xPuhupaIhCpz0fyn") or die(mysql_error());
		mysql_select_db("biblioteca",$conect)or die("No se encontró la base de datos");
					mysql_query ("SET NAMES 'utf8'");
	
	//Comprobamos si esta definida la sesión 'tiempo'.
	if(isset($_SESSION['tiempo']) ) {
    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 1800;//30min en este caso.
    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];
        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            header("Location: inicio");
            exit();
        } else {  // si no ha caducado la sesion, actualizamos
            $_SESSION['tiempo'] = time();
        }
	} else {
    //Activamos sesion tiempo.
    $_SESSION['tiempo'] = time();
				}
				?>