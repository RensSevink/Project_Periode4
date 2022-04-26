<?php

$title = 'Review archief';

$arguments = ['post_type' => 'reviews', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$reviewsItemCollection = get_posts($arguments);

render('views/templates/reviews-archive.php', compact('title', 'reviewsItemCollection'));