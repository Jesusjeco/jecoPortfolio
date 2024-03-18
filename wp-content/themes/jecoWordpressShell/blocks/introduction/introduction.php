<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH . "/introduction/introduction.css" ?>">
<?php
$data = get_field('data');

?>
<div class="jeco-introduction">
    <div class="wrapper">
        <div class="left">
            <div class="picture">
                <img src="<?= $data['profile_picture']['url'] ?>" alt="">
            </div>
            <div class="greeting">
                <h1 class="h2"><?= $data['greeting'] ?></h1>
            </div>
        </div>
        <div class="right">
            <div class="introduction">
                <?= $data['introduction'] ?>
            </div>
        </div>
    </div>
</div>