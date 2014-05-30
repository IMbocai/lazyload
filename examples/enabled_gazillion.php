<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <title>Lazy Load Enabled With Gazillion Images</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" media="screen" href="css/appelsiini.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet"><link href="css/jieyou.css" rel="stylesheet">
  <link rel="shortcut icon" href="ico/favicon.ico">
  <!--[if lt IE 9]>
    <script src="page_js/html5shiv.js"></script>
  <![endif]-->
  
  <style type="text/css">
    .container img {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="jumbotron">
    <div class="container">
      <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
        <h1>Lazy Load Plugin for jQuery</h1>
        <p class="des">
          <!--<iframe src="http://ghbtns.com/github-btn.html?user=tuupola&amp;repo=jquery_lazyload&amp;type=watch&amp;count=true&amp;size=small" allowtransparency="true" frameborder="0" scrolling="0" width="92" height="30"></iframe>    
          <iframe src="http://ghbtns.com/github-btn.html?user=tuupola&amp;repo=jquery_lazyload&amp;type=fork&amp;count=true&amp;size=small" allowtransparency="true" frameborder="0" scrolling="0" width="90" height="30"></iframe>-->
          This project is forked from <a href="https://github.com/tuupola/jquery_lazyload"><span class="label label-danger">tuupola/jquery_lazyload</span></a> and add features below:<br/>
          * Many Details for improve performance;<br/>
          * IE6/7 support;<br/>
          * Available with <a href="https://github.com/madrobby/zepto"><span class="label label-danger">Zepto</span></a>;<br/>
          * The `vertical_only` option, if set to true, only check images's vertical position will improve performance.
        </p>
        <p class="des">
          More information on <a href="https://github.com/jieyou/lazyload"><span class="label label-danger">jieyou/lazyload</span></a>.
        </p>
      </div>
    </div>
  </div>
   
  <div class="container">
    <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
      
      <h2>Plugin enabled with gazillion images</h2>
      <p>
        When you have hundreds of images it is best to use James Padolseys <a href="http://james.padolsey.com/javascript/special-scroll-events-for-jquery/">scrollstop event</a>. 
        Compate this to page where plugin is <a href="disabled.html">disabled</a> or page with 
        <a href="enabled.html">larger images</a>.
      </p>
      <p>
        Note: The <a href="http://james.padolsey.com/javascript/special-scroll-events-for-jquery/">scrollstop event</a> is only available with jQuery (not available with Zepto).
      </p>

      <pre class="prettyprint">&lt;script src="jquery.scrollstop.js" type="text/javascript"&gt;&lt;/script&gt; </pre>
      <pre class="prettyprint">&lt;img class="lazy" data-original="img/example.jpg" width="80" height="120" alt=""&gt;</pre>
      <pre class="prettyprint">$("img.lazy").lazyload({
  event: "scrollstop"
});</pre>

      <div id="container">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">
        <img class="lazy" data-original="http://lorempixel.com/80/120/transport/?<?php print rand(); ?>" width="80" height="120" alt="">

      </div>
    </div>
  </div>
  
  <div class="bottom-menu bottom-menu-large bottom-menu-inverse">
    <div class="container">
      <div class="col-md-offset-1 col-lg-offset-2">
        <div class="col-sm-3 col-md-2">
          <h5 class="title">CATEGORIES</h5>
          <ul class="bottom-links">
            <li><a href="http://www.appelsiini.net/javascript">JavaScript</a></li>
            <li><a href="http://www.appelsiini.net/ruby">Ruby</a></li>
            <li><a href="http://www.appelsiini.net/avr">AVR</a></li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-2">
          <h5 class="title">PROJECTS</h5>
          <ul class="bottom-links">
            <li><a href="http://www.appelsiini.net/projects/lazyload">Lazy Load</a></li>
            <li><a href="http://www.appelsiini.net/projects/chained">Chained</a></li>
            <li><a href="http://www.appelsiini.net/projects/jeditable">Jeditable</a></li>
            <li><a href="http://www.appelsiini.net/projects/viewport">Viewport</a></li>
            <li><a href="http://www.appelsiini.net/projects/rack-facebook-methodfix">Facebook Methodfix</a></li>
            <li><a href="http://www.appelsiini.net/projects/rack-funky-cache">Funky Cache</a></li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-2">
          <h5 class="title">ABOUT</h5>
          <ul class="bottom-links">
            <li><a data-action="GitHub" data-label="footer" href="https://github.com/tuupola" class="icon-github-sign icon-large track"> GitHub</a></li>
            <li><a data-action="Twitter" data-label="footer" href="https://twitter.com/tuupola" class="icon-twitter-sign icon-large track"> Twitter</a></li>
            <li><a data-action="Google+" data-label="footer" href="https://plus.google.com/114333901699201512043?rel=author" class="icon-google-plus-sign icon-large track"> Google+</a></li>
          </ul>
        </div>
        <div class="col-sm-3 col-md-5 col-lg-4">
          Built using the awesome <a class="track" data-action="Designmodo" data-label="footer" style="color: #ffffff;" href="http://designmodo.com/flat/?u=583">Flat UI Pro</a> framework by Designmodo.
          <br><br>
          © 2013 Mika Tuupola.
        </div>
      </div>
    </div>
  </div>

  <script src="//webmap2.map.bdimg.com/yyfm/jQuery_1.x/1.10.2/js/jQuery_1.x.min.js"></script>
  <!-- <!-- <script src="http://webmap2.map.bdimg.com/yyfm/zepto_default/1.0/js/zepto_default.min.js"></script> --> -->
  <script src="../lazyload.js"></script>
  <script src="http://bcs.duapp.com/jieyou-storage/jquery.scrollstop.min.js"></script>
  <script src="page_js/demo.js"></script>
  <script type="text/javascript">
      $(function() {
          $("img.lazy").lazyload({
              event: "scrollstop"
          });
      });
  </script>
</body>
</html>