<?php
  $root = $_SERVER['SERVER_NAME'];
  $gridderFileName = "gridder-1.4.1.css";
  $gridderFilePath = '//'.$root."/gridder/compiled/gridder-1.4.1.css";
  $pageTitle = "Gridder Docs - Reordering";
  $pageDescription = "Gridder - The simple grid system based on Flexbox";
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
            <a href="#0" class="crumb">Examples</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="tiny">
          <h1>Examples</h1>
        </div>
      </div>

      <div class="row">
        <div class="tiny-12 small-12 medium-4 large-4">
          <a href="/docs/examples/1/" title="Blog layout example" class="box-2">
            <span>Blog</span>
            <img src="/assets/img/blog.png" alt="Blog layout example">
          </a>
        </div>

        <div class="tiny-12 small-12 medium-4 large-4">
          <a href="/docs/examples/2/" title="Landingpage layout example" class="box-2">
            <span>Landingpage</span>
            <img src="/assets/img/landingpage.png" alt="Landingpage layout example">
          </a>
        </div>

        <div class="tiny-12 small-12 medium-4 large-4">
          <a href="/docs/examples/3/" title="Store layout example" class="box-2">
            <span>Store</span>
            <img src="/assets/img/store.png" alt="Store layout example">
          </a>
        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
