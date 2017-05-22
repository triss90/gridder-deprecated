<?php
  $root = $_SERVER['SERVER_NAME'];
  $gridderFileName = "gridder-1.4.1.css";
  $gridderFilePath = '//'.$root."/gridder/compiled/gridder-1.4.1.css";
  $pageTitle = "Gridder - Installation";
  $pageDescription = "Download and add gridder to your projects head";
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
            <a href="#0" class="crumb">Installation</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Installation guide</h1>
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
        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
