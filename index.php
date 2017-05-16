<?php
  $gridderFileName = "gridder-1.4.1.css";
  $gridderFilePath = "/gridder/compiled/gridder-1.4.1.css";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document title</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/ico" href="/assets/img/favicon.ico">
</head>
<body>

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
          <a href="#0">Installation guide</a>
          <a href="#0">Examples</a>
          <a href="#0">Docs</a>
        </div>
      </nav>

      <div class="row">
        <div class="tiny-12 small-12 medium-6 large-6">
          <h1 class="headline">Gridder - The simple grid system based on Flexbox.</h1>
          <p class="subline">Gridder's fluid grid and breakpoints enable endless combinations of column sizes, offsets, allignments and viewport widths.</p>
          <a href="<?php echo $gridderFilePath; ?>" download class="button primary">Download Gridder</a>
          <a href="#0" class="button">Visit Github</a>
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
        <div class="medium-12">
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
          <br><p>Gridder is also available through <strong>CDNJS:</strong></p>
          <pre><code class="html codeblock http">
https://cdnjs.cloudflare.com/ajax/libs/3Dmol/1.1.0/3Dmol-min.js
          </code></pre>
          <br><p>Gridder is on <strong>NPM:</strong></p>
          <pre><code class="html codeblock http">
npm install gridder
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
        <div class="medium-5">
          <h3>What about browser support ?</h3>
          <p>Gridder works in all modern browsers. <span class="label inline dark">IE10+</span> <span class="label inline dark">Edge</span> <span class="label inline dark">Firefox</span> <span class="label inline dark">Chrome</span> <span class="label inline dark">Safari</span> <span class="label inline dark">Opera</span></p>
          <p class="ciu_embed" data-feature="flexbox" data-periods="future_1,current,past_1,past_2">
            <a href="http://caniuse.com/#feat=flexbox">Can I Use flexbox?</a> Data on support for the flexbox feature across the major browsers from caniuse.com.
          </p>
        </div>
        <div class="medium-6 medium-offset-1">
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

  <footer>
    <div class="container">
      <div class="row">
        <div class="medium-12 center-tiny">
          <svg id="gridder-logo" width="40px" height="40px" viewBox="0 0 315 313" xmlns="http://www.w3.org/2000/svg">
            <title>Gridder Logo</title>
            <desc>Gridder Logo</desc>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <path d="M306.328883,98.5887695 C311.117809,101.337614 315,108.035396 315,113.573366 L315,257.559076 C315,271.370015 305.297934,276.997004 293.318607,270.120866 L126.671117,174.465149 C121.882191,171.716304 118,165.018522 118,159.480552 L118,15.4948421 C118,1.68390288 127.702066,-3.94308625 139.681393,2.93305188 L306.328883,98.5887695 Z" id="rect-2" fill="#f8f8f8"></path>
              <path d="M188.328883,137.588769 C193.117809,140.337614 197,147.035396 197,152.573366 L197,296.559076 C197,310.370015 187.297934,315.997004 175.318607,309.120866 L8.67111664,213.465149 C3.88219116,210.716304 0,204.018522 0,198.480552 L0,54.4948421 C0,40.6839029 9.70206587,35.0569138 21.6813933,41.9330519 L188.328883,137.588769 Z" id="rect-1" fill="#f8f8f8"></path>
            </g>
          </svg>
          <p>Gridder is a free and open source project created by <a href="https://tristanwhite.info" target="_blank">Tristan White</a> and maintained by the core team.</p>
          <a href="https://github.com/triss90/gridder_v4" target="_blank">
            <svg id="github-icon" baseProfile="tiny" height="40px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g><g><path d="M14.435,12.973c0.269,0,0.492,0.133,0.686,0.396c0.192,0.265,0.294,0.588,0.294,0.975c0,0.385-0.102,0.711-0.294,0.973    c-0.193,0.265-0.417,0.396-0.686,0.396c-0.278,0-0.522-0.131-0.715-0.396c-0.192-0.262-0.294-0.588-0.294-0.973    c0-0.387,0.102-0.71,0.294-0.975C13.912,13.105,14.156,12.973,14.435,12.973 M17.875,9.414C18.621,10.225,19,11.209,19,12.367    c0,0.748-0.086,1.423-0.259,2.023c-0.175,0.597-0.394,1.084-0.654,1.459c-0.264,0.376-0.588,0.705-0.974,0.989    c-0.386,0.286-0.741,0.492-1.065,0.623c-0.325,0.132-0.695,0.233-1.111,0.306c-0.417,0.071-0.726,0.111-0.943,0.123    c-0.213,0.009-0.438,0.014-0.685,0.014c-0.055,0-0.243,0.004-0.547,0.015c-0.301,0.013-0.56,0.016-0.762,0.016    s-0.461-0.003-0.762-0.016c-0.304-0.011-0.492-0.015-0.547-0.015c-0.246,0-0.472-0.005-0.685-0.014    c-0.218-0.012-0.526-0.052-0.943-0.123c-0.423-0.072-0.786-0.174-1.111-0.306c-0.324-0.131-0.68-0.337-1.064-0.623    c-0.387-0.284-0.711-0.613-0.975-0.989c-0.261-0.375-0.479-0.862-0.654-1.459C5.086,13.79,5,13.115,5,12.367    c0-1.158,0.379-2.143,1.125-2.953C6.043,9.373,6.04,8.967,6.117,8.197C6.18,7.426,6.344,6.715,6.612,6.065    c0.934,0.099,2.09,0.629,3.471,1.581C10.549,7.527,11.184,7.463,12,7.463c0.852,0,1.491,0.064,1.918,0.184    c0.629-0.425,1.23-0.771,1.805-1.034c0.584-0.261,1.005-0.416,1.269-0.457l0.396-0.09c0.27,0.649,0.434,1.36,0.496,2.132    C17.96,8.967,17.957,9.373,17.875,9.414 M12.03,17.234c1.688,0,2.954-0.202,3.821-0.607c0.855-0.404,1.292-1.238,1.292-2.496    c0-0.73-0.273-1.34-0.822-1.828c-0.278-0.263-0.613-0.425-0.989-0.486c-0.375-0.061-0.949-0.061-1.72,0    c-0.769,0.062-1.298,0.09-1.582,0.09c-0.385,0-0.8-0.018-1.319-0.059c-0.52-0.04-0.928-0.065-1.223-0.078    c-0.294-0.009-0.609,0.027-0.958,0.108c-0.345,0.082-0.629,0.224-0.853,0.425c-0.521,0.469-0.79,1.077-0.79,1.828    c0,1.258,0.426,2.092,1.28,2.496c0.85,0.405,2.113,0.607,3.802,0.607H12.03 M9.596,12.973c0.268,0,0.492,0.133,0.685,0.396    c0.192,0.265,0.294,0.588,0.294,0.975c0,0.385-0.102,0.711-0.294,0.973c-0.192,0.265-0.417,0.396-0.685,0.396    c-0.279,0-0.522-0.131-0.716-0.396c-0.192-0.262-0.294-0.588-0.294-0.973c0-0.387,0.102-0.71,0.294-0.975    C9.073,13.105,9.316,12.973,9.596,12.973"/></g></g></svg>
          </a>
          <a href="https://twitter.com/Triss90" target="_blank">
            <svg id="twitter-icon" baseProfile="tiny" height="40px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"><g><path d="M18.89,7.012c0.808-0.496,1.343-1.173,1.605-2.034c-0.786,0.417-1.569,0.703-2.351,0.861   c-0.703-0.756-1.593-1.14-2.66-1.14c-1.043,0-1.924,0.366-2.643,1.078c-0.715,0.717-1.076,1.588-1.076,2.605   c0,0.309,0.039,0.585,0.117,0.819C8.806,9.096,6.26,7.82,4.254,5.364c-0.34,0.601-0.51,1.213-0.51,1.846   c0,1.301,0.549,2.332,1.645,3.089c-0.625-0.053-1.176-0.211-1.645-0.47c0,0.929,0.273,1.705,0.82,2.388   c0.549,0.676,1.254,1.107,2.115,1.291c-0.312,0.08-0.641,0.118-0.979,0.118c-0.312,0-0.533-0.026-0.664-0.083   c0.23,0.757,0.664,1.371,1.291,1.841c0.625,0.472,1.344,0.721,2.152,0.743c-1.332,1.045-2.855,1.562-4.578,1.562   c-0.422,0-0.721-0.006-0.902-0.038c1.697,1.102,3.586,1.649,5.676,1.649c2.139,0,4.029-0.542,5.674-1.626   c1.645-1.078,2.859-2.408,3.639-3.974c0.784-1.564,1.172-3.192,1.172-4.892V8.34c0.758-0.57,1.371-1.212,1.84-1.921   C20.32,6.712,19.617,6.911,18.89,7.012z"/></g></svg>
          </a>
        </div
      </div>
    </div>
  </footer>
  <a href="https://www.iotacss.com/">https://www.iotacss.com/</a> ||
  <a href="https://mothereff.in/html-entities">https://mothereff.in/html-entities</a> ||
  <a href="https://github.com/cdnjs/cdnjs/blob/master/CONTRIBUTING.md">https://github.com/cdnjs/cdnjs/blob/master/CONTRIBUTING.md</a> ||
  <a href="https://docs.npmjs.com/getting-started/publishing-npm-packages">https://docs.npmjs.com/getting-started/publishing-npm-packages</a> ||
  <a href="https://www.gridder.io/">https://www.gridder.io/</a>
  <!--Content End-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="/assets/js/highlight.pack.js"></script>
  <script src="//cdn.jsdelivr.net/caniuse-embed/1.1.0/caniuse-embed.min.js"></script>
  <script src="/assets/js/functions.js"></script>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', '??????????????', 'auto');
    ga('send', 'pageview');
  </script>

</body>
</html>
