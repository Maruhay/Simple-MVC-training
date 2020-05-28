<div class="col-12">
    <h1>
        Posts
    </h1>
</div>
<br>
<div class="col-11">
    <?php

    foreach ($posts as $post):
        ?>
        <div class="post-card">
            <h2>
                <?php echo $post["title"] ?>
            </h2>
            <p>
                <?php echo $post["text"] ?>
            </p>
            <i>
                <?php echo $post["author"] . ', ' . date('d/m/Y', strtotime($post["date"])) ?>
            </i>
        </div>
        <?php

    endforeach;

    ?>
</div>