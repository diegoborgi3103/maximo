<?php
$mensagem_enviada = false;
$erro_envio = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $email = $_POST['email'] ?? '';
    $cidade = $_POST['cidade'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $to = "contato@maximovasos.com.br";
    $subject = "Mensagem do formulário - Máximo Vasos";

    $body = "Nova mensagem enviada pelo formulário do site:\n\n";
    $body .= "Nome: $nome\n";
    $body .= "Telefone: $telefone\n";
    $body .= "E-mail: $email\n";
    $body .= "Cidade: $cidade\n";
    $body .= "Mensagem:\n$mensagem\n";

    $headers = "From: contato@maximovasos.com.br\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        $mensagem_enviada = true;
    } else {
        $erro_envio = true;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máximo Vasos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-png" href="./assest/imagens/favicon.png">

    <script>
        // Detecta dispositivos móveis e redireciona
        if (/Mobi|Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            window.location.href = "catalogo-mobile.html";
        }
    </script>

    <style>

     body {
      background-image: url('./assest/imagens/fundosite1.png');
      background-size: cover;
      background-position: center;
      align-items: center;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
      overflow-x: hidden;
      display: flex;
      flex-direction: column;
    }

      /*div conteudo*/
      .conteudo {
  display: flex;              
  flex-direction: column;     
  align-items: center;        
  justify-content: center;    
  gap: 20px;                  
  padding: 20px;              
  min-height: 450px;          /* altura mínima */
  max-height: 450px;          /* altura máxima */
  box-sizing: border-box;     
  overflow-y: auto;           /* cria rolagem se o form passar do limite */
}
   /*div que cuida das duas divs como coluna */
.contato-container {
  width: 100%;                /* Ocupa toda a largura disponível */
  max-width: 900px;           /* Limite de largura para melhor visual */
  display: flex;
  flex-direction: column;
  gap: 15px;
}
  /* div que deixa os contatos space-around */

      .contato-links {
  display: flex;
  justify-content: space-around; /* Distribui os links com espaço ao redor */
  align-items: center;           /* Alinha verticalmente os itens ao centro */
  flex-wrap: wrap;               /* Permite que os itens quebrem linha se não couberem */
  gap: 10px;                     /* Espaçamento extra entre os itens (opcional) */
  padding: 20px 0;               /* Espaçamento interno na div */
}

.contato-links a {
  text-decoration: none;        /* Remove o sublinhado dos links */
  color: #000;                  /* Cor do texto, ajuste conforme seu site */
  font-weight: 500;
  display: flex;
  align-items: center;          /* Alinha ícone e texto verticalmente */
  gap: 8px;                     /* Espaço entre ícone e texto */
}

.contato-links a img.icon {
  width: 24px;                  /* Ajuste o tamanho do ícone */
  height: 24px;
}

.contato-container {
  display: flex;               /* Ativa o Flexbox */
  flex-direction: column;      /* Coloca todos os filhos em coluna */
  align-items: center;         /* Centraliza horizontalmente */
  justify-content: flex-start; /* Alinha os itens no topo */
  gap: 20px;                   /* Espaço entre cada elemento */
  width: 100%;                 /* Ocupa toda a largura do pai */
  max-width: 600px;            /* Limite de largura para ficar bonito */
  margin: 0 auto;              /* Centraliza a div na página */
  padding: 20px;               /* Espaçamento interno */
  box-sizing: border-box;      /* Inclui padding na largura total */
}

.contato-links {
  display: flex;
  flex-direction: column;      /* Coloca os links em coluna */
  align-items: center;         /* Centraliza horizontalmente */
  gap: 10px;                   /* Espaço entre os links */
  width: 100%;                 /* Ocupa toda a largura do container */
}

.contato-links a {
  display: flex;
  align-items: center;
  gap: 8px;                    /* Espaço entre ícone e texto */
  text-decoration: none;
  color: #000;                 /* Ajuste conforme seu estilo */
}

.contato-links a img.icon {
  width: 24px;
  height: 24px;
}

form#form-contato {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 8px;              /* espaçamento entre os campos */
  width: 100%;
  max-width: 500px;
  box-sizing: border-box;
}

