<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>
  <?= include 'header.html'?>

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