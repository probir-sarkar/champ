<?php
	require_once( 'api.php' );
    $ig = new IGFeed();
?>

<div><pre style='width: 100%; height: 300px; overflow: auto;'>
    <?php var_dump($ig->test()); ?>
</pre></div>

<section>
    <?php foreach($ig->getPosts() as $post){ ?>
        <div style="border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 3px 5px #0003; margin-bottom: 1rem; padding: 1rem;">
            <?php if($post['media_type'] == 'IMAGE'){ ?>
            <img style="width: 200px;" src="<?php echo $post['media_url']; ?>">
            <?php } else if($post['media_type'] == 'VIDEO'){ ?>
            <video style="width: 200px;" src="<?php echo $post['media_url']; ?>"></video>
            <?php } ?>
            <h4><a href="post.php?post_id=<?php echo $post['id']; ?>"><?php echo $post['caption']; ?></a></h4>
        </div>
    <? } ?>
</section>
