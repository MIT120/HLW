
<html <?php language_attributes(); ?>>
  <head>
    <meta chartset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width" >
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width" >
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link href="http://bg.allfont.net/allfont.css?fonts=ds-digital" rel="stylesheet" type="text/css" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

      <aside class="aside transitions" name="nav">
          <div class="navbar-brand is-flex-tablet0" name="nav">
            <div class="main">
                <div class="nav-center p-b-30">
                    <div class="nav-item">
                        <div class="is-pulled-left"><i id="home" name="liH" class="fa fa-home animated "></i><span name="nameTargetH" class="m-l-20 animated ">Home</span></div>
                      </div>
                    </div>
                <div class="nav-center p-b-30">
                  <div class="nav-item">
                      <div class="is-pulled-left"><i id="schdule" name="liS" class="fa fa-calendar animated "></i><span name="nameTargetS" class="m-l-20 animated ">Schedule</span></div>
                  </div>
                </div>
                <div class="nav-center p-b-30">
                  <div class="nav-item">
                      <div class="is-pulled-left"><i id="about" name="liA" class="fa fa-users animated "></i><span name="nameTargetA" class="m-l-20 animated ">About</span></div>
                  </div>
                </div>
                <div class="nav-center p-b-30">
                  <div class="nav-item">
                      <div class="is-pulled-left"><i id="contact" name="liC" class="fa fa-envelope animated "></i><span name="nameTargetC" class="m-l-20 animated ">Contact</span></div>
                  </div>
                </div>

                <div class="nav-center p-b-30">
                  <a href="https://www.eventbrite.nl/">
                    <div class="nav-item">
                    <div class="is-pulled-left"><i name="liT" class="fa fa-ticket animated "></i><span name="nameTargetT" class="m-l-20 animated ">Join us</span></div>
                  </div>
                  </a>
                </div>
            </div>
          </div>
      </aside>
