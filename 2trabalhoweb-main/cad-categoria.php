<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Categorias</title>
        <link rel="stylesheet" href="dash.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        

    </head>

<body>
   
   <div class="dashboard-container"> 
        <?php include 'menu.php'; ?>

        <main>
            <section class="container-form" id="cadastro-usuarios">
                <div class="form-group"> 
                    <h2><i class="fa-solid fa-table-list"></i> Nova Categoria</h2>
                    <p>Preencha os dados abaixo para registrar uma nova categoria.</p>
               

                    <form action="processa.php" method="POST">
                        <div class="form-group">
                            <label for="categoria">Digite o Nome da Categoria</label>
                            <input type="text" id="categoria" name="categoria" placeholder="Digite Sua Nova Categoria" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn-save"><i class="fa fa-floppy-disk"> </i> Finalizar Cadastro de Nova Categoria</button>
                            <a href="categorias.php" class="btn-cancel">Cancelar</a>
                        </div>         
                 </form>
                </div>
            </section> 
        </main>
    </div>
        <?php include 'rodape.php'; ?>
</body>
</html>