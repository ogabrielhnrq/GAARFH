<?php

    if(isset($_POST['Login']) && !empty($_POST['senha']))
    {
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM cliente WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            header('location: login.php');
        }
        else
        {
            header('location: home.html'); 
        }
    }
?>