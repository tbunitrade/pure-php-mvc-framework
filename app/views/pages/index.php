<?php require APPROOT .'/views/inc/header.php'; ?>
<h1> <?= $data['post_title'];?></h1>
<ul>
    <?php foreach($data['posts'] as $post) : ?>
    <li>
        <?php echo $post->title ?>
    </li>

    <?php endforeach; ?>
</ul>
<?php echo APPROOT; ?>
<?php require APPROOT .'/views/inc/footer.php'; ?>