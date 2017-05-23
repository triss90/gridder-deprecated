<?php
  $pageTitle = "Gridder - Offset";
  $pageDescription = "You can offset columns to your liking";
?>

<?php include_once('../../inc/header.php') ?>

<div class="documentation_wrapper">

  <div class="documentation_inner">

    <?php include_once('../../inc/doc_nav.php') ?>

    <div class="documentation_content">

      <div class="row end-tiny start-medium">
        <div class="tiny">
          <div class="breadcrumbs">
            <a href="/docs" class="crumb">Documentation</a>
            <a href="#0" class="crumb">Offsets</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Offsets</h1>
          <p>Offsetting columns is easy, simply and <span class="label inline dark">*-offset-3</span> if you wish to offset your column 3 columns from the left.
            The * in this case referes to one of the breakpoints (tiny, small, medium and large).</p>
          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-offset-3 tiny-9&#x22;&#x3E;
    offset 3 columns
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>
        </div>

      </div>

      <h2>Example</h2>

      <div class="row">
      	<div class="tiny-offset-11 tiny-1">
      		<div class="example-box"></div>
      	</div>
      </div>
      <div class="row">
      	<div class="tiny-offset-10 tiny-2">
      		<div class="example-box"></div>
      	</div>
      </div>
      <div class="row">
      	<div class="tiny-offset-9 tiny-3">
      		<div class="example-box"></div>
      	</div>
      </div>
      <div class="row">
      	<div class="tiny-offset-8 tiny-4">
      		<div class="example-box"></div>
      	</div>
      </div>
      <div class="row">
      	<div class="tiny-offset-7 tiny-5">
      		<div class="example-box"></div>
      	</div>
      </div>
      <div class="row">
      	<div class="tiny-offset-6 tiny-6">
      		<div class="example-box"></div>
      	</div>
      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
