<?php 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.8, user-scalable=no">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('/assets/style/vars.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/assets/style/style-login-register.css') ?>">
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
  <title>Login | Registro</title>
  
  <!-- Estilos adicionais para o botão Google -->
  <style>
    /* Estilos para o botão do Google */
    .google-login-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 300px;
        margin: 20px auto;
        padding: 12px 24px;
        background: white;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-family: 'Merriweather', serif;
        font-size: 16px;
        font-weight: 600;
        color: #757575;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .google-login-btn:hover {
        background: #f8f9fa;
        border-color: #dadce0;
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        transform: translateY(-1px);
    }

    .google-login-btn:active {
        transform: translateY(0);
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .google-logo {
        width: 20px;
        height: 20px;
        margin-right: 12px;
    }

    .login-divider {
        display: flex;
        align-items: center;
        text-align: center;
        margin: 20px 0;
        color: #757575;
        font-size: 14px;
    }

    .login-divider::before,
    .login-divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #e0e0e0;
    }

    .login-divider span {
        padding: 0 15px;
    }
  </style>
</head>
<body>
  <div class="gerenciar-login-registro">
    <div class="top-bar">
      <div class="title"><a href="<?= site_url('/') ?>">Caminho da Memória</a></div>
      <div class="navigation">
        <div class="tab4"><a href="<?= base_url('loginregister') ?>">Registrar-se/Entrar</a></div>
        <div class="tab"><a href="<?= base_url('gerenciarusers') ?>">Gerenciamento</a></div>
        <div class="tab4"><a href="<?= base_url('perfil') ?>">Perfil</a></div>
        <div class="tab3"><a href="<?= base_url('memorias') ?>">Memórias</a></div>
        <div class="tab2"><a href="<?= base_url('exercicio') ?>">Exercícios</a></div>
      </div>
    </div>
    <img class="logoo-removebg-preview-3" src="<?= base_url('/assets/img/logoo-removebg-preview-30.png') ?>" alt="Logo" />
    <div class="section">
      <div class="container">
        <div class="title2" id="texto">Bem-vindo(a) de volta Usuário</div>
        <div class="description">
          Administre cuidadores e familiares de forma eficiente no sistema.
        </div>
      </div>
      <img class="vector-200" src="<?= base_url('/vectors/vector-2000.svg') ?>"/>
      <div class="tab-group">
        <div class="tab5">
          <button class="title3" id="login">Login</button>
        </div>
        <div class="tab5">
          <button class="title3" id="registro">Registro</button>
        </div>
      </div>
    </div>
    <img class="section2" src="<?= base_url('/vectors/vector-2000.svg') ?>"/>
    <div class="section3">
      <div class="container2">
        <div class="title4">2025 Caminho da Memória</div>
        <!-- Link Política de Privacidade -->
        <div class="title5">
          <a href="#" onclick="openModalPoliticaPrivacidade(event)">Política de Privacidade</a>
        </div>
        <!-- Modal Política de Privacidade -->
        <div id="modalPoliticaPrivacidade" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModalPoliticaPrivacidade()">&times;</span>
            <h2>Política de Privacidade</h2>
            <p>
              A Caminho da Memória é comprometida em proteger a privacidade e a segurança dos dados dos nossos usuários. Esta política de privacidade descreve como coletamos, usamos e protegemos as informações pessoais dos nossos usuários.
            </p>
            <h3>Coleta de Dados</h3>
            <p>
              Coletamos informações pessoais dos nossos usuários quando eles se registram no nosso site ou aplicativo, incluindo nome, e-mail e senha. Também coletamos informações sobre o uso do nosso site e aplicativo, incluindo dados de navegação e interações com o conteúdo.
            </p>
            <h3>Uso de Dados</h3>
            <p>
              Usamos as informações coletadas para fornecer e melhorar os nossos serviços, incluindo a personalização do conteúdo e a comunicação com os nossos usuários. Tambemos usamos as informações para fins de marketing e publicidade.
            </p>
            <h3>Proteção de Dados</h3>
            <p>
              Tomamos medidas para proteger as informações pessoais dos nossos usuários, incluindo a criptografia de dados e a implementação de medidas de segurança para prevenir o acesso não autorizado.
            </p>
            <h3>Direitos dos Usuários</h3>
            <p>
              Os nossos usuários têm o direito de acessar, corrigir e excluir as suas informações pessoais. Eles também têm o direito de se opor ao uso das suas informações para fins de marketing e publicidade.
            </p>
            <h3>Alterações à Política de Privacidade</h3>
            <p>
              Podemos alterar esta política de privacidade a qualquer momento. Se fizermos alterações significativas, notificaremos os nossos usuários por e-mail ou por meio de um aviso no nosso site ou aplicativo.
            </p>
          </div>
        </div>
        <div class="title6">
          <a href="#" onclick="openModal(event)">Termos de Uso</a>
        </div>
        <!-- Modal Termos de Uso -->
        <div id="termsModal" class="modal">
          <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h1>Termos de Uso</h1>
            <p>Bem-vindo ao sistema Caminho da Memória. Ao utilizar nosso sistema, você concorda com os seguintes termos:</p>
            
            <h2>1. Introdução</h2>
            <p>O sistema Caminho da Memória foi desenvolvido para oferecer suporte prático e acessível para pessoas que enfrentam desafios relacionados à memória. É importante que você leia e compreenda estes termos antes de utilizar o sistema.</p>
            
            <h2>2. Uso do Sistema</h2>
            <p>Você concorda em usar o sistema apenas para fins legais e de acordo com as diretrizes estabelecidas. É proibido:</p>
            <ul>
                <li>Utilizar o sistema para fins fraudulentos ou ilegais.</li>
                <li>Interferir no funcionamento do sistema ou tentar acessá-lo de forma não autorizada.</li>
                <li>Compartilhar suas credenciais de acesso com terceiros.</li>
            </ul>
            
            <h2>3. Relatos de Bugs</h2>
            <p>Se você encontrar algum bug ou problema técnico, por favor, relate-o através do nosso canal de suporte. Inclua as seguintes informações no seu relato:</p>
            <ul>
                <li>Descrição do problema.</li>
                <li>Passos para reproduzir o erro.</li>
                <li>Capturas de tela, se possível.</li>
            </ul>
            <p>Seu feedback é valioso para melhorar a experiência do usuário.</p>
            
            <h2>4. Privacidade e Segurança</h2>
            <p>Estamos comprometidos em proteger a privacidade e a segurança dos dados dos nossos usuários. As informações pessoais coletadas são tratadas de acordo com nossa Política de Privacidade.</p>
            
            <h2>5. Alterações aos Termos</h2>
            <p>Reservamo-nos o direito de alterar estes termos a qualquer momento. As alterações serão publicadas nesta página e entrarão em vigor imediatamente. Recomendamos que você revise os termos periodicamente.</p>
            
            <h2>6. Contato</h2>
            <p>Para mais informações ou dúvidas sobre os termos de uso, entre em contato conosco através do nosso e-mail de suporte: suporte@caminhodamemoria.com.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Formulário de Login -->
    <div class="form" id="form-login">
      <div class="container3">
        <div class="title7">Área de Login</div>
      </div>
      <div class="list">
        <div class="row">
          <div class="input">
            <div class="title8">E-mail</div>
            <div class="textfield">
              <input type="text" id="user-input" class="inpute" placeholder="Digite seu e-mail">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">Senha</div>
            <div class="textfield">
              <input type="password" id="user-senha" class="senha" placeholder="Digite sua senha">
            </div>
          </div>
        </div>
        <div class="button">
          <div class="seconday">
            <button type="button" class="title9" onclick="openForgotPasswordModal()">Esqueceu sua senha?</button>
          </div>
          <div class="primary">
            <button type="button" class="title10" id="login-button">Entrar</button>
          </div>
        </div>
        <!-- Botão de Login com Google -->
        <button type="button" class="google-login-btn" onclick="loginWithGoogle()">
          <svg class="google-logo" viewBox="0 0 24 24" width="24" height="24">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
          </svg>
          Entrar com Google
        </button>
      </div>
    </div>
