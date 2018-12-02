<?php
   
    // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: index.html"); exit;
    }

    //Conectar com o banco
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "Enem");
    
    $usuario=$_POST['usuario'];
    $senha=$_POST['senha'];
    $query="SELECT `id`, `nome`  FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."')  LIMIT 1";
  
    $conn = new PDO('mysql:host=localhost;dbname=Enem', DB_USER, DB_PASSWORD);
    $stmt = $conn->query($query);

    if ($stmt->fetch(PDO::FETCH_ASSOC)==false) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!"; exit;
    } else {
        $resultado= $stmt->fetchColumn();
        // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();

        // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $resultado['id'];
        $_SESSION['UsuarioNome'] = $resultado['nome'];
         // Redireciona o visitante
        header("Location: CadastraPergunta.php"); exit;
    }

  ?>