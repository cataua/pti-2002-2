<?php 
  $user = $_POST['user'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarefa 3</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="box">
    <div class="loading show">
      <img src="assets/images/loading.svg" class="img-loading" />
      <p>
        Carregando
      </p>
    </div>
    <div class="welcome hide">
      <div class="picure">
        <img src="assets/images/welcome.png" class="img-welcome" />
      </div>
      <div class="content">
        <h3>Olá, <span id="user"><?php echo $user; ?></span>!</h3>
        <p>Seja bem vindo!</p>
      </div>
    </div>
  </div>
  <script src="assets/js/script.js"></script>
</body>
</html>