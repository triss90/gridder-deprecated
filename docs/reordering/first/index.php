<?php
  $pageTitle = "Gridder Docs - Reordering - First";
  $pageDescription = "Gridder - The simple grid system based on Flexbox";
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
            <a href="/docs/reordering" class="crumb">Reordering</a>
            <a href="#0" class="crumb">First</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Reordering (First)</h1>
          <p>To make a column appear as the first element, simply add <span class="label inline dark">first-*</span> to the column element.</p>

          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-3&#x22;&#x3E;1&#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny-3&#x22;&#x3E;2&#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny-3&#x22;&#x3E;3&#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny-3 first-tiny&#x22;&#x3E;4&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>

          <h2>Example</h2>
          <div class="row example-row">
            <div class="tiny-3">
              <div class="example-box">1</div>
            </div>
            <div class="tiny-3">
              <div class="example-box">2</div>
            </div>
            <div class="tiny-3">
              <div class="example-box">3</div>
            </div>
            <div class="tiny-3 first-tiny">
              <div class="example-box highlight">4</div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../../inc/footer.php') ?>
