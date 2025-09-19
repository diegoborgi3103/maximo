<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Máximo Vasos - Contato</title>
<link rel="icon" type="image/x-png" href="./assest/imagens/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<style>
  body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
  }

  /* LOGO */
  .row {
    text-align: center;
    padding: 10px 0;
    background-image: url('./assest/imagens/fundodivlogo.svg');
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
  }
  .row img.logo {
    width: 180px;
    height: auto;
  }

  /* MENU MOBILE */
  .menucelular {
    margin-top: 3px;
    width: 100vw;
    height: 40px;
    background-color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 5px 5px rgba(0,0,0,0.4);
    position: relative;
  }
  .menu-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    cursor: pointer;
    user-select: none;
  }
  .menucelular img.icon { width: 20px; height: auto; }

  .dropdown {
    display: none;
    flex-direction: column;
    position: absolute;
    top: 130px;
    left: 0;
    width: 100%;
    background-color: #444;
    box-shadow: 0 4px 8px rgba(0,0,0,0.4);
    z-index: 1000;
  }
  .close-btn {
    text-align: right;
    padding: 10px;
    font-size: 1.2rem;
    cursor: pointer;
    color: white;
    background-color: #333;
    border-bottom: 1px solid #555;
  }
  .dropdown a {
    padding: 15px;
    text-decoration: none;
    color: white;
    border-bottom: 1px solid #555;
    transition: background 0.3s;
    
  }
  .dropdown a:last-child { border-bottom: none; }
  .dropdown a:active { background-color: #666; }
  .dropdown.show { display: flex; }

  /* SEÇÃO FALE CONOSCO */
  .welcome {
    text-align: center;
    padding: 15px 10px;
  }
  .welcome h1 {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    color: #333;
    margin: 0px 0 10px;
  }
  .welcome p {
    font-size: 0.95rem;
    color: #555;
    line-height: 1.5;
    margin-bottom: 10px;
  }

  .contato-celular {
    display: flex;
    flex-direction: column;
    gap: 15px;
    align-items: center;
  }
  .btn-contato {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 12px 18px;
    width: 90%;
    max-width: 320px;
    font-size: 1.1rem;
    font-weight: bold;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: transform 0.2s, background-color 0.3s;
  }
  .btn-contato img.icon { width: 22px; height: 22px; }
  .btn-contato { background-color: #129deeff; }

  .whatsapp-btn { background-color: #25D366; }
  .whatsapp-btn:hover { background-color: #128C7E; }

  .email-btn { background-color: #4a90e2; }
  .email-btn:hover { background-color: #357ABD; }

  .endereco-btn { background-color: #6c757d; }
  .endereco-btn:hover { background-color: #565e64; }

  /* RODAPÉ DIREITOS */
  .direitoscelular {
    text-align: center;
    font-size: 0.75rem;
    color: #fdfdfdff;
    padding: 10px 15px;
    line-height: 1.4;
    background-color: #0d0e0dff; 
    margin-top: 60px;
  }
  .direitoscelular a {
    color: #7d6da0ff;
    text-decoration: underline;
    font-weight: bold;
    

  }
  .direitoscelular a:hover {
    color: #600be9;
    text-decoration: none;
  }

  /* RESPONSIVO */
  @media (max-width: 480px) {
    .welcome h1 { font-size: 1.3rem; }
    .welcome p { font-size: 0.85rem; }
    .menucelular { height: 35px; }
    .btn-contato { font-size: 0.9rem; padding: 10px 14px; }
    .btn-contato img.icon { width: 20px; height: 20px; }
    .direitoscelular { font-size: 0.7rem; padding: 8px 10px; }
  }
</style>
</head>
<body>

<!-- LOGO -->
<div class="row">
  <img src="./assest/imagens/logohomecelular.svg" alt="Logo do Máximo Vasos" class="logo">
</div>

<!-- MENU MOBILE -->
<div class="menucelular">
  <div class="menu-btn" onclick="toggleMenu()">
    <img src="./assest/icones/list.png" alt="menu" class="icon"> MENU
  </div>
</div>
<div class="dropdown" id="dropdownMenu">
  <div class="close-btn" onclick="toggleMenu()">✖</div>
  <a href="index-mobile.html">Home</a>
  <a href="sobre-mobile.html">Sobre</a>
  <a href="projetos-mobile.html">Projetos sob medida</a>
  <a href="https://maximovasos.lojavirtualnuvem.com.br/" target="_blank" rel="noopener noreferrer">
        Loja Virtual
       </a>
  <a href="catalogo-mobile.html">Catálogos</a>
</div>

<!-- FALE CONOSCO -->
<div class="welcome">
  <h1>Fale Conosco</h1>
  <p>Entre em contato clicando em um dos botões abaixo:</p>
  <p><strong>Telefone, WhatsApp ou E-mail</strong></p>
  <p>Ou visite nosso endereço:</p>
  <p><strong>Estr. José Horácio Pascon, km 1 - Distrito Industrial I, Santa Gertrudes - SP, 13510-000</strong></p>

  <div class="contato-celular">
    <a href="tel://19993946374" class="btn-contato">
      <img src="./assest/icones/telefone.png" class="icon"> (19) 99394-6374
    </a>

    <a href="https://api.whatsapp.com/send?phone=5519993946374&text=Olá,%20preciso%20de%20mais%20informações" class="btn-contato whatsapp-btn">
      <img src="./assest/icones/whatsapp.png" class="icon"> WhatsApp
    </a>

    <a href="mailto:contato@maximovasos.com.br" class="btn-contato email-btn">
      <img src="./assest/icones/email.png" class="icon"> E-mail
    </a>

    <a href="https://maps.app.goo.gl/BvkWPKLkvKpVhbzH9" class="btn-contato endereco-btn" target="_blank">
      <img src="./assest/icones/endereco.png" class="icon"> Endereço
    </a>
  </div>
</div>

<!-- RODAPÉ -->
<div class="direitoscelular">
  <p>Todos os direitos reservados à Máximo Vasos - CNPJ: 13.925.067/0001-89 &copy; <span id="ano"></span> | Site desenvolvido por: 
    <a href="https://instagram.com/diegoborgi" target="_blank">Diego Borgi</a>
  </p>
</div>

<script>
  function toggleMenu() {
    document.getElementById("dropdownMenu").classList.toggle("show");
  }

  window.onclick = function(event) {
    if (!event.target.closest('.menucelular') && !event.target.closest('.dropdown')) {
      document.getElementById("dropdownMenu").classList.remove("show");
    }
  }

  // Atualiza o ano automaticamente
  document.getElementById("ano").textContent = new Date().getFullYear();
</script>

</body>
</html>
