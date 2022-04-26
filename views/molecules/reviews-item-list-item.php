<?php
/** @var WP_Post $reviewsItem */

$categories = get_the_terms(get_post($reviewsItem->ID), 'reviewsCategory');
?>

<li>
    <strong>Titel: </strong> <?php echo $reviewsItem->post_title; ?>
    <ul>
        <li>
            <strong>Datum: </strong> <?php echo date('d-m-Y', strtotime($reviewsItem->post_date)); ?>
        </li>
        <li>
            <strong>Content: </strong> <?php echo $reviewsItem->post_content; ?>
        </li>
        <li>
            <strong>Categories: </strong>
            <?php render('views/organisms/category-list.php', compact('categories')); ?>
        </li>
    </ul>
</li>
