	<?php
    class cuidados_intensivos extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_cuidados_intensivos");  
        }
	}		
	//Identificación de sesión y tiempo en la sesión
	session_start();
	?>