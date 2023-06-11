<?php
/**
 * Title: Search
 * Slug: quincy-prototype/search
 * Categories: widgets
 * Keywords: Search facets
 * Block Types: core/buttons
 */
?>


<!-- wp:group {"align":"wide","className":"facet programs","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet programs" id="program-areas">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">Program Areas</h3>
    <!-- /wp:heading -->

    <!-- wp:elasticpress/facet {"facet":"category","orderby":"name","order":"asc","className":"facet__programs alignwide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"facet topics","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet topics" id="topics">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">Topics</h3>
    <!-- /wp:heading -->

    <!-- wp:elasticpress/facet {"facet":"post_tag","orderby":"name","order":"asc","className":"facet__topics alignwide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"facet people","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet people" id="people">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">People</h3>
    <!-- /wp:heading -->

    <!-- wp:elasticpress/facet {"facet":"person","orderby":"name","order":"asc","className":"facet__people alignwide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"facet product-types","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet product-types" id="product-types">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">Product Types</h3>
    <!-- /wp:heading -->

    <!-- wp:elasticpress/facet {"facet":"product_type","orderby":"name","order":"asc","className":"facet__product-types alignwide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"facet entities","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet entities" id="entitities">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">Entities</h3>
    <!-- /wp:heading -->

    <!-- wp:elasticpress/facet {"facet":"entity","orderby":"name","order":"asc","className":"facet__entities alignwide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"facet regions","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet regions" id="regions">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">Regions</h3>
    <!-- /wp:heading -->

    <!-- wp:elasticpress/facet {"facet":"region","orderby":"name","order":"asc","className":"facet__regiions alignwide"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"facet search","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide facet search" id="search">
    <!-- wp:heading {"level":3,"align":"wide"} -->
    <h3 class="wp-block-heading alignwide">Keyword</h3>
    <!-- /wp:heading -->

    <!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonUseIcon":true,"align":"wide","className":"alignwide"} /-->
</div>
<!-- /wp:group -->