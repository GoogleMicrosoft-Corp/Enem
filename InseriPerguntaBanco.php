<?php
//Parametros para Conectar ao Banco
ini_set('display_errors', true);
error_reporting(E_ALL);
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "Enem");

//Define a Conexão Com o Banco
$conn = new PDO('mysql:host=localhost;dbname=Enem', DB_USER, DB_PASSWORD);

//Verifca se Teve Post Vindo da Pagina CadastraPergunta.php
if(isset($_POST)){
    //Salva as Informações vindas do Formulário em Variárveis
    $Pergunta = $_POST["Pergunta"];
    $RespostaA = $_POST["RespostaA"];
    $RespostaB = $_POST["RespostaB"];
    $RespostaC = $_POST["RespostaC"];
    $RespostaD = $_POST["RespostaD"];
    $RespostaE = $_POST["RespostaE"];
    $RespostaCorreta = $_POST["RespostaCorreta"];
    $AreaConhecimento_id = $_POST["AreaConhecimento_id"];

//Monta a Consulta a Ser Executada no Banco
    $query = "INSERT INTO Perguntas (Pergunta, RespostaA, RespostaB, RespostaC, RespostaD, RespostaE,RespostaCorreta,AreaConhecimento_id) VALUES ('$Pergunta', '$RespostaA', '$RespostaB', '$RespostaC', '$RespostaD', '$RespostaE','$RespostaCorreta','$AreaConhecimento_id ');";
    
//Executa a Consulta no Banco
    $stmt = $conn->query($query);

//Verifica Se a Informação Foi Inserida no Banco
    if (($stmt->fetch(PDO::FETCH_ASSOC))!=false) {
//Apresenta a Mensagem De Registro Inserido com Sucesso no Banco
    echo("OI");
    }
    
    else {
//Apresenta a Mensagem de erro Caso o registro não foi inserido com sucesso
    echo("Errado");
    }
}
?>