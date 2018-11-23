<?php
    
  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }
    
  // Tenta se conectar ao servidor MySQL
  ini_set('display_errors', true);
error_reporting(E_ALL);

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "Enem");

$conn = new PDO('mysql:host=localhost;dbname=Enem', DB_USER, DB_PASSWORD);
    
  $usuario = mysqli_real_escape_string($_POST['usuario']);
  $senha = mysqli_real_escape_string($_POST['senha']);
    
  // Validação do usuário/senha digitados
  $sql = "SELECT `id`, `nome` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') LIMIT 1";
  $query = mysqli_query($conn, $query);

 if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
      echo "Login inválido!"; exit;
  } else {
      // Salva os dados encontrados na variável $resultado
      $resultado = mysql_fetch_assoc($query);
    
      // Se a sessão não existir, inicia uma
      if (!isset($_SESSION)) session_start();
    
      // Salva os dados encontrados na sessão
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];
    
      // Redireciona o visitante
      header("Location: CadastraPergunta.php"); exit;
  }
    
  ?>