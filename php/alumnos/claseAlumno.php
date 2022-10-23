<?php
    class Alumno {
        public $nombre;
        public $apellidos;
        public $dni;
        public $direccion;
        public $email;

        function __construct($nombre, $apellidos, $dni, $direccion, $email) {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->dni = $dni;
            $this->direccion = $direccion;
            $this->email = $email;
        }

        function get_nombre() {
            return $this->nombre;
        }

        function get_apellidos() {
            return $this->apellidos;
        }

        function get_dni() {
            return $this->dni;
        }

        function get_direccion() {
            return $this->direccion;
        }

        function get_email() {
            return $this->email;
        }
    }
?>