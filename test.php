<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>课程设计第七组</title>
    <script src="res/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="res/css/bootstrap.min.css">
    <script src="res/myjs.js"></script>
    <link rel="stylesheet" href="res/mycss.css">
    <script src="res/js/bootstrap.min.js"></script>
    <script src="res/bootstrap-select.js"></script>
    <link rel="stylesheet" href="res/bootstrap-select.css">
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">

    <!-- Collapsed navigation -->
    <div class="navbar-header">
      
      <!-- Expander button -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      

      <!-- Main title -->
      <a class="navbar-brand" href="..">bootstrap-select</a>
    </div>

    <!-- Expanded navigation -->
    <div class="navbar-collapse collapse">
      
      <!-- Main navigation -->
      <ul class="nav navbar-nav">
        
        
        <li >
          <a href="..">Bootstrap-select</a>
        </li>
        
        
        
        <li class="active">
          <a href="./">Examples</a>
        </li>
        
        
        
        <li >
          <a href="../options/">Options</a>
        </li>
        
        
        
        <li >
          <a href="../methods/">Methods</a>
        </li>
        
        
      </ul>
      

      <ul class="nav navbar-nav navbar-right">
        
        <li>
          <a href="https://github.com/silviomoreto/bootstrap-select">
            
            <i class="fa fa-github"></i>
            
            GitHub
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</div>


<div class="container">
  <div class="col-md-3"><div class="bs-sidebar hidden-print affix" role="complementary">
    <ul class="nav bs-sidenav">
    
        <li class="main active">
            <a href="#basic-examples">Basic examples</a>
            <ul class="nav">
            
                <li><a href="#standard-select-boxes">Standard select boxes</a></li>
            
                <li><a href="#select-boxes-with-optgroups">Select boxes with optgroups</a></li>
            
                <li><a href="#multiple-select-boxes">Multiple select boxes</a></li>
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#live-search">Live search</a>
            <ul class="nav">
            
                <li><a href="#live-search_1">Live search</a></li>
            
                <li><a href="#key-words">Key words</a></li>
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#limit-the-number-of-selections">Limit the number of selections</a>
            <ul class="nav">
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#custom-button-text">Custom button text</a>
            <ul class="nav">
            
                <li><a href="#placeholder">Placeholder</a></li>
            
                <li><a href="#selected-text">Selected text</a></li>
            
                <li><a href="#selected-text-format">Selected text format</a></li>
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#styling">Styling</a>
            <ul class="nav">
            
                <li><a href="#button-classes">Button classes</a></li>
            
                <li><a href="#checkmark-on-selected-option">Checkmark on selected option</a></li>
            
                <li><a href="#menu-arrow">Menu arrow</a></li>
            
                <li><a href="#style-individual-options">Style individual options</a></li>
            
                <li><a href="#width">Width</a></li>
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#customize-options">Customize options</a>
            <ul class="nav">
            
                <li><a href="#icons">Icons</a></li>
            
                <li><a href="#custom-content">Custom content</a></li>
            
                <li><a href="#subtext">Subtext</a></li>
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#customize-menu">Customize menu</a>
            <ul class="nav">
            
                <li><a href="#menu-size">Menu size</a></li>
            
                <li><a href="#selectdeselect-all-options">Select/deselect all options</a></li>
            
                <li><a href="#divider">Divider</a></li>
            
                <li><a href="#menu-header">Menu header</a></li>
            
                <li><a href="#container">Container</a></li>
            
                <li><a href="#dropup-menu">Dropup menu</a></li>
            
            </ul>
        </li>
    
        <li class="main ">
            <a href="#disabled">Disabled</a>
            <ul class="nav">
            
                <li><a href="#disabled-select-box">Disabled select box</a></li>
            
                <li><a href="#disabled-options">Disabled options</a></li>
            
                <li><a href="#disabled-option-groups">Disabled option groups</a></li>
            
            </ul>
        </li>
    
    </ul>
</div></div>
  <div class="col-md-9" role="main">

<h1 id="basic-examples">Basic examples</h1>
<hr />
<h2 id="standard-select-boxes">Standard select boxes</h2>
<div class="bs-docs-example">
  <p>Make this:</p>

  <select>
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>

  <p>Become this:</p>

  <select class="selectpicker">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<div id="optgroup"></div>

