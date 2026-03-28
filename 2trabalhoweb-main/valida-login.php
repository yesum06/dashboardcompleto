 <?php
    // Dados Acesso
    $userMaster = "simoneramos@gmail.com";
    $passMaster = "123456";

    //recebendo via POST
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == $userMaster && $senha == $passMaster) {

      header("Location:dashboard.php");
    }
    else{
        header("Location:login.php?erro=1");
    }

    exit();
?>
