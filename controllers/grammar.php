<?php
class Grammar extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function grammar(){
        $pagina = 'grammar/grammar';
        $this->getView()->loadView($pagina);
    }

    public function 이다(){
        $pagina = 'grammar/describers';
        $this->getView()->loadView($pagina);
    }

    
    public function markers(){
        $pagina = 'grammar/markers';
        $this->getView()->loadView($pagina);
    }

        
    public function locationtime(){
        $pagina = 'grammar/location-time';
        $this->getView()->loadView($pagina);
    } 

    public function past(){
        $pagina = 'grammar/pasttime';
        $this->getView()->loadView($pagina);
    }
}
?>