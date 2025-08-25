<?php

if ($_SESSION['id'] == 0) {
    echo "<script language='javascript'>
    location.href='Entrar.php'
    </script>";
} else {

    $sqlSelect = $conn->prepare(query: "SELECT email, nome, fotop, descricao from usuario where idusuario = " . $_SESSION['id'] . "");
    $sqlSelect->execute();
    $row = $sqlSelect->fetch(mode: PDO::FETCH_ASSOC);

    $email = $row['email'];
    $nome = $row['nome'];
    $fotop = $row['fotop'];

    $descricao = $row['descricao'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
</head>

<body id="fundop">

    <div class="container-fluid BannerP d-flex justify-content-center">
        <div class="FotodivP d-flex justify-content-center align-items-center">
            <img class="FotoP" src="FotosDePerfil/<?php echo "$fotop" ?>">
        </div>
    </div>
    <div class="container-fluid mt-5 pt-5 d-flex justify-content-center align-items-center flex-column">
        <div class="d-flex flex-row nomePerfil">
            <?php echo "
            <h2 class=''>" . $nome . "#" . $_SESSION['id'] . "</h2>
            <button class='buttonNome'data-bs-toggle='modal' data-bs-target='#exampleModal2'>
            <i class='fa-solid fa-pen-to-square' ></i>
            </button>
            <form method='POST' action='index.php?page=Perfil' enctype='multipart/form-data'>
            <div class='modal fade' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered'>
                <div class='modal-content'>
                <div class='modal-header'>
                    <h1 class='modal-title fs-5' id='exampleModalLabel'>Editar Perfil</h1>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>

                    <label for='fotop' class='ButtonTemplate2 file col-form-label'>Alterar imagem</label>
                    <input value='$fotop' type='file' id='fotop' class='my-3 btn btn-sucess' accept='image/png' name='imagem'><br>

                    <label for='nome' class='col-form-label'>Insira um novo nome:</label>
                    <input value='$nome' type='text' class='form-control' name='nome' id='nome'>

                    <label for='descricao' class='col-form-label'>Descrição:</label>
                    <textarea class='form-control' name='descricao' id='descricao'>$descricao</textarea>


                    </div>
                <div class='modal-footer'>
                            <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>Cancelar</button>
                            <button type='submit' value='trocanome' id='trocanome' name='trocanome' class='btn btn-success'>Alterar</button>
                </div>
                </div>
            </div>
            </div>
            </form>
            ";
            if (isset($_REQUEST["trocanome"])) {

                $nome = $_POST["nome"];

                $descricao = $_POST["descricao"];

                $extensao = strtolower(string: substr(string: $_FILES['imagem']['name'], offset: -4));
                $novo_nome = md5(string: time()) . $extensao;
                $diretorio = "FotosdePerfil/";

                move_uploaded_file(from: $_FILES['imagem']['tmp_name'], to: $diretorio . $novo_nome);


                try {
                    $trocanome = $conn->prepare(query: "UPDATE usuario set nome = '" . $nome . "',fotop = '" . $novo_nome . "', descricao = '" . $descricao . "' WHERE idusuario = " . $_SESSION['id'] . "");

                    $trocanome->execute();

                    echo "<script lenguage=javascript>
                    location.href='Index.php?page=Perfil'
                    </script>
                    ";
                } catch (PDOException $e) {
                    echo "" . $e->getMessage() . "";

                }
            }
            ?>
        </div>
        <div class="NomeP"><?php echo "<h5>" . $email . "</h5>" ?></div>
    </div>
    <div class="container-fluid  d-flex justify-content-center">
        <?php

        echo "
                <h4 class='descricaotxt'>$descricao</h4>
            "
            ?>
    </div>




</body>

</html>