<h2 id="select-boxes-with-optgroups">Select boxes with optgroups</h2>
<div class="bs-docs-example">
  <select class="selectpicker">
    <optgroup label="Picnic">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </optgroup>
    <optgroup label="Camping">
      <option>Tent</option>
      <option>Flashlight</option>
      <option>Toilet Paper</option>
    </optgroup>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;optgroup label=&quot;Picnic&quot;&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;Camping&quot;&gt;
    &lt;option&gt;Tent&lt;/option&gt;
    &lt;option&gt;Flashlight&lt;/option&gt;
    &lt;option&gt;Toilet Paper&lt;/option&gt;
  &lt;/optgroup&gt;
&lt;/select&gt;
</code></pre>

<h2 id="multiple-select-boxes">Multiple select boxes</h2>
<div class="bs-docs-example">
  <select class="selectpicker" multiple>
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; multiple&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h1 id="live-search">Live search</h1>
<hr />
<h2 id="live-search_1">Live search</h2>
<p>You can add a search input by passing <code>data-live-search="true"</code> attribute:</p>
<div class="bs-docs-example no-code">
  <select class="selectpicker" data-live-search="true">
    <option>Hot Dog, Fries and a Soda</option>
    <option>Burger, Shake and a Smile</option>
    <option>Sugar, Spice and all things nice</option>
  </select>
</div>

<h2 id="key-words">Key words</h2>
<p>Add key words to options to improve their searchability using <code>data-tokens</code>.</p>
<div class="bs-docs-example">
  <select class="selectpicker" data-live-search="true">
    <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
    <option data-tokens="mustard">Burger, Shake and a Smile</option>
    <option data-tokens="frosting">Sugar, Spice and all things nice</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-live-search=&quot;true&quot;&gt;
  &lt;option data-tokens=&quot;ketchup mustard&quot;&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
  &lt;option data-tokens=&quot;mustard&quot;&gt;Burger, Shake and a Smile&lt;/option&gt;
  &lt;option data-tokens=&quot;frosting&quot;&gt;Sugar, Spice and all things nice&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h1 id="limit-the-number-of-selections">Limit the number of selections</h1>
<p>Limit the number of options that can be selected via the <code>data-max-options</code> attribute. It also works for option groups. Customize the message displayed when the limit is reached with <code>maxOptionsText</code>.</p>
<div class="bs-docs-example">
  <select class="selectpicker" multiple data-max-options="2">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>

  <select class="selectpicker" multiple>
    <optgroup label="Condiments" data-max-options="2">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </optgroup>
    <optgroup label="Breads" data-max-options="2">
      <option>Plain</option>
      <option>Steamed</option>
      <option>Toasted</option>
    </optgroup>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; multiple data-max-options=&quot;2&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;

&lt;select class=&quot;selectpicker&quot; multiple&gt;
  &lt;optgroup label=&quot;Condiments&quot; data-max-options=&quot;2&quot;&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;Breads&quot; data-max-options=&quot;2&quot;&gt;
    &lt;option&gt;Plain&lt;/option&gt;
    &lt;option&gt;Steamed&lt;/option&gt;
    &lt;option&gt;Toasted&lt;/option&gt;
  &lt;/optgroup&gt;
&lt;/select&gt;
</code></pre>

<h1 id="custom-button-text">Custom button text</h1>
<hr />
<h2 id="placeholder">Placeholder</h2>
<p><p id="titleMultiples"></p>
Using the <code>title</code> attribute will set the default placeholder text when nothing is selected. This works for both multiple and standard select boxes:</p>
<div class="bs-docs-example">
  <div class="form-group">
    <label>Multiple</label>
    <select class="selectpicker" multiple title="Choose one of the following...">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>

  <div class="form-group">
    <label>Standard</label>
    <select class="selectpicker" title="Choose one of the following...">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; multiple title=&quot;Choose one of the following...&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="selected-text">Selected text</h2>
<p id="title"></p>

<p>Set the <code>title</code> attribute on individual options to display alternative text when the option is selected:</p>
<div class="bs-docs-example no-code">
  <select class="selectpicker">
    <option title="Combo 1">Hot Dog, Fries and a Soda</option>
    <option title="Combo 2">Burger, Shake and a Smile</option>
    <option title="Combo 3">Sugar, Spice and all things nice</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;option title=&quot;Combo 1&quot;&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
  &lt;option title=&quot;Combo 2&quot;&gt;Burger, Shake and a Smile&lt;/option&gt;
  &lt;option title=&quot;Combo 3&quot;&gt;Sugar, Spice and all things nice&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="selected-text-format">Selected text format</h2>
