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
            <a href="#0" class="crumb">Reordering</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Reordering</h1>
          <p>You can change the order of your columns as you see fit. Simply use on or more of the following classes to do so</p>
          <ul>
            <li><a href="/docs/reordering/reverse/">Reverse</a></li>
            <li><a href="/docs/reordering/first/">First</a></li>
            <li><a href="/docs/reordering/last/">Last</a></li>
          </ul>
        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
