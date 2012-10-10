<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' );?> - <?php bloginfo( 'description' );?></title>

   <!-- general meta tags -->
  <meta charset="UTF-8">
  <meta name="robots" content="all, index, follow" />
  <meta name="description" content="BrazilJS Foundation é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade de JavaScript no Brasil." />

  <!-- favicon -->
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

  <!-- google fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

  <!-- styles -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

  <!-- open graph -->
  <meta property="og:title" content="BrazilJS Foundation" />
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="BrazilJS Foundation é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade de JavaScript no Brasil." />
  <meta property="og:url" content="http://braziljs.org/"/>
  <meta property="og:image" content="http://braziljs.org/img/fb-share.jpg" />
  <meta property="og:site_name" content="BrazilJS"/>
  <meta property="og:locale" content="en_US" />
  <meta property="fb:app_id" content="372862979453673" />


</head>
<body>

  <header>

    <nav class="top-bar">

      <div class="wrapper">
        <a href="/" title="Home" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/logo-mini.png" alt="BrazilJS Logo" /></a>
        <p>moving &amp; uniting</p>

        <ul>
          <li>/ <a href="#projects">Community</a></li>
          <li>/ <a href="#projects">Conferences</a></li>
          <li>/ <a href="#projects">Labs</a></li>
          <li>/ <a href="#projects">Cast</a></li>
        </ul>

        <a class="flag en" href="/en" title="English">English</a>

        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://braziljs.org/">Tweet</a>

        <div class="fb-like" data-href="https://www.facebook.com/braziljs" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" style="border:none; float:right; overflow:hidden; width:80px; height:21px;"></div>
      </div>

    </nav>

    <section class="banner">

      <div class="wrapper">
        <img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="BrazilJS Logo">
        <h1>unidos crescemos</h1>
        <p>Não levamos apenas conteúdo para as pessoas, nós queremos uní-las.</p>
      </div>

    </section>

  </header>