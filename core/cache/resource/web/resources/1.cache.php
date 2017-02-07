<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Построй себя сам!',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p>You have successfully installed MODX Revolution&nbsp;[[++settings_version]]!</p>
<p>Now that MODX is installed you can login to the manager to create your templates, manage content and install third party extras to add functionality to your&nbsp;website.</p>
<h2>New to&nbsp;MODX?</h2>
<p>Pages on a MODX site are called <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/resources">Resources</a>, and are visible on the left-hand side of the manager in the Resources tab. Resources can be nested under other resources, making it easy to create a tree of resources. There are different types of resources for different use&nbsp;cases.</p>
<p>Building your website is done through a combination of <strong>Templates</strong>, <strong>Template Variables</strong>, <strong>Chunks</strong>, <strong>Snippets</strong> and <strong>Plugins</strong>. Collectively these are known as <strong>Elements</strong>, and can also be found in the left-hand side of the manager, in the Elements&nbsp;tab.</p>
<p><a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/templates">Templates</a> contain the outer markup of any page. Each resource can only be assigned to a single template at a time. By adding <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/customizing-content/template-variables">Template Variables</a> to a template, you can add custom fields for any resource using that particular&nbsp;template.</p>
<p>With <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/chunks">Chunks</a> you can share parts of the markup, such as a header, across different templates. <a href="https://rtfm.modx.com/revolution/2.x/making-sites-with-modx/structuring-your-site/using-snippets">Snippets</a> are pieces of PHP that return dynamic content, such as summaries of other resources or the current date. With snippets, you will often use Chunks to mark up the pieces of content it returns, instead of mixing the PHP and&nbsp;HTML.</p>
<p>Finally, <a href="https://rtfm.modx.com/revolution/2.x/developing-in-modx/basic-development/plugins">Plugins</a> enable more advanced features by hooking into the extensive events system provided by&nbsp;MODX.</p>
<p>To learn more about MODX, be sure to check out the <a href="https://rtfm.modx.com/revolution/2.x/getting-started">Getting Started</a> section in the official&nbsp;documentation.</p>',
    'richtext' => 0,
    'template' => 1,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1484572804,
    'editedby' => 1,
    'editedon' => 1484590794,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => 'Главная',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
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
    '_content' => '<!DOCTYPE html>
<html>

  <head>
    <title>Построй себя сам!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="http://buildyourself.by/">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="бег, здоровый образ жизни, паркур, полумарафон, программирование, мотивация, цель, строй себя сам, build youself, running, закаливание, bisonrace, followminsk, марафон, новые технологии">
    <meta charset="UTF-8">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="assets/templates/images/icon.ico">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon-standard-iphone.png">
    <!-- Google Fonts -->
    <link href="assets/templates/https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- MAIN CSS FILES -->
    <!-- Plugins CSS -->
    <!-- Bootstrap -->
    <link href="assets/templates/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SwipeBox -->
    <link href="assets/templates/plugins/swipebox/css/swipebox.min.css" rel="stylesheet">
    <!-- Slick -->
    <link href="assets/templates/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/templates/plugins/slick/slick-theme.css" rel="stylesheet">
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
    <!-- MAIN JS FILES -->
    <link rel="stylesheet" href="assets/templates/fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script src="assets/templates/js/jquery-1.12.4.min.js"></script>
    
    <!-- End Style Sheets -->
    <!-- MAIN CSS FILES -->
  </head>

  <body class="nicescroll">
      
    <!-- Page Preloader  && Scroll to top button-->
    <a class="scroll-to-top-fixed page-scroll" href="body"><span class="icon-arrow-1-up"></span></a>
    <div class="page-preloader">
      <!-- <div class="page-loader-spinner"> <span></span><span></span><span></span> </div> -->
      <!--<div class="loader-3"></div>-->
        <div class="custom-loader">
            <div class="loader-35">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            </div>
        </div>
    </div>
    <!-- End Page Preloader -->
    <!-- SERACH FORM POPUP START -->
    <div class="search-popup-box animated fadeInDown"> 
    <span class="search-popup-close">
        <span class="icon-close"></span>
    </span>
    [[!SimpleSearchForm? &landing=`37` &tpl=`search-mobile`]]
  <!-- <form class="search-form-popup" role="search" action="" method="[[+method:default=`get`]]">
    <input type="hidden" name="id" value="[[+landing]]">
    <div class="form-group"> 
        <input type="text" class="form-control" name="[[+searchIndex]]" id="[[+searchIndex]]" value="[[+searchValue]]" placeholder="Введите слово для поиска"> 
        <button type="submit" value="Поиск">
            <span class="icon-magnifier-1"></span>
        </button> 
    </div>
  </form> -->
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
              <a class="brand-modern" href="index.html"> <span class="logo-label">Build Yourself</span> </a>
            </div>
            <nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    <li><a class="scrollTo" href="#home">Главная</a></li>
    <li><a class="scrollTo" href="#hardening">Закаливание</a></li>
    <li><a class="scrollTo" href="#parkour">Паркур</a></li>
    <li><a class="scrollTo" href="#programming">Программирование</a></li>
    <li><a class="scrollTo" href="#running">Бег</a></li>
    <li><a class="scrollTo" href="#about">О блоге</a></li>
  </ul>
