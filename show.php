<?php
include 'functions.php';
$db = include 'database/start.php';

$id = $_GET['id'];
$post = $db->getOne('posts', $id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= htmlspecialchars($post['title']) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .post-card {
            max-width: 800px;
            margin: 50px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .post-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .post-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #343a40;
        }
        .post-meta {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .post-content {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #495057;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="post-card card">
        <div class="card-body">
            <!-- Заголовок поста -->
            <h1 class="post-title"> ID: <?= nl2br(htmlspecialchars($post['id'])) ?> </h1>
            <!-- Содержимое поста -->
            <div class="post-content"><?= htmlspecialchars($post['title']) ?></div>
            <!-- Кнопка для возврата на главную -->
            <a href="/" class="btn btn-primary btn-back">← Back to Home</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>