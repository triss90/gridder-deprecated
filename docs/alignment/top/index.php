<?php
  $pageTitle = "Gridder - Alignment - Top";
  $pageDescription = "With Gridder you can force columns to the top of a row.";
?>

<?php include_once('../../../inc/header.php') ?>

<div class="documentation_wrapper">

  <div class="documentation_inner">

    <?php include_once('../../../inc/doc_nav.php') ?>

    <div class="documentation_content">

      <div class="row">
        <div class="tiny end-tiny start-medium">
          <div class="breadcrumbs">
            <a href="/docs" class="crumb">Documentation</a>
            <a href="/docs/alignment" class="crumb">Alignment</a>
            <a href="#0" class="crumb">Top</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Alignment (Top)</h1>
          <p>Gridder allows you to align columns as you see fit.
            With <span class="label inline dark">.top-</span> you can force columns to the top of a row.</p>

          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row top-tiny&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-6&#x22;&#x3E;
    &#x3C;div class=&#x22;example-box&#x22;&#x3E;Top&#x3C;/div&#x3E;
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>

          <h2>Example</h2>
          <div class="row top-tiny example-row">
            <div class="tiny-6">
              <div class="example-box">Top</div>
            </div>
          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../../inc/footer.php') ?>