</nav>
<script>
    $(document).ready(function(){
        $(\'.scrollTo\').click(function(){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            $(\'body\').animate({scrollTop: destination}, 1000);
            
            
            return false;
        });
    });
</script>
          </div>
          <!--Menu HTML Code-->
        </div>
      </div>
      <!-- HEADER ENDS  -->
      <!-- INTRO PAGE START -->
      <section id="page-title" class="full-height js-parallax-video image-page-title-centered big-space no-margin">
        <!-- <div class="video-wrap">  -->
        <!--<video poster="images/hero-images/07.jpg" preload="auto" loop autoplay muted width="100" class="parallax-video">-->
        <!--        <source src=\'assets/templates/videos/video-06.mov\' type=\'video/mp4\'/>-->
        <!--        <source src=\'assets/templates/videos/video-06.ogv\' type=\'video/ogg\'/>-->
        <!--    </video> </div>-->
        <div class="overlay-bg flat" style="background-image: -moz-linear-gradient(left, rgba(77,92,178,1) 24%, rgba(68,81,167,1) 100%);
      background-image: -webkit-linear-gradient(left, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
      background-image: linear-gradient(90deg, rgba(77,92,178,1) 24%,rgba(68,81,167,1) 100%);
      background-image: -o-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);
      background-image: -ms-linear-gradient(left, rgb(77,92,178) 24%, rgb(68,81,167,1) 100%);"></div>
        <div class="page-intro-content">
          <div class="content">
            <div class="container-fluid titleopacity">
              <h1>Добро пожаловать на мой личный блог. <br> Надеюсь, Вам здесь будет интересно!</h1>
              <h4>Приятного Вам сёрфинга</h4> </div>
          </div>
        </div>
      </section>
      <!-- INTRO PAGE END -->
      
      <section class="section grey-background no-padding clearfix" id="hardening">
      <div class="full-height-box">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin equal-height-col col-padding-normal">
          <div class="block-content-wrapper">
            <div class="vertical-align-content">
              <h2>Закаливание</h2>
              <p>
                  Вы когда-нибудь мечтали никогда не болеть? Знаю, у каждого бывали времена, когда на улице лето, светит солнце, а ты сидишь дома с ангиной или простудой.
                  Друзья играют во дворе, а тебе приходится пить этот чай с лимоном и делать ингаляции, чтобы вылечить заложенность носа. Или же осенью с приходом холодов
                  все как один начинают сморкаться, чихать. Вы, наверное, удивитесь, но я вам скажу вот что: как это ни странно, но вы можете забыть про эти заболевания. 
                  И для этого придётся потрудиться. Я однажды сделал для себя выбор и поставил перед собой цель начать развивать свой организм настолько, чтобы навсегда забыть о простуде.
              </p>
              <p>
                  Закаливанием я занимаюсь с весны 2016-го года. И вот уже, на сегодняшний день ни разу не болел простудными заболеваниями. Часто хожу по улице в майке при
                  минусовой температуре и ни разу не чувствовал повышение температуры, насморка и кашля. Для того, чтобы узнать, как я этого достиг, и что для этого нужно делать,
                  переходите к записям данной категории.
              </p>
              <p><a href="index.php?id=2" class="btn btn-lg btn-dark-reverse btn-animation-right"><span>Перейти к записям</span><span class="icon-arrow-1-right"></span></a> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin no-padding equal-height-col">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin no-padding video-absolute">
            <div class="cover-bg" style="background-image:url(\'assets/templates/images/hardening.jpg\');"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section background-1 no-padding clearfix" id="parkour">
      <div class="full-height-box">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin no-padding equal-height-col">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin no-padding video-absolute">
            <div class="cover-bg" style="background-image:url(\'assets/templates/images/parkour.jpg\');"></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin equal-height-col col-padding-normal">
          <div class="block-content-wrapper">
            <div class="vertical-align-content">
              <h2>Паркур</h2>
              <p>
                  Паркур - это стиль передвижения по городу. Его родоначальником является француз Дэвид Бэлль. Основной идеей данного стиля является создание альтернативного вида передвижения в городских условиях.
                  Когда вы идёте по улице, вы обращаете внимание на то, что перед вами: лестница, бордюр, стена, парапеты и т. д. - и вы корректируете направление движения исходя из того, что перед вами находится.
                  В паркуре идея такая: не существует границ, есть лишь препятствия, и любое препятствие можно преодолеть. 
              </p>
              <p>
                  Паркуром я начал заниматься с 6-го класса, наверное, спустя год, как возник сам паркур. Но ввиду отстутствия гимнастических залов в моём родном городе, я не сильно развивал себя в этом. Изучал только 
                  те элементы, выполнение которых будет безопастно для меня. Именно поэтому тренировал в основном трюки преодоления препятствий без акробатики и гимнастических элементов. Более подробно о моих достижениях
                  и опыте в паркуре жмякайте на кнопку внизу.
              </p>
              <br>
              <p><a href="index.php?id=5" class="btn btn-lg btn-dark-reverse btn-animation-right"><span>Перейти к записям</span><span class="icon-arrow-1-right"></span></a> </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section grey-background no-padding clearfix" id="programming">
      <div class="full-height-box">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin equal-height-col col-padding-normal">
          <div class="block-content-wrapper">
            <div class="vertical-align-content">
              <h2>Программирование</h2>
              <p>
                  Программирование? На ряду с паркуром и закаливанием? Программирование - это же профессия, а не хобби или саморазвитие, не?
              </p>
              <p>
                  Да, программирование, а точнее, программист - это профессия. И я включил программирование в категорию блога именно потому, что я получаю удовольствие от
                  процесса написания кода. Для меня это тот случай, когда профессия - это то, от чего я получаю удовольствие и удовлетворение. <br>
                  Человек - это особенное существо в мире. Особенно оно тем, что оно умеет творить и создавать новое. Человек может из куска дерева сделать табуретку, из 
                  куска металла - кастрюлю, из кучи трав может создать лекарство; из обычный букв/символов создать программу, сверстать сайт или разработать целую систему.
                  И каждый человек получает удовлетворение от результата своего труда! Программисты, на самом деле, относятся к себе как к создателям, даже шутят иногда о 
                  создании мира представляя его создание как написание кода.
              </p>
              <p>
                  В данном разделе вы найдёте различные посты о моём опыте в программировании, как я вообще докатился до того, что стал программистом, какие проекты для меня были наиболее интересными и
                  над какими проектами я работаю сейчас.
              </p>
              <p><a href="index.php?id=3" class="btn btn-lg btn-dark-reverse btn-animation-right"><span>Перейти к записям</span><span class="icon-arrow-1-right"></span></a> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin no-padding equal-height-col">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin no-padding video-absolute">
            <div class="cover-bg" style="background-image:url(\'assets/templates/images/programming.jpg\');"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section background-1 no-padding clearfix" id="running">
      <div class="full-height-box">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin no-padding equal-height-col">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-margin no-padding video-absolute">
            <div class="cover-bg" style="background-image:url(\'assets/templates/images/running.jpg\');"></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-margin equal-height-col col-padding-normal">
          <div class="block-content-wrapper">
            <div class="vertical-align-content">
              <h2>Бег</h2>
                <p>
                    Программирование, сами знаете, - работа сидячая. На работе постоянно нахожусь в сидячем положении, поэтому, чтобы не заплыть подслойным утепляющим жирком,
                    я очень большое внимание уделяю своей двигательной активности. Именно поэтому я занимаюсь бегом. Для меня бег - это хобби, такое же, как и паркур. Бегать я начал 
                    когда учился на 2-м курсе. Моим первым "тренером" был мой сокамерник в общежитии, которого зовут Василий. На тот момент у него уже был большой опыт в беге, поэтому у меня было за кем
                    тянуться и с кого брать пример. Бегать стараюсь как минимум 2 раза в неделю. Для этого я посещаю тренировки с #followminsk. Об этой замечательной команде вы тоже
                    узнаете из постов этой категории. Здесь вы также узнаете о моём первом в жизни полумарафоне и другой моей беговой цели под названием #ПолКилобайта, о моих травмах (да, они в беге есть, ещё и похуже, чем в паркуре), 
                    о забеге бизонов и многое многое другое.
                </p>
              <p><a href="index.php?id=8" class="btn btn-lg btn-dark-reverse btn-animation-right"><span>Перейти к записям</span><span class="icon-arrow-1-right"></span></a> </p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <section class="section gray-background   clearfix" id="about" name="about">
        <div class="container-fluid">
          <div class="webinar-profil">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 webinar-profil-left">
              <div class="wpl-title-box">
                <h2 class="wpl-name">Кирилл Товпинец</h2> <span class="wpl-position">Автор</span>
                <h2 class="wpl-title">Не существует границ, есть лишь препятствия, и любое препятствие можно преодолеть!</h2> </div>
              <div class="webinar-profil-event col-lg-2 col-md-2 col-sm-3 col-xs-12"> <span class="wpe-date">10 фев. 94</span> <span class="wpe-separator background-1"></span> </div>
              <div class="webinar-profil-desc col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <p>
                    Границы есть только в Вашей голове. Кто бы мог подумать,
                    что человек когда-нибудь полетит как птица? Все говорили: "Это невозможно!", до тех пор, пока не создали первый самолёт. Человек может гораздо больше, чем вы можете себе представить. Но для этого
                    нужно работать над собой. Все мы смотрим на Билла Гейтса: "Ох, мне бы быть таким же богатым, как он!". Но проблема наша в том, что мы видим лишь верхушку айсберга. Мы не знаем о том, чего
                    стоило Биллу Гейтсу на протяжении достаточно долгого периода времени удерживать статус самого богатого человека в мире! Мы не видим то, что происходит за сценой.
                    Если ты хочешь быть таким же богатым, как Билл Гейтс, тогда тебе придётся работать столько же, сколько работал Билл Гейтс.
                </p>
                <p>
                    Цель данного блога не состоит в том, чтобы набрать популярность и кучу просмотров, лайков и репостов. Более того, скажу: вполне возможно, что мой блог не будет столь
                    популярным, как блоги других известных блогеров, потому что этот блог создан для тех, кто готов над собой работать и развивать себя дальше. Он создан для того, чтобы вдохновить тех,
                    то встал на путь строительтва себя как личности, развития себя как человека! Если хотите, можете называть этот блог одной фразой "Just do it!" (от английского "Просто сделай это!")
                    Верьте в себя! Знайте, кто вы есть, и чего вы достойны! И помните, что для вас нет ничего невозможного! Границы есть только в вашей голове.
                </p>
                
                <p>
                    Для человека невозможно лишь две вещи: знать будущее и оживить табуретку, чтобы она начала жить своей жизнью.
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="about-team">
                <div class="team-image"> <img alt="member" src="assets/templates/images/self.jpg"> </div>
                <div class="team-name">
                  <h5>Кирилл Товпинец</h5> <span>Автор</span> </div>
                <div class="team-social"> 
                    <a href="https://vk.com/mantovpinets">
                        <span class="icon-vk"></span> 
                    </a>
                    <a href="https://www.facebook.com/kirill.tovpinec">
                        <span class="icon-facebook"></span> 
                    </a> 
                    <a href="https://twitter.com/KirillTovpinec">
                        <span class="icon-twitter"></span> 
                    </a>
                    <a href="https://www.instagram.com/kirill_tovpinets/">
                        <span class="icon-instagram"></span> 
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section no-padding" id="call-to-action-form">
        <a href="index.php?id=36" class="call-to-action-link background-3 callback" data-fancybox-type="iframe">
          <h4>Если у вас есть вопросы, спрашивайте!<span class="icon-arrow-1-right"></span></h4> </a>
      </section>
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
    </div>
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
<!-- Particles JS -->
<script type="text/javascript" src="assets/templates/plugins/particles/particles.min.js"></script>
<script type="text/javascript" src="assets/templates/plugins/particles/app.js"></script>
<!-- Background Video -->
<script type="text/javascript" src="assets/templates/plugins/backgroundvideo/backgroundVideo.min.js"></script>
<!-- Count To -->
<script type="text/javascript" src="assets/templates/plugins/countto/jquery.countTo.js"></script>
<!-- MAIN JS FILES -->
<!-- Theme Functions -->
<script type="text/javascript" src="assets/templates/js/theme.functions.js"></script>
<!-- Social Widgets Config -->
<script type="text/javascript" src="assets/templates/js/social-widgets-config.js"></script>

