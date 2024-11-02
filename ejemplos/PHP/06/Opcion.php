<?php
    class Opcion{
        private $titulo;
        private $enlace;
        private $colorFondo;

        public function ___construct($title, $link, $bcolor){
            $this->titulo = $title;
            $this->enlace =  $link;
            $this->colorFondo = $bcolor;
        }

        public function graficar(){
            $estilo = 'background-color: '.$this->colorFondo;
            echo "<a style ='".$estilo."' href='".$this->enlace."'>".$this->titulo."</a>";
            echo $this->colorFondo;
        }
        
    }


?>
