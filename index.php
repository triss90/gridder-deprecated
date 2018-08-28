<?php
  $pageTitle = "Gridder CSS";
  $pageDescription = "Gridder - The simple grid system based on Flexbox";
?>

<?php include_once('inc/header.php'); ?>

  <!--Content-->
  <header class="header">
    <div class="container">

      <nav class="navigation">
        <a href="/" class="logo">
          <svg id="gridder-logo" width="40px" height="40px" viewBox="0 0 315 313" xmlns="http://www.w3.org/2000/svg">
            <title>Gridder Logo</title>
            <desc>Gridder Logo</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path d="M306.328883,98.5887695 C311.117809,101.337614 315,108.035396 315,113.573366 L315,257.559076 C315,271.370015 305.297934,276.997004 293.318607,270.120866 L126.671117,174.465149 C121.882191,171.716304 118,165.018522 118,159.480552 L118,15.4948421 C118,1.68390288 127.702066,-3.94308625 139.681393,2.93305188 L306.328883,98.5887695 Z" id="rect-2" fill="#f8f8f8"></path>
              <path d="M188.328883,137.588769 C193.117809,140.337614 197,147.035396 197,152.573366 L197,296.559076 C197,310.370015 187.297934,315.997004 175.318607,309.120866 L8.67111664,213.465149 C3.88219116,210.716304 0,204.018522 0,198.480552 L0,54.4948421 C0,40.6839029 9.70206587,35.0569138 21.6813933,41.9330519 L188.328883,137.588769 Z" id="rect-1" fill="#f8f8f8"></path>
            </g>
          </svg>
          <span class="text">Gridder</span>
        </a>
        <div class="navigation-items">
          <a href="/docs/installation/">Installation guide</a>
          <a href="/docs/examples">Examples</a>
          <a href="/changelog">Changelog</a>
          <a href="/docs/">Docs</a>
        </div>
      </nav>

      <div class="row">
        <div class="tiny-12 small-12 medium-6 large-6">
          <h1 class="headline">Gridder - The simple grid system based on Flexbox.</h1>
          <p class="subline">Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, allignments and viewport widths.</p>
          <a href="<?php echo $gridderFilePath; ?>" download class="button primary">Download Gridder</a>
          <a href="https://github.com/triss90/gridder" target="_blank" class="button">Visit Github</a>
        </div>
        <div class="tiny-12 small-12 medium-6 medium-offset-0 large-5 large-offset-1">
          <div class="browser">
            <div class="browser-header">
              <div class="browser-buttons">
                <div class="button-red"></div>
                <div class="button-yellow"></div>
                <div class="button-green"></div>
              </div>
              <div class="browser-title">Fluid grid</div>
            </div>
            <div class="browser-body">
              <div class="box one"></div>
              <div class="box two"></div>
              <div class="box three"></div>
              <div class="box four"></div>
              <div class="box five"></div>
              <div class="box six"></div>
              <div class="box seven"></div>
              <div class="box eight"></div>
              <div class="box nine"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="devider"></div>

      <div class="row howto">
        <div class="tiny-12 small-12 medium-6">
          <div class="label">How it works</div>
            <h2>The syntax</h2>
            <p>First, make sure to wrap your columns in a row element. Then specify your columns and stick your content inside.
            Use the following classes to identify your coloumns: <span class="label inline">tiny-*</span> <span class="label inline">small-*</span> <span class="label inline">medium-*</span> <span class="label inline">large-*</span></p>
            <i>* is a number between 1 and 12, where 1 is a single column.</i>
          </p>
        </div>
        <div class="tiny-12 small-12 medium-6">
          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-12&#x22;&#x3E;
    This spans 12/12 columns on all screensizes
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;medium-6&#x22;&#x3E;
    This spans 6/12 columns on screens wider then
    the medium breakpoint, but will span 12/12 on smaller screens
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;small-12 medium-6 large-4&#x22;&#x3E;
    This spans 12/12 columns on small screens,
    6/12 on medium screens and 4/4 on large screens
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>
        </div>
      </div>
    </div>
  </header>


  <section id="getting-started">
    <div class="container">
      <div class="row">
        <div class="tiny-12">
          <div class="label">Getting started</div>
          <h2>Quick installation guide</h2>
          <p>Simply <a href="<?php echo $gridderFilePath; ?>" download>download</a> gridder and add it to your head, like this:</p>
          <pre><code class="html codeblock">
// index.html
&#x3C;html&#x3E;
  &#x3C;head&#x3E;
    &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;
    &#x3C;link href=&#x22;path/to/gridder.css&#x22; rel=&#x22;stylesheet&#x22;&#x3E;
  &#x3C;/head&#x3E;
  &#x3C;body&#x3E;
    &#x3C;div id=&#x22;app&#x22;&#x3E;&#x3C;/div&#x3E;
  &#x3C;/body&#x3E;
&#x3C;/html&#x3E;
          </code></pre>
          <p>Remember to add <span class="label inline dark">&#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;</span> to the head aswell, to make sure the site scales correctly</p>
          <br><p>Gridder is also available through this <strong>jsdelivr:</strong></p>
          <pre><code class="html codeblock http">
https://cdn.jsdelivr.net/npm/gridder-css@1.5.0/gridder.min.css
          </code></pre>

            <br>
            <p>You can also add Gridder with <strong><a href="https://www.npmjs.com/package/gridder-css" target="_blank">NPM</a>:</strong></p>
            <pre><code class="html codeblock cmd">
npm install gridder-css
          </code></pre>
        </div>
      </div>
    </div>
  </section>


  <section id="faq">
    <div class="container">
      <div class="row center-tiny">
        <h2>Frequently asked questions</h2>
      </div>
      <hr>
      <div class="row">
        <div class="tiny-12 small-12 medium-5 large-5">
          <h3>What about browser support ?</h3>
          <p>Gridder works in all modern browsers. <span class="label inline dark">IE10+</span> <span class="label inline dark">Edge</span> <span class="label inline dark">Firefox</span> <span class="label inline dark">Chrome</span> <span class="label inline dark">Safari</span> <span class="label inline dark">Opera</span></p>
          <p class="ciu_embed" data-feature="flexbox" data-periods="future_1,current,past_1,past_2">
            <a href="http://caniuse.com/#feat=flexbox">Can I Use flexbox?</a> Data on support for the flexbox feature across the major browsers from caniuse.com.
          </p>
        </div>
        <div class="tiny-12 small-12 medium-6 medium-offset-1 large-6 large-offset-1">
          <h3>What is in store for Gridder in the future ?</h3>
          <p>Were currently working on a new version of gridder built entirely on <span class="label inline dark">CSS Grid Layout</span>. This build, however, will remain experimental untill the it is fully <a href="http://caniuse.com/#search=gri" target="_blank">supported</a> in all major browser</p>

          <h3>Should I use Gridder in my next project?</h3>
          <p>The short answer... YES!</p>
          <p>Gridder is built to be scalable, and thus works for small, aswell as large projects. There's been some controversy about the speed of flexbox when used for pagelayouts, but this has been <a href="https://developers.google.com/web/updates/2013/10/Flexbox-layout-isn-t-slow" target="_blank">debunked</a></p>
          <p>With that said, Gridder excels in small to mid-sized projects, largly because of it's easy of use and setup.</p>
        </div>
      </div>
      <div class="row">

      </div>
    </div>
  </section>

<?php include_once('inc/footer.php') ?>
