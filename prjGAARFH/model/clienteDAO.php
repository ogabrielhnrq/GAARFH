<?php

   require_once('conexao.php');
   require_once('cliente.php');

   class clienteDAO {

        private Cliente $cliente;
        private Conexao $conexao;

        public function __construct($pcliente) {
            // Instanciando uma conexao com os parametros
            $this->conexao = new Conexao("gaarfh", "mysql","root", "", "localhost");
            $this->cliente = $pcliente; 
        }

        public function insere() {
            try {

                // Passo 1 - Abre a conexao com Banco
                $con = $this->conexao->getConexao();
                
                // Passo 2 -  Inicia uma transação
                $con->beginTransaction();
                
                // Passo 3 -  Executa o SQL
                $comando = $con->prepare( "INSERT INTO CLIENTE(NOME, EMAIL, ENDERECO, CIDADE, SENHA) VALUES (:nome ,:email, :endereco, :cidade, :senha)");
                
                $nome = $this->cliente->getNome_cliente();
                $idade = $this->cliente->getEmail();
                $endereco = $this->cliente->getEndereco();
                $cidade = $this->cliente->getCidade();
                $senha = $this->cliente->getSenha();
                
                $comando->bindParam(':nome', $nome , PDO::PARAM_STR);
                $comando->bindParam(':email', $email, PDO::PARAM_STR);
                $comando->bindParam(':endereco', $endereco, PDO::PARAM_STR);
                $comando->bindParam(':cidade', $cidade, PDO::PARAM_STR);
                $comando->bindParam(':senha', $senha, PDO::PARAM_STR);

                $comando->execute();

                // Passo 4 - Confirmacao a execucao
                $con->commit();
                return true;

            } catch(Exception $e) {
                // Cancela a execucao do SQL
                $con->rollBack();
                return false;
            }
        }

        public function atualiza() {
            try {

                // Passo 1 - Abre a conexao com Banco
                $con = $this->conexao->getConexao();
                
                // Passo 2 -  Inicia uma transação
                $con->beginTransaction();
                
                // Passo 3 -  Executa o SQL
                $comando = $con->prepare( "UPDATE CLIENTE SET NOME=:nome, EMAIL=:email, ENDERECO=:endereco, CIDADE=:cidade, SENHA=:senha WHERE COD_CLIENTE = :cod_cliente");
                
                $nome = $this->cliente->getNome_cliente();
                $idade = $this->cliente->getEmail();
                $endereco = $this->cliente->getEndereco();
                $cidade = $this->cliente->getCidade();
                $senha = $this->cliente->getSenha();
                
                $comando->bindParam(':nome', $nome , PDO::PARAM_STR);
                $comando->bindParam(':email', $email, PDO::PARAM_STR);
                $comando->bindParam(':endereco', $endereco, PDO::PARAM_STR);
                $comando->bindParam(':cidade', $cidade, PDO::PARAM_STR);
                $comando->bindParam(':senha', $senha, PDO::PARAM_STR);

                $comando->execute();

                // Passo 4 - Confirmacao a execucao
                $con->commit();
                return true;

            } catch(Exception $e) {
                // Cancela a execucao do SQL
                $con->rollBack();
                return false;
            }
        }

        public function exclui() {
            try {

                // Passo 1 - Abre a conexao com Banco
                $con = $this->conexao->getConexao();
                
                // Passo 2 -  Inicia uma transação
                $con->beginTransaction();
                
                // Passo 3 -  Executa o SQL
                $comando = $con->prepare( "DELETE FROM CLIENTE WHERE COD_CLIENTE = :cod_cliente");
                
                $codigo = $this->cliente->getCod_cliente();
                  
                $comando->bindParam(':cod_cliente', $codigo , PDO::PARAM_INT);
               
                $comando->execute();

                // Passo 4 - Confirmacao a execucao
                $con->commit();
                return true;

            } catch(Exception $e) {
                // Cancela a execucao do SQL
                $con->rollBack();
                return false;
            }


        }

        public function lista() {
          try{
                // Passo 1 - Abre a conexao com Banco
                $con = $this->conexao->getConexao();

                // Passo 3 -  Executa o SQL
                //$comando = $con->prepare( "SELECT COD_CLIENTE AS CODIGO, NOME FROM CLIENTE WHERE COD_CLIENTE = :cod_cliente");
            
                $comando = $con->prepare( "SELECT COD_CLIENTE AS CODIGO, NOME, EMAIL, ENDERECO, CIDADE, SENHA FROM CLIENTE");

                //$codigo = $this->cliente->getCod_cliente();
                  
                //$comando->bindParam(':cod_cliente', $codigo , PDO::PARAM_INT);

                $comando->execute();

                $resultado = $comando->fetchAll();

                $html = <<<HTML
                   <div class="row bg-success cabecalho">
                      <div class="col-1 text-center">Código</div>
                      <div class="col-3">Nome</div>
                      <div class="col-3">Email</div>
                      <div class="col-2">Endereco</div>
                      <div class="col-2">Cidade</div>
                      <div class="col-2">Senha</div>
                   </div>
HTML;

                foreach ($resultado as $id=>$linha) {
                    $estilo = "";
                    if ($id%2 == 0) {
                        $estilo = "linha_par";
                    } else {
                        $estilo = "linha_impar";
                    }

                    $html .= <<<HTML
                      <div class="row $estilo">
                        <div class="col-1 text-center"> {$linha['CODIGO']} </div>
                        <div class="col-3"> {$linha['NOME']} </div>
                        <div class="col-2"> {$linha['EMAIL']} </div>
                        <div class="col-3"> {$linha['ENDERECO']} </div>
                        <div class="col-1"> {$linha['CIDADE']} </div>
                        <div class="col-1"> {$linha['SENHA']} </div>
                      </div>
HTML;
                }

                $html .= "</div>";

                echo $html;
          } catch (Exception $e) {
             return null;
          }
               
        }


   }

?>