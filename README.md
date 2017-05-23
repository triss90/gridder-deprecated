# Gridder CSS

Visit [gridder.io](https://gridder.io "Gridder CSS homepage")

### Installation guide
Simply download and add Gridder CSS file to your head, like this:

```html
// index.html
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="path/to/gridder.css" rel="stylesheet">
  </head>
  <body>
    <div id="app"></div>
  </body>
</html>
```

Alternatively you can use the following CDN to add Gridder to your project:
```
https://cdn.rawgit.com/triss90/gridder/714e56a6/gridder/1.4.1/gridder.min.css
```


### Syntax
First, make sure to wrap your columns in a row element. Then specify your columns and stick your content inside. Use the following classes to identify your coloumns: tiny-* small-* medium-* large-*

* is a number between 1 and 12, where 1 is a single column.

```html
<div class="row">
  <div class="tiny-12">
    This spans 12/12 columns on all screensizes
  </div>
</div>

<div class="row">
  <div class="medium-6">
    This spans 6/12 columns on screens wider then
    the medium breakpoint, but will span 12/12 on smaller screens
  </div>
</div>

<div class="row">
  <div class="small-12 medium-6 large-4">
    This spans 12/12 columns on small screens,
    6/12 on medium screens and 4/4 on large screens
  </div>
</div>
```


### Auto Grid
The flexbox grid is clever! You can add any number of columns to your rows without defining their width and let the grid figure it out.

```html
<div class="row">
  <div class="tiny">
    4/12 - auto
  </div>
  <div class="tiny">
    4/12 - auto
  </div>
  <div class="tiny">
    4/12 - auto
  </div>
</div>
```
