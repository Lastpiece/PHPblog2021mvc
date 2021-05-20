<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>
    <title>DevBlog Fullstack 2021</title>
</head>

<body>
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <span class="icon is-large">
                    <i class="fab fa-dev fa-3x"></i>
                </span>
                <h1 class="title">
                    DevBlog : A Blog for Developpers
                </h1>
                <h2 class="subtitle">
                    Engineered at Talis Business School
                </h2>
                <p>En construction@Fullstack 2021</p>
            </div>
        </div>
    </section>
    <?php
        foreach($comments as $comment){
        ?>
        <article class="media">
            <div class="media-content">
                <div class="content">
                    <p>
                        <h2><?php echo $comment->getAuthorName(); ?></h2>
                        <!-- 
                        </small> <small>
                            <p>Crée le : <?php echo $comment->getCreatedAt(); ?>
                            </p>
                        </small> -->
                        <br>
                        <?php echo $comment->getContent(); ?>
                    </p>
                    <p><?php echo $comment->getAuthorMail(); ?></p>
                </div>
            </div>
            <div class="media-right">
                <small>
                    <p>Crée le : <?php echo $comment->getCreatedAt(); ?>
                    </p>
                </small>
            </div>
        </article>
    <?php
        }
    ?>
</body>

</html>