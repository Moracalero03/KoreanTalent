<?php
class Controller{
        private $view;

        public function __construct(){
        $this->view = new View();
        }

        /**
         * Get the value of view
         */ 
        public function getView()
        {
                return $this->view;
        }

        /**
         * Set the value of view
         *
         * @return  self
         */ 
        public function setView($view)
        {
                $this->view = $view;

                return $this;
        }

        public function iniciarHome(){
                $pagina = 'inicio/home';
                $this->getView()->loadView($pagina);
                
        }

}
?>