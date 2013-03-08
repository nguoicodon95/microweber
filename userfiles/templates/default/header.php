<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
  <head> <script>START=new Date().getTime();</script>
    <title>{content_meta_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="{content_meta_title}">
    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <script type="text/javascript">
        mw.require("<?php print( INCLUDES_URL); ?>js/jquery-1.9.1.js");
    </script>
    <script type="text/javascript">


        mw.require("url.js");
        mw.require("tools.js");
        mw.require("<?php print( INCLUDES_URL); ?>css/mw.ui.css");

    </script>
    <? if(isset($custom_head)): ?>
        <? print $custom_head; ?>
    <? else : ?>


    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,cyrillic-ext,greek-ext,greek,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{DEFAULT_TEMPLATE_URL}css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="{DEFAULT_TEMPLATE_URL}css/bootstrap-responsive.css" type="text/css" media="all">
    <link rel="stylesheet" href="{DEFAULT_TEMPLATE_URL}css/new_world.css" type="text/css" media="all">
    <script type="text/javascript" src="{DEFAULT_TEMPLATE_URL}js/bootstrap.js"></script>
    <script type="text/javascript" src="{DEFAULT_TEMPLATE_URL}js/default.js"></script>

    <? endif; ?>
  </head>
<body>


    <div id="header" class="clearfix">
      <div class="container">
        <a href="<?php print site_hostname(); ?>" class="brand edit" id="logo">New World</a>
        <module type="nav" name="header_menu" id="main-navigation" template="pills"  />
      </div>
    </div> <!-- /#header -->



