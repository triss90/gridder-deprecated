<?php
  $pageTitle = "Gridder - Nesting";
  $pageDescription = "Gridder can be nested as deep as you want";
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
            <a href="#0" class="crumb">Nesting</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="tiny">
          <h1>Nesting</h1>
          <p>Ofcourse you can nest grids aswell.</p>
          <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-12 medium-6 large-8&#x22;&#x3E;
    &#x3C;div class=&#x22;example-box&#x22;&#x3E;
      &#x3C;div class=&#x22;row&#x22;&#x3E;
        &#x3C;div class=&#x22;tiny-12 medium-6 large-6&#x22;&#x3E;
          &#x3C;div class=&#x22;example-box-nested&#x22;&#x3E;&#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
        &#x3C;div class=&#x22;tiny-12 medium-6 large-6&#x22;&#x3E;
          &#x3C;div class=&#x22;example-box-nested &#x22;&#x3E;&#x3C;/div&#x3E;
        &#x3C;/div&#x3E;
      &#x3C;/div&#x3E;
    &#x3C;/div&#x3E;
  &#x3C;/div&#x3E;
  &#x3C;div class=&#x22;tiny-12 medium-6 large-4&#x22;&#x3E;
    &#x3C;div class=&#x22;example-box&#x22;&#x3E;&#x3C;/div&#x3E;
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>
        </div>

      </div>

      <h2>Example</h2>

      <div class="row">
      	<div class="tiny-12 medium-6 large-8">
      		<div class="example-box">
      		  <div class="row">
      		    <div class="tiny-12 medium-6 large-6">
                <div class="example-box-nested"></div>
              </div>
              <div class="tiny-12 medium-6 large-6">
                <div class="example-box-nested last-child"></div>
              </div>
      		  </div>
      		</div>
      	</div>
        <div class="tiny-12 medium-6 large-4">
      		<div class="example-box"></div>
      	</div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