<script type="text/javascript" src="assets/templates/fancybox/source/jquery.fancybox.pack.js"></script>
<script>
        
        $(document).ready(function(){
            
            $(\'.callback\').fancybox({
        		maxWidth	: 1800,
        		maxHeight	: 600,
        		fitToView	: false,
        		width		: \'70%\',
        		height		: \'70%\',
        		autoSize	: false,
        		closeClick	: false,
        		openEffect	: \'fade\',
        		closeEffect	: \'fade\'
        	});
        });
        
      </script>
  </body>

</html>',
    '_isForward' => true,
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
    '[[$includes]]' => '<title>Построй себя сам!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="http://buildyourself.by/">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="бег, здоровый образ жизни, паркур, полумарафон, программирование, мотивация, цель, строй себя сам, build youself, running, закаливание, bisonrace, followminsk, марафон, новые технологии">
    <meta charset="UTF-8">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="assets/templates/images/icon.ico">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon-standard-iphone.png">
    <!-- Google Fonts -->
    <link href="assets/templates/https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- MAIN CSS FILES -->
    <!-- Plugins CSS -->
    <!-- Bootstrap -->
    <link href="assets/templates/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SwipeBox -->
    <link href="assets/templates/plugins/swipebox/css/swipebox.min.css" rel="stylesheet">
    <!-- Slick -->
    <link href="assets/templates/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/templates/plugins/slick/slick-theme.css" rel="stylesheet">
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
    <!-- MAIN JS FILES -->
    <link rel="stylesheet" href="assets/templates/fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script src="assets/templates/js/jquery-1.12.4.min.js"></script>
    
    <!-- End Style Sheets -->
    <!-- MAIN CSS FILES -->',
    '[[$preloader]]' => '<a class="scroll-to-top-fixed page-scroll" href="body"><span class="icon-arrow-1-up"></span></a>
    <div class="page-preloader">
      <!-- <div class="page-loader-spinner"> <span></span><span></span><span></span> </div> -->
      <!--<div class="loader-3"></div>-->
        <div class="custom-loader">
            <div class="loader-35">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            </div>
        </div>
    </div>',
    '[[%sisea.search? &namespace=`sisea` &topic=`default`]]' => 'Поиск',
    '[[$search]]' => '<div class="search-popup-box animated fadeInDown"> 
    <span class="search-popup-close">
        <span class="icon-close"></span>
    </span>
    [[!SimpleSearchForm? &landing=`37` &tpl=`search-mobile`]]
  <!-- <form class="search-form-popup" role="search" action="" method="[[+method:default=`get`]]">
    <input type="hidden" name="id" value="[[+landing]]">
    <div class="form-group"> 
        <input type="text" class="form-control" name="[[+searchIndex]]" id="[[+searchIndex]]" value="[[+searchValue]]" placeholder="Введите слово для поиска"> 
        <button type="submit" value="Поиск">
            <span class="icon-magnifier-1"></span>
        </button> 
    </div>
  </form> -->
