<!DOCTYPE	html>
<html lang="pl-PL">

<?php
get_header();
?>
<div class ="paralax">
<iframe width="560" height="315" src="https://www.youtube.com/embed/7KW_5P1fkws?rel=0&amp;controls=0&amp;start=2;stop=104;&amp;autoplay=1;&amp;mute=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
<!-- <iframe class="youtube-player" id="player" type="text/html" src="http://www.youtube.com/embed/JW5meKfy3fY?wmode=opaque&autohide=1&autoplay=1&enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen</iframe> -->
  <div class ="MobilityIsAllAbout">
  </div>
</div>
<div class = "SiteMap">
W trakcie budowy:
</div>
<div class= "ServiceMenu">
    <div class = "Onas">
    <!-- tło -->
  <h1>O nas</h1>
  </div>


  <div class="whatsNew">
<h1>Przegląd wydarzeń</h1>
  <?php
  echo do_shortcode( '[wp_rss_aggregator limit="2" links_before=\'<ul class="rss-aggregator">\' link_before=\'<li class="feed-item-link">\']' );
  ?>
  </div>

  <div class = "Maas">
    <h1>Mobility as a Service</h1>
  </div>

  <div class = "Planning">
  <h1>Planning</h1>
  </div>
  <div class = "Deployments">
  <h1>Deployments</h1>
  </div>

  <div class = "Evaluation">
  <h1>Evaluation</h1>
  </div>

  <div class = "Operation">
  <h1>Operation</h1>
  </div>

  <div class = "Owitrynie">
  <h1>Owitrynie</h1>

  </div>
</div> //servicemenu


<div class="CommercialBar">Reklama</div>
</div>


<div class="footer-container">
  <?php
  get_footer();
  ?>
</div>



</div>
<!-- //div koniec diva z głównego kontenera z headera -->
</body>
</html>
