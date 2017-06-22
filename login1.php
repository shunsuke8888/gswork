<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
<!--
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
-->
</head>
<body>
<div class="pictures">

    <h1>ログイン</h1>

<div>
<form method="post" action="insert.php">

    <label><p>ログインID<input type="text" name="loginID" size="20"></p></label>
    <label><p>ログインPW<input type="text" name="password" size="20"></p></label>
    
    <p>コース：<br>
<select name="course">
<option value="TOEFL">TOEFL</option>
<option value="TOEIC">TOEIC</option>
</select></p>
  
   <input type="submit" value="送信">
    
</form>
</div>
<a href="shinki.php">新規登録</a>

<script src="js/jquery-2.1.3.min.js"></script>

</div>
</body>
</html>
