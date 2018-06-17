<?php

// 新規登録

require_once(__DIR__ . '/../config/config.php');

$app = new MyApp\Controller\Signup();

$app->run();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ToDoList</title>
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
    <form action="" method="post" id="signup">
      <p>
        <input type="text" name="email" placeholder="email" value="<?= isset($app->getValues()->email) ? h($app->getValues()->email) : ''; ?>">
      </p>
      <p class="err"><?= h($app->getErrors('email')); ?></p>
      <p>
        <input type="password" name="password" placeholder="password">
      </p>
      <p class="err"><?= h($app->getErrors('password')); ?></p>
      <div class="btn" onclick="document.getElementById('signup').submit();">Sign Up</div>
      <p class="fs12"><a href="/login.php">Log In</a></p>
      <input type="hidden" name="token" value="<?= h($_SESSION['token']); ?>">
    </form>
  </div>
</body>
</html>
