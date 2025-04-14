<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php foreach ($blogs as $blog): ?>

        <h2>
               <?= $blog->title; ?>
        </h2>


        <div>


            <p><?= $blog->intro; ?></p>
        
          <p>Created at <?= $blog->date?></p>
          <a href="blogs/<?= $blog->slug  ?>"> See more</a>
        </div>



    <?php endforeach; ?>

</body>

</html>