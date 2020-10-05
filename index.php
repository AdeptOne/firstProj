<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>PHP веб сайт</title>
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">YesTo</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Главная</a>
                <a class="p-2 text-dark" href="#">Контакты</a>
            </nav>
            <a class="btn btn-outline-primary" href="#">Вход</a>
        </div>
        <div class="container mt-5">
            <h3 class="mb-5">Наши статьи</h3>

            <div class="d-flex flex-wrap">
                <?php
                    for ($i = 1; $i < 7; $i++):
                ?>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Просто текст</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/<?php echo $i ?>.jpg" alt="" class="img-thumbnail">
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </body>
</html>
