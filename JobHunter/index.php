<?php 
  define('BASE_URL', '/JobHunter//');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'home';
  switch($page){
    case 'home':
      require_once __DIR__ . '/pages/home.php';
      break;
    case 'services':
      require_once __DIR__ . 'pages/services.php';
      break;
    case 'register':
      require_once __DIR__ . 'pages/register.php';
      break;
  }
?>

</body>
</html>