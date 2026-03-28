<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Postagens</title>
        <link rel="stylesheet" href="dash.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        

    </head>

<body>
   
   <div class="dashboard-container">
     
        <?php include 'menu.php'; ?>

        <main>
            <section class="container-form" id="cadastro-usuarios">
                <div class="form-group"> 
                    <h2><i class="fa-regular fa-note-sticky"></i> Nova Postagem</h2>
                    <p>Preencha os dados abaixo para registrar uma nova postagem.</p>
               

                    <form action="processa.php" method="POST">
                        <div class="form-group">
                            <label for="titulo">Digite o Titulo</label>
                            <input type="text" id="titulo" name="titulo" placeholder="Digite o Titulo da Sua Nova Postagem" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="texto">Texto</label>
                            <input type="text" id="texto" name="texto" placeholder="Digite Seu Texto" required>
                        </div>

                            <div class="form-group flex-1">
                                <label for="categoria"> Categorias</label>
                                <select id="categoria" name="categoria">
                                    <option value="1">Curiosidades</option>
                                    <option value="2">Mulheres em TI</option>
                                    <option value="3">Dicas</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-save"><i class="fa fa-floppy-disk"> </i> Finalizar Postagem</button>
                            <a href="postagens.php" class="btn-cancel">Cancelar</a>
                        </div>         
                 </form>
                </div>
            </section> 
        </main>
    </div>
        <?php include 'rodape.php'; ?>
</body>
</html>