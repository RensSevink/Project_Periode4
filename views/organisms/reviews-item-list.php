<?php
/** @var array $reviewsItemCollection */
?>

<ul class="reviews-item-list">
    <?php foreach($reviewsItemCollection as $reviewsItem): ?>
        <?php render('views/molecules/reviews-item-list-item.php', compact('reviewsItem'))?>
    <?php endforeach; ?>
</ul>
