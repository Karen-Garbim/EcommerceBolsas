<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      footer {
        position: absolute;
        background-color: #f8f9fa;
        bottom: 0;
        width: 100%;
      }
      body,
      html {
        height: 100%;
        margin: 0;
      }
      .bg {
        background-image: url(banner-home-5c5197baed3d3.png);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
      }
    </style>
  </head>
  <body class="bg">
    <header class="row" id="home">
      <div id="barra_acessibilidade" class="col-12 d-none">
        <ul id="atalhos">
          <li><a href="#menu" accesskey="1">Ir para menu [1]</a></li>
          <li>
            <a href="#formulario" accesskey="2">Ir para formulário [2]</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 text-center">
        <h1>Lola Bolsas</h1>
      </div>
    </header>
    <section class="row">
      <div class="d-none col-12">
        <h2 id="menu">Menu</h2>
      </div>
      <div class="col-12">
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01"
            aria-expanded="false"
            aria-label="Alterna navegação"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarTogglerDemo01"
          >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="galeria.html">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sobre.html">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.html">Contato</a>
              </li>
              <li class="nav-item">
                <a
                  class="btn btn-outline-success btn-sm col"
                  href="https://wa.me/5518998036977"
                  >Atendimento via Whastsapp</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <footer>
      <div class="text-center">
        <p>Copyright © 2021</p>
      </div>
    </footer>
    <script>
       (function () {
        "use strict";
        window.addEventListener(
          "load",
          function () {
            var forms = document.getElementsByClassName("needs-validation");
             var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                form.addEventListener(
                  "submit",
                  function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              }
            );
          },
          false
        );
      })();
    </script>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <noscript>Atualize seu navegador</noscript>
  </body>
</html>
