    <?php
        require 'inc/header.php';
        foreach($articles as $article){
        ?>
         <article class="media">
        <figure class="media-left mt-3">
            <p class="image is-128x128">
                <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <h2><?php echo $article->getTitle(); ?></h2>
                    <!-- 
                    </small> <small>
                        <p>Crée le : <?php echo $article->getCreatedAt(); ?>
                        </p>
                    </small> -->
                    <br>
                    <?php echo $article->getContent(); ?>
                </p>
            </div>
        </div>
        <div class="media-right">
            <small>
                <p>Crée le : <?php echo $article->getCreatedAt(); ?>
                </p>
            </small>
        </div>
    </article>
    <?php
        }
        require 'inc/footer.php';
    ?>
