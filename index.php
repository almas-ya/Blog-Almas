<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Блог Алмаса</title>
    <link rel="shortcut icon" href="img/logotip.png">
    <link rel="stylesheet" href="style/all.min.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/media.css">
</head>

<body>

    <? require "blocks/header.php" ?>

    <main class="main">
        <div class="blocks">
            <div class="container-fluid">
                <h3 class="blocks-title">Категории</h3>
                <div class="categories">
                    <div class="categories__content">
                        <a href="#" class="categories__title">
                            <i class="fas fa-code categories-icon"></i> <span class="categories__title-margin">Разработчику</span>
                        </a>
                    </div>
                    <div class="categories__content">
                        <a href="#" class="categories__title">
                            <i class="fas fa-pen-nib"></i> <span class="categories__title-margin">Дизайнеру</span>
                        </a>
                    </div>
                    <div class="categories__content">
                        <a href="#" class="categories__title">
                            <i class="fas fa-film-alt"></i> <span class="categories__title-margin">Монтажеру</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="article">
            <div class="container-fluid">
                <h2 class="title-info">Статьи</h2>
                <?
                    for ($i=0; $i < 10; $i++) :
                ?>
                <div class="article__content d-flex">
                    <div class="article__img">
                        <img src="img/<? echo ($i+1) ?>.jpg" alt="" class="content__img">
                    </div>
                    <div class="article__info">
                        <a href="#" class="article__title content-title">Первый Mac у Стива Джобса</a>
                        <div class="meta d-flex">
                            <p class="meta-info"><i class="fal fa-calendar-alt"></i> <span class="meta-info__margin">23.01.2021</span></p>
                            <p class="meta-info"><i class="fal fa-album-collection"></i> <span class="meta-info__margin">Статья</span></p>
                        </div>
                        <p class="article__info-desc">Небольшая игрушка, сделанная буквально за 1 день.
                            В которой физика управления авто сделана лучше, чем в оригинальной игре от CDPR сделанной за 8 лет.</p>
                        <a href="#" class="article__pod">Подробнее</a>
                    </div>
                </div>
                <? endfor ?>
            </div>
        </section>
    </main>

    <? require "blocks/footer.php" ?>

    <div class="scroll-bar"></div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>