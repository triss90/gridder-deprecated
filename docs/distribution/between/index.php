<?php
  $pageTitle = "Gridder - Distribution - Between";
  $pageDescription = "With Gridder you can force columns to the middle of a row.";
?>

<?php include_once('../../../inc/header.php') ?>

<div class="documentation_wrapper">

  <div class="documentation_inner">

    <?php include_once('../../../inc/doc_nav.php') ?>

    <div class="documentation_content">

      <div class="row end-tiny start-medium">
        <div class="tiny">
          <div class="breadcrumbs">
            <a href="/docs" class="crumb">Documentation</a>
            <a href="/docs/distribution" class="crumb">Distribution</a>
            <a href="#0" class="crumb">Between</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Alignment (Between)</h1>
          <p><span class="label inline dark">between-*</span> will equally destribute space between your columns.</p>

          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row between-tiny&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-3&#x22;&#x3E;
    Space Between
  &#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny-3&#x22;&#x3E;
    Space Between
  &#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny-3&#x22;&#x3E;
    Space Between
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>

          <h2>Example</h2>
          <div class="row between-tiny example-row">
            <div class="tiny-3">
              <div class="example-box">Space Between</div>
            </div>
            <div class="tiny-3">
              <div class="example-box">Space Between</div>
            </div>
            <div class="tiny-3">
              <div class="example-box">Space Between</div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../../inc/footer.php') ?>
