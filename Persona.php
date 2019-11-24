<?php
    class Persona {
        private $posibles_generos   = ['m', 'f'];
        private $posibles_nombres_h = ['Nain', 'Juan', 'Marcos', 'Daniel', 'Renato', 'James'];
        private $posibles_nombres_m = ['Maria', 'Juana', 'Ella', 'Andrea', 'Rosa', 'Hermosa'];
        private $posibles_apellidos = ['Acero', 'Mamani', 'Lopez', 'Romero', 'Serrano', 'Moreno', 'Aviles'];

        public $persona;
        public $nombre;
        public $apellido;
        public $genero;

        public function __construct(){

        }

        public function crear_persona(){
            $this->genero = $this->posibles_generos[rand(0,1)];
            $this->nombre = $this->obtener_nombre();
            $this->apellido = $this->obtener_apellido().' '.$this->obtener_apellido();
            $this->persona = $this->nombre.' '.$this->apellido;
            return $this->persona.'<hr>';
        }

        private function obtener_nombre(){
            return ($this->genero === 'm')  ?  $this->posibles_nombres_m[rand(0,count($this->posibles_nombres_m) -1)]
                                            : $this->posibles_nombres_h[rand(0,count($this->posibles_nombres_h) -1)];
        }

        private function obtener_apellido(){
            return $this->posibles_apellidos[rand(0,count($this->posibles_apellidos) -1)];
        }

        public static function crear(){
            $persona = new self();
            return $persona->crear_persona();
        }
    }
