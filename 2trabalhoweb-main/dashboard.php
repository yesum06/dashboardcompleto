<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
 <div class="dashboard-container">
   <?php include 'menu.php'; ?>
    <main>
       <section class="container-cards">
            <article>
               <h2>Módulo de Usuários</h2>
               <p>Gerencie os acessos e permissões do sistema nesta área.</p>
               <a href="usuarios.php" class="btn"> Acessar</a>
            </article>

            <article>
               <h2>Histórico de Postagens</h2>
               <p>Acompanhe as postagens feitas neste mês.</p>
               <a href="postagens.php" class="btn"> Acessar</a>
            </article>

            <article>
                  <h2>Configuração de Categorias</h2>
                  <p>Adicione novas categorias para seu site.</p>
                  <a href="categorias.php" class="btn"> Acessar</a>
            </article>   
         </section>
      </main>       
</div>
 <?php include 'rodape.php'; ?>
</body>
</html>

