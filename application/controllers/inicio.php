	<link rel="shortcut icon" href="plantilla/assets1/images/logo-cedij.jpeg">
	<?php
    class Inicio extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_home");  
        }
	}		
	//Identificación de sesión y tiempo en la sesión
	session_start();
	?>