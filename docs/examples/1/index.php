<?php
  $pageTitle = "Gridder - Example - Blog";
  $pageDescription = "Blog example page using Gridder";
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
            <a href="/docs/examples" class="crumb">Examples</a>
            <a href="#0" class="crumb">Blog Layout</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="tiny">
          <h1>Blog Layout Example</h1>
        </div>
      </div>

      <div class="row">
        <div class="tiny-12">
          <div class="example-box-2" style="height:50px;">Navigation</div>
        </div>
      </div>

      <div class="row">
        <div class="tiny-12">
          <div class="example-box-2" style="height:200px;">Header</div>
        </div>
      </div>

      <div class="row">
        <div class="tiny-12 small-9 medium-9 large-9">
          <div class="example-box-2" style="height:500px;">Content</div>
        </div>
        <div class="tiny-12 small-3 medium-3 large-3">
          <div class="example-box-2" style="height:500px;">Sidebar</div>
        </div>
      </div>

      <div class="row">
        <div class="tiny-12">
          <div class="example-box-2" style="height:75px;">Footer</div>
        </div>
      </div>


      <div class="row">
        <div class="tiny">
          <h2>The code:</h2>
          <pre><code class="html codeblock">
&#x3C;div class=&#x22;container&#x22;&#x3E;
  &#x3C;div class=&#x22;row&#x22;&#x3E;
    &#x3C;div class=&#x22;tiny-12&#x22;&#x3E;
      &#x3C;div&#x3E;Navigation&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/div&#x3E;

  &#x3C;div class=&#x22;row&#x22;&#x3E;
    &#x3C;div class=&#x22;tiny-12&#x22;&#x3E;
      &#x3C;div&#x3E;Header&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/div&#x3E;

  &#x3C;div class=&#x22;row&#x22;&#x3E;
    &#x3C;div class=&#x22;tiny-12 small-9 medium-9 large-9&#x22;&#x3E;
      &#x3C;div&#x3E;Content&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
    &#x3C;div class=&#x22;tiny-12 small-3 medium-3 large-3&#x22;&#x3E;
      &#x3C;div&#x3E;Sidebar&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/div&#x3E;

  &#x3C;div class=&#x22;row&#x22;&#x3E;
    &#x3C;div class=&#x22;tiny-12&#x22;&#x3E;
      &#x3C;div&#x3E;Footer&#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>
        </div>
      </div>

    </div>

  </div>

</div>

<?php include_once('../../../inc/footer.php') ?>
