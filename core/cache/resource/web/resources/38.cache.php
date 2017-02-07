<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 38,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Результаты поиска по тегу',
    'longtitle' => '',
    'description' => '',
    'alias' => 'rezultatyi-poiska-po-tegu',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[!getResourcesTag?
    &parents=`0`
    &tpl=`post-default`
    &toPlaceholder=`results`
    &showHidden=`1`
    &limit=`50`
    &hideContainers=`true`
    &includeTVs=`image,HitsPage`
]]
    <ul>
      [[!+results]]
    </ul>',
    'richtext' => 0,
    'template' => 4,
    'menuindex' => 8,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1484583223,
    'editedby' => 1,
    'editedon' => 1484583251,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1484583180,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'image' => 
    array (
      0 => 'image',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'image',
    ),
    'tags' => 
    array (
      0 => 'tags',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'HitsPage' => 
    array (
      0 => 'HitsPage',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'comments' => 
    array (
      0 => 'comments',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!DOCTYPE html>
<html>

  <head>
    <title>Результаты поиска по тегу</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="premium html, themeforest templates, html5 template,agency, bootstrap, business, construction template, corporate, event, premium landing pages, magazine theme, medical website, portfoli , shop, travel, wedding">
    <meta charset="UTF-8">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="assets/templates/images/favicon.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/templates/images/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="assets/templates/images/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="assets/templates/images/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/templates/images/favicon-standard-iphone.png">
    <!-- Google Fonts -->
    <link href="assets/templates/https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- MAIN CSS FILES -->
    <!-- Plugins CSS -->
    <!-- Bootstrap -->
    <link href="assets/templates/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SwipeBox -->
    <link href="assets/templates/plugins/swipebox/css/swipebox.min.css" rel="stylesheet">
	<!-- Selecter -->
    <link href="assets/templates/plugins/fs.selecter/jquery.fs.selecter.min.css" rel="stylesheet">
    <!-- Animate -->
    <link href="assets/templates/plugins/animate/animate.min.css" rel="stylesheet">
    <!-- Ion Icons -->
    <link href="assets/templates/icon-fonts/icons.css" rel="stylesheet">
	<!-- Web Slide Menu CSS -->
    <link rel="stylesheet" href="assets/templates/plugins/webslide/css/webslidemenu.css" media="screen" />
    <link rel="stylesheet" href="assets/templates/plugins/webslide/css/color-theme.css" media="screen" />
    <!-- Style Sheets -->
    <link href="assets/templates/css/style.css" rel="stylesheet" media="screen">
    <link href="assets/templates/css/header.css" rel="stylesheet" media="screen">
    <link href="assets/templates/css/shortcodes.css" rel="stylesheet" media="screen">
    <link href="assets/templates/css/portfolio.css" rel="stylesheet" media="screen">
    <link href="assets/templates/css/blog.css" rel="stylesheet" media="screen">
    <link href="assets/templates/css/footer.css" rel="stylesheet">
    <link href="assets/templates/css/shop.css" rel="stylesheet">
    <link href="assets/templates/css/responsive.css" rel="stylesheet">
    <link href="assets/templates/css/templates/main-color.css" rel="stylesheet">
    <!-- End Style Sheets -->
    <!-- MAIN CSS FILES -->
  </head>

  <body class="nicescroll">
      
    <!-- Page Preloader  && Scroll to top button-->
    <a class="scroll-to-top-fixed page-scroll" href="body"><span class="icon-arrow-1-up"></span></a>
    <div class="page-preloader">
      <div class="page-loader-spinner"> <span></span><span></span><span></span> </div>
    </div>
    <!-- End Page Preloader -->
    <!-- SERACH FORM POPUP START -->
    <div class="search-popup-box animated fadeInDown"> <span class="search-popup-close"><span class="icon-close"></span></span>
      <form class="search-form-popup" action="#">
        <div class="form-group"> <input type="text" class="form-control" placeholder="Type Here To Search"> <button type="submit"><span class="icon-magnifier-1"></span></button> </div>
      </form>
    </div>
    <!-- SERACH FORM POPUP END -->
    <div id="wrapper" class="clearfix">
      <!-- HEADER START -->
      <div class="wsmenucontainer clearfix">
        <div class="overlapblackbg"> </div>
        <!--MOBILE HEADER-->
        <div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
          <a class="brand-modern" href="http://buildyourself.by/"> <span class="logo-label">Build Yourself</span> </a>
          <div class="search-cart-navbar"> 
          <a class="btn btn-search" href="#"><span class="icon-magnifier-1"></span></a>
          </div>
        </div>
        <!-- MOBILE HEADER END -->
        <div id="header" class="header header-fullwidth header-light light-menu clearfix">
          <!--Main Menu HTML Code-->
          <div class="wsmain ">
            <div class="smllogo">
              <a class="brand-modern" href="http://buildyourself.by/"> <span class="logo-label">Build Yourself</span> </a>
            </div>
            <nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    <li><li class="first"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=2" >Закаливание</a></li><li><a href="index.php?id=3" >Программирование</a></li><li><a href="index.php?id=5" >Паркур</a></li><li class="last"><a href="index.php?id=8" >Бег</a></li></li>
  </ul>
</nav>
          </div>
          <!--Menu HTML Code-->
        </div>
      </div>
      <!-- HEADER ENDS  -->
      <!-- INTRO PAGE START -->
      <section id="page-title" class="default-page-title">
        <div class="container-fluid">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- BREADCRUMB TITLE START -->
            <h2>Поиск</h2>
            <h5>Результаты поиска</h5>
            <!-- BREADCRUMB TITLE END -->
            <!-- BREADCRUMB LIST START -->
            [[!pdoCrumbs?
    &tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
    &tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
    &tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
    &tplHome=`@INLINE <li><a href="http://buildyourself.by/">Главная</a></li>`
    &showHome=`1`
]]
            <!-- BREADCRUMB LIST END -->
          </div>
        </div>
      </section>
      <!-- INTRO PAGE END -->
      <!-- SEARCH SECTION START -->
      <section class="section clearfix">
        <div class="container-fluid">
          <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-left">
            <div class="search-searchbox">
              
              
            </div>
            <!-- SEARCH CONTENT START -->
            <div class="blog-wrapper">
              <!-- BLOG ITEMS LIST START -->
              <div class="blog-list blogfitrows blogbox">
                  [[!getResourcesTag?
    &parents=`0`
    &tpl=`post-default`
    &toPlaceholder=`results`
    &showHidden=`1`
    &limit=`50`
    &hideContainers=`true`
    &includeTVs=`image,HitsPage`
]]
    <ul>
      [[!+results]]
    </ul>
              </div>
            </div>
          </div>
          <!-- Sidebar start -->
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="sidebar right">
              <!-- SIDEBAR CONTENT START -->
              <div class="sidebar-list">
                <div class="sidebar-list-title">
                  <h3><span>Категории</span></h3> </div>
                <ul class="sidebar-cat">
                  <li><li class="first"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=2" >Закаливание</a></li><li><a href="index.php?id=3" >Программирование</a></li><li><a href="index.php?id=5" >Паркур</a></li><li class="last"><a href="index.php?id=8" >Бег</a></li></li>
                </ul>
              </div>
              <!-- SIDEBAR CONTENT END -->
              <!-- SIDEBAR CONTENT START -->
                <div class="sidebar-tags-cloud">
    <div class="sidebar-list-title">
      <h3><span>Облако тегов</span></h3> </div>
    <ul class="tags-cloud-list">
      [[!tagLister? &tv=`tags` &tpl=`single-tag-li` &target=`38`]] 
    </ul>
  </div>
              <!-- SIDEBAR CONTENT END -->
            </div>
          </div>
          <!-- Sidebar end -->
        </div>
      </section>
      <!-- SEARCH SECTION END -->
      <!-- CALL TO ACTION START -->
      <section class="section no-padding">
        <a href="index.php?id=36" class="call-to-action-link background-3 callback" data-fancybox-type="iframe">
          <h4>Если у вас есть вопросы, спрашивайте!<span class="icon-arrow-1-right"></span></h4> </a>
      </section>
      <!-- CALL TO ACTION END -->
      <!-- Footer -->
      <!-- FOOTER START -->
      <section class="section no-padding clearfix" style="background-image: -moz-linear-gradient(left, rgba(77,92,178,1) 24%, rgba(68,81,167,1) 100%);
background-image: -webkit-linear-gradient(left, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: linear-gradient(90deg, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: -o-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);
background-image: -ms-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);">
        <!-- COPYRIGHTS START -->
        <section id="copyrights" class="copyrights-center maincolor double-padding transparent-background">
          <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="widget-social pull-center">
                <li><a href="https://vk.com/mantovpinets"><span class="icon-vk"></span></a></li>
                <li><a href="https://www.facebook.com/kirill.tovpinec"><span class="icon-facebook"></span></a></li>
                <li><a href="https://twitter.com/KirillTovpinec"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/in/kirill-tovpinets-83aa8283?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/kirill_tovpinets/"><span class="icon-instagram"></span></a></li>
              </ul>
              <p class="copyrights-text-custom">Copyrights &#169; 2017 Все права защищены и преследуются автором блога. </p>
            </div>
          </div>
        </section>
        <!-- COPYRIGHTS END -->
      </section>
      <!-- COPYRIGHTS END -->
      <!-- FOOTER END -->
    </div>
    <!-- MAIN JS FILES -->
    <script src="assets/templates/js/jquery-1.12.4.min.js"></script>
    <!-- jQuery & Accessories -->
    <!-- Plugins -->
    <!-- Jquery UI -->
    <script type="text/javascript" src="assets/templates/plugins/jquery/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/templates/plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Easing Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/easing/jquery.easing.min.js"></script>
    <!-- Header Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/webslide/js/webslidemenu.js"></script>
    <!-- Parallax Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/parallax/jquery.parallax.min.js"></script>
    <!-- Swipebox Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/swipebox/js/jquery.swipebox.min.js"></script>
    <!-- Smoothscroll Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/smoothscroll/smoothscroll.js"></script>
    <!-- Sticky Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/sticky/jquery.sticky.js"></script>
    <!-- Select Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/fs.selecter/jquery.fs.selecter.min.js"></script>
    <!-- Waypoint Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/waypoints/jquery.waypoints.min.js"></script>
    <!-- FlickrFeed Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/jflickrfeed/jflickrfeed.min.js"></script>
    <!-- Dribbble Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/jribbble/jribbble.min.js"></script>
    <!-- Twitter Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/tweetie/tweetie.min.js"></script>
    <!-- Validator Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/bootstrap-validator/js/validator.min.js"></script>
    <!-- Material Kit Plugin -->
    <script type="text/javascript" src="assets/templates/plugins/materialKit/material.min.js"></script>
    <script type="text/javascript" src="assets/templates/plugins/materialKit/material-kit.js"></script>
    <!-- WOW Animation -->
    <script type="text/javascript" src="assets/templates/plugins/wow/wow.min.js"></script>
    <!-- Isotope -->
    <script type="text/javascript" src="assets/templates/plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- MAIN JS FILES -->
    <!-- Theme Functions -->
    <script type="text/javascript" src="assets/templates/js/theme.functions.js"></script>
    <!-- Social Widgets Config -->
    <script type="text/javascript" src="assets/templates/js/social-widgets-config.js"></script>
  </body>

</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$mobile-header]]' => '<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
          <a class="brand-modern" href="http://buildyourself.by/"> <span class="logo-label">Build Yourself</span> </a>
          <div class="search-cart-navbar"> 
          <a class="btn btn-search" href="#"><span class="icon-magnifier-1"></span></a>
          </div>
        </div>',
    '[[pdoMenu?
        &parents=`0`
        &level=`1`
        &tplOuter=`@INLINE <li>[[+wrapper]]</li>`]]' => '<li><li class="first"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=2" >Закаливание</a></li><li><a href="index.php?id=3" >Программирование</a></li><li><a href="index.php?id=5" >Паркур</a></li><li class="last"><a href="index.php?id=8" >Бег</a></li></li>',
    '[[$page-nav-list]]' => '<nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    <li><li class="first"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=2" >Закаливание</a></li><li><a href="index.php?id=3" >Программирование</a></li><li><a href="index.php?id=5" >Паркур</a></li><li class="last"><a href="index.php?id=8" >Бег</a></li></li>
  </ul>
