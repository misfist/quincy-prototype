<?php
/**
 * Title: Search
 * Slug: quincy-prototype/search
 * Categories: widgets
 * Keywords: Search facets
 * Block Types: core/buttons
 */

global $wp_query;
// var_dump( get_queried_object() );
?>

<!-- wp:query-title {"type":"search","align":"wide"} /-->
<!-- wp:tag-cloud {"taxonomy":"category"} /-->
<!-- wp:tag-cloud {"taxonomy":"product_type"} /-->
<!-- wp:tag-cloud {"taxonomy":"post_tag"} /-->
<!-- wp:tag-cloud {"taxonomy":"entity"} /-->
<!-- wp:tag-cloud {"taxonomy":"person"} /-->
<!-- wp:elasticpress/facet {"facet":"category","orderby":"name","order":"asc","className":"facet__programs"} /-->
<!-- wp:elasticpress/facet {"facet":"product_type","orderby":"name","order":"asc","className":"facet__product"} /-->
<!-- wp:elasticpress/facet {"facet":"post_tag","orderby":"name","order":"asc","className":"facet__topic"} /-->
<!-- wp:elasticpress/facet {"facet":"person","orderby":"name","order":"asc","className":"facet__person"} /-->
<!-- wp:elasticpress/facet {"facet":"author","orderby":"name","order":"asc","className":"facet__author"} /-->
<!-- wp:elasticpress/facet {"facet":"entity","orderby":"name","order":"asc","className":"facet__entity"} /-->
<!-- wp:search {"label":"Search","align":"wide","buttonText":"Search","buttonUseIcon":true} /-->