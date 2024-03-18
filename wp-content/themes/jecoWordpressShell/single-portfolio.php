<?php
wp_enqueue_style("single-portfolio-styles");
get_header();

$data = get_field("data"); ?>

<div class="single-portfolio">
    <div class="wrapper">
        <div class="left">
            <h2 class="content">
                <?= $data['content'] ?>
            </h2>
            <div class="link">
                <?php
                $link = $data['link'];
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" style="background-color: <?= $data['link_background_color'] ?>; color: <?= $data['link_text_color'] ?>;">
                        <?php echo esc_html($link_title); ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="content2">
                <?= $data['content_2'] ?>
            </div>

        </div>
        <div class="image">
            <a href="<?= $data['image']['url'] ?>" target="_blank">
                <img src="<?= $data['image']['url'] ?>" alt="<?= $data['image']['alt'] ?>">
            </a>
        </div>
    </div>
</div>

<?php
// the_content();
get_footer();
