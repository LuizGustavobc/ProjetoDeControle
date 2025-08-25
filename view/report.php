<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

?>
  <?= include 'header.html'?>

  
    <main class="content">
        <h1>📊 Relatórios</h1> 
        <hr style="margin-bottom: 20px;">
        <nav class="navbar-report">
            <input type="button" value="Relatório de Finanças" id="financa" onclick="navPage(id)"/>
            <input type="button" value="Relatório de Colheita" id="colheita" onclick="navPage(id)"/>
            <input type="button" value="Relatório de Produção" id="produto" onclick="navPage(id)"/>
        </nav>
        <section id="report">
            
        </section>
     </main>

    <script>
        var id = "colheita";
        
        navPage(id);
        
        function navPage(id){
            buttons = document.querySelectorAll('.navbar-report input[type="button"]');
            buttons.forEach(function(button){                
                button.style.border = 'none';
                button.style.borderRadius = '0';
                button.style.backgroundColor = 'whitesmoke';
            });
            
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