<p id="titleMultiplesFormat"></p>

<p>Specify how the selection is displayed with the <code>data-selected-text-format</code> attribute on a multiple select.</p>
<p>The supported values are:</p>
<ul>
<li><code>values</code>: A comma delimited list of selected values (default)</li>
<li><code>count</code>: If one item is selected, then the option value is shown. If more than one is selected then the number of selected items is displayed, e.g. <code>2 of 6 selected</code></li>
<li><code>count &gt; x</code>: Where <code>x</code> is the number of items selected when the display format changes from <code>values</code> to <code>count</code></li>
<li><code>static</code>: Always show the select title (placeholder), regardless of selection</li>
</ul>
<div class="bs-docs-example">
  <select class="selectpicker" multiple data-selected-text-format="count">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; multiple data-selected-text-format=&quot;count&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<div class="bs-docs-example">
  <select class="selectpicker" multiple data-selected-text-format="count > 3">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
    <option>Onions</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; multiple data-selected-text-format=&quot;count &gt; 3&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
  &lt;option&gt;Onions&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h1 id="styling">Styling</h1>
<hr />
<h2 id="button-classes">Button classes</h2>
<p>You can set the button classes via the <code>data-style</code> attribute:</p>
<div class="bs-docs-example">
  <div class="form-group">
    <select class="selectpicker" data-style="btn-primary">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>
  <div class="form-group">
    <select class="selectpicker" data-style="btn-info">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>
  <div class="form-group">
    <select class="selectpicker" data-style="btn-success">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>
  <div class="form-group">
    <select class="selectpicker" data-style="btn-warning">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>
  <div class="form-group">
    <select class="selectpicker" data-style="btn-danger">
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </select>
  </div>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-style=&quot;btn-primary&quot;&gt;
  ...
&lt;/select&gt;

&lt;select class=&quot;selectpicker&quot; data-style=&quot;btn-info&quot;&gt;
  ...
&lt;/select&gt;

&lt;select class=&quot;selectpicker&quot; data-style=&quot;btn-success&quot;&gt;
  ...
&lt;/select&gt;

&lt;select class=&quot;selectpicker&quot; data-style=&quot;btn-warning&quot;&gt;
  ...
&lt;/select&gt;

&lt;select class=&quot;selectpicker&quot; data-style=&quot;btn-danger&quot;&gt;
  ...
&lt;/select&gt;
</code></pre>

<h2 id="checkmark-on-selected-option">Checkmark on selected option</h2>
<p>You can also show the checkmark icon on standard select boxes with the <code>show-tick</code> class:</p>
<div class="bs-docs-example">
  <select class="selectpicker show-tick">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker show-tick&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="menu-arrow">Menu arrow</h2>
<p>The Bootstrap menu arrow can be added with the <code>show-menu-arrow</code> class:</p>
<div class="bs-docs-example">
  <select class="selectpicker show-menu-arrow">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker show-menu-arrow&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="style-individual-options">Style individual options</h2>
<p id="classes"></p>

<p>Classes added to options are transferred to the select box:</p>
<div class="bs-docs-example">
  <select class="selectpicker">
    <option>Mustard</option>
    <option class="special">Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option class=&quot;special&quot;&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<pre><code class="css">.special {
  font-weight: bold !important;
  color: #fff !important;
  background: #bc0000 !important;
  text-transform: uppercase;
}
</code></pre>

<h2 id="width">Width</h2>
<p id="grid"></p>

<p>Wrap selects in grid columns, or any custom parent element, to easily enforce desired widths.</p>
<div class="bs-docs-example">
  <div class="row">
    <div class="col-xs-3">
      <div class="form-group">
        <select class="selectpicker form-control">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
      </div>
    </div>
    <div class="col-xs-9">
      <div class="form-group">
        <select class="selectpicker form-control">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-4">
       <div class="form-group">
        <select class="selectpicker form-control">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
      </div>
    </div>
    <div class="col-xs-8">
       <div class="form-group">
        <select class="selectpicker form-control">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-5">
      <div class="form-group">
        <select class="selectpicker form-control">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
      </div>
    </div>
    <div class="col-xs-7">
      <div class="form-group">
        <select class="selectpicker form-control">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
        </select>
      </div>
    </div>
  </div>
