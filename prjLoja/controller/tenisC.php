<?php

  require_once('../model/tenisDAO.php');
  //require_once('../model/tenis.php');

  // Caso tenha clicado em Cadastrar
  if (isset($_POST['btnRegistrar'])) {
    $ten = new tenisDAO(new Tenis($_POST['txtNome'], $_POST['txtPreco']));
    
    echo (($ten->insere()==true) ? "Tênis inserido com sucesso" : "Erro ao inserir tênis");

  // Caso tenha clicado em Excluir
  } else if (isset($_POST['btnExcluir'])) {
    //rever metodo de esclusão
    $ten= new tenisDAO(new Tenis($_POST['txtNome'], null));

    echo (($ten->exclui()==true) ? "Tênis excluido com sucesso" : "Erro ao excluir tênis");

    //Caso tenha clicado em atualizar
  } else if (isset($_POST['btnAtualizar'])) {
    $ten = new tenisDAO(new Tenis($_POST['txtNome'], $_POST['txtPreco']));

    echo (($ten->atualiza()==true) ? "Tênis atualizado com sucesso" : "Erro ao atualizar tênis");
  }
?>