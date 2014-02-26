<?php

get_header();

$siteurl = site_url();
$category = get_category($cat);
$args = array(
    'type'                     => 'post'
    ,'child_of'                 => $category->cat_ID
    ,'parent'                   => ''
    ,'orderby'                  => 'name'
    ,'order'                    => 'ASC'
    ,'hide_empty'               => 0
    ,'hierarchical'             => 1
    ,'exclude'                  => ''
    ,'include'                  => ''
    ,'number'                   => 0
    ,'taxonomy'                 => 'category'
    ,'pad_counts'               => false 
);
$categories = get_categories($args);
$counter = 0;
?>

<div class="container content category-container">
    <?php foreach($categories as $cat):
            $imgUrl = $siteurl . '/wp-content/uploads/' . $category->slug . '_' . $cat->slug . '.jpg';
            $class = ($counter % 2) ? 'pull-right' : '';
            $counter++;
        ?>
        <div class="col-xs-6 w49 <?php echo $class ?>">
            <div class="category-box">
                <img src="<?php echo $imgUrl ?>">
                <a class="category-name" href="<?php echo get_category_link($cat->cat_ID) ?>">
                    <span><?php echo $cat->name ?></span>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php get_footer() ?>