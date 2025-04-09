<?php

   class Usuario {
        private $email;
        private $senha;

        public function __construct($pemail, $psenha) {
            $this->email = $pemail;
            $this->senha = $psenha;
        }

        public function setEmail($pemail) {
            $this->email = $pemail;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setSenha($psenha) {
            $this->senha = $psenha;
        }

        public function getSenha() {
            return $this->senha;
        }
   }
?>