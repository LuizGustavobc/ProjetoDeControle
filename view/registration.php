<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>
  <?= include 'header.html'?>

    <main class="content">
        <h1>📝 Cadastro</h1>
        <hr style="margin-bottom: 20px;">
        <nav class="navbar-regist">
            <input type="button" value="Colheita" id="colheita" onclick="nav(0)"/>
            <input type="button" value="Produto" id="produto" onclick="nav(1)"/>
            <input type="button" value="Pagamento" id="pagamento" onclick="nav(2)"/>
            <input type="button" value="Gasto" id="gasto" onclick="nav(3)"/>
        </nav>
        <form class="form" id="form">
          
        </form> 
    </main>

    <script>
        let id;
        let form; 
        
        form = document.getElementById("form");
        id = "produto";
        nav();
        
        function nav(navPage) {
            var botoes = document.querySelectorAll('.navbar-regist input[type="button"]');

            botoes.forEach(function(botao) {
                botao.style.border = 'none';
                botao.style.borderRadius = 'none';
                botao.style.backgroundColor = 'whitesmoke';
            });

            if (navPage === 2) {
                id = "pagamento";
                form.innerHTML = `
                    <label>Nome do cliente</label><input type="text" placeholder="Nome cliente">
                    <label>Data</label><input type="date" placeholder="Data Pagamento">
                    <label>Produto</label><input type="text" placeholder="Produto comprado">
                    <label>Quantidade</label><input type="text" placeholder="Quantidade comprado">
                    <button type="submit">Salvar Gasto</button>
                `;
            } else if (navPage === 3) {
                id = "gasto";
                form.innerHTML = `
                    <label>Nome</label><input type="text" placeholder="Nome gasto ">
                    <label>Data</label><input type="date" placeholder="Data Pagamento">
                    <label>Tipo de gasto</label><input type="text" placeholder="Com o que foi gasto">
                    <button type="submit">Salvar Gasto</button>
                `;
            } else if (navPage === 0) {
                id = "colheita";
                form.innerHTML = `
                    <label>Nome</label><input type="text" placeholder="Nome colheita">
                    <label>Data de Inicio</label><input type="date" placeholder="Data Inicio">
                    <label>Produto da colheita</label><input type="text" placeholder="Produto">
                    <button type="submit">Salvar Colheita</button>
                `;
            } else{
                id = "produto";
                form.innerHTML = `
                    <label>Produto</label><input type="text" placeholder="Ex: Maçã">
                    <label>Colheita</label><input type="text" placeholder="Ex: Março 2025">
                    <label>Pagamento</label><input type="number" placeholder="Valor em R$">
                    <label>Gasto</label><input type="number" placeholder="Valor em R$">
                    <button type="submit">Salvar Cadastro</button>
                `;

            }
                document.getElementById(id).style.borderLeft = '1px solid black';
                document.getElementById(id).style.borderRight = '1px solid black';
                document.getElementById(id).style.borderTop = '1px solid black';
                document.getElementById(id).style.borderTopLeftRadius = '6px';
                document.getElementById(id).style.borderTopRightRadius = '6px';
                document.getElementById(id).style.borderBottomLeftRadius = '1px';
                document.getElementById(id).style.borderBottomRightRadius = '1px';
                
                document.getElementById(id).style.backgroundColor = 'white ';
                
        }
    </script>

</body>
</html>