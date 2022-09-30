	<link rel="shortcut icon" href="plantilla/assets1/images/logo-cedij.jpeg">
	<?php
    class Medicos extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_medicos");  
        }
	}		
	//Identificación de sesión y tiempo en la sesión
	session_start();
	?>