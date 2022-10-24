<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>詳細</p>
    <ul>
        <li>{{ $post->id }}</li>
        <li>{{ $post-> name}}</li>
        <li>{{ $post-> contents}}</li>
    </ul>

    <p>コメント</p>

    <ul>
        <?php foreach($post->comments as $comment):?>
            <li>{{ $comment -> name}}</li>
            <li>{{ $comment -> comment}}</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>