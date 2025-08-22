<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página - Sítio Frutas</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <aside class="sidebar">
    <h2>🍊 Sítio Frutas</h2>
    <nav>
        <a href="home.php">🏠 Principal</a>
        <a href="report.php">📊 Relatórios</a>
        <a href="registration.php">📝 Cadastro</a>
        <a href="search.php">🔎 Pesquisa</a>
        <a href="../index.php">🚪 Sair</a>
    </nav>
  </aside>

    <main class="content">
      <h1>📝 Cadastro</h1>
      <form class="form">
        <label>Produto</label>
        <input type="text" placeholder="Ex: Maçã">

        <label>Colheita</label>
        <input type="text" placeholder="Ex: Março 2025">

        <label>Pagamento</label>
        <input type="number" placeholder="Valor em R$">

        <label>Gasto</label>
        <input type="number" placeholder="Valor em R$">

        <button type="submit">Salvar Cadastro</button>
      </form>
    </main>

    

</body>
</html>