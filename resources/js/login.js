/* 
  JavaScript para:
  1) Trocar de seção (login, cadastro, redefinir senha)
  2) Validar e submeter o login
  3) Validar e submeter os formulários de cadastro e redefinição
*/

/* 1) FUNÇÃO PARA MOSTRAR A SEÇÃO DESEJADA */
function showSection(sectionId) {
    // Seleciona todas as seções e remove a classe "active"
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
      section.classList.remove('active');
    });
    
    // Após um pequeno atraso para efeito de transição, exibe a seção alvo
    setTimeout(() => {
      const targetSection = document.getElementById(sectionId);
      if (targetSection) {
        targetSection.classList.add('active');
      }
    }, 100);
  }
  
  /* 2) FUNÇÃO PARA VALIDAR E SUBMETER O LOGIN */
  function submitLogin() {
    const loginForm = document.getElementById('loginForm');
    if (!loginForm) return;
  
    let valid = true;
  
    const loginCpf = document.getElementById('loginCpf');
    const loginCpfError = document.getElementById('loginCpfError');
    if (!loginCpf.value.trim()) {
      loginCpfError.classList.add('show'); // Exibe o erro
      valid = false;
    } else {
      loginCpfError.classList.remove('show');
    }
  
    const loginSenha = document.getElementById('loginSenha');
    const loginSenhaError = document.getElementById('loginSenhaError');
    if (!loginSenha.value.trim()) {
      loginSenhaError.classList.add('show');
      valid = false;
    } else {
      loginSenhaError.classList.remove('show');
    }
  
    if (valid) {
      alert('Login bem-sucedido!');
      // Exemplo: redirecionar para outra página
      // window.location.href = "dashboard.html";
    }
  }
  
  /* 3) VALIDAÇÃO DO FORMULÁRIO DE CRIAR CONTA */
  const cadastroForm = document.getElementById('cadastroForm');
  if (cadastroForm) {
    cadastroForm.addEventListener('submit', function(e) {
      e.preventDefault();
      let valid = true;
  
      const nome = document.getElementById('nome');
      const nomeError = document.getElementById('nomeError');
      if (!nome.value.trim()) {
        nomeError.classList.add('show');
        valid = false;
      } else {
        nomeError.classList.remove('show');
      }
  
      const cpf = document.getElementById('cpf');
      const cpfError = document.getElementById('cpfError');
      if (!cpf.value.trim()) {
        cpfError.classList.add('show');
        valid = false;
      } else {
        cpfError.classList.remove('show');
      }
  
      const telefone = document.getElementById('telefone');
      const telefoneError = document.getElementById('telefoneError');
      if (!telefone.value.trim()) {
        telefoneError.classList.add('show');
        valid = false;
      } else {
        telefoneError.classList.remove('show');
      }
  
      const email = document.getElementById('email');
      const emailError = document.getElementById('emailError');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email.value.trim())) {
        emailError.classList.add('show');
        valid = false;
      } else {
        emailError.classList.remove('show');
      }
  
      const senha = document.getElementById('senha');
      const senhaError = document.getElementById('senhaError');
      if (!senha.value.trim()) {
        senhaError.classList.add('show');
        valid = false;
      } else {
        senhaError.classList.remove('show');
      }
  
      if (valid) {
        alert('Conta criada com sucesso!');
        // Retorna à tela de login
        showSection('loginSection');
      }
    });
  }
  
  /* 4) VALIDAÇÃO DO FORMULÁRIO DE REDEFINIR SENHA */
  const redefinirForm = document.getElementById('redefinirForm');
  if (redefinirForm) {
    redefinirForm.addEventListener('submit', function(e) {
      e.preventDefault();
      let valid = false;
  
      const resetEmail = document.getElementById('resetEmail');
      const resetEmailError = document.getElementById('resetEmailError');
      const resetTelefone = document.getElementById('resetTelefone');
      const resetTelefoneError = document.getElementById('resetTelefoneError');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
      if (resetEmail.value.trim() && emailRegex.test(resetEmail.value.trim())) {
        resetEmailError.classList.remove('show');
        valid = true;
      } else if (resetTelefone.value.trim()) {
        resetTelefoneError.classList.remove('show');
        valid = true;
      } else {
        resetEmailError.classList.add('show');
        resetTelefoneError.classList.add('show');
      }
  
      if (valid) {
        alert('Código enviado com sucesso!');
        // Retorna à tela de login
        showSection('loginSection');
      }
    });
  } 
  