</div>',
    '[[$mobile-header]]' => '<div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a>
          <a class="brand-modern" href="http://buildyourself.by/"> <span class="logo-label">Build Yourself</span> </a>
          <div class="search-cart-navbar"> 
          <a class="btn btn-search" href="#"><span class="icon-magnifier-1"></span></a>
          </div>
        </div>',
    '[[$page-nav]]' => '<nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    <li><a class="scrollTo" href="#home">Главная</a></li>
    <li><a class="scrollTo" href="#hardening">Закаливание</a></li>
    <li><a class="scrollTo" href="#parkour">Паркур</a></li>
    <li><a class="scrollTo" href="#programming">Программирование</a></li>
    <li><a class="scrollTo" href="#running">Бег</a></li>
    <li><a class="scrollTo" href="#about">О блоге</a></li>
  </ul>
</nav>
<script>
    $(document).ready(function(){
        $(\'.scrollTo\').click(function(){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            $(\'body\').animate({scrollTop: destination}, 1000);
            
            
            return false;
        });
    });
</script>',
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
    '[[$scripts]]' => '<!-- jQuery & Accessories -->
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
<!-- Particles JS -->
<script type="text/javascript" src="assets/templates/plugins/particles/particles.min.js"></script>
<script type="text/javascript" src="assets/templates/plugins/particles/app.js"></script>
<!-- Background Video -->
<script type="text/javascript" src="assets/templates/plugins/backgroundvideo/backgroundVideo.min.js"></script>
<!-- Count To -->
<script type="text/javascript" src="assets/templates/plugins/countto/jquery.countTo.js"></script>
<!-- MAIN JS FILES -->
<!-- Theme Functions -->
<script type="text/javascript" src="assets/templates/js/theme.functions.js"></script>
<!-- Social Widgets Config -->
<script type="text/javascript" src="assets/templates/js/social-widgets-config.js"></script>

