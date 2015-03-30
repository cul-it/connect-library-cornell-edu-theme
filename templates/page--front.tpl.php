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
  var container = document.querySelector('.masonry-container');  
  imagesLoaded( container, function() {
    var msnry = new Masonry( container, {
      // options
      columnWidth: 25,
      itemSelector: '.item'
    });
  });
</script>

