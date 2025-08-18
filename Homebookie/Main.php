<!DOCTYPE html>
<html lang="pt-br">

<head>
</head>

<body>

  <!-- | Banner | -->

  <div class="container-fluid d-flex align-items-center " id="Banner">
    <div class="d-flex align-items-center">
      <img src="imagens/logo.png" id="logo" alt="Homebookie Logo">
      <h2 id="Title">Homebookie</h2>
    </div>
    <?php
    if ($_SESSION["id"] == null) {
      echo "
      <div>
      <a href='Cadastro.php'><button class='px-md-3 py-md-2 py-1' id='ButtonTemplate2'>Registre-se</button></a>
      <a href='Login.php'><button class='px-md-3 py-md-2 py-1' id='ButtonTemplate1'>‎ ‎ ‎ ‎ Entrar‎ ‎ ‎ ‎ </button></a>
      </div>";
    }
    ?>
  </div>

  <div class="container-fluid" style="height:15px;background-color: #8e549c;" id="UnderBanner"></div>


  <!-- | SideBar | -->


  <div class="container-fluid" style="padding-right: 0px;padding-left: 0px!important;">
    <div class="col-sm-auto bg-light sticky-top">
      <div class="sidebar" id="DivBar">

        <a href="?page=Inicio" class="navi d-flex align-items-center">
          <img src="Imagens/Inicio.png" alt="Home">
          <span id="textoside" class="sidebar-text">Inicio</span>
        </a>

        <a href="?page=Perfil" class="navi d-flex align-items-center ">
          <img src="Imagens/Perfil.png" alt="Perfil">
          <span id="textoside" class="sidebar-text">Perfil</span>
        </a>

        <a href="?page=Turmas" class="navi d-flex align-items-center ">
          <img src="Imagens/Turmas.png" alt="Turmas">
          <span id="textoside" class="sidebar-text">Turmas</span>
        </a>

        <a href="?page=Agenda" class="navi d-flex align-items-center ">
          <img src="Imagens/Agenda.png" alt="Agenda">
          <span id="textoside" class="sidebar-text">Agenda</span>
        </a>

        <a href="?page=Sobre" class="navi d-flex align-items-center ">
          <img src="Imagens/Sobre.png" alt="Sobre">
          <span id="textoside" class="sidebar-text">Sobre</span>
        </a>

        <script>
          var header = document.getElementById("DivBar");
          var btns = header.getElementsByClassName("navi");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
              var current = document.getElementsByClassName("active");
              if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
              }
              this.className += " active";
            });
          }
        </script>

      <?php
      if (isset($_GET['page'])) {
      $Page = $_GET['page'];
      }
      ?>

      </div>
    </div>
  </div>

</body>

</html>