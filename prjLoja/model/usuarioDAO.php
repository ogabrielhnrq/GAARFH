<?php

   require_once('conexao.php');
   require_once('usuario.php');

   class UsuarioDAO {
        private Usuario $usuario;
        private Conexao $conexao;

        public function __construct($pusuario) {
            $this->usuario = $pusuario;
            $this->conexao = new Conexao("gaarfh", "mysql","root", "", "localhost");
        }

        public function getAutenticado() {
            try {
                // Passo 1 - Abre a conexao com Banco
                $con = $this->conexao->getConexao();

                 // Passo 3 -  Executa o SQL
                $comando = $con->prepare( "SELECT COUNT(*) AS EXISTE FROM CLIENTE WHERE EMAIL = :email AND SENHA = :senha");

                $email = $this->usuario->getEmail();
                $senha = $this->usuario->getSenha();
                  
                $comando->bindParam(':email', $email, PDO::PARAM_STR);
                $comando->bindParam(':senha', $senha, PDO::PARAM_STR);

                $comando->execute();

                $resultado = $comando->fetchAll();

                foreach ($resultado as $id=>$linha) {
                    return $linha['EXISTE']; 
                }

            } catch (Exception $e) {
                return 0;
            }
        }

        
   }


?>