require 'inc/'
    <?php
    require 'inc/header.php';
        foreach($users as $user){
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
                    <h2><?php echo $user->getTitle(); ?></h2>
                    <!-- 
                    </small> <small>
                        <p>Crée le : <?php echo $user->getCreatedAt(); ?>
                        </p>
                    </small> -->
                    <br>
                    <?php echo $user->getContent(); ?>
                </p>
            </div>
        </div>
        <div class="media-right">
            <small>
                <p>Crée le : <?php echo $user->getCreatedAt(); ?>
                </p>
            </small>
        </div>
    </article>
    <?php
        }
        require 'inc/footer.php';
    ?>