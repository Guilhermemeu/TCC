<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1., user-scalable=no">
  <!-- Formatação -->
  <link rel="stylesheet" href="style.css">
  <script src="interação.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3fed99b926.js" crossorigin="anonymous"></script>
  <!-- | Icone do Site | -->
  <link icon="" href="">
  <!-- | Titulo | -->
  <title>HomeBook</title>

</head>

<body id="fundog">
  <br>

  <div class=" mt-bg-5 mt-1 d-flex container-fluid justify-content-center flex-row-reverse" id="caixalogin">
    <div class="align-items-center d-flex flex-row-reverse" id="loginbox" style="border-color:#964CA2 !important;">
    
      <form method="POST" class="d-flex mx-sm-5 mx-2 flex-column" id="leftlogin">
        <a href="index.php"><i id="voltar" class="fa-solid fa-arrow-left"></i></a>
        <h1 class="mt-1 mb-4" id="entrar" style="color:#70607F !important">Crie sua conta</h1>
        <input class="mt-4 mb-2" placeholder="Email" id="inputlogin" type="email"
          style="background-color:#9A83AF !important;" name="Email">
        <input class="mt-2 mb-2" placeholder="Senha" id="inputlogin" type="text"
          style="background-color:#9A83AF !important;" name="Senha">
        <input class="mt-2 mb-4" placeholder="Confirme a Senha" id="inputlogin" type="text"
          style="background-color:#9A83AF !important;">
        <button type="submit" class="my-4" id="botaologin" style="background-color:#6B8D70 !important;">Criar</button>
        <div class="d-flex flex-row align-items-center justify-content-center ms-2">
          já tem uma conta?<a class="my-4" href="login.php">Entre!</a>
      </form>

    </div>
    <div class="d-flex align-items-center justify-content-end" id="fillerlogin">
      <img class="img-fluid" src="imagens/fillercadastro.png" id="imagefillerlogin" alt="Crie sua conta">
      <a href="cadastro.php"></a>
    </div>

  </div>
  </div>
</body>

</html>