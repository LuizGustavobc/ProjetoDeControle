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
  <title>Login</title>
  <link rel="stylesheet" href="view/css/style.css">
</head>
<body class="login-page">
  <div class="login-container">
    <h1>Sítio Frutas - Controle</h1>
    <form action="view/home.php">
      <label for="usuario">Usuário</label>
      <input type="text" id="usuario" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" required>

      <label class="checkbox">
        <input type="checkbox"> Lembrar login
      </label>

      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>
