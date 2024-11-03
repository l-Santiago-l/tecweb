<?php
# LLamar la clase como al archivo
    # Se mantiene el "class"
    class Persona{
        # Toda palabra(atributo) TIENE que tener un "adjetivo" que identifique su tipo
        private $nombre;

        public function incializar($name){
            # El $this SIEMPRE debe de utilizarse
            $this->nombre = $name;
        }

        public function mostrar(){
            echo "<p> $this->nombre </p>";
        }
    }
?>