</div>

<pre><code class="html">&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-xs-3&quot;&gt;
    &lt;div class=&quot;form-group&quot;&gt;
      &lt;select class=&quot;selectpicker form-control&quot;&gt;
        &lt;option&gt;Mustard&lt;/option&gt;
        &lt;option&gt;Ketchup&lt;/option&gt;
        &lt;option&gt;Relish&lt;/option&gt;
      &lt;/select&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>

<div id="data-width"></div>

<p>Alternatively, use the <code>data-width</code> attribute to set the width of the select. Set <code>data-width</code> to <code>'auto'</code> to automatically adjust the width of the select to its widest option. <code>'fit'</code> automatically adjusts the width of the select to the width of its currently selected option. An exact value can also be specified, e.g., <code>300px</code> or <code>50%</code>.</p>
<div class="bs-docs-example">
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label>width: 'auto'</label>
        <select class="selectpicker form-control" data-width="auto">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
          <option>All of the above (and much, much more!)</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label>width: 'fit'</label>
        <select class="selectpicker form-control" data-width="fit">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
          <option>All of the above (and much, much more!)</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label>width: '100px'</label>
        <select class="selectpicker form-control" data-width="100px">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
          <option>All of the above (and much, much more!)</option>
        </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <label>width: '75%'</label>
        <select class="selectpicker form-control" data-width="75%">
          <option>Mustard</option>
          <option>Ketchup</option>
          <option>Relish</option>
          <option>All of the above (and much, much more!)</option>
        </select>
      </div>
    </div>
  </div>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-width=&quot;auto&quot;&gt;
  ...
&lt;/select&gt;
&lt;select class=&quot;selectpicker&quot; data-width=&quot;fit&quot;&gt;
  ...
&lt;/select&gt;
&lt;select class=&quot;selectpicker&quot; data-width=&quot;100px&quot;&gt;
  ...
&lt;/select&gt;
&lt;select class=&quot;selectpicker&quot; data-width=&quot;75%&quot;&gt;
  ...
&lt;/select&gt;
</code></pre>

<h1 id="customize-options">Customize options</h1>
<hr />
<h2 id="icons">Icons</h2>
<p>Add an icon to an option or optgroup with the <code>data-icon</code> attribute:</p>
<div class="bs-docs-example">
  <select class="selectpicker">
    <option data-icon="glyphicon-glass">Mustard</option>
    <option data-icon="glyphicon-heart">Ketchup</option>
    <option data-icon="glyphicon-film">Relish</option>
    <option data-icon="glyphicon-home">Mayonnaise</option>
    <option data-icon="glyphicon-print">Barbecue Sauce</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;option data-icon=&quot;glyphicon-heart&quot;&gt;Ketchup&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="custom-content">Custom content</h2>
<p>Insert custom HTML into the option with the <code>data-content</code> attribute:</p>
<div class="bs-docs-example">
  <select class="selectpicker">
    <option data-content="<span class='label label-warning'>Mustard</span>">Mustard</option>
    <option data-content="<span class='label label-danger label-important'>Ketchup</span>">Ketchup</option>
    <option data-content="<span class='label label-success'>Relish</span>">Relish</option>
    <option data-content="<span class='label label-info'>Mayonnaise</span>">Mayonnaise</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;option data-content=&quot;&lt;span class='label label-success'&gt;Relish&lt;/span&gt;&quot;&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="subtext">Subtext</h2>
