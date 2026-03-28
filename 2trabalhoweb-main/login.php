<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <main>
        <section class="container-form">
            <div class="form-group">
                <h2><i class="fa-solid fa-right-to-bracket"></i>Login</h2>
                <p>Faça login para acessar o sistema.</p>

                <form action="valida-login.php" method="POST">
                    <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Digite seu E-mail" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group flex-1">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" placeholder="Digite sua Senha" required>
                            </div> 
                             
                        </div>  
                        <div class="form-group">
                         <button type="submit" class="btn-save"><i class="fa fa-sign-in-alt"><a href="dashboard.php"></a> </i> Entrar</button>
                            <?php if (isset($_GET['erro'])):?>
                              <p class='error-alert'> Usuário ou Senha Incorretos!</p>
                           <?php endif; ?>  
                      </div>   
                         <div>
                             <a href="cad-usuarios.php" class="btn-login"></i>Sem Cadastro?Cadastrar-se</a>
                          </div>
                          
                    </div>
             </form>
            </div>
        </section>
    </main>   
</body>
</html>