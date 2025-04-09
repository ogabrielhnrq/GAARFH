<?php

  require_once('../model/clienteDAO.php');
  //require_once('../model/cliente.php');

  // Caso tenha clicado em Cadastrar
  if (isset($_POST['btnRegistrar'])) {
    $cli = new clienteDAO(new Cliente($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtEndereco'], $_POST['txtCidade'], $_POST['Senha']));
    
    echo (($cli->insere()==true) ? "Cliente inserido com sucesso" : "Erro ao inserir cliente");

  // Caso tenha clicado em Excluir
  } else if (isset($_POST['btnExcluir'])) {
    //rever metodo de esclusão
    $cli = new clienteDAO(new Cliente($_POST['txtNome'],null, null, null, null));

    echo (($cli->exclui()==true) ? "Cliente excluido com sucesso" : "Erro ao excluir cliente");

    //Caso tenha clicado em atualizar
  } else if (isset($_POST['btnAtualizar'])) {
    $cli = new clienteDAO(new Cliente($_POST['txtNome'],$_POST['txtEndereco'], $_POST['txtCidade'], $_POST['Senha']));

    echo (($cli->atualiza()==true) ? "Cliente atualizado com sucesso" : "Erro ao atualizar cliente");
  }
?>