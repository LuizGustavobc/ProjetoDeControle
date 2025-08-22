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
        <h1>🔎 Pesquisa</h1>
        <form class="form">
          <label>Pesquisar relatório</label>
          <input type="text" placeholder="Ex: Colheita Março">
          <button type="submit">Pesquisar</button>
        </form>

        <section class="results">
          <h2>Resultados</h2>
          <p>Nenhum relatório encontrado.</p>
        </section>
     </main>


</body>
</html>