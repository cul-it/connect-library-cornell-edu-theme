<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>

<div class="cornell-brand">
  <div class="container hidden-xs">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/social/images/layout/cul-logo-white.gif" alt="Cornell University Library">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
            <a id="unit-link" href="http://www.library.cornell.edu">Cornell University Library</a>
          </div>
        </div>
      </div>
      <div class="search-links hidden-xs">
        <ul>
          <li><a href="http://www.library.cornell.edu/accessiblesearch/">Search Library</a></li>
          <li><a href="http://www.cornell.edu/search/">Search Cornell</a></li>
        </ul>
      </div>
    </div>
  </div>
  <a class="visible-xs" href="http://www.library.cornell.edu"><img src="/sites/all/themes/social/images/layout/cul-mobile.png" alt="Cornell University Library"></a>
</div>

<div class="navbar" role="navigation">
  <div class="container">
    <div class="row">
      <div class="brand">
        <a class="navbar-brand" href="/">Social<span>@</span>CUL</a>
      </div>
      <div class="social-types">
        <?php print render($page['navigation']); ?>
      </div>
    </div>
    <div class="row">
      <div class="intro-text">
        <?php print render($page['introtext']); ?>
      </div>
    </div>
  </div>
</div>

<div class="social-feed">
  <div class="container-fluid">
    <?php print render($page['feed']); ?>
  </div>
</div>

<div class="container">
  <footer>
    <?php print render($page['footer']); ?>
  </footer>
</div> <!-- /container -->

<?php print render($page['bottom']); ?>

<script type="text/javascript">
  var container = document.querySelector('.view-social-aggregator-with-masonry');
  var msnry = new Masonry( container, {
    // options
    columnWidth: 200,
    itemSelector: '.item'
  });
</script>

<!--
<script type="text/javascript">
  jQuery(document).ready(function() { 
  var randomImages = ['etching1','etching2','etching3','etching4']; 
  var rndNum = Math.floor(Math.random() * randomImages.length); 
  jQuery(".hero").css({ background: "url('/sites/all/themes/signale/images/hero/" + randomImages[rndNum] + ".jpg') no-repeat" }); });
</script>
-->