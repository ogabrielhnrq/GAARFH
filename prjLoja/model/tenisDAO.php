<?php

   require_once('conexao.php');
   require_once('tenis.php');

   class TenisDAO {

        private Tenis $tenis;
        private Conexao $conexao;

        public function __construct($ptenis) {
            // Instanciando uma conexao com os parametros
            $this->conexao = new Conexao("gaarfh", "mysql","root", "", "localhost");
            $this->tenis = $ptenis; 
        }

        public function insere() {
            try {

                // Passo 1 - Abre a conexao com Banco
                $con = $this->conexao->getConexao();
                
                // Passo 2 -  Inicia uma transação
                $con->beginTransaction();
                
                // Passo 3 -  Executa o SQL
                $comando = $con->prepare( "INSERT INTO TENIS(NOME, PRECO) VALUES (:nome ,:preco)");
                
                $nome = $this->tenis->getNome_tenis();
                $preco = $this->tenis->getPreco();
                
                $comando->bindParam(':nome', $nome , PDO::PARAM_STR);
                $comando->bindParam(':preco', $preco, PDO::PARAM_STR);

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
                $comando = $con->prepare( "UPDATE TENIS SET NOME=:nome, PRECO=:preco WHERE COD_CLIENTE = :cod_tenis");
                
                $nome = $this->cliente->getNome_tenis();
                $preco = $this->cliente->getPreco();
                
                $comando->bindParam(':nome', $nome , PDO::PARAM_STR);
                $comando->bindParam(':preco', $email, PDO::PARAM_STR);

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
                $comando = $con->prepare( "DELETE FROM TENIS WHERE COD_TENIS = :cod_tenis");
                
                $codigo = $this->tenis->getCod_tenis();
                  
                $comando->bindParam(':cod_tenis', $codigo , PDO::PARAM_INT);
               
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
            
                $comando = $con->prepare( "SELECT * FROM TENIS ORDER BY id DESC");

                $comando->execute();

                $resultado = $comando->fetchAll();

                $html = <<<HTML
                   <div class="row cabecalho">
                      <div class="col-1 text-center">Código</div>
                      <div class="col-3">Nome</div>
                      <div class="col-3">Preço</div>

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
                        <div class="col-1 text-center"> {$linha['id']} </div>
                        <div class="col-3 text-center"> {$linha['NOME']} </div>
                        <div class="col-2 text-center"> {$linha['PRECO']} </div>
                        <a href="carrinho.php" class="produto-btn">Comprar</a>
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