form#form-contato input,
form#form-contato textarea {
  width: 100%;
  padding: 6px 8px;
  font-size: 14px;
  box-sizing: border-box;
}

form#form-contato textarea {
  resize: none;
  height: 50px;
}

form#form-contato button {
  padding: 8px 15px;
  font-size: 14px;
  cursor: pointer;
}

.contato-container h2 {
  color: #fffdfdff;
}


    </style>
</head>

<body>

    <div class="row">
        <img src="./assest/imagens/logohomecelular.svg" alt="Logo do Máximo Vasos" class="logo">
    </div>

    <div class="menu-container">
        <nav class="menu">
            <a href="index.html">HOME</a>
            <a href="sobre.html">SOBRE</a>
            <a href="projetos.html">PROJETOS SOB MEDIDA</a>
            <a href="https://maximovasos.lojavirtualnuvem.com.br/" target="_blank" rel="noopener noreferrer">
        LOJA VIRTUAL
       </a>
             <a href="catalogo.html">CATÁLOGOS</a>
            
        </nav>
    </div>

    <div class="conteudo">
    <div class="contato-container">
      <h2 style=" background-color: rgba(12, 12, 12, 0.815); border-radius: 50px; padding: 10px 15px; ">Deixe sua mensagem abaixo.</h1>
      <?php if($mensagem_enviada): ?>
        <p style="color:green;">Mensagem enviada com sucesso!</p>
      <?php elseif($erro_envio): ?>
        <p style="color:red;">Erro ao enviar a mensagem. Por favor, tente novamente.</p>
      <?php endif; ?>

      
      <form id="form-contato" method="POST">
        <input type="text" name="nome" placeholder="Nome *" required>
        <input type="tel" name="telefone" id="telefone" placeholder="Telefone *" required>

        <input type="email" name="email" placeholder="E-mail *" required>
        <input type="text" name="cidade" placeholder="Cidade *" required>
        <textarea name="mensagem" placeholder="Mensagem *" required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>

    <div class="rodape">
        <a href="tel://19993946374" class="telefone">
            <img src="./assest/icones/telefone.png" alt="Telefone" class="icon">
            (19) 99394-6374
        </a>

        <a href="https://api.whatsapp.com/send?phone=5519993946374&text=Olá,%20preciso%20de%20mais%20informações" class="whatsapp">
            <img src="./assest/icones/whatsapp.png" alt="WhatsApp" class="icon">
            Chame no WhatsApp
        </a>

        <a href="mailto:contato@maximovasos.com.br" class="email">
            <img src="./assest/icones/email.png" alt="E-mail" class="icon">
            E-mail
        </a>

        <a href="https://maps.app.goo.gl/BvkWPKLkvKpVhbzH9" class="endereco">
            <img src="./assest/icones/endereco.png" alt="Endereço" class="icon">
            Endereço
        </a>
    </div>

    <div class="direitos">
        <p>
            Todos os direitos reservados à Máximo Vasos CNPJ: 13.925.067/0001-89 &copy; 
            <span id="ano"></span> | Site desenvolvido por: 
            <a href="https://instagram.com/diegoborgi" class="diego" target="_blank">Diego Borgi</a>
        </p>
    </div>

    <script>
        // Atualiza o ano automaticamente
        document.getElementById('ano').textContent = new Date().getFullYear();

        
  const telInput = document.getElementById('telefone');

  telInput.addEventListener('input', (e) => {
    let value = e.target.value.replace(/\D/g, ''); // remove tudo que não for número

    if (value.length > 11) value = value.slice(0, 11); // limita a 11 dígitos

    if (value.length > 6) {
      e.target.value = `(${value.slice(0, 2)}) ${value.slice(2, 7)}-${value.slice(7)}`;
    } else if (value.length > 2) {
      e.target.value = `(${value.slice(0, 2)}) ${value.slice(2)}`;
    } else {
      e.target.value = value;
    }
  });


    </script>

</body>

</html>