</nav>',
    '[[$breadcrumbs]]' => '[[!pdoCrumbs?
    &tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
    &tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
    &tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
    &tplHome=`@INLINE <li><a href="http://buildyourself.by/">Главная</a></li>`
    &showHome=`1`
]]',
    '[[pdoMenu?
                    &parents=`0`
                    &level=`1`
                    &tplOuter=`@INLINE <li>[[+wrapper]]</li>`
                ]]' => '<li><li class="first"><a href="index.php?id=1" >Главная</a></li><li><a href="index.php?id=2" >Закаливание</a></li><li><a href="index.php?id=3" >Программирование</a></li><li><a href="index.php?id=5" >Паркур</a></li><li class="last"><a href="index.php?id=8" >Бег</a></li></li>',
    '[[$sidebar-tags-cloud]]' => '<div class="sidebar-tags-cloud">
    <div class="sidebar-list-title">
      <h3><span>Облако тегов</span></h3> </div>
    <ul class="tags-cloud-list">
      [[!tagLister? &tv=`tags` &tpl=`single-tag-li` &target=`38`]] 
    </ul>
  </div>',
    '[[$call-to-action]]' => '<section class="section no-padding">
        <a href="index.php?id=36" class="call-to-action-link background-3 callback" data-fancybox-type="iframe">
          <h4>Если у вас есть вопросы, спрашивайте!<span class="icon-arrow-1-right"></span></h4> </a>
      </section>',
    '[[$footer]]' => '<section class="section no-padding clearfix" style="background-image: -moz-linear-gradient(left, rgba(77,92,178,1) 24%, rgba(68,81,167,1) 100%);
