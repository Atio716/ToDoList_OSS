<?php

// ログイン

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Login();

$app->run();

//echo "login screen";
//exit;

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Log In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="ここにサイト説明を入れます">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="style1.css">
  <script type="text/javascript" src="js/openclose.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <header>
  <div class="inner">
  <h1 id="logo"><a href="index.html"><img src="logo.png" alt="Sample Company"></a></h1>
  <!--トップページ専用メニュー-->
  <nav id="menubar">
  <ul class="inner">
  <li><a href="index.html">HOME</a></li>
  <li><a href="company.html">LICENCE</a></li>
  <li><a href="service.html">SERVICE</a></li>
  <li class="current"><a href="link.html">ToDoList</a></li>

  </ul>
  </nav>
  </div>
  </header>

  <div id="container">
    <form action="" method="post" id="login">
      <p>
        <input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">
      </p>
      <p>
        <input type="password" name="password" placeholder="password">
      </p>
      <p class="err"><?= h($app->getErrors('login')); ?></p>
  <!--  <div class="btn" onclick="document.getElementById('login').submit();">Log In</div>-->
-<p class="btn"><a href="/todo_app_php/index.php">Log In</a></p>
     <p class="fs12"><a href="/signup.php">Sign Up</a></p>

      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
  </div>
</body>
</html>
