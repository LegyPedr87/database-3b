<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>3 paginas</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- 
  Página com três seções: 
  1) loginSection (página inicial com CPF, senha, link para redefinir senha, botões de Entrar e Criar Conta) 
  2) cadastroSection (formulário de criar conta) 
  3) redefinirSection (formulário de redefinir senha)
-->

<!-- Seção Principal (Login) -->
<section id="loginSection" class="section active">
  <div class="container">
    <h1 class="main-title">BEM-VINDO </h1>
    <h1 class="title-2">Faça login para entrar</h1>
    <!-- Formulário de Login -->
    <form id="loginForm" class="login-form" novalidate>
      <!-- Campo CPF -->
      <div class="form-group">
        <label for="loginCpf">CPF</label>
        <input type="text" id="loginCpf" name="loginCpf" placeholder="Digite seu CPF" required />
        <!-- Mensagem de erro, inicialmente oculta -->
        <span id="loginCpfError" class="error-inline">CPF é obrigatório</span>
      </div>

      <!-- Campo Senha -->
      <div class="form-group">
        <label for="loginSenha">Senha</label>
        <input type="password" id="loginSenha" name="loginSenha" placeholder="Digite sua senha" required />
        <!-- Mensagem de erro, inicialmente oculta -->
        <span id="loginSenhaError" class="error-inline">Senha é obrigatória</span>
      </div>

      <!-- Link para Redefinir Senha (abaixo do campo de senha) -->
      <div class="link-redefinir">
        <a href="#" onclick="showSection('redefinirSection')">Esqueceu sua senha?</a>
      </div>
    </form>

    <!-- Botões de ação na tela inicial -->
    <div class="buttons-row">
      <!-- Botão Entrar -->
      <button class="btn-login" onclick="submitLogin()">Entrar</button>
      <!-- Botão Criar Conta -->
      <button class="btn-create" onclick="showSection('cadastroSection')">Criar Conta</button>
    </div>
  </div>
</section>

<!-- Seção de Cadastro (Criar Conta) -->
<section id="cadastroSection" class="section">
  <div class="container">
    <h1>Criar Conta</h1>
    <form id="cadastroForm" novalidate>
      <!-- Campo Nome -->
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required />
        <span id="nomeError" class="error-inline">Nome é obrigatório</span>
      </div>

      <!-- Campo CPF -->
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required />
        <span id="cpfError" class="error-inline">CPF é obrigatório</span>
      </div>

      <!-- Campo Telefone -->
      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required />
        <span id="telefoneError" class="error-inline">Telefone é obrigatório</span>
      </div>

      <!-- Campo Email -->
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required />
        <span id="emailError" class="error-inline">Email inválido</span>
      </div>

      <!-- Campo Senha -->
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required />
        <span id="senhaError" class="error-inline">Senha é obrigatória</span>
      </div>

      <!-- Botão maior e centralizado para criar conta -->
      <div class="center-btn">
        <button type="submit" class="btn-submit-cadastro">Criar Conta</button>
      </div>
    </form>

    <!-- Link para voltar ao início -->
    <div class="link-voltar">
      <a href="#" onclick="showSection('loginSection')">Voltar para Início</a>
    </div>
  </div>
</section>

<!-- Seção de Redefinição de Senha -->
<section id="redefinirSection" class="section">
  <div class="container">
    <h1>Redefinir Senha</h1>
    <form id="redefinirForm" novalidate>
      <p>Informe seu email ou telefone para receber um código de verificação.</p>

      <!-- Campo Email -->
      <div class="form-group">
        <label for="resetEmail">Email</label>
        <input type="email" id="resetEmail" name="resetEmail" placeholder="Digite seu email" />
        <span id="resetEmailError" class="error-inline">Email inválido</span>
      </div>

      <!-- Campo Telefone -->
      <div class="form-group">
        <label for="resetTelefone">Telefone</label>
        <input type="tel" id="resetTelefone" name="resetTelefone" placeholder="Digite seu telefone" />
        <span id="resetTelefoneError" class="error-inline">Informe email ou telefone</span>
      </div>

      <!-- Botão estilizado para enviar código -->
      <div class="center-btn">
        <button type="submit" class="btn-submit-redefinir">Enviar Código</button>
      </div>
    </form>

    <!-- Link para voltar ao início -->
    <div class="link-voltar">
      <a href="#" onclick="showSection('loginSection')">Voltar para Início</a>
    </div>
  </div>
</section>
<!-- partial -->
  <script  src="js/login.js"></script>

</body>
</html>






<style>
/* === 1) CONFIGURAÇÕES GERAIS DE CORES, FONTES E TRANSIÇÕES === */
:root {
  --primary-color: #4da6ff;        /* Azul principal */
  --secondary-color: #ffffff;      /* Branco */
  --text-color: #333;              /* Texto escuro */
  --error-color: #ff4d4d;           /* Vermelho para erros */
  --transition-time: 0.3s;         /* Tempo de transição */
}

* {
  box-sizing: border-box;
}

