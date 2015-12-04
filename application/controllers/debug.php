<?php
class Example_controller extends CI_Controller {

    public function index()
    {
        $this->load->spark('Debug-Toolbar/1.x.x');   
        $this->load->library('console');                        
        $this->output->enable_profiler(true);
        Console::log('Hey, this is really cool');
        $this->load->view('index');
    }
}?>