<p>Add subtext to an option or optgroup with the <code>data-subtext</code> attribute:</p>
<div class="bs-docs-example">
  <div class="form-group">
    <select class="selectpicker">
      <option data-subtext="French's">Mustard</option>
      <option data-subtext="Heinz">Ketchup</option>
      <option data-subtext="Sweet">Relish</option>
      <option data-subtext="Miracle Whip">Mayonnaise</option>
      <option data-divider="true"></option>
      <option data-subtext="Honey">Barbecue Sauce</option>
      <option data-subtext="Ranch">Salad Dressing</option>
      <option data-subtext="Sweet & Spicy">Tabasco</option>
      <option data-subtext="Chunky">Salsa</option>
    </select>
  </div>

  <div class="form-group">
    <select class="selectpicker" data-show-subtext="true">
      <option data-subtext="French's">Mustard</option>
      <option data-subtext="Heinz">Ketchup</option>
      <option data-subtext="Sweet">Relish</option>
      <option data-subtext="Miracle Whip">Mayonnaise</option>
      <option data-divider="true"></option>
      <option data-subtext="Honey">Barbecue Sauce</option>
      <option data-subtext="Ranch">Salad Dressing</option>
      <option data-subtext="Sweet & Spicy">Tabasco</option>
      <option data-subtext="Chunky">Salsa</option>
    </select>
    <span class="help-block">With <code>showSubtext</code> set to true.</span>
  </div>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-size=&quot;5&quot;&gt;
  &lt;option data-subtext=&quot;Heinz&quot;&gt;Ketchup&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h1 id="customize-menu">Customize menu</h1>
<hr />
<h2 id="menu-size">Menu size</h2>
<p>The <code>size</code> option is set to <code>'auto'</code> by default. When <code>size</code> is set to <code>'auto'</code>, the menu always opens up to show as many items as the window will allow without being cut off. Set <code>size</code> to <code>false</code> to always show all items. The size of the menu can also be specifed using the <code>data-size</code> attribute.</p>
<div class="bs-docs-example">
  <select class="selectpicker">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
    <option>Mayonnaise</option>
    <option>Barbecue Sauce</option>
    <option>Salad Dressing</option>
    <option>Tabasco</option>
    <option>Salsa</option>
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
    <option>Mayonnaise</option>
    <option>Barbecue Sauce</option>
    <option>Salad Dressing</option>
    <option>Tabasco</option>
    <option>Salsa</option>
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
    <option>Mayonnaise</option>
    <option>Barbecue Sauce</option>
    <option>Salad Dressing</option>
    <option>Tabasco</option>
    <option>Salsa</option>
  </select>
</div>

<p id="data-size"></p>

<p>Specify a number for <code>data-size</code> to choose the maximum number of items to show in the menu.</p>
<div class="bs-docs-example">
  <select class="selectpicker" data-size="5">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
    <option>Mayonnaise</option>
    <option>Barbecue Sauce</option>
    <option>Salad Dressing</option>
    <option>Tabasco</option>
    <option>Salsa</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-size=&quot;5&quot;&gt;
  ...
&lt;/select&gt;
</code></pre>

<h2 id="selectdeselect-all-options">Select/deselect all options</h2>
<p>Adds two buttons to the top of the menu - <strong>Select All</strong> &amp; <strong>Deselect All</strong> with <code>data-actions-box="true"</code>.</p>
<div class="bs-docs-example">
  <select class="selectpicker" multiple data-actions-box="true">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; multiple data-actions-box=&quot;true&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="divider">Divider</h2>
<p>Add <code>data-divider="true"</code> to an option to turn it into a divider.</p>
<div class="bs-docs-example">
  <select class="selectpicker">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
    <option>Mayonnaise</option>
    <option data-divider="true"></option>
    <option>Barbecue Sauce</option>
    <option>Salad Dressing</option>
    <option>Tabasco</option>
    <option>Salsa</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-size=&quot;5&quot;&gt;
  &lt;option data-divider=&quot;true&quot;&gt;&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="menu-header">Menu header</h2>
<p>Add a header to the dropdown menu, e.g. <code>header: 'Select a condiment'</code> or <code>data-header="Select a condiment"</code></p>
<div class="bs-docs-example">
  <div class="row-fluid">
    <select class="selectpicker" data-header="Select a condiment">
      <option data-subtext="French's">Mustard</option>
      <option data-subtext="Heinz">Ketchup</option>
      <option data-subtext="Sweet">Relish</option>
      <option data-subtext="Miracle Whip">Mayonnaise</option>
      <option data-divider="true"></option>
      <option data-subtext="Honey">Barbecue Sauce</option>
      <option data-subtext="Ranch">Salad Dressing</option>
      <option data-subtext="Sweet & Spicy">Tabasco</option>
      <option data-subtext="Chunky">Salsa</option>
    </select>
  </div>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; data-header=&quot;Select a condiment&quot;&gt;
  ...
&lt;/select&gt;
</code></pre>

