<?php
    require_once __DIR__-'/Cabecera.php';
    require_once __DIR__-'/Cuerpo.php';
    require_once __DIR__-'/Pie.php';

    class Pagina{
        private $cabecera;
        private $cuerpo;
        private $pie;

        public function ___construct($text1, $text2){
            $this->cabecera = new Cabecera($text1);
            $this->cuerpo = new Cuerpo();
            $this->pie = new Pie($text2);
        }

        public function insertar_cuerpo(){
            $this->cuerpo->insertar_parrafo();
            
        }
    }

?>