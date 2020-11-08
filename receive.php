<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>送信されたデータの表示</title>
</head>
<body>
<p><?php echo htmlspecialchars($_POST['user_input'], ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
