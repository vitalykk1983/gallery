<?php
//loaded file with variables
require_once('src/app.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo PAGE_TITLE ?></title>
    <link rel="stylesheet" href="pub/css/bootstrap.css">
    <link rel="stylesheet" href="pub/css/main.css">
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
</head>
<body>
<div class="album py-5 bg-light">
    <div class="container">
        <h1 class="h1 text-center"><?php echo PAGE_TITLE ?></h1>
        <div class="row">
            <?php if (!empty($images = getImages())): ?>
                <?php foreach ($images as $image): ?>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <a data-fancybox="gallery"
                               href="<?php echo $image['url'] ?>">
                                <img class="card-img-top" alt="Image" src="<?php echo $image['thumbnail'] ?>">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Author: <?php echo $image['description'] ?>,
                                    Resolution: <?php echo implode('x', [$image['width'], $image['height']]) ?>
                                    Created at: <?php echo $image['created_at'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="/?p=1">1</a></li>
                        <li class="page-item"><a class="page-link" href="/?p=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="/?p=3">3</a></li>
                    </ul>
                </nav>
            <?php else: ?>
                <div class="alert alert-danger col-12">
                    There are no images yet :P
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>