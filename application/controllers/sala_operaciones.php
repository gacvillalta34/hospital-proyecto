	<?php
    class sala_operaciones extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_sala_operaciones");  
        }
	}		
	//Identificación de sesión y tiempo en la sesión
	session_start();
	?>