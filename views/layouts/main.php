<?php
use yii\helpers\Url;
use app\assets\AppAsset;
AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<header class="vertical-padding pt-4 pb-4">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light ">
            <a class="navbar-brand fs-2 fw-bold" href="#">Moiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Url::to(['/blog/index']) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Url::to(['/blog/about']) ?>">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Url::to(['/blog/services']) ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Url::to(['/blog/faq']) ?>">Faq's</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Url::to(['/blog/contacts']) ?>">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main><?= $content ?><main/>
<footer class="vertical-padding">
    <div class="container"><h1>FOOTER</h1></div>
    <footer/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>