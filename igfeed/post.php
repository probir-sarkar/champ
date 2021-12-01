<?php
require('api.php');
$ig = new IGFeed();
$post_id = $_GET['post_id'];
$post_data = $ig->getPost($post_id);
echo '<pre>';
var_dump($post_data);
echo '</pre>'
?>

<div>
    <?php if($post_data['media_type'] == 'IMAGE'){ ?>
    <img style="width: 300px;" src="<?php echo $post_data['media_url']; ?>" alt="">
    <?php } else if($post_data['media_type'] == 'VIDEO'){ ?>
    <video style="width: 300px;" src="<?php echo $post_data['media_url']; ?>"></video>
    <?php } ?>
    <h2><?php echo $post_data['caption']; ?></h2>
</div>