background-image: -webkit-linear-gradient(left, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: linear-gradient(90deg, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: -o-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);
background-image: -ms-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);">
        <!-- COPYRIGHTS START -->
        <section id="copyrights" class="copyrights-center maincolor double-padding transparent-background">
          <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="widget-social pull-center">
                <li><a href="https://vk.com/mantovpinets"><span class="icon-vk"></span></a></li>
                <li><a href="https://www.facebook.com/kirill.tovpinec"><span class="icon-facebook"></span></a></li>
                <li><a href="https://twitter.com/KirillTovpinec"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/in/kirill-tovpinets-83aa8283?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/kirill_tovpinets/"><span class="icon-instagram"></span></a></li>
              </ul>
              <p class="copyrights-text-custom">Copyrights &#169; 2017 Все права защищены и преследуются автором блога. </p>
            </div>
          </div>
        </section>
        <!-- COPYRIGHTS END -->
      </section>',
    '[[dateRU? &MyDate=`01 January 1970`]]' => '01 января 1970',
    '[[$share-buttons]]' => '<li><a target="_blank" class="popup-share" href="https://vk.com/share.php?url=http://buildyourself.by/index.php?id=66"><span class="icon-vk"></span></a></li>
<li><a target="_blank" class="popup-share" href="http://www.facebook.com/sharer/sharer.php?u=http://buildyourself.by/index.php?id=66"><span class="icon-facebook"></span></a></li>
<li><a target="_blank" class="popup-share" href="http://www.twitter.com/share?url=http://buildyourself.by/index.php?id=66&text=Друг всегда заплатит за проезд в метро за двоих, предварительно взяв у тебя деньги."><span class="icon-twitter"></span></a></li>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'mobile-header' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mobile-header',
          'description' => '',
          'editor_type' => 0,
          'category' => 14,
          'cache_type' => 0,
          'snippet' => '<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
          <a class="brand-modern" href="[[++site_url]]"> <span class="logo-label">Build Yourself</span> </a>
          <div class="search-cart-navbar"> 
          <a class="btn btn-search" href="#"><span class="icon-magnifier-1"></span></a>
          </div>
        </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
          <a class="brand-modern" href="[[++site_url]]"> <span class="logo-label">Build Yourself</span> </a>
          <div class="search-cart-navbar"> 
          <a class="btn btn-search" href="#"><span class="icon-magnifier-1"></span></a>
          </div>
        </div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'page-nav-list' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'page-nav-list',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '<nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    [[pdoMenu?
        &parents=`0`
        &level=`1`
        &tplOuter=`@INLINE <li>[[+wrapper]]</li>`]]
  </ul>
</nav>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    [[pdoMenu?
        &parents=`0`
        &level=`1`
        &tplOuter=`@INLINE <li>[[+wrapper]]</li>`]]
  </ul>
