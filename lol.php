<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <h1>앙고르나가</h1>
    <ul>
      <li><a href="lol.php?id=고자라니">고자라니</a></li>
      <li><a href="lol.php?id=보기드문잉여">보기드문잉여</a></li>
      <li><a href="lol.php?id=1Quiz">1Quiz</a></li>
      <li><a href="lol.php?id=앙고르">앙고르</a></li>
      <li><a href="lol.php?id=풍풍">풍풍</a></li>
      <li><a href="lol.php?id=승찬항공">승찬항공</a></li>
      <li><a href="lol.php?id=아이감">아이감</a></li>
    </ul>
    <h2>
    <?php
      echo $_GET['id'];
      ?>
    </h2>

     <iframe src="https://www.op.gg/summoner/userName=<?php echo $_GET['id']?>" width="100%" height="600px"></iframe>
  </body>
</html>