<!-- Modal Esqueceu Senha -->
<div id="forgot-password-modal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeForgotPasswordModal()">&times;</span>
    <h2>Recuperar Senha</h2>
    <p>Digite seu e-mail para receber um link de recuperação de senha:</p>
    
    <form id="forgot-password-form" onsubmit="handleForgotPassword(event)">
      <div class="input-modal">
        <div class="title8">E-mail</div>
        <div class="textfield">
          <input type="email" id="recovery-email" class="inpute" placeholder="seu@email.com" required>
        </div>
      </div>
      
      <div class="modal-buttons">
        <button type="button" class="secondary-btn" onclick="closeForgotPasswordModal()">Cancelar</button>
        <button type="submit" class="primary-btn">Enviar Link</button>
      </div>
    </form>
    
    <div id="recovery-message" class="recovery-message"></div>
  </div>
</div>
    <!-- Formulário de Registro -->
    <div class="form2" id="form-register">
      <div class="container3">
        <div class="title7">Área de Registro</div>
      </div>
      <div class="list">
        <div class="row">
          <div class="input">
            <div class="title8">Nome Completo</div>
            <div class="textfield">
              <input type="text" id="nome-completo" class="nome-completo" placeholder="Digite seu nome completo">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">E-mail</div>
            <div class="textfield">
              <input type="email" id="email-registro" class="registro-user" placeholder="Digite seu e-mail">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">Senha</div>
            <div class="textfield">
              <input type="password" id="senha-registro" class="registro-senha" placeholder="Crie sua senha">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="input">
            <div class="title8">Confirmação de Senha</div>
            <div class="textfield">
              <input type="password" id="confirme-senha" class="confirme-senha" placeholder="Confirme sua senha">
            </div>
          </div>
        </div>
        <div class="button2">
          <button type="button" class="primary2" id="register-button">Registrar</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal de Carregamento -->
  <div id="loading-modal" class="modal">
    <div class="modal-loading">
      <img src="<?= base_url('/gif/Iphone-spinner-2.gif') ?>" alt="Carregando..." class="loading-gif">
      <p>Carregando, por favor aguarde...</p>
    </div>
  </div>

  <!-- Modal de Sucesso -->
  <div id="success-modal" class="modal">
    <div class="modal-loading">
      <img src="<?= base_url('/gif/check.gif') ?>" alt="Sucesso!" class="loading-gif">
      <p>Registro realizado com sucesso!</p>
    </div>
  </div>

  <script>
  // Função para login com Google
  function loginWithGoogle() {
      // Mostrar modal de carregamento
      document.getElementById('loading-modal').style.display = 'flex';
      
      // Simular processo de login (substitua pela integração real com Google OAuth)
      setTimeout(() => {
          document.getElementById('loading-modal').style.display = 'none';
          alert('Login com Google em desenvolvimento!');
          // Aqui você integraria com a API do Google
          // window.location.href = '<?= base_url('/views/dashboard.php') ?>';
      }, 2000);
  }

  // Versão simplificada e otimizada da animação de texto
  function mudarTexto() {
      const elementoTexto = document.getElementById('texto');
      if (!elementoTexto) return;

      const palavraAntiga = "Usuário";
      const palavrasNovas = ["Familiares", "Cuidadores"];
      const textoBase = "Bem-vindo(a) de volta ";
      let palavraIndex = 0;

      function animarTexto(palavraAtual, palavraNova, callback) {
          // Fase 1: Apagar palavra atual
          let index = palavraAtual.length;
          
          function apagar() {
              if (index >= 0) {
                  elementoTexto.textContent = textoBase + palavraAtual.substring(0, index);
                  index--;
                  setTimeout(apagar, 100);
              } else {
                  // Fase 2: Digitar nova palavra
                  let novoIndex = 0;
                  function digitar() {
                      if (novoIndex <= palavraNova.length) {
                          elementoTexto.textContent = textoBase + palavraNova.substring(0, novoIndex);
                          novoIndex++;
                          setTimeout(digitar, 100);
                      } else {
                          setTimeout(callback, 2000);
                      }
                  }
                  setTimeout(digitar, 500);
              }
          }
          apagar();
      }

      function cicloAnimacao() {
          const palavraAtual = palavraIndex === 0 ? palavraAntiga : palavrasNovas[palavraIndex - 1];
          const proximaPalavra = palavrasNovas[palavraIndex];
          
          animarTexto(palavraAtual, proximaPalavra, () => {
              palavraIndex = (palavraIndex + 1) % palavrasNovas.length;
              
              // Se completou o ciclo, voltar para "Usuário"
              if (palavraIndex === 0) {
                  setTimeout(() => {
                      animarTexto(palavrasNovas[palavrasNovas.length - 1], palavraAntiga, () => {
                          // Reiniciar o ciclo após 5 segundos
                          setTimeout(cicloAnimacao, 5000);
                      });
                  }, 1000);
              } else {
                  cicloAnimacao();
              }
          });
      }

      // Iniciar a primeira animação após 5 segundos
      setTimeout(cicloAnimacao, 5000);
  }

  // Iniciar quando a página carregar
  document.addEventListener('DOMContentLoaded', mudarTexto);

  // Obtendo referências aos elementos
  const loginForm = document.getElementById("form-login");
  const registerForm = document.getElementById("form-register");
  const showLogin = document.getElementById("login");
  const showRegister = document.getElementById("registro");

  // Função para mostrar o login e esconder o registro
  showLogin.addEventListener("click", () => {
    loginForm.classList.add("active");
    loginForm.classList.remove("inactive");
    registerForm.classList.remove("active");
    registerForm.classList.add("inactive");
  });

  // Função para mostrar o registro e esconder o login
  showRegister.addEventListener("click", () => {
    registerForm.classList.add("active");
    registerForm.classList.remove("inactive");
    loginForm.classList.remove("active");
    loginForm.classList.add("inactive");
  });

  // Função para abrir o modal
  function openModal(event) {
    event.preventDefault();
    var modal = document.getElementById("termsModal");
    modal.style.display = "block";
  }

  // Função para fechar o modal
  function closeModal() {
    var modal = document.getElementById("termsModal");
    modal.style.display = "none";
  }

  // Fecha o modal quando o usuário clica fora dele
  window.onclick = function(event) {
    var modal = document.getElementById("termsModal");
    var modalPolitica = document.getElementById("modalPoliticaPrivacidade");
    
    if (event.target == modal) {
      modal.style.display = "none";
    }
    if (event.target == modalPolitica) {
      modalPolitica.style.display = "none";
    }
  }

  // Função para abrir o modal de política de privacidade
  function openModalPoliticaPrivacidade(event) {
    event.preventDefault();
    document.getElementById("modalPoliticaPrivacidade").style.display = "block";
  }
  
  // Função para fechar o modal de política de privacidade
  function closeModalPoliticaPrivacidade() {
    document.getElementById("modalPoliticaPrivacidade").style.display = "none";
  }

  // Inicialização - garantir que apenas um formulário esteja visível
  document.addEventListener('DOMContentLoaded', function() {
    loginForm.classList.add("active");
    registerForm.classList.add("inactive");
  });
  </script>


