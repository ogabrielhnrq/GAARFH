<?php

    require_once('../model/usuarioDAO.php');
    require_once('../model/usuario.php');

    $dao = new UsuarioDAO(new Usuario($_POST['txtEmail'], $_POST['Senha']));

    if ($dao->getAutenticado() == 1) {     
        session_start();
        $_SESSION['usuario'] = $_POST['txtEmail'];
        
        header("Location: ../view/home.php");
        //echo "Usuario autenticado " . $_SESSION['usuario'];
    } else {
        echo "Usuario ou senha incorretos";
    }

?>