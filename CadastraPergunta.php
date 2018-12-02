<?php
    
//A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
    
 // Verifica se não há a variável da sessão que identifica o usuário
  if ($_SESSION['UsuarioID'] != null ) {
  // Destrói a sessão por segurança
    session_destroy();
   // Redireciona o visitante de volta pro login
     header("Location: index.html"); exit;
  }
    
  ?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>ENEM</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title></title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

     <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
        
    </head>
    
    <body>
        <div class="container-fluid">
        <h2>ENEM</h2>
        <form action="InseriPerguntaBanco.php" method="post">
            <label>Pergunta:</label>
            <textarea rows="8" class="form-control"  type="text" name="Pergunta"></textarea>
            
            <br><br>
            
            <label>Opção A: </label>
            <textarea rows="8" class="form-control"  type="text" name="RespostaA"></textarea>
            
            <br><br>  
            
            <label>Opção B: </label>
            <textarea  rows="8" class="form-control" type="text" name="RespostaB"></textarea>
            
            <br><br>
            
            <label>Opção C: </label>
            <textarea rows="8" class="form-control"  type="text" name="RespostaC"></textarea>
            
            <br><br>
            
            <label>Opção D: </label>
            <textarea rows="8" class="form-control no-resize auto-growth" type="text" name="RespostaD"></textarea>
            
            <br><br>
            
            <label>Opção E: </label>
            <textarea    rows="8" class="form-control no-resize auto-growth" type="text" name="RespostaE"></textarea>
            
            <br>

            <label>Resposta Correta:</label>
                <br>
                <input type="radio" name="RespostaCorreta"  value="1">
                <label>A</label>
                <input type="radio" name="RespostaCorreta"  value="2">
                <label>B</label>
                <input type="radio" name="RespostaCorreta"  value="3">
                <label>C</label>
                <input type="radio" name="RespostaCorreta"  value="4">
                <label>D</label>
                <input type="radio" name="RespostaCorreta" value="5">
                <label>E</label>

            
            <br> <br>
            
            
            <label>Área do Conhecimento:</label>
                <br>
                <input type="radio" name="AreaConhecimento_id" value="1" id="1"> 
                <label >A</label>
                
                <input type="radio" name="AreaConhecimento_id" value="2" id="2"> 
                <label >B</label>
                
                <input type="radio" name="AreaConhecimento_id"  value="3" id="3">
                <label >C</label>
                
                <input type="radio" name="AreaConhecimento_id"  value="4" id="4">
                <label >D</label>
            
            <br><br>
            <button type="submit" class="btn btn-primary btn-md">Cadastrar</button>
            
        </form>
        </div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    </body>
</html>