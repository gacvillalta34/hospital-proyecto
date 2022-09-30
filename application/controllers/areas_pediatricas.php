	<?php
    class areas_pediatricas extends Ci_Controller
    {
    public function index(){
	$data = array ('title' => 'Home', 'mensaje');
	$this->load->view("view_areas_pediatricas");  
        }
	}		
	//Identificación de sesión y tiempo en la sesión
	session_start();
	?>