<script>
// Função para abrir o modal de esqueci senha
function openForgotPasswordModal() {
    document.getElementById('forgot-password-modal').style.display = 'block';
    // Limpar mensagens anteriores
    document.getElementById('recovery-message').style.display = 'none';
    document.getElementById('recovery-message').className = 'recovery-message';
    document.getElementById('recovery-email').value = '';
}

// Função para fechar o modal de esqueci senha
function closeForgotPasswordModal() {
    document.getElementById('forgot-password-modal').style.display = 'none';
}

// Função para lidar com o envio do formulário de recuperação
function handleForgotPassword(event) {
    event.preventDefault();
    
    const email = document.getElementById('recovery-email').value;
    const submitBtn = event.target.querySelector('.primary-btn');
    const messageDiv = document.getElementById('recovery-message');
    
    // Validação básica de email
    if (!validateEmail(email)) {
        showMessage('Por favor, insira um e-mail válido.', 'error');
        return;
    }
    
    // Mostrar loading
    submitBtn.disabled = true;
    submitBtn.classList.add('loading');
    messageDiv.style.display = 'none';
    
    // Simular envio para o backend (substitua por API real)
    setTimeout(() => {
        // Aqui você faria uma requisição para seu backend
        // fetch('<?= base_url('/auth/forgot-password.php') ?>', {
        //     method: 'POST',
        //     headers: {'Content-Type': 'application/json'},
        //     body: JSON.stringify({ email: email })
        // })
        
        submitBtn.disabled = false;
        submitBtn.classList.remove('loading');
        
        // Simulação de sucesso (substitua pela resposta real do backend)
        const success = true; // Simula sucesso
        
        if (success) {
            showMessage('Link de recuperação enviado para seu e-mail! Verifique sua caixa de entrada.', 'success');
            // Fechar modal após 3 segundos
            setTimeout(() => {
                closeForgotPasswordModal();
            }, 3000);
        } else {
            showMessage('E-mail não encontrado. Verifique se está correto.', 'error');
        }
    }, 2000);
}

// Função para validar e-mail
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Função para mostrar mensagens
function showMessage(text, type) {
    const messageDiv = document.getElementById('recovery-message');
    messageDiv.textContent = text;
    messageDiv.className = `recovery-message ${type}`;
    messageDiv.style.display = 'block';
}

// Fechar modal ao clicar fora
document.getElementById('forgot-password-modal').addEventListener('click', function(event) {
    if (event.target === this) {
        closeForgotPasswordModal();
    }
});
</script>
</body>
</html>