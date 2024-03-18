<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH . "/jeco-past-works/jeco-past-works.css" ?>">
<?php
$data = get_field('data');
$jeco_past_works_query_query_data = [
    "post_type" => "portfolio",
];
$jeco_past_works_query_query = new WP_Query($jeco_past_works_query_query_data);
?>
<div class="jeco-past-works">
    <div class="wrapper">
        <h2><?= $data['title'] ?></h2>


        <?php
        if ($jeco_past_works_query_query->have_posts()) : ?>
            <div class="works">
                <?php
                while ($jeco_past_works_query_query->have_posts()) :
                    $jeco_past_works_query_query->the_post();

                    $the_id = get_the_ID();
                    $title = get_the_title();
                    $permalink = get_the_permalink();
                    $thumbnail_url = get_the_post_thumbnail_url();
                    $thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?? get_post(get_post_thumbnail_id())->post_title; ?>
                    <a class="work" href="<?= $permalink ?>">
                        <div class="thumbnail">
                            <img src="<?= $thumbnail_url ?>" alt="<?= $thumbnail_alt ?>">
                        </div>
                        <h3 class="title h4">
                            <?= $title ?>
                        </h3>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>