/* Pseudo-elemento para a imagem de fundo com overlay */
body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /* Combinação do overlay azul claro com a imagem de fundo */
  background: 
    linear-gradient(rgba(77,166,255,0.4), rgba(77,166,255,0.4)),
    url('https://assets.bizcapital.com.br/staging-blog/new/20221104104827/221005-imagens-outubro-gestao-financeira.jpg');
  background-size: cover;
  background-position: center;
  z-index: -1;
  /* Animação suave para deixar o fundo interativo */
  animation: backgroundMove 30s ease-in-out infinite;
}

/* Animação para dar um movimento sutil ao fundo */
@keyframes backgroundMove {
  0% {
    transform: scale(1) translate(0, 0);
  }
  50% {
    transform: scale(1.05) translate(10px, 10px);
  }
  100% {
    transform: scale(1) translate(0, 0);
  }
}


/* === 2) SEÇÕES E CONTAINERS === */
/* Cada seção inicia oculta e com animação para aparecer */
.section {
  display: none;
  opacity: 0;
  transform: translateX(50px);
  transition: opacity var(--transition-time) ease, transform var(--transition-time) ease;
  padding: 2rem;
}

.section.active {
  display: block;
  opacity: 1;
  transform: translateX(0);
}

/* Container centralizado para cada seção */
.container {
  background-color: var(--secondary-color); /* Fundo branco */
  max-width: 450px;
  margin: 3rem auto;
  padding: 2rem;
  border-radius: 8px;
  color: var(--text-color);
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  position: relative;
}

/* Título principal */
.main-title {
  font-family: 'Montserrat', sans-serif;
  font-size: 2.2rem;
  color: var(--text-color);
  letter-spacing: 1px;
  text-align: center;
  color: var(--primary-color);
}

/* Titulo Secundario*/
.title-2 {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  text-align: center;
  color: var(--text-color);
}

/* === 3) INPUTS, LABELS E ERROS === */
.form-group {
  margin-bottom: 1rem;
  position: relative; /* Para posicionamento de erros */
}

label {
  display: block;
  margin-bottom: 0.3rem;
  font-weight: bold;
  color: var(--text-color);
}

/* Inputs */
input[type="text"],
input[type="email"],
input[type="password"],
input[type="tel"] {
  width: 100%;
  padding: 0.7rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  transition: border-color var(--transition-time), color var(--transition-time);
}

/* Efeito de foco nos inputs */
input:focus {
  border-color: var(--primary-color);
  color: var(--primary-color);
  outline: none;
}

/* Erros: agora com fonte menor e centralizados dentro do grupo */
.error-inline {
  display: none; /* Inicialmente oculto */
  font-size: 0.75rem;
  color: var(--error-color);
  position: absolute;
  right: 0.5rem;
  top: 50%;
  transform: translateY(-50%);
}

/* Classe para exibir o erro */
.error-inline.show {
  display: block;
}

/* === 4) BOTÕES E LINKS === */
/* Linha com os botões de login e criar conta */
.buttons-row {
  display: flex;
  justify-content: space-around;
  margin-top: 1.5rem;
}

/* Botão Entrar: estado normal com borda transparente */
.btn-login {
  background-color: var(--primary-color);
  color: var(--secondary-color);
  border: 2px solid transparent; /* borda fixa mas invisível */
  padding: 0.7rem 1.2rem;
  border-radius: 4px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color var(--transition-time), border var(--transition-time), color var(--transition-time);
}

/* Botão Entrar Hover: muda fundo para branco, borda azul, texto azul */
.btn-login:hover {
  background-color: var(--secondary-color);
  border-color: var(--primary-color);
  color: var(--primary-color);
}

/* Botão Criar Conta: estado normal com borda azul */
.btn-create {
  background-color: var(--secondary-color);
  color: var(--primary-color);
  border: 2px solid var(--primary-color);
  padding: 0.7rem 1.2rem;
  border-radius: 4px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color var(--transition-time), border var(--transition-time), color var(--transition-time);
}

/* Botão Criar Conta Hover: muda fundo para azul, borda transparente, texto branco */
.btn-create:hover {
  background-color: var(--primary-color);
  border-color: transparent;
  color: var(--secondary-color);
}

/* Botão de envio em Criar Conta (maior e centralizado) */
.center-btn {
  text-align: center;
  margin-top: 1.5rem;
}

.btn-submit-cadastro,
.btn-submit-redefinir {
  background-color: var(--primary-color);
  color: var(--secondary-color);
  border: none;
  padding: 0.9rem 2rem;
  border-radius: 4px;
  font-size: 1rem;
  font-weight: bold;
  cursor: pointer;
  transition: background-color var(--transition-time);
  width: 100%;
}

.btn-submit-cadastro:hover,
.btn-submit-redefinir:hover {
  background-color: #3399ff;
}

/* Links para redefinir/voltar */
.link-redefinir,
.link-voltar {
  margin-top: 1rem;
  text-align: left;
}

.link-redefinir a,
.link-voltar a {
  color: var(--primary-color);
  text-decoration: none;
  font-size: 0.95rem;
  transition: color var(--transition-time);
}

.link-redefinir a:hover,
.link-voltar a:hover {
  color: #3399ff;
  text-decoration: underline;
}

/* === 5) RESPONSIVIDADE === */
@media (max-width: 480px) {
  .container {
    margin: 1rem;
    padding: 1rem;
  }
  .buttons-row {
    flex-direction: column;
    gap: 1rem;
  }
}


