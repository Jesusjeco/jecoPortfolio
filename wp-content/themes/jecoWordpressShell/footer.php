<?php
$footer_data = get_field('footer_data', 'option');
?>
<footer>
    <div class="wrapper">
        <div class="name">
            <h2><?= $footer_data['name'] ?></h2>
            <h3><?= $footer_data['job_title'] ?></h3>
        </div>
        <div class="contact">
            <p><?= $footer_data['email'] ?></p>
            <p>Linkedin: <a href="<?= $footer_data['linkedin'] ?>">
                <?= $footer_data['linkedin'] ?></a>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>