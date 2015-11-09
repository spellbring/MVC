<?php
class loginController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index() 
    {
       $this->_view->titulo = 'Login';
       $this->_view->renderizaLogin('login');
       Session::destroy();
       
    }
    public function ingresar(){
        
        Session::set('sess_mensaje', 2);
        
       $this->redireccionar();
      
    
    }

}
