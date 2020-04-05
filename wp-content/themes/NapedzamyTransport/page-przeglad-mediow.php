<?php get_header();?>
<div class="PrzegladWydarzen">
<?php
echo do_shortcode( '[wp_rss_aggregator limit="20" links_before=\'<ul class="rss-aggregator">\' link_before=\'<li class="feed-item-link">\']' );
?>
</div>



<div class="footer-container">
  <?php
  get_footer();
  ?>
</div>
