<?php 
    class Tabla {
        private $matriz = array();
        private $numFilas;
        private $numColumna;
        private $estilo;
        
        public function __construct($rows, $cols, $style){
            $this->numFilas = $rows;
            $this->numColumnas = $cols;
            $this->estilo = $style;
        }

        public function cargar($row, $col, $val){
            $this->matriz[$row][$col] = $val;
        }

        private function inicio_tabla(){
            echo '<table>';
        }

        private function incio_fila(){
            echo '<tr>';
        }

        private function  mostrar_dato($row, $col){
            echo '<td style"'.$this->estilo.'">'.$this->matriz[$row][$col].'</td>';
        }

        private function fin_fila(){
            echo '</tr>';
        }

        private function fin_tabla(){
            echo '</table>';
        }

        public function graficar(){
            $this->inicio_Tabla();

            for($i=0;$this->numColumnas; $i++){
                for($j=0;$this->numFilas; $j++){
                    mostrar_dato($i, $j);
                }
            }
        }
    }
?>