<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="tabelas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">

        <?php include 'menu.php'; ?>

        <main>
            <div class="header-content">
                <div>
                    <h2>Gestão de Usuários</h2>
                    <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
                </div>

                <a href="cad-usuarios.php">
                    <i class="fa fa-user-plus"></i> Novo Usuário
                </a>
              </div>

             <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr> 
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.edu.br</td>
                            <td>Administrador</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>

                                <button type="button" class="btn-icon"><i class="fa-solid fa-trash"></i>
                                </button>

                                <button type="button" class="btn-icon">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td>Ana Souza</td>
                            <td>ana.souza@unifev.edu.br</td>
                            <td>Editor</td>
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
                            <td>Simone</td>
                            <td>simoneramos@gmail.com</td>
                            <td>Usuário</td>
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
      </main> 
  </div>
         

 <?php include 'rodape.php'; ?>

    </div>
</body>
</html>