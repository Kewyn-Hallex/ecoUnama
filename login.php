<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Login and Registration Form</title>
  <link rel="stylesheet" href="styles/login.css">
</head>
<body>
  <div class="container">
    <!-- Title section -->
    <div class="title" id="form-title">Login</div>
    <div class="content" id="form-content">
      <!-- Login form -->
      <form action="#" id="login-form">
        <div class="user-details">
          <!-- Input for Username -->
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="text" placeholder="Insira seu email" required>
          </div>
          <!-- Input for Password -->
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" placeholder="Insira sua senha" required>
          </div>
        </div>
        <!-- Submit button -->
        <div class="button">
          <input type="submit" value="Login">
        </div>
        <div class="button-register">
          <input type="button" value="Cadastrar-se" id="go-to-register">
        </div>
      </form>

      <!-- Registration form (initially hidden) -->
      <form action="#" id="register-form" style="display: none;">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nome</span>
            <input type="text" placeholder="Insira seu nome" required>
          </div>
          <div class="input-box">
            <span class="details">Sobrenome</span>
            <input type="text" placeholder="Insira seu sobrenome" required>
          </div>
          <div class="input-box">
            <span class="details">E-mail</span>
            <input type="text" placeholder="Insira seu email" required>
          </div>
          <div class="input-box">
            <span class="details">Matricula</span>
            <input type="text" placeholder="Insira sua matricula" required>
          </div>
          <div class="input-box">
            <span class="details">Senha</span>
            <input type="password" placeholder="Insira sua senha" required>
          </div>
          <div class="input-box">
            <span class="details">Confirmar Senha</span>
            <input type="password" placeholder="Confirme sua senha" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Cadastrar">
        </div>
        <div class="button-login">
          <input type="button" value="Já tem conta? Login" id="go-to-login">
        </div>
      </form>
    </div>
  </div>

  <script src="scripts/login.js"></script>
</body>
</html>
