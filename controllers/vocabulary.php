<?php
class Vocabulary extends Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function vocabulary(){
        $pagina = 'vocabulary/vocabulary';
        $this->getView()->loadView($pagina);
    }

    public function country(){
        $pagina = 'vocabulary/country';
        $this->getView()->loadView($pagina);
    }

    public function job(){
        $pagina = 'vocabulary/job';
        $this->getView()->loadView($pagina);
    }

    public function family(){
        $pagina = 'vocabulary/family';
        $this->getView()->loadView($pagina);
    }

    public function life(){
        $pagina = 'vocabulary/life';
        $this->getView()->loadView($pagina);
    }

    public function verb(){
        $pagina = 'vocabulary/verb';
        $this->getView()->loadView($pagina);
    }

    public function adjective(){
        $pagina = 'vocabulary/adjective';
        $this->getView()->loadView($pagina);
    }

    public function place(){
        $pagina = 'vocabulary/place';
        $this->getView()->loadView($pagina);
    }

    public function weather(){
        $pagina = 'vocabulary/weather';
        $this->getView()->loadView($pagina);
    }

    public function season(){
        $pagina = 'vocabulary/season';
        $this->getView()->loadView($pagina);
    }

    public function present(){
        $pagina = 'vocabulary/present';
        $this->getView()->loadView($pagina);
    }

    public function object(){
        $pagina = 'vocabulary/object';
        $this->getView()->loadView($pagina);
    }

    public function position(){
        $pagina = 'vocabulary/position';
        $this->getView()->loadView($pagina);
    }

    
    public function chinesenumber(){
        $pagina = 'vocabulary/chinesenumber';
        $this->getView()->loadView($pagina);
    }

    public function date(){
        $pagina = 'vocabulary/date';
        $this->getView()->loadView($pagina);
    }

    public function exercise(){
        $pagina = 'vocabulary/exercise';
        $this->getView()->loadView($pagina);
    }

    public function adverb(){
        $pagina = 'vocabulary/adverb';
        $this->getView()->loadView($pagina);
    }

    public function koreannumber(){
        $pagina = 'vocabulary/koreannumber';
        $this->getView()->loadView($pagina);
    } 

    public function time(){
        $pagina = 'vocabulary/time';
        $this->getView()->loadView($pagina);
    }
}
?>