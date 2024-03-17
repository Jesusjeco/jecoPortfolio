<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH . "/jeco-items-list/jeco-items-list.css" ?>">
<?php
$data = get_field('data');
$background_color = $data['background_color'] ?? '';
$block_id = $block['id'];

$classes = <<<ITEM
.$block_id {
    background-color: $background_color;
}
ITEM;
?>

<style>
    <?= $classes ?>
</style>
<div class="jeco-items-list <?= $block_id ?>">
    <div class="wrapper">
        <h2 class="title"><?= $data['title'] ?></h2>
        <?php if ($data['items']) : ?>
            <div class="items">
                <?php
                foreach ($data['items'] as $item) : ?>
                    <div class="item">
                        <div>
                            <div class="company_logo"><img src="<?= $item['company_logo']['url'] ?>" alt=""></div>
                        </div>
                        <div>
                            <h3 class="item_title"><?= $item['item_title'] ?></h3>
                            <p class="dates"><?= $item['dates'] ?></p>
                            <div class="job_description"><?= $item['job_description'] ?></div>
                        </div>
                    </div>
                    <hr>
                <?php
                endforeach;
                ?>
            </div>
        <?php endif; ?>
    </div>
</div>