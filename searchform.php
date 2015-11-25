<?php
/**
 * Template Name: Search Form
 *
 * @package WordPress
 * @subpackage IA Theme
 * @since IA Theme 1.0
 */
?>
<form class="form-inline" role="form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control input-sm" name="s" id="search" value="<?php the_search_query(); ?>" autocomplete="off" placeholder="Kto hľadá, nájde"/>
      <span class="input-group-btn">
        <button class="btn btn-sm" type="submit">
         <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>
      </span>
    </div>
   </div>
</form>