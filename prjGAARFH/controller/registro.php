<?php
  require_once('../model/conexao.php');
  require_once('../model/clienteDAO.php');
  require_once('../model/cliente.php');

if (isset($_POST['bntRegistrar'])){
    $cli = new clienteDAO(new Cliente(null, $_POST['txtNome'], $_POST['txtEmail'], $_POST['txtEndereco'], $_POST['txtCidade'], $_POST['txtSenha']));

    echo (($cli->insere()==true) ? "Cliente inserido com sucesso" : "Erro ao inserir cliente");

} else if (isset($_POST['bntExcluir'])) {
  $cli = new clienteDAO(new Cliente($_POST['txtCodigo'], null, null, null, null, null));

  echo (($cli->exclui()==true) ? "Cliente excluido com sucesso" : "Erro ao excluir cliente");

} else if (isset($_POST['bntAtualizar'])){
    $cli = new clienteDAO(new Cliente($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtEndereco'], $_POST['txtCidade'], $_POST['txtSenha']));

    echo (($cli->atualiza()==true) ? "Cliente atualizado com sucesso" : "Erro ao atualizar clinte");
}
?>