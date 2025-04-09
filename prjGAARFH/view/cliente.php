<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/view/css/styles.css">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Para funcionar o Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.js" integrity="sha512-RTxmGPtGtFBja+6BCvELEfuUdzlPcgf5TZ7qOVRmDfI9fDdX2f1IwBq+ChiELfWt72WY34n0Ti1oo2Q3cWn+kw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    
    
    <script type="text/javascript" src="js/ajax_formulario.js"></script>
    
    <title>Aula 6</title>
</head>
<body>
    <div class="grade">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div>
            <?php 
                session_start();
                echo "<h5> Olá, " . $_SESSION['usuario'] . "</h5>"; 
            ?>
        </div>
        <div></div>
        <div class="area_form container">
            <div class="row">
                <!--Barra de titulo-->
                <div class="col-12 text-center titulo" >
                    CLIENTE
                </div>
            </div>
            <br>
            <form action="../controller/clienteC.php"  id="frmCliente" method="post">
            <div class="row">
                <!-- Código -->
                <div class="col-3">
                    <label for="txtCodigo">Código</label>
                    <br>
                    <input type="text" name="txtCodigo" class="caixa_texto" size="10" />
                </div>
            </div>
            <br>
            <div class="row">
                <!--Nome-->
                <div class="col-8">
                    <label for="txtNome">Nome</label>
                    <br>
                    <input type="text" name="txtNome" class="caixa_texto" size="30" />
                </div>

                <!-- Idade -->
                <div class="col-4">
                    <label for="cmbIdade">Idade</label>
                    <br>
                    <select name="cmbIdade" class="caixa_texto">
                        <option value="10" selected>10</option>
                        <option value="11" >11</option>
                        <option value="12" >12</option>
                        <option value="13" >13</option>
                        <option value="14" >14</option>
                        <option value="15" >15</option>
                        <option value="16" >16</option>
                        <option value="17" >17</option>
                        <option value="18" >18</option>
                        <option value="19" >19</option>
                        <option value="20" >20</option>
                        <option value="21" >21</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <!--Endereço-->
                <div class="col-8">
                    <label for="txtEndereco">Endereço</label>
                    <br>
                    <input type="text" name="txtEndereco" class="caixa_texto" size="40"/>
                </div>

                <!--Telefone-->
                <div class="col-4">
                    <label for="txtTelefone">Telefone</label>
                    <br>
                    <input type="text" name="txtTelefone" class="caixa_texto" size="12"/>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8 text-center resposta ">Teste</div>
                <div class="col-2"></div>
            </div>
            <hr>
            <div class="row">
                <!--Botões-->
                <div class="col-12 text-center">
                    <button class="btn btn-success" type="submit" name="btnCadastra" >Cadastrar</button>
                    <button class="btn btn-success" type="submit" name="btnAtualiza" >Atualizar</button>
                    <button class="btn btn-success" type="submit" name="btnExclui" >Excluir</button>
                    <button class="btn btn-success" type="reset" name="btnLimpa">Limpar</button>
                </div>
            </div>
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="area_lista">
        <?php 
                require_once('../model/clienteDAO.php'); 
                $dao = new ClienteDAO(new Cliente(null, null, null, null, null));
                $dao->lista();
        ?>
        
      
        <div></div>
        <div></div>
    </div>
    
</body>
</html>