</nav>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'breadcrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'breadcrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '[[!pdoCrumbs?
    &tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
    &tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
    &tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
    &tplHome=`@INLINE <li><a href="[[++site_url]]">Главная</a></li>`
    &showHome=`1`
]]',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[!pdoCrumbs?
    &tplWrapper=`@INLINE <ol class="breadcrumb">[[+output]]</ol>`
    &tpl=`@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>`
    &tplCurrent=`@INLINE <li class="active">[[+menutitle]]</li>`
    &tplHome=`@INLINE <li><a href="[[++site_url]]">Главная</a></li>`
    &showHome=`1`
]]',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'sidebar-tags-cloud' => 
      array (
        'fields' => 
        array (
          'id' => 29,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'sidebar-tags-cloud',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="sidebar-tags-cloud">
    <div class="sidebar-list-title">
      <h3><span>Облако тегов</span></h3> </div>
    <ul class="tags-cloud-list">
      [[!tagLister? &tv=`tags` &tpl=`single-tag-li` &target=`38`]] 
    </ul>
  </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="sidebar-tags-cloud">
    <div class="sidebar-list-title">
      <h3><span>Облако тегов</span></h3> </div>
    <ul class="tags-cloud-list">
      [[!tagLister? &tv=`tags` &tpl=`single-tag-li` &target=`38`]] 
    </ul>
  </div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'call-to-action' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'call-to-action',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="section no-padding">
        <a href="[[~36]]" class="call-to-action-link background-3 callback" data-fancybox-type="iframe">
          <h4>Если у вас есть вопросы, спрашивайте!<span class="icon-arrow-1-right"></span></h4> </a>
      </section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="section no-padding">
        <a href="[[~36]]" class="call-to-action-link background-3 callback" data-fancybox-type="iframe">
          <h4>Если у вас есть вопросы, спрашивайте!<span class="icon-arrow-1-right"></span></h4> </a>
      </section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<section class="section no-padding clearfix" style="background-image: -moz-linear-gradient(left, rgba(77,92,178,1) 24%, rgba(68,81,167,1) 100%);
background-image: -webkit-linear-gradient(left, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: linear-gradient(90deg, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: -o-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);
background-image: -ms-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);">
        <!-- COPYRIGHTS START -->
        <section id="copyrights" class="copyrights-center maincolor double-padding transparent-background">
          <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="widget-social pull-center">
                <li><a href="https://vk.com/mantovpinets"><span class="icon-vk"></span></a></li>
                <li><a href="https://www.facebook.com/kirill.tovpinec"><span class="icon-facebook"></span></a></li>
                <li><a href="https://twitter.com/KirillTovpinec"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/in/kirill-tovpinets-83aa8283?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/kirill_tovpinets/"><span class="icon-instagram"></span></a></li>
              </ul>
              <p class="copyrights-text-custom">Copyrights &#169; 2017 Все права защищены и преследуются автором блога. </p>
            </div>
          </div>
        </section>
        <!-- COPYRIGHTS END -->
      </section>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<section class="section no-padding clearfix" style="background-image: -moz-linear-gradient(left, rgba(77,92,178,1) 24%, rgba(68,81,167,1) 100%);
background-image: -webkit-linear-gradient(left, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: linear-gradient(90deg, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
background-image: -o-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);
background-image: -ms-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);">
        <!-- COPYRIGHTS START -->
        <section id="copyrights" class="copyrights-center maincolor double-padding transparent-background">
          <div class="container-fluid">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul class="widget-social pull-center">
                <li><a href="https://vk.com/mantovpinets"><span class="icon-vk"></span></a></li>
                <li><a href="https://www.facebook.com/kirill.tovpinec"><span class="icon-facebook"></span></a></li>
                <li><a href="https://twitter.com/KirillTovpinec"><span class="icon-twitter"></span></a></li>
                <li><a href="https://www.linkedin.com/in/kirill-tovpinets-83aa8283?trk=nav_responsive_tab_profile_pic"><span class="icon-linkedin"></span></a></li>
                <li><a href="https://www.instagram.com/kirill_tovpinets/"><span class="icon-instagram"></span></a></li>
              </ul>
              <p class="copyrights-text-custom">Copyrights &#169; 2017 Все права защищены и преследуются автором блога. </p>
            </div>
          </div>
        </section>
        <!-- COPYRIGHTS END -->
      </section>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'share-buttons' => 
      array (
        'fields' => 
        array (
          'id' => 27,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'share-buttons',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<li><a target="_blank" class="popup-share" href="https://vk.com/share.php?url=[[++site_url]][[~[[+id]]]]"><span class="icon-vk"></span></a></li>
<li><a target="_blank" class="popup-share" href="http://www.facebook.com/sharer/sharer.php?u=[[++site_url]][[~[[+id]]]]"><span class="icon-facebook"></span></a></li>
<li><a target="_blank" class="popup-share" href="http://www.twitter.com/share?url=[[++site_url]][[~[[+id]]]]&text=[[+pagetitle:ellipsis=`140`]]"><span class="icon-twitter"></span></a></li>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<li><a target="_blank" class="popup-share" href="https://vk.com/share.php?url=[[++site_url]][[~[[+id]]]]"><span class="icon-vk"></span></a></li>
<li><a target="_blank" class="popup-share" href="http://www.facebook.com/sharer/sharer.php?u=[[++site_url]][[~[[+id]]]]"><span class="icon-facebook"></span></a></li>
<li><a target="_blank" class="popup-share" href="http://www.twitter.com/share?url=[[++site_url]][[~[[+id]]]]&text=[[+pagetitle:ellipsis=`140`]]"><span class="icon-twitter"></span></a></li>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 19,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li><a href="[[+link]]">[[+menutitle]]</a></li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="active">[[+menutitle]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li class="disabled">&nbsp;...&nbsp;</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul class="breadcrumb">[[+output]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/** @var array $scriptProperties */
/** @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
$path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoFetch = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');

if (!isset($from) || $from == \'\') {
    $from = 0;
}
if (empty($to)) {
    $to = $modx->resource->id;
}
if (empty($direction)) {
    $direction = \'ltr\';
}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {
    $outputSeparator = \'&nbsp;&larr;&nbsp;\';
}
if ($limit == \'\') {
    $limit = 10;
}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {
    $limit = $maxCrumbs;
}
if (!empty($containerTpl)) {
    $tplWrapper = $containerTpl;
}
if (!empty($currentCrumbTpl)) {
    $tplCurrent = $currentCrumbTpl;
}
if (!empty($linkCrumbTpl)) {
    $scriptProperties[\'tpl\'] = $linkCrumbTpl;
}
if (!empty($maxCrumbTpl)) {
    $tplMax = $maxCrumbTpl;
}
if (isset($showBreadCrumbsAtHome)) {
    $showAtHome = $showBreadCrumbsAtHome;
}
if (isset($showHomeCrumb)) {
    $showHome = $showHomeCrumb;
}
if (isset($showCurrentCrumb)) {
    $showCurrent = $showCurrentCrumb;
}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
    return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {
    $where[\'published\'] = 1;
}
if (empty($showHidden)) {
    $where[\'hidemenu\'] = 0;
}
if (empty($showDeleted)) {
    $where[\'deleted\'] = 0;
}
if (!empty($hideContainers) && empty($showContainer)) {
    $where[\'isfolder\'] = 0;
}

$resource = ($to == $modx->resource->id)
    ? $modx->resource
    : $modx->getObject($class, $to);

if (!$resource) {
    $message = \'Could not build breadcrumbs to resource "\' . $to . \'"\';

    return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
    $parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
    if (!empty($parent)) {
        $ids[] = $parent;
    }
    if (!empty($from) && $parent == $from) {
        break;
    }
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
    $where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\', $resourceColumns));

// Add custom parameters
foreach (array(\'where\', \'select\') as $v) {
    if (!empty($scriptProperties[$v])) {
        $tmp = $scriptProperties[$v];
        if (!is_array($tmp)) {
            $tmp = json_decode($tmp, true);
        }
        if (is_array($tmp)) {
            $$v = array_merge($$v, $tmp);
        }
    }
    unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
    \'class\' => $class,
    \'where\' => json_encode($where),
    \'select\' => json_encode($select),
    \'groupby\' => $class . \'.id\',
    \'sortby\' => "find_in_set(`$class`.`id`,\'" . implode(\',\', $ids) . "\')",
    \'sortdir\' => \'\',
    \'return\' => \'data\',
    \'totalVar\' => \'pdocrumbs.total\',
    \'disableConditions\' => true,
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
    if (strtolower($direction) == \'ltr\') {
        $rows = array_reverse($rows);
    }

    foreach ($rows as $row) {
        if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
            $row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
                ? $pdoFetch->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row)
                : $row[\'content\'];
        } else {
            $row[\'link\'] = $pdoFetch->makeUrl($row[\'id\'], $row);
        }

        $row = array_merge(
            $scriptProperties,
            $row,
            array(\'idx\' => $pdoFetch->idx++)
        );
        if (empty($row[\'menutitle\'])) {
            $row[\'menutitle\'] = $row[\'pagetitle\'];
        }

        if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
            continue;
        } elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
            $tpl = $tplCurrent;
        } elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
            $tpl = $tplHome;
        } else {
            $tpl = $pdoFetch->defineChunk($row);
        }
        $output[] = empty($tpl)
            ? \'<pre>\' . $pdoFetch->getChunk(\'\', $row) . \'</pre>\'
            : $pdoFetch->getChunk($tpl, $row, $fastMode);
    }
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
    $pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
    $output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
    $output[\'log\'] = $log;
    $modx->setPlaceholders($output, $toSeparatePlaceholders);
} else {
    $output = implode($outputSeparator, $output);
    if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
        $output = ($direction == \'ltr\')
            ? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
            : $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
    }
    $output .= $log;

    if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
        $output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
    }

    if (!empty($toPlaceholder)) {
        $modx->setPlaceholder($toPlaceholder, $output);
    } else {
        return $output;
    }
}',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getResourcesTag' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getResourcesTag',
          'description' => 'Wraps the getResources and getPage snippets to do tag-based navigation. Requires both of those snippets to run.',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * Wrap the getPage/getResources call to implement tagging. Needs getPage and
 * getResources to be installed to work.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$tagKey = (!empty($tagKeyVar) && !empty($_GET[$tagKeyVar]))? $_GET[$tagKeyVar] : $modx->getOption(\'tagKey\',$scriptProperties,\'tags\');
$tagRequestParam = $modx->getOption(\'tagRequestParam\',$scriptProperties,\'tag\');
$grSnippet = $modx->getOption(\'grSnippet\',$scriptProperties,\'getPage\');
$tag = $modx->getOption(\'tag\',$scriptProperties,urldecode($_GET[$tagRequestParam]));
if (!empty($tag)) {
    $tag = $modx->stripTags($tag);
    $tagSearchType = $modx->getOption(\'tagSearchType\',$scriptProperties,\'exact\');
    if ($tagSearchType == \'contains\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==%\'.$tag.\'%\';
    } else if ($tagSearchType == \'beginswith\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==%\'.$tag.\'\';
    } else if ($tagSearchType == \'endswith\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==\'.$tag.\'%\';
    } else if ($tagSearchType == \'within\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'(IN)\'.$tag.\'\';
    } else {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==\'.$tag.\'\';
    }    
}
/** @var modSnippet $elementObj */
$elementObj = $modx->getObject(\'modSnippet\', array(\'name\' => $grSnippet));
if ($elementObj) {
    $elementObj->setCacheable(false);
    $output = $elementObj->process($scriptProperties);
} else {
    return \'You must have getPage and getResources downloaded and installed to use this snippet.\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_grt.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'prop_grt.tplodd_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'prop_grt.tplfirst_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'prop_grt.tpllast_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'prop_grt.sortby_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Field to sort by. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortbyAlias' => 
            array (
              'name' => 'sortbyAlias',
              'desc' => 'prop_grt.sortbyalias_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Query alias for sortby field. Defaults to an empty string.',
              'area_trans' => '',
            ),
            'sortbyEscaped' => 
            array (
              'name' => 'sortbyEscaped',
              'desc' => 'prop_grt.sortbyescaped_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'prop_grt.sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ascending',
                  'vaue' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_grt.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'prop_grt.offset_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'prop_grt.tvfilters_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimeter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'prop_grt.depth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'prop_grt.parents_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'prop_grt.includecontent_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'prop_grt.includetvs_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'prop_grt.processtvs_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'prop_grt.tvprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tv.',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'prop_grt.idx_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'prop_grt.first_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'prop_grt.last_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'prop_grt.debug_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'If true, will send the SQL query to the MODx log. Defaults to false.',
              'area_trans' => '',
            ),
            'namespace' => 
            array (
              'name' => 'namespace',
              'desc' => 'prop_grt.namespace_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'prop_grt.page_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'prop_grt.pagevarkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The key of a property that indicates the current page.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'prop_grt.totalvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'total',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'prop_grt.pagelimit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The maximum number of pages to display when rendering paging controls.',
              'area_trans' => '',
            ),
            'elementClass' => 
            array (
              'name' => 'elementClass',
              'desc' => 'prop_grt.elementclass_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modSnippet',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The class of element that will be called by the getPage snippet instance.',
              'area_trans' => '',
            ),
            'element' => 
            array (
              'name' => 'element',
              'desc' => 'prop_grt.element_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'getResources',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The element name that will be called by the getPage instance.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'prop_grt.pagenavvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page.nav',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The key of a placeholder to be set with the paging navigation controls.',
              'area_trans' => '',
            ),
            'pageNavTpl' => 
            array (
              'name' => 'pageNavTpl',
              'desc' => 'prop_grt.pagenavtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Content representing a single page navigation control.',
              'area_trans' => '',
            ),
            'pageActiveTpl' => 
            array (
              'name' => 'pageActiveTpl',
              'desc' => 'prop_grt.pageactivetpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Content representing the current page navigation control.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'prop_grt.pagefirsttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Content representing the first page navigation control.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'prop_grt.pagelasttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Content representing the last page navigation control.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'prop_grt.pageprevtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Content representing the previous page navigation control.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'prop_grt.pagenexttpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Content representing the next page navigation control.',
              'area_trans' => '',
            ),
            'tagKey' => 
            array (
              'name' => 'tagKey',
              'desc' => 'prop_grt.tagkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tags',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The key to set the tags filter by.',
              'area_trans' => '',
            ),
            'tagKeyVar' => 
            array (
              'name' => 'tagKeyVar',
              'desc' => 'prop_grt.tagkeyvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'key',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. Name of the REQUEST param key. If exists in the REQUEST - it overrides tagkey. Setting it to empty - it will disable this override.',
              'area_trans' => '',
            ),
            'tagRequestParam' => 
            array (
              'name' => 'tagRequestParam',
              'desc' => 'prop_grt.tagrequestparam_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST param key being sent that will be the value for the tags filter.',
              'area_trans' => '',
            ),
            'tagSearchType' => 
            array (
              'name' => 'tagSearchType',
              'desc' => 'prop_grt.tagsearchtype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'grt.tst_contains',
                  'value' => 'contains',
                  'name' => 'Contains',
                ),
                1 => 
                array (
                  'text' => 'grt.tst_exact',
                  'value' => 'exact',
                  'name' => 'Exact',
                ),
                2 => 
                array (
                  'text' => 'grt.tst_beginswith',
                  'value' => 'beginswith',
                  'name' => 'Begins With',
                ),
                3 => 
                array (
                  'text' => 'grt.tst_endswith',
                  'value' => 'endswith',
                  'name' => 'Ends With',
                ),
                4 => 
                array (
                  'text' => 'grt.tst_within',
                  'value' => 'within',
                  'name' => 'Within',
                ),
              ),
              'value' => 'contains',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'prop_grt.tagsearchtype_desc',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * Wrap the getPage/getResources call to implement tagging. Needs getPage and
 * getResources to be installed to work.
 *
 * @var modX $modx
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$tagKey = (!empty($tagKeyVar) && !empty($_GET[$tagKeyVar]))? $_GET[$tagKeyVar] : $modx->getOption(\'tagKey\',$scriptProperties,\'tags\');
$tagRequestParam = $modx->getOption(\'tagRequestParam\',$scriptProperties,\'tag\');
$grSnippet = $modx->getOption(\'grSnippet\',$scriptProperties,\'getPage\');
$tag = $modx->getOption(\'tag\',$scriptProperties,urldecode($_GET[$tagRequestParam]));
if (!empty($tag)) {
    $tag = $modx->stripTags($tag);
    $tagSearchType = $modx->getOption(\'tagSearchType\',$scriptProperties,\'exact\');
    if ($tagSearchType == \'contains\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==%\'.$tag.\'%\';
    } else if ($tagSearchType == \'beginswith\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==%\'.$tag.\'\';
    } else if ($tagSearchType == \'endswith\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==\'.$tag.\'%\';
    } else if ($tagSearchType == \'within\') {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'(IN)\'.$tag.\'\';
    } else {
        $scriptProperties[\'tvFilters\'] = $tagKey.\'==\'.$tag.\'\';
    }    
}
/** @var modSnippet $elementObj */
$elementObj = $modx->getObject(\'modSnippet\', array(\'name\' => $grSnippet));
if ($elementObj) {
    $elementObj->setCacheable(false);
    $output = $elementObj->process($scriptProperties);
} else {
    return \'You must have getPage and getResources downloaded and installed to use this snippet.\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'dateRU' => 
      array (
        'fields' => 
        array (
          'id' => 32,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'dateRU',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$MyDate = str_replace("January", "января", $MyDate); 
$MyDate = str_replace("February", "февраля", $MyDate);  
$MyDate = str_replace("March", "марта", $MyDate);  
$MyDate = str_replace("April", "апреля", $MyDate);  
$MyDate = str_replace("May", "мая", $MyDate);  
$MyDate = str_replace("June", "июня", $MyDate);  
$MyDate = str_replace("July", "июля", $MyDate); 
$MyDate = str_replace("August", "августа", $MyDate); 
$MyDate = str_replace("September", "сентября", $MyDate); 
$MyDate = str_replace("October", "октября", $MyDate); 
$MyDate = str_replace("November", "ноября", $MyDate); 
$MyDate = str_replace("December", "декабря", $MyDate); 
echo $MyDate;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$MyDate = str_replace("January", "января", $MyDate); 
$MyDate = str_replace("February", "февраля", $MyDate);  
$MyDate = str_replace("March", "марта", $MyDate);  
$MyDate = str_replace("April", "апреля", $MyDate);  
$MyDate = str_replace("May", "мая", $MyDate);  
$MyDate = str_replace("June", "июня", $MyDate);  
$MyDate = str_replace("July", "июля", $MyDate); 
$MyDate = str_replace("August", "августа", $MyDate); 
$MyDate = str_replace("September", "сентября", $MyDate); 
$MyDate = str_replace("October", "октября", $MyDate); 
$MyDate = str_replace("November", "ноября", $MyDate); 
$MyDate = str_replace("December", "декабря", $MyDate); 
echo $MyDate;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tagLister' => 
      array (
        'fields' => 
        array (
          'id' => 28,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'tagLister',
          'description' => 'A simple tag listing snippet that grabs tags from a TV value.',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tagLister snippet
 *
 * @var modX $modx
 * @var TagLister $tagLister
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';
$modx->lexicon->load(\'taglister:default\');

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'tag\');
$tv = $modx->getOption(\'tv\',$scriptProperties,\'tags\');
$tvDelimiter = $modx->getOption(\'tvDelimiter\',$scriptProperties,\',\');
$target = $modx->getOption(\'target\',$scriptProperties,1);
$tagVar = $modx->getOption(\'tagVar\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$limit = $modx->getOption(\'limit\',$scriptProperties,10);
$sortBy = strtolower($modx->getOption(\'sortBy\',$scriptProperties,\'count\'));
$sortDir = strtoupper($modx->getOption(\'sortDir\',$scriptProperties,\'ASC\'));
$cls = $modx->getOption(\'cls\',$scriptProperties,\'\');
$altCls = $modx->getOption(\'altCls\',$scriptProperties,\'\');
$firstCls = $modx->getOption(\'firstCls\',$scriptProperties,\'\');
$lastCls = $modx->getOption(\'lastCls\',$scriptProperties,\'\');
$activeCls = $modx->getOption(\'activeCls\',$scriptProperties,\'\');
$activeTag = isset($_REQUEST[$tagVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagVar])) : \'\';
$activeKey = isset($_REQUEST[$tagKeyVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagKeyVar])) : \'\';
$all = $modx->getOption(\'all\',$scriptProperties,false);
$toLower = $modx->getOption(\'toLower\',$scriptProperties,false);
$weights = $modx->getOption(\'weights\',$scriptProperties,0);
$weightCls = $modx->getOption(\'weightCls\',$scriptProperties,\'\');
$useTagFurl = $modx->getOption(\'useTagFurl\',$scriptProperties,false);
$furlKey = $modx->getOption(\'furlKey\',$scriptProperties,\'tags\');


/* get TV values */
$c = $modx->newQuery(\'modTemplateVarResource\');
$c->innerJoin(\'modTemplateVar\',\'TemplateVar\');
$c->innerJoin(\'modResource\',\'Resource\');
$c->leftJoin(\'modUser\',\'CreatedBy\',\'CreatedBy.id = Resource.createdby\');
$c->leftJoin(\'modUser\',\'PublishedBy\',\'PublishedBy.id = Resource.publishedby\');
$c->leftJoin(\'modUser\',\'EditedBy\',\'EditedBy.id = Resource.editedby\');
$tvPk = (int)$tv;
if (!empty($tvPk)) {
    $c->where(array(\'TemplateVar.id\' => $tvPk));
} else {
    $c->where(array(\'TemplateVar.name\' => $tv));
}
/* parents support */
$parents = isset($parents) ? explode(\',\', $parents) : array();
if (!empty($parents)) {
    $depth = isset($depth) ? (integer) $depth : 10;
    $children = array();
    foreach ($parents as $parent) {
        $kids = $modx->getChildIds($parent,$depth);
        if (!empty($kids)) {
            $children = array_merge($children,$kids);
        }
    }
    if (!empty($children)) {
        $children = array_unique($children);
        $parents = array_merge($parents,$children);
    }
    $parents = array_unique($parents);
    if (!empty($parents)) {
        $c->where(array(
            \'Resource.id:IN\' => $parents,
        ));
    }
}
if (!$modx->getOption(\'includeDeleted\',$scriptProperties,false)) {
    $c->where(array(\'Resource.deleted\' => 0));
}
if (!$modx->getOption(\'includeUnpublished\',$scriptProperties,false)) {
    $c->where(array(\'Resource.published\' => 1));
}
/* json where support */
$where = $modx->getOption(\'where\',$scriptProperties,\'\');
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    if (is_array($where) && !empty($where)) {
        $c->where($where);
    }
}
if ($sortBy == \'publishedon\') {
    $c->sortby(\'Resource.publishedon\',$sortDir);
} else if (in_array($sortBy,array(\'rand\',\'random\',\'rand()\'))) {
    $c->sortby(\'RAND()\',\'\');
}
$tags = $modx->getCollection(\'modTemplateVarResource\',$c);

/* parse TV values */
$output = array();
$tagList = array();
$encoding = $modx->getOption(\'modx_charset\',$scriptProperties,\'UTF-8\');
$useMultibyte = $modx->getOption(\'use_multibyte\',$scriptProperties,false);
/** @var modTemplateVarResource $tag */
foreach ($tags as $tag) {
   $v = $tag->get(\'value\');
   $vs = explode($tvDelimiter,$v);
   foreach ($vs as $key) {
      $key = trim($key);
      if (empty($key)) continue;
      if ($toLower) { /* allow for case-insensitive filtering */
          $key = $useMultibyte ? mb_strtolower($key,$encoding) : strtolower($key);
      }
      /* increment tag count */
      if (empty($tagList[$key])) {
         $tagList[$key] = 1;
      } else { $tagList[$key]++; }
   }
}

/* sort */
switch ($sortBy.\'-\'.$sortDir) {
    case \'publishedon-DESC\': case \'publishedon-ASC\': break;
    case \'tag-ASC\': ksort($tagList); break;
    case \'tag-DESC\': krsort($tagList); break;
    case \'count-DESC\': asort($tagList); break;
    case \'count-ASC\': default: arsort($tagList); break;
    case \'rand-ASC\': case \'random-ASC\': case \'rand()-asc\': $tagList = $tagLister->ashuffle($tagList); break;
}

/* iterate */
$totalTags = 0;
$i = $all ? 1 : 0;
foreach ($tagList as $tag => $count) {
    if ($i >= $limit) break;
    $tagCls = $cls.((!empty($altCls) && $i % 2)? \' \'.$altCls : \'\');
    if (!empty($firstCls) && $i == 0) $tagCls .= \' \'.$firstCls;
    if (!empty($lastCls) && ($i+1 >= $limit || $i == $count)) $tagCls .= \' \'.$lastCls;
    /* if tag is currently being viewed, mark as active */
    if (!empty($activeCls) && $tag==$activeTag && (empty($activeKey) || $tv==$activeKey)) $tagCls .= \' \'.$activeCls;
    /* handle weighting for css */
    if (!empty($weights) && !empty($weightCls)) $tagCls .= \' \'.$weightCls.ceil($count / (max($tagList) / $weights));

    $tagArray = array(
        \'tag\' => $tag,
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $count,
        \'target\' => $target,
        \'cls\' => $tagCls,
        \'idx\' => $i,
    );
    $tagParams = array();
    if (empty($useTagFurl)) {
        $tagParams[$tagVar] = $tag;
        $tagParams[$tagKeyVar] = $tv;
    }
    $tagArray[\'url\'] = $modx->makeUrl($target,\'\',$tagParams);
    if (!empty($useTagFurl)) {
        $tagArray[\'url\'] = rtrim($tagArray[\'url\'],\'/\').\'/\'.(!empty($furlKey) ? $furlKey : $tv).\'/\'.urlencode($tag);
    }

    $output[] = $tagLister->getChunk($tpl,$tagArray);
    $totalTags += $count;
    $i++;
}

if ($all) {
    $allTpl = $modx->getOption(\'allTpl\',$scriptProperties,\'all\');
    $allChunk = $tagLister->getChunk($allTpl,array(
        \'tag\' => !empty($scriptProperties[\'allText\']) ? $scriptProperties[\'allText\'] : $modx->lexicon(\'all_tags\'),
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $totalTags,
        \'target\' => $target,
        \'cls\' => $cls,
        \'url\' => $useTagFurl ? $modx->makeUrl($target).$tv.\'/\' : $modx->makeUrl($target,\'\',array(
            $tagVar => \'\',
            $tagKeyVar => $tv,
        )),
    ));
    if ($modx->getOption(\'allPosition\',$scriptProperties,\'B\') == \'T\') {
        array_unshift($output,$allChunk);
    } else {
        array_push($output,$allChunk);
    }
}

/* output */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_taglister.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a Chunk that will be used for each result.',
              'area_trans' => '',
            ),
            'tv' => 
            array (
              'name' => 'tv',
              'desc' => 'prop_taglister.tv_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tags',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The name or ID of the TV being used for tags.',
              'area_trans' => '',
            ),
            'tvDelimiter' => 
            array (
              'name' => 'tvDelimiter',
              'desc' => 'prop_taglister.tvdelimiter_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The delimiter being used between tags in the TV. Usually a comma, sometimes a space.',
              'area_trans' => '',
            ),
            'target' => 
            array (
              'name' => 'target',
              'desc' => 'prop_taglister.target_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The target Resource to point the tag links to. Will default to the current Resource.',
              'area_trans' => '',
            ),
            'tagVar' => 
            array (
              'name' => 'tagVar',
              'desc' => 'prop_taglister.tagvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tag value. Used in the links generated for each tag result.',
              'area_trans' => '',
            ),
            'tagKeyVar' => 
            array (
              'name' => 'tagKeyVar',
              'desc' => 'prop_taglister.tagkeyvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'key',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tv name. Used in the links generated for each tag result',
              'area_trans' => '',
            ),
            'sortBy' => 
            array (
              'name' => 'sortBy',
              'desc' => 'prop_taglister.sortby_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'count',
                  'value' => 'count',
                  'name' => 'Count',
                ),
                1 => 
                array (
                  'text' => 'tag',
                  'value' => 'tag',
                  'name' => 'Tag',
                ),
              ),
              'value' => 'count',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Field to sort by. Defaults to count. Can be either tag or count.',
              'area_trans' => '',
            ),
            'sortDir' => 
            array (
              'name' => 'sortDir',
              'desc' => 'prop_taglister.sortdir_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ascending',
                  'vaue' => 'ASC',
                  'name' => 'Ascending',
                ),
                1 => 
                array (
                  'text' => 'descending',
                  'value' => 'DESC',
                  'name' => 'Descending',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to ASC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'prop_taglister.limit_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'prop_taglister.parents_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'prop_taglister.depth_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'includeDeleted' => 
            array (
              'name' => 'includeDeleted',
              'desc' => 'prop_taglister.includedeleted_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Include tags from deleted Resources in the results.',
              'area_trans' => '',
            ),
            'includeUnpublished' => 
            array (
              'name' => 'includeUnpublished',
              'desc' => 'prop_taglister.includeunpublished_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Include tags from unpublished Resources in the results.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'prop_taglister.where_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'A criteria in JSON format for filtering results.',
              'area_trans' => '',
            ),
            'cls' => 
            array (
              'name' => 'cls',
              'desc' => 'prop_taglister.cls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to each row. If empty will ignore.',
              'area_trans' => '',
            ),
            'altCls' => 
            array (
              'name' => 'altCls',
              'desc' => 'prop_taglister.altcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag-alt',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to each alternate row. If empty will ignore.',
              'area_trans' => '',
            ),
            'firstCls' => 
            array (
              'name' => 'firstCls',
              'desc' => 'prop_taglister.firstcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the first row. If empty will ignore.',
              'area_trans' => '',
            ),
            'lastCls' => 
            array (
              'name' => 'lastCls',
              'desc' => 'prop_taglister.lastcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the last row. If empty will ignore.',
              'area_trans' => '',
            ),
            'toLower' => 
            array (
              'name' => 'toLower',
              'desc' => 'prop_taglister.tolower_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set to true, will allow case-insensitive tag listing.',
              'area_trans' => '',
            ),
            'all' => 
            array (
              'name' => 'all',
              'desc' => 'prop_taglister.all_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to show an "All Tags" result.',
              'area_trans' => '',
            ),
            'allTpl' => 
            array (
              'name' => 'allTpl',
              'desc' => 'prop_taglister.alltpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'all',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The chunk for showing the all tags link.',
              'area_trans' => '',
            ),
            'allPosition' => 
            array (
              'name' => 'allPosition',
              'desc' => 'prop_taglister.allposition_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'bottom',
                  'value' => 'B',
                  'name' => 'Bottom',
                ),
                1 => 
                array (
                  'text' => 'top',
                  'value' => 'T',
                  'name' => 'Top',
                ),
              ),
              'value' => 'B',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Whether or not the all tags link should be at the top (T) or bottom (B) of the results.',
              'area_trans' => '',
            ),
            'allText' => 
            array (
              'name' => 'allText',
              'desc' => 'prop_taglister.alltext_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The text for the all tags link. Defaults to "All Tags".',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_taglister.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'prop_taglister.outputseparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '
',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The separator for output for each result.',
              'area_trans' => '',
            ),
            'activeCls' => 
            array (
              'name' => 'activeCls',
              'desc' => 'prop_taglister.activecls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to add to the active tag. If empty will ignore.',
              'area_trans' => '',
            ),
            'weightCls' => 
            array (
              'name' => 'weightCls',
              'desc' => 'prop_taglister.weightcls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag-weight',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. A CSS class to prefix to each weight. If empty will disable weights.',
              'area_trans' => '',
            ),
            'weights' => 
            array (
              'name' => 'weights',
              'desc' => 'prop_taglister.weights_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Optional. The number of weights to calculate. 0 or empty will disable weights.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tagLister snippet
 *
 * @var modX $modx
 * @var TagLister $tagLister
 * @var array $scriptProperties
 *
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';
$modx->lexicon->load(\'taglister:default\');

/* setup default properties */
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'tag\');
$tv = $modx->getOption(\'tv\',$scriptProperties,\'tags\');
$tvDelimiter = $modx->getOption(\'tvDelimiter\',$scriptProperties,\',\');
$target = $modx->getOption(\'target\',$scriptProperties,1);
$tagVar = $modx->getOption(\'tagVar\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$limit = $modx->getOption(\'limit\',$scriptProperties,10);
$sortBy = strtolower($modx->getOption(\'sortBy\',$scriptProperties,\'count\'));
$sortDir = strtoupper($modx->getOption(\'sortDir\',$scriptProperties,\'ASC\'));
$cls = $modx->getOption(\'cls\',$scriptProperties,\'\');
$altCls = $modx->getOption(\'altCls\',$scriptProperties,\'\');
$firstCls = $modx->getOption(\'firstCls\',$scriptProperties,\'\');
$lastCls = $modx->getOption(\'lastCls\',$scriptProperties,\'\');
$activeCls = $modx->getOption(\'activeCls\',$scriptProperties,\'\');
$activeTag = isset($_REQUEST[$tagVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagVar])) : \'\';
$activeKey = isset($_REQUEST[$tagKeyVar]) ? $modx->stripTags(urldecode($_REQUEST[$tagKeyVar])) : \'\';
$all = $modx->getOption(\'all\',$scriptProperties,false);
$toLower = $modx->getOption(\'toLower\',$scriptProperties,false);
$weights = $modx->getOption(\'weights\',$scriptProperties,0);
$weightCls = $modx->getOption(\'weightCls\',$scriptProperties,\'\');
$useTagFurl = $modx->getOption(\'useTagFurl\',$scriptProperties,false);
$furlKey = $modx->getOption(\'furlKey\',$scriptProperties,\'tags\');


/* get TV values */
$c = $modx->newQuery(\'modTemplateVarResource\');
$c->innerJoin(\'modTemplateVar\',\'TemplateVar\');
$c->innerJoin(\'modResource\',\'Resource\');
$c->leftJoin(\'modUser\',\'CreatedBy\',\'CreatedBy.id = Resource.createdby\');
$c->leftJoin(\'modUser\',\'PublishedBy\',\'PublishedBy.id = Resource.publishedby\');
$c->leftJoin(\'modUser\',\'EditedBy\',\'EditedBy.id = Resource.editedby\');
$tvPk = (int)$tv;
if (!empty($tvPk)) {
    $c->where(array(\'TemplateVar.id\' => $tvPk));
} else {
    $c->where(array(\'TemplateVar.name\' => $tv));
}
/* parents support */
$parents = isset($parents) ? explode(\',\', $parents) : array();
if (!empty($parents)) {
    $depth = isset($depth) ? (integer) $depth : 10;
    $children = array();
    foreach ($parents as $parent) {
        $kids = $modx->getChildIds($parent,$depth);
        if (!empty($kids)) {
            $children = array_merge($children,$kids);
        }
    }
    if (!empty($children)) {
        $children = array_unique($children);
        $parents = array_merge($parents,$children);
    }
    $parents = array_unique($parents);
    if (!empty($parents)) {
        $c->where(array(
            \'Resource.id:IN\' => $parents,
        ));
    }
}
if (!$modx->getOption(\'includeDeleted\',$scriptProperties,false)) {
    $c->where(array(\'Resource.deleted\' => 0));
}
if (!$modx->getOption(\'includeUnpublished\',$scriptProperties,false)) {
    $c->where(array(\'Resource.published\' => 1));
}
/* json where support */
$where = $modx->getOption(\'where\',$scriptProperties,\'\');
if (!empty($where)) {
    $where = $modx->fromJSON($where);
    if (is_array($where) && !empty($where)) {
        $c->where($where);
    }
}
if ($sortBy == \'publishedon\') {
    $c->sortby(\'Resource.publishedon\',$sortDir);
} else if (in_array($sortBy,array(\'rand\',\'random\',\'rand()\'))) {
    $c->sortby(\'RAND()\',\'\');
}
$tags = $modx->getCollection(\'modTemplateVarResource\',$c);

/* parse TV values */
$output = array();
$tagList = array();
$encoding = $modx->getOption(\'modx_charset\',$scriptProperties,\'UTF-8\');
$useMultibyte = $modx->getOption(\'use_multibyte\',$scriptProperties,false);
/** @var modTemplateVarResource $tag */
foreach ($tags as $tag) {
   $v = $tag->get(\'value\');
   $vs = explode($tvDelimiter,$v);
   foreach ($vs as $key) {
      $key = trim($key);
      if (empty($key)) continue;
      if ($toLower) { /* allow for case-insensitive filtering */
          $key = $useMultibyte ? mb_strtolower($key,$encoding) : strtolower($key);
      }
      /* increment tag count */
      if (empty($tagList[$key])) {
         $tagList[$key] = 1;
      } else { $tagList[$key]++; }
   }
}

/* sort */
switch ($sortBy.\'-\'.$sortDir) {
    case \'publishedon-DESC\': case \'publishedon-ASC\': break;
    case \'tag-ASC\': ksort($tagList); break;
    case \'tag-DESC\': krsort($tagList); break;
    case \'count-DESC\': asort($tagList); break;
    case \'count-ASC\': default: arsort($tagList); break;
    case \'rand-ASC\': case \'random-ASC\': case \'rand()-asc\': $tagList = $tagLister->ashuffle($tagList); break;
}

/* iterate */
$totalTags = 0;
$i = $all ? 1 : 0;
foreach ($tagList as $tag => $count) {
    if ($i >= $limit) break;
    $tagCls = $cls.((!empty($altCls) && $i % 2)? \' \'.$altCls : \'\');
    if (!empty($firstCls) && $i == 0) $tagCls .= \' \'.$firstCls;
    if (!empty($lastCls) && ($i+1 >= $limit || $i == $count)) $tagCls .= \' \'.$lastCls;
    /* if tag is currently being viewed, mark as active */
    if (!empty($activeCls) && $tag==$activeTag && (empty($activeKey) || $tv==$activeKey)) $tagCls .= \' \'.$activeCls;
    /* handle weighting for css */
    if (!empty($weights) && !empty($weightCls)) $tagCls .= \' \'.$weightCls.ceil($count / (max($tagList) / $weights));

    $tagArray = array(
        \'tag\' => $tag,
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $count,
        \'target\' => $target,
        \'cls\' => $tagCls,
        \'idx\' => $i,
    );
    $tagParams = array();
    if (empty($useTagFurl)) {
        $tagParams[$tagVar] = $tag;
        $tagParams[$tagKeyVar] = $tv;
    }
    $tagArray[\'url\'] = $modx->makeUrl($target,\'\',$tagParams);
    if (!empty($useTagFurl)) {
        $tagArray[\'url\'] = rtrim($tagArray[\'url\'],\'/\').\'/\'.(!empty($furlKey) ? $furlKey : $tv).\'/\'.urlencode($tag);
    }

    $output[] = $tagLister->getChunk($tpl,$tagArray);
    $totalTags += $count;
    $i++;
}

if ($all) {
    $allTpl = $modx->getOption(\'allTpl\',$scriptProperties,\'all\');
    $allChunk = $tagLister->getChunk($allTpl,array(
        \'tag\' => !empty($scriptProperties[\'allText\']) ? $scriptProperties[\'allText\'] : $modx->lexicon(\'all_tags\'),
        \'tagVar\' => $tagVar,
        \'tagKey\' => $tv,
        \'tagKeyVar\' => $tagKeyVar,
        \'count\' => $totalTags,
        \'target\' => $target,
        \'cls\' => $cls,
        \'url\' => $useTagFurl ? $modx->makeUrl($target).$tv.\'/\' : $modx->makeUrl($target,\'\',array(
            $tagVar => \'\',
            $tagKeyVar => $tv,
        )),
    ));
    if ($modx->getOption(\'allPosition\',$scriptProperties,\'B\') == \'T\') {
        array_unshift($output,$allChunk);
    } else {
        array_push($output,$allChunk);
    }
}

/* output */
$outputSeparator = $modx->getOption(\'outputSeparator\',$scriptProperties,"\\n");
$output = implode($outputSeparator,$output);
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);