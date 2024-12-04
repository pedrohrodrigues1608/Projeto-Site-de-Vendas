<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MercaStyle - Cadastro & Login</title>
  <link rel="stylesheet" href="./../Style/cadStyle.css">
</head>
<body>
  <div class="container">
    <div class="lado-esquerdo">
      <h1>Bem-vindo à MercaStyle!</h1>
      <p>O melhor lugar para encontrar estilo e conveniência.</p>
    </div>

    <div class="formulario-container" id="formulario-login">
      <h2>Login do Cliente</h2>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Senha" required>
      <button type="submit">Entrar</button>
      <button class="botao-voltar" onclick="window.location.href='./../Pages/home.php'">Voltar à Página Principal</button>
    </div>

    <div class="formulario-container escondido" id="formulario-cadastro">
      <h2>Cadastro de Cliente</h2>
      <input type="text" placeholder="Nome Completo" required>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Senha" required>
      <button type="submit">Registrar</button>
      <button class="botao-voltar" onclick="window.location.href='./../Pages/home.php'">Voltar à Página Principal</button>
    </div>

    <div class="alternar" id="botao-alternar">⇆</div>
  </div>
  <script>
    const formularioLogin = document.getElementById('formulario-login');
    const formularioCadastro = document.getElementById('formulario-cadastro');
    const botaoAlternar = document.getElementById('botao-alternar');

    botaoAlternar.addEventListener('click', () => {
      formularioLogin.classList.toggle('escondido');
      formularioCadastro.classList.toggle('escondido');
      botaoAlternar.classList.toggle('rodar');

      // Mudança de cor do fundo ao alternar as telas
      if (formularioLogin.classList.contains('escondido')) {
        document.body.style.background = "linear-gradient(135deg, #0A8A5F 50%, #F2F2F2 50%)"; /* Cor original */
      } else {
        document.body.style.background = "linear-gradient(135deg, #087650 50%, #F2F2F2 50%)"; /* Tom mais suave */
      }
    });
  </script>
</body>
</html>
