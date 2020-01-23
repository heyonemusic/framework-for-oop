<?php include __DIR__ . '/../../templates/header.php'; ?>
    <b>Автор статьи: <?= $nickname ?> </b>
    <h1><?= $article['name'] ?></h1>
    <p><?= $article['text'] ?></p><br>
    <a href="/">Вернуться на главную</a>
<?php include __DIR__ . '/../../templates/footer.php'; ?>