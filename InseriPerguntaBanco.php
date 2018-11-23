<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "Enem");

$conn = new PDO('mysql:host=localhost;dbname=Enem', DB_USER, DB_PASSWORD);


if(isset($_POST)){
    $Pergunta = $_POST["Pergunta"];
    $RespostaA = $_POST["RespostaA"];
    $RespostaB = $_POST["RespostaB"];
    $RespostaC = $_POST["RespostaC"];
    $RespostaD = $_POST["RespostaD"];
    $RespostaE = $_POST["RespostaE"];
    $RespostaCorreta = $_POST["RespostaCorreta"];
    $AreaConhecimento_id = $_POST["AreaConhecimento_id"];

    $query = "INSERT INTO Perguntas (Pergunta, RespostaA, RespostaB, RespostaC, RespostaD, RespostaE,RespostaCorreta,AreaConhecimento_id) VALUES ('$Pergunta', '$RespostaA', '$RespostaB', '$RespostaC', '$RespostaD', '$RespostaE','$RespostaCorreta','$AreaConhecimento_id ');";
    $stmt = $conn->query($query);
if (($stmt->fetch(PDO::FETCH_ASSOC))!=false) 
{
echo("OI");

}
    else 
    {
    echo("Errado");
}
  
}
?>