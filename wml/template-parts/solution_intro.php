<?php
    $bg = get_sub_field('img');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('sub_title');
?>

<div class="solution-intro" style="background-image: url('<?= $bg['url'] ?>')">
    <div class="container">
        <h1 class="solution-intro__title"><?= $title ?></h1>
        <p class="solution-intro__subtitle"><?= $subtitle ?></p>
    </div>
</div>