<script type="text/javascript" src="assets/templates/fancybox/source/jquery.fancybox.pack.js"></script>
<script>
        
        $(document).ready(function(){
            
            $(\'.callback\').fancybox({
        		maxWidth	: 1800,
        		maxHeight	: 600,
        		fitToView	: false,
        		width		: \'70%\',
        		height		: \'70%\',
        		autoSize	: false,
        		closeClick	: false,
        		openEffect	: \'fade\',
        		closeEffect	: \'fade\'
        	});
        });
        
      </script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'includes' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'includes',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<title>[[*pagetitle]]</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="[[++site_url]]">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="бег, здоровый образ жизни, паркур, полумарафон, программирование, мотивация, цель, строй себя сам, build youself, running, закаливание, bisonrace, followminsk, марафон, новые технологии">
    <meta charset="UTF-8">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="assets/templates/images/icon.ico">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon-standard-iphone.png">
    <!-- Google Fonts -->
    <link href="assets/templates/https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- MAIN CSS FILES -->
    <!-- Plugins CSS -->
    <!-- Bootstrap -->
    <link href="assets/templates/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SwipeBox -->
    <link href="assets/templates/plugins/swipebox/css/swipebox.min.css" rel="stylesheet">
    <!-- Slick -->
    <link href="assets/templates/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/templates/plugins/slick/slick-theme.css" rel="stylesheet">
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
    <!-- MAIN JS FILES -->
    <link rel="stylesheet" href="assets/templates/fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script src="assets/templates/js/jquery-1.12.4.min.js"></script>
    
    <!-- End Style Sheets -->
    <!-- MAIN CSS FILES -->',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<title>[[*pagetitle]]</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <base href="[[++site_url]]">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="keywords" content="бег, здоровый образ жизни, паркур, полумарафон, программирование, мотивация, цель, строй себя сам, build youself, running, закаливание, bisonrace, followminsk, марафон, новые технологии">
    <meta charset="UTF-8">
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="assets/templates/images/icon.ico">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon-standard-iphone.png">
    <!-- Google Fonts -->
    <link href="assets/templates/https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- MAIN CSS FILES -->
    <!-- Plugins CSS -->
    <!-- Bootstrap -->
    <link href="assets/templates/plugins/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SwipeBox -->
    <link href="assets/templates/plugins/swipebox/css/swipebox.min.css" rel="stylesheet">
    <!-- Slick -->
    <link href="assets/templates/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/templates/plugins/slick/slick-theme.css" rel="stylesheet">
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
    <!-- MAIN JS FILES -->
    <link rel="stylesheet" href="assets/templates/fancybox/source/jquery.fancybox.css" type="text/css" media="screen">
    <script src="assets/templates/js/jquery-1.12.4.min.js"></script>
    
    <!-- End Style Sheets -->
    <!-- MAIN CSS FILES -->',
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
      'preloader' => 
      array (
        'fields' => 
        array (
          'id' => 23,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'preloader',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<a class="scroll-to-top-fixed page-scroll" href="body"><span class="icon-arrow-1-up"></span></a>
    <div class="page-preloader">
      <!-- <div class="page-loader-spinner"> <span></span><span></span><span></span> </div> -->
      <!--<div class="loader-3"></div>-->
        <div class="custom-loader">
            <div class="loader-35">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            </div>
        </div>
    </div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<a class="scroll-to-top-fixed page-scroll" href="body"><span class="icon-arrow-1-up"></span></a>
    <div class="page-preloader">
      <!-- <div class="page-loader-spinner"> <span></span><span></span><span></span> </div> -->
      <!--<div class="loader-3"></div>-->
        <div class="custom-loader">
            <div class="loader-35">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            </div>
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
      'search' => 
      array (
        'fields' => 
        array (
          'id' => 24,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'search',
          'description' => '',
          'editor_type' => 0,
          'category' => 14,
          'cache_type' => 0,
          'snippet' => '<div class="search-popup-box animated fadeInDown"> 
    <span class="search-popup-close">
        <span class="icon-close"></span>
    </span>
    [[!SimpleSearchForm? &landing=`37` &tpl=`search-mobile`]]
  <!-- <form class="search-form-popup" role="search" action="[[~[[+landing:default=`[[*id]]`]]]]" method="[[+method:default=`get`]]">
    <input type="hidden" name="id" value="[[+landing]]">
    <div class="form-group"> 
        <input type="text" class="form-control" name="[[+searchIndex]]" id="[[+searchIndex]]" value="[[+searchValue]]" placeholder="Введите слово для поиска"> 
        <button type="submit" value="[[%sisea.search? &namespace=`sisea` &topic=`default`]]">
            <span class="icon-magnifier-1"></span>
        </button> 
    </div>
  </form> -->
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<div class="search-popup-box animated fadeInDown"> 
    <span class="search-popup-close">
        <span class="icon-close"></span>
    </span>
    [[!SimpleSearchForm? &landing=`37` &tpl=`search-mobile`]]
  <!-- <form class="search-form-popup" role="search" action="[[~[[+landing:default=`[[*id]]`]]]]" method="[[+method:default=`get`]]">
    <input type="hidden" name="id" value="[[+landing]]">
    <div class="form-group"> 
        <input type="text" class="form-control" name="[[+searchIndex]]" id="[[+searchIndex]]" value="[[+searchValue]]" placeholder="Введите слово для поиска"> 
        <button type="submit" value="[[%sisea.search? &namespace=`sisea` &topic=`default`]]">
            <span class="icon-magnifier-1"></span>
        </button> 
    </div>
  </form> -->
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
      'page-nav' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'page-nav',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    <li><a class="scrollTo" href="#home">Главная</a></li>
    <li><a class="scrollTo" href="#hardening">Закаливание</a></li>
    <li><a class="scrollTo" href="#parkour">Паркур</a></li>
    <li><a class="scrollTo" href="#programming">Программирование</a></li>
    <li><a class="scrollTo" href="#running">Бег</a></li>
    <li><a class="scrollTo" href="#about">О блоге</a></li>
  </ul>
</nav>
<script>
    $(document).ready(function(){
        $(\'.scrollTo\').click(function(){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            $(\'body\').animate({scrollTop: destination}, 1000);
            
            
            return false;
        });
    });
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<nav class="wsmenu clearfix">
  <ul class="mobile-sub wsmenu-list">
    <li><a class="scrollTo" href="#home">Главная</a></li>
    <li><a class="scrollTo" href="#hardening">Закаливание</a></li>
    <li><a class="scrollTo" href="#parkour">Паркур</a></li>
    <li><a class="scrollTo" href="#programming">Программирование</a></li>
    <li><a class="scrollTo" href="#running">Бег</a></li>
    <li><a class="scrollTo" href="#about">О блоге</a></li>
  </ul>
</nav>
<script>
    $(document).ready(function(){
        $(\'.scrollTo\').click(function(){
            var elementClick = $(this).attr("href");
            var destination = $(elementClick).offset().top;
            $(\'body\').animate({scrollTop: destination}, 1000);
            
            
            return false;
        });
    });
</script>',
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
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<!-- jQuery & Accessories -->
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
<!-- Particles JS -->
<script type="text/javascript" src="assets/templates/plugins/particles/particles.min.js"></script>
<script type="text/javascript" src="assets/templates/plugins/particles/app.js"></script>
<!-- Background Video -->
<script type="text/javascript" src="assets/templates/plugins/backgroundvideo/backgroundVideo.min.js"></script>
<!-- Count To -->
<script type="text/javascript" src="assets/templates/plugins/countto/jquery.countTo.js"></script>
<!-- MAIN JS FILES -->
<!-- Theme Functions -->
<script type="text/javascript" src="assets/templates/js/theme.functions.js"></script>
<!-- Social Widgets Config -->
<script type="text/javascript" src="assets/templates/js/social-widgets-config.js"></script>

<script type="text/javascript" src="assets/templates/fancybox/source/jquery.fancybox.pack.js"></script>
<script>
        
        $(document).ready(function(){
            
            $(\'.callback\').fancybox({
        		maxWidth	: 1800,
        		maxHeight	: 600,
        		fitToView	: false,
        		width		: \'70%\',
        		height		: \'70%\',
        		autoSize	: false,
        		closeClick	: false,
        		openEffect	: \'fade\',
        		closeEffect	: \'fade\'
        	});
        });
        
      </script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- jQuery & Accessories -->
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
<!-- Particles JS -->
<script type="text/javascript" src="assets/templates/plugins/particles/particles.min.js"></script>
<script type="text/javascript" src="assets/templates/plugins/particles/app.js"></script>
<!-- Background Video -->
<script type="text/javascript" src="assets/templates/plugins/backgroundvideo/backgroundVideo.min.js"></script>
<!-- Count To -->
<script type="text/javascript" src="assets/templates/plugins/countto/jquery.countTo.js"></script>
<!-- MAIN JS FILES -->
<!-- Theme Functions -->
<script type="text/javascript" src="assets/templates/js/theme.functions.js"></script>
<!-- Social Widgets Config -->
<script type="text/javascript" src="assets/templates/js/social-widgets-config.js"></script>

<script type="text/javascript" src="assets/templates/fancybox/source/jquery.fancybox.pack.js"></script>
<script>
        
        $(document).ready(function(){
            
            $(\'.callback\').fancybox({
        		maxWidth	: 1800,
        		maxHeight	: 600,
        		fitToView	: false,
        		width		: \'70%\',
        		height		: \'70%\',
        		autoSize	: false,
        		closeClick	: false,
        		openEffect	: \'fade\',
        		closeEffect	: \'fade\'
        	});
        });
        
      </script>',
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
      'SimpleSearchForm' => 
      array (
        'fields' => 
        array (
          'id' => 26,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'SimpleSearchForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'sisea.tpl_form_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'SearchForm',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который будет использоваться как шаблон для отображения формы поиска.',
              'area_trans' => '',
            ),
            'landing' => 
            array (
              'name' => 'landing',
              'desc' => 'sisea.landing_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Ресурс на котором будет вызов сниппета SimpleSearch отображающий результаты поиска.',
              'area_trans' => '',
            ),
            'searchIndex' => 
            array (
              'name' => 'searchIndex',
              'desc' => 'sisea.searchindex_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'search',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Имя параметра который будет использоваться для передачи поискового запроса.',
              'area_trans' => '',
            ),
            'method' => 
            array (
              'name' => 'method',
              'desc' => 'sisea.method_desc',
              'type' => 'combo-boolean',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'sisea.get',
                  'value' => 'get',
                  'name' => 'get',
                ),
                1 => 
                array (
                  'text' => 'sisea.post',
                  'value' => 'post',
                  'name' => 'post',
                ),
              ),
              'value' => 'get',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Какой метод будет использован в форме поиска, POST или GET.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'sisea.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'sisea:properties',
              'area' => '',
              'desc_trans' => 'Выводить результат работы сниппета непосредственно, или использовать для вывода подстановщик с этим именем.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * SimpleSearch
 *
 * Copyright 2010-11 by Shaun McCormick <shaun+sisea@modx.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * Show the search form
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package simplesearch
 */
require_once $modx->getOption(\'sisea.core_path\',null,$modx->getOption(\'core_path\').\'components/simplesearch/\').\'model/simplesearch/simplesearch.class.php\';
$search = new SimpleSearch($modx,$scriptProperties);

/* setup default options */
$scriptProperties = array_merge(array(
  \'tpl\' => \'SearchForm\',
  \'method\' => \'get\',
  \'searchIndex\' => \'search\',
  \'toPlaceholder\' => false,
  \'landing\' => $modx->resource->get(\'id\'),
), $scriptProperties);

if (empty($scriptProperties[\'landing\'])) {
  $scriptProperties[\'landing\'] = $modx->resource->get(\'id\');
}

/* if get value already exists, set it as default */
$searchValue = isset($_REQUEST[$scriptProperties[\'searchIndex\']]) ? $_REQUEST[$scriptProperties[\'searchIndex\']] : \'\';
$searchValues = explode(\' \', $searchValue);
array_map(array($modx, \'sanitizeString\'), $searchValues);
$searchValue = implode(\' \', $searchValues);
$placeholders = array(
    \'method\' => $scriptProperties[\'method\'],
    \'landing\' => $scriptProperties[\'landing\'],
    \'searchValue\' => strip_tags(str_replace(array(\'[\',\']\',\'"\',"\'"),array(\'&#91;\',\'&#93;\',\'&quot;\',\'&apos;\'),$searchValue)),
    \'searchIndex\' => $scriptProperties[\'searchIndex\'],
);

$output = $search->getChunk($scriptProperties[\'tpl\'],$placeholders);
return $search->output($output,$scriptProperties[\'toPlaceholder\']);',
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