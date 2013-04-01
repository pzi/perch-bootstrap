<?php include('perch/runtime.php'); ?><!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php perch_pages_title(); ?> | <?php perch_content('Website Name'); ?></title>
    <meta charset="utf-8">
    <meta name="designer" content="Patrik Affentranger"><?php perch_content('SEO'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--[if ! lt IE 6]>
    <link rel="stylesheet" href="css/styles.css"><![endif]--><!--[if lt IE 6]>
    <link rel="stylesheet" href="css/ie6.1.1.css" media="screen, projection"><![endif]-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="img/apple-touch-icon-114x114.png">
    <script type="text/javascript" src="js/lib/modernizr.min.js"></script>
  </head>
  <body class="home"><!--[if lt IE 7]>
    <p class="chromeframe">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <header>
      <nav role="navigation">
        <?php
            perch_pages_navigation(array(
                'from-path'            => '/',
                'levels'               => 0,
                'hide-extensions'      => true,
                'hide-default-doc'     => true,
                'flat'                 => false,
                'template'             => 'item.html',
                'include-parent'       => false,
                'skip-template'        => false,
                'siblings'             => false,
                'only-expand-selected' => false,
                'add-trailing-slash'   => true,
                'navgroup'             => false
            ));
        ?>
      </nav>
    </header>
    <section role="main">
      <h1><?php perch_content('Page Title'); ?></h1>
    </section>
    <footer role="contentinfo">
      <p>&copy;</p>
    </footer>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/lib/jquery.1.9.1.min.js"%3E%3C/script%3E'));</script>
  </body>
</html>