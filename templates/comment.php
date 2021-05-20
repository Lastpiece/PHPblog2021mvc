    <?php
    require 'inc/header.php';
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
        require 'inc/footer.php';
    ?>