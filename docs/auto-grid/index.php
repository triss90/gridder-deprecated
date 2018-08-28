<?php
  $pageTitle = "Gridder - Auto Grid";
  $pageDescription = "The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure it out";
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
            <a href="#0" class="crumb">Auto Grid</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Auto Grid</h1>
          <p>The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure it out.</p>
          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny&#x22;&#x3E;
    4/12 - auto
  &#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny&#x22;&#x3E;
    4/12 - auto
  &#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny&#x22;&#x3E;
    4/12 - auto
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>
        </div>

      </div>



      <div class="row">
        <div class="tiny">
          <div class="example-box"></div>
        </div>
        <div class="tiny">
          <div class="example-box"></div>
        </div>
        <div class="tiny">
          <div class="example-box"></div>
        </div>
      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
