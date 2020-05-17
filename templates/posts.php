<?php

//Get .json file with posts
$json = file_get_contents(dirname(__DIR__, 1) . '/data/posts.json');
$data = json_decode($json);

?>
<div class="col-12">
    <h1>
        Posts
    </h1>
</div>
<br>
<div class="col-11">
    <?php

    foreach ($data as $post):
    ?>
    <div class="post-card">
            <h2>
                <?php echo $post->title ?>
            </h2>
            <p>
                <?php echo $post->text ?>
            </p>
            <i>
                <?php echo $post->author . ', ' . $post->date ?>
            </i>
    </div>
    <?php

    endforeach;

    ?>
</div>