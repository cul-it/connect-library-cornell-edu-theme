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
        <ul class="nav nav-icons">
          <li><a href="#"><i class="fa fa-pencil"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-flickr"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="intro-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce placerat ligula in risus interdum, nec commodo ipsum consectetur.</p>
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