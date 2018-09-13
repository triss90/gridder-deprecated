<?php
  $pageTitle = "Gridder - Syntax";
  $pageDescription = "First, make sure to wrap your columns in a row element. Then specify your columns and stick your content inside.";
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
            <a href="#0" class="crumb">Syntax</a>
          </div>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="tiny">
          <h1>Syntax</h1>
          <p>First, make sure to wrap your columns in a row element. Then specify your columns and stick your content inside.
          Use the following classes to identify your coloumns: <span class="label inline dark">tiny-*</span> <span class="label inline dark">small-*</span> <span class="label inline dark">medium-*</span> <span class="label inline dark">large-*</span></p>
          <p>Each class corresponds to a break point:</p>
            <table>
                <thead>
                <tr>
                    <th>Classname</th>
                    <th>in em</th>
                    <th>In px</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="label inline dark">tiny-*</span></td>
                    <td>> 0em</td>
                    <td>> 0px</td>
                </tr>
                <tr>
                    <td><span class="label inline dark">small-*</span></td>
                    <td>> 48em</td>
                    <td>> 768px</td>
                </tr>
                <tr>
                    <td><span class="label inline dark">medium-*</span></td>
                    <td>> 64em</td>
                    <td>> 1.024px</td>
                </tr>
                <tr>
                    <td><span class="label inline dark">large-*</span></td>
                    <td>> 75em</td>
                    <td>> 1.200px</td>
                </tr>
                </tbody>
            </table>
            <p>This assumes a base fontsize of 16px</p>

          <i>* is a number between 1 and 12, where 1 is a single column.</i>
        </p>
        <pre><code class="html codeblock">
&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;tiny-12&#x22;&#x3E;
    This spans 12/12 columns on all screensizes
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;medium-6&#x22;&#x3E;
    This spans 6/12 columns on screens wider then
    the medium breakpoint, but will span 12/12 on smaller screens
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

&#x3C;div class=&#x22;row&#x22;&#x3E;
  &#x3C;div class=&#x22;small-12 medium-6 large-4&#x22;&#x3E;
    This spans 12/12 columns on small screens,
    6/12 on medium screens and 4/4 on large screens
  &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
          </code></pre>

          <h2>Example</h2>

          <div class="row">
            <div class="tiny-12 small-6 medium-3 large-3">
              <div class="example-box"></div>
            </div>
            <div class="tiny-12 small-6 medium-3 large-3">
              <div class="example-box"></div>
            </div>
            <div class="tiny-12 small-6 medium-3 large-3">
              <div class="example-box"></div>
            </div>
            <div class="tiny-12 small-6 medium-3 large-3">
              <div class="example-box"></div>
            </div>
          </div>

          <div class="row">
            <div class="tiny-12 small-4 medium-6 large-6">
              <div class="example-box"></div>
            </div>
            <div class="tiny-12 small-4 medium-3 large-3">
              <div class="example-box"></div>
            </div>
            <div class="tiny-12 small-4 medium-3 large-3">
              <div class="example-box"></div>
            </div>
          </div>

          <div class="row">
            <div class="tiny-12 small-6 medium-9 large-9">
              <div class="example-box"></div>
            </div>
            <div class="tiny-12 small-6 medium-3 large-3">
              <div class="example-box"></div>
            </div>
          </div>


        </div>

      </div>

    </div>

  </div>

</div>

<?php include_once('../../inc/footer.php') ?>
