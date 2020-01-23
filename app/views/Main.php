<?php include __DIR__ . '/../../templates/header.php'; ?>
<?php foreach ($articles as $article): ?>
    <h2><?= $article['name'] ?></h2>
    <p><?= $article['text'] ?></p>
    <hr>
<?php endforeach; ?>
<?php include __DIR__ . '/../../templates/footer.php'; ?>