<h2 id="container">Container</h2>
<p>Append the select to a specific element, e.g. <code>container: 'body'</code> or <code>data-container=".main-content"</code></p>
<div class="bs-docs-example" style="overflow:hidden;">
  <div class="row-fluid">
    <select class="selectpicker">
      <option data-subtext="French's">Mustard</option>
      <option data-subtext="Heinz">Ketchup</option>
      <option data-subtext="Sweet">Relish</option>
      <option data-subtext="Miracle Whip">Mayonnaise</option>
      <option data-divider="true"></option>
      <option data-subtext="Honey">Barbecue Sauce</option>
      <option data-subtext="Ranch">Salad Dressing</option>
      <option data-subtext="Sweet & Spicy">Tabasco</option>
      <option data-subtext="Chunky">Salsa</option>
    </select>
    <select class="selectpicker" data-container="body">
      <option data-subtext="French's">Mustard</option>
      <option data-subtext="Heinz">Ketchup</option>
      <option data-subtext="Sweet">Relish</option>
      <option data-subtext="Miracle Whip">Mayonnaise</option>
      <option data-divider="true"></option>
      <option data-subtext="Honey">Barbecue Sauce</option>
      <option data-subtext="Ranch">Salad Dressing</option>
      <option data-subtext="Sweet & Spicy">Tabasco</option>
      <option data-subtext="Chunky">Salsa</option>
    </select>
  </div>
</div>

<pre><code class="html">&lt;div style=&quot;overflow:hidden;&quot;&gt;
  &lt;select class=&quot;selectpicker&quot;&gt;
    ...
  &lt;/select&gt;
  &lt;select class=&quot;selectpicker&quot; data-container=&quot;body&quot;&gt;
    ...
  &lt;/select&gt;
&lt;/div&gt;
</code></pre>

<h2 id="dropup-menu">Dropup menu</h2>
<p><code>dropupAuto</code> is set to true by default, which automatically determines whether or not the menu should display above or below the select box. If <code>dropupAuto</code> is set to false, manually make the select a dropup menu by adding the <code>.dropup</code> class to the select.</p>
<div class="bs-docs-example">
  <select class="selectpicker dropup">
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker dropup&quot;&gt;
  ...
&lt;/select&gt;
</code></pre>

<h1 id="disabled">Disabled</h1>
<hr />
<h2 id="disabled-select-box">Disabled select box</h2>
<div class="bs-docs-example">
  <select class="selectpicker" disabled>
    <option>Mustard</option>
    <option>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot; disabled&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="disabled-options">Disabled options</h2>
<div class="bs-docs-example">
  <select class="selectpicker">
    <option>Mustard</option>
    <option disabled>Ketchup</option>
    <option>Relish</option>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker&quot;&gt;
  &lt;option&gt;Mustard&lt;/option&gt;
  &lt;option disabled&gt;Ketchup&lt;/option&gt;
  &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
</code></pre>

<h2 id="disabled-option-groups">Disabled option groups</h2>
<div class="bs-docs-example">
  <select class="selectpicker test">
    <optgroup label="Picnic" disabled>
      <option>Mustard</option>
      <option>Ketchup</option>
      <option>Relish</option>
    </optgroup>
    <optgroup label="Camping">
      <option>Tent</option>
      <option>Flashlight</option>
      <option>Toilet Paper</option>
    </optgroup>
  </select>
</div>

<pre><code class="html">&lt;select class=&quot;selectpicker test&quot;&gt;
  &lt;optgroup label=&quot;Picnic&quot; disabled&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/optgroup&gt;
  &lt;optgroup label=&quot;Camping&quot;&gt;
    &lt;option&gt;Tent&lt;/option&gt;
    &lt;option&gt;Flashlight&lt;/option&gt;
    &lt;option&gt;Toilet Paper&lt;/option&gt;
  &lt;/optgroup&gt;
&lt;/select&gt;
</code></pre></div>
</div>


  <div class="footer">
    <div class="container text-center">
      <p class="text-muted">Bootstrap-select is maintained by <a href="https://github.com/caseyjhol">caseyjhol</a>,
        <a href="https://github.com/t0xicCode">t0xicCode</a>, and the community.</p>
    </div>
  </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../js/highlight.pack.js"></script>
<script src="../js/base.js"></script>
<script src="../dist/js/bootstrap-select.min.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35848102-1']);
  _gaq.push(['_trackPageview']);

  (function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>