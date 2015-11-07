<?php
abstract class Controller
{
 //Obliga que a todos los que hereden de controlador se tengan que implementar
 // este metodo index();
   protected $_view;
   // se realiza un llamado a la vista desde el controlador principal
   public function __construct() {
       $this->_view = new View(new Request);
   }
   abstract public function index();
}
