<?php 
	session_start();

	// Inicializa a sessão 'tarefas' se não estiver definida
	if (!isset($_SESSION['tarefas'])){
		$_SESSION['tarefas'] = [];
	}

	// Inicializa a sessão 'contacts' se não estiver definida
	if (!isset($_SESSION['contacts'])) {
		$_SESSION['contacts'] = [];
	}

	$tarefas = $_SESSION['tarefas'];
	$contacts = $_SESSION['contacts'];
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h6><span>Tarefas</span><span>Contatos</span></h6>
            <div class="card-3d-wrap">
                <div class="card-3d-wrapper">
                    <div class="card-front">
						<header class="header-conteudo">
							<div class="container-index-header">
								<h1>Gerenciador de Tarefas</h1>
							</div>
						</header>
						<section class="container-conteudo">
							<div class="container-index-main">
								<div class="container-index-adicionar"><a href="Tarefas/adicionar.php"><button>Adicionar Tarefas</button></a></div>
								<div class="container-index-tabela">
									<table>
										<thead>
											<tr>
												<th>Funcionario</th>
												<th>Telefone</th>
												<th>Tarefa</th>  
												<th>Concluída</th>                      
												<th>Ações</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($tarefas as $id => $tarefa): ?>
											<tr>
												<td><?= htmlspecialchars($tarefa['nome']) ?></td>
												<td><?= htmlspecialchars($tarefa['phone']) ?></td>
												<td><?= htmlspecialchars($tarefa['tarefa']) ?></td>
												<td><?= htmlspecialchars($tarefa['concluida']) ?></td>
												<td>
													<a href="Tarefas/visualizar.php?id=<?= $id ?>"><button><i class="fas fa-eye"></i></button></a>
													<a href="Tarefas/editar.php?id=<?= $id ?>"><button><i class="fas fa-pencil-alt"></i></button></a>
													<a href="Tarefas/deletar.php?id=<?= $id ?>" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')"><button><i class="fas fa-trash-alt"></i></button></a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>
                    <div class="card-back">
						<header class="header-conteudo">
							<div class="container-index-header">
								<h1>Gerenciador de contatos</h1>
							</div>
						</header>
						<section class="container-conteudo">
							<div class="container-index-main">
								<div class="container-index-adicionar"><a href="Contatos/adicionar.php"><button>Adicionar Contatos</button></a></div>
								<div class="container-index-tabela">
									<table>
										<thead>
											<tr>
												<th>Nome</th>
												<th>Sobrenome</th>
												<th>Telefone</th>
												<th>Ações</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($contacts as $id => $contact): ?>
											<tr>
												<td><?= htmlspecialchars($contact['nome']) ?></td>
												<td><?= htmlspecialchars($contact['sobrenome']) ?></td>
												<td><?= htmlspecialchars($contact['phone']) ?></td>
												<td>
													<a href="Contatos/editar.php?id=<?= $id ?>"><button>Editar</button></a>
													<a href="Contatos/deletar.php?id=<?= $id ?>" onclick="return confirm('Tem certeza que deseja excluir este contato?')"><button>Excluir</button></a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
