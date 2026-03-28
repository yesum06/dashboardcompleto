<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="tabelas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="dashboard-container">
     <?php include 'menu.php'; ?>
     <main>
            <div class="header-content">
                <div>
                    <h2>Gestão de Postagens</h2>
                    <p>Visualize e gerencie o histórico de postagens.</p>
                </div>

                <a href="cad-post.php" class="btn-icon">
                    <i class="fa-regular fa-note-sticky"></i> Novo Post
                </a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Conteudo</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr> 
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Teste: Alan Turing X Ada Lovelace! Quem é Voce?</td>
                            <td>Teste de Personalidade</td>
                            <td> Testes</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Atriz de Old Hollywood e Inventora? Temos!Conheça Hendy Lammar, Criadora do WIFI!</td>
                            <td>Curiosiodades</td>
                            <td>Mulheres em TI</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td>Conheça a mulher que escreveu o código para ir a Lua,Margaret Hamilton!</td>
                            <td>Curiosidades</td>
                            <td> Mulheres em TI</td>
                            <td><span class="badge inativo">Inativo</span></td>
                            <td>
                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-trash"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody> 
                </table>      
            </div>
  
  </div>
          </main>

 <?php include 'rodape.php'; ?>

    </div>
</body>
</html>
</body>
</html>