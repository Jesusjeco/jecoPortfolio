<link rel="stylesheet" href="<?= BLOCKS_STYLES_PATH . "/jeco-past-works/jeco-past-works.css" ?>">
<?php
$data = get_field('data');
$jeco_past_works_query_query_data = [
    "post_type" => "portfolio",
    "posts_per_page" => $data['posts_per_page'] ?? -1,
];
$jeco_past_works_query_query = get_query($jeco_past_works_query_query_data);
?>
<div class="jeco-past-works">
    <div class="wrapper">
        <h2>
            <?= $data['title'] ?>
        </h2>
        <?php
        if ($data['content']): ?>
            <div class="content">
                <?= $data['content'] ?>
            </div>
            <?php
        endif;
        ?>

        <?php
        if ($jeco_past_works_query_query->have_posts()): ?>
            <div class="works">
                <?php
                while ($jeco_past_works_query_query->have_posts()):
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

        <?php
        $link = $data['button_link'];
        if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <div class="button_link">
                <a class="button button-primary" href="<?php echo esc_url($link_url); ?>"
                    target="<?php echo esc_attr($link_target); ?>">
                    <?php echo esc_html($link_title); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>