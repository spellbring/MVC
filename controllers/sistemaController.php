<?php
class sistemaController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index() 
    {
       
       $this->_view->titulo = 'Login';
       if(Session::get('SESS_USER') != null)
       $this->_view->renderizarSistema('sistema');
       else
         header('Location: ' . BASE_URL . 'login');
       
    }
    public function abreOrganizacion(){
        
     
     $this->_view->renderizaCenterBox('agregarOrganizacion');
    }
    
 
  

}
