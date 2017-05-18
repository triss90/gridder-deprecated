<?php
  $root = $_SERVER['SERVER_NAME'];
  $gridderFileName = "gridder-1.4.1.css";
  $gridderFilePath = '//'.$root."/gridder/compiled/gridder-1.4.1.css";
?>

<?php include_once('../../../inc/header.php') ?>

<div class="documentation_wrapper">

  <div class="documentation_inner">

    <?php include_once('../../../inc/doc_nav.php') ?>

    <div class="documentation_content">

      <div class="row">
        <div class="tiny">
          <div class="breadcrumbs">
            <a href="/docs" class="crumb">Documentation</a>
            <a href="/docs/alignment" class="crumb">Alignment</a>
            <a href="#0" class="crumb">Middle</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Alignment (Middle)</h1>
          <p>Gridder allows you to align columns as you see fit.
            With <span class="label inline dark">.middle-</span> you can force columns to the middle of a row.</p>

          <div class="row middle-tiny example-row">
            <div class="tiny-6">
              <div class="example-box">Middle</div>
            </div>
          </div>

          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row middle-tiny&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-6&#x22;&#x3E;
    &#x3C;div class=&#x22;example-box&#x22;&#x3E;Top&#x3C;/div&#x3E;
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>

        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../../inc/footer.php') ?>
