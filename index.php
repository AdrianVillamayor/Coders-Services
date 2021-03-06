<?php
  require_once("Core/multilang.php");
?>

<!DOCTYPE html>

<html lang="<?=$web_lang;?>">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

  <meta name="keywords" content="">

  <title>Coders Services</title>

  <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
  <link rel="manifest" href="img/fav/site.webmanifest">
  <link rel="mask-icon" href="img/fav/safari-pinned-tab.svg" color="#ec0256">
  <meta name="msapplication-TileColor" content="#333">

  <meta name="theme-color" content="#<link rel=" apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">

  <link rel="manifest" href="img/fav/site.webmanifest">
  <link rel="mask-icon" href="img/fav/safari-pinned-tab.svg" color="#ec0256">
  <meta name="msapplication-TileColor" content="#333">
  <meta name="theme-color" content="#ec0256">

  <!-- FACEBOOK -->
  <meta property="og:url" content="https://coders.services/"> <!-- YOUR URL -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="Coders Services - <?=_("Multi-platform application development")?>"> <!-- EDIT -->
  <meta property="og:description" content=" <?=_("We use the latest technologies to make this happen as by magic")?>"> <!-- EDIT -->
  <meta property="og:image" content="img/fav/android-chrome-256x256.png"> <!-- EDIT -->

  <!-- TWITTER -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@coders_services"> <!-- EDIT -->
  <meta name="twitter:creator" content="@Adrii_DeVS"> <!-- EDIT -->
  <meta name="twitter:title" content="Coders Services - <?=_("Multi-platform application development")?>"> <!-- EDIT -->
  <meta name="twitter:description" content="<?=_("We use the latest technologies to make this happen as by magic")?>"> <!-- EDIT -->
  <meta name="twitter:image" content="img/fav/android-chrome-256x256.png"> <!-- EDIT -->

  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/main.css?<?=time()?>">

</head>

<body>

  <main role="main">

    <div class="fixed-top flex-justify-space-between p-3 px-5 row">
      <div>
        <img class="img-fluid lozad" style="opacity: .9;width:50px;" src="img/logo.png">
      </div>

      <div class="flex-justify-flex-end ">
        <div id="dropdown">

          <?php
            if($lang == "es"){
              echo  '
                <button data-lang="es">'._("Spanish").'</button>
                <button class="lang" data-lang="en">'._("English").'</button>
              ';
            }else{
              echo  '
                <button data-lang="en">'._("English").'</button>
                <button class="lang" data-lang="es">'._("Spanish").'</button>
              ';
            }
          ?>

          <!-- <button class="lang" data-lang="ca">Catalan</button> -->
        </div>
      </div>
    </div>

    <article id="webslides" class="vertical">

      <section class="container">
        <div class="wrap aligncenter zoomIn">
          <h1><strong><?=_("Multi-platform application development")?> </strong></h1>

          <p class="text-intro"><?=_("We use the latest technologies to make this happen as by magic")?>.</p>

        </div>
        <div class="wrap aligncenter zoomIn">

          <p style="position: relative; top: 50px;"> <img class="img-fluid" style="width: 150px" src="img/letstalk_w.png"></p>

        </div>

        <div class="flex-justify-center arrow-box">
          <a href="javascript:;" class="flex-align-center mt-5">
            <div class="arrow">
              <span></span>
              <span></span>
              <span></span>
            </div>

          </a>

        </div>

      </section>

      <section class="container">
        <div class="wrap mt">
          <h2 class="my-3"><strong> <?=_("Why Coders Services ?")?> </strong></h2>
          <p class="text-intro my-4"><?=_("We are able to create complete environments, joining mobile and web technologies and giving a complete experience to the users")?></p>

          <ul class="flexblock gallery container">
            <li>
              <a class="fadeInUp" href="#page=4" title="Web">
                <figure>
                  <img alt="Responsive Design" class="img-fluid lozad zoomIn" src="img/multi-platf.svg">
                  <figcaption>
                    <h2><?=_("Multi-platform application development")?> </h2>
                  </figcaption>
                </figure>
              </a>
            </li>
            <li>
              <a class="fadeInUp" href="#page=3" title="Responsive Design">
                <figure>
                  <img alt="Responsive Design" class="img-fluid lozad zoomIn" src="img/responsive-design.svg">
                  <figcaption>
                    <h2> <?=_("Responsive Design to work on all systems")?> </h2>
                  </figcaption>
                </figure>
              </a>
            </li>
            <li class="alone_2">
              <a class="fadeInUp" href="#page=5" title="Mobile">
                <figure>
                  <img alt="Native & Hybrid ANDROID & iOS apps" style="padding: 65px;" class="img-fluid lozad"
                    src="img/app.svg">
                  <figcaption>
                    <h2><?=_("Native & Hybrid ANDROID & iOS apps ")?></h2>
                  </figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="container mb-5">
        <div class="wrap mt zoomIn">

          <h2 class="mt-3 mb-5"><?=_("CUSTOM PROGRAMMING")?></h2>

          <div class="grid vertical-align">

            <div class="column fadeInUp">
              <h4>
                <strong><?=_("BACK-END")?></strong>
              </h4>
              <p><?=_("The back-end of a website is comprised of complicated code that’s never seen or interacted with, but drives the whole show.</p> <p>We are able to create complete environments, joining mobile and web technologies and giving a complete experience to the users")?>.</p>
            </div>

            <div class="column zoomIn">
              <figure><img class="aligncenter" src="img/programming.svg" alt="Coders Services Files"></figure>
            </div>

            <div class="column fadeInUp">
              <h4>
                <strong><?=_("FRONT-END")?></strong>
              </h4>
              <p><?=_("Front-end web development refers to any functional elements that users see and interact with, such as image carousels or slide-out menus. Our front end functional pieces are custom-fit, built-from-scratch solutions that aren’t just exceptionally easy to maintain and expand on; they’re also reliable and stable")?>.</p>
            </div>

          </div>
          <!--end .grid -->
        </div>
      </section>

      <section class="container">
        <div class="wrap mt">
          <h2 class="my-3"><?=_("WEB TECHNOLOGY")?></h2>

          <ul class="flexblock features">

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="PHP" class="img-fluid lozad" src="img/php_logo.png">
                    </div>
                  </span>
                  PHP
                </h2>
                API rest - Laravel
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="golang" class="img-fluid lozad" style="width: 10rem;" src="img/go_logo.png">
                    </div>
                  </span>
                  GO
                </h2>
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="PYTHON" class="img-fluid lozad" src="img/py_logo.png">
                    </div>
                  </span>
                  Python
                </h2>
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="html" class="img-fluid lozad" src="img/html_logo.png">
                    </div>
                  </span>
                  HTML
                </h2>
                Pug
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="css" class="img-fluid lozad" src="img/css_logo.png">
                    </div>
                  </span>
                  CSS
                </h2>
                LESS - SCSS
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="javascript" class="img-fluid lozad" src="img/js_logo.png">
                    </div>
                  </span>
                  JavaScript
                </h2>
                Node - Ajax - Electron - Vue - React
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="java" class="img-fluid lozad" src="img/java_logo.png">
                    </div>
                  </span>
                  Java
                </h2>
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="java" class="img-fluid lozad" src="img/mysql_logo.png">
                    </div>
                  </span>
                  MySQL
                </h2>
              </div>
            </li>
            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="java" class="img-fluid lozad" src="img/mongodb_logo.png">
                    </div>
                  </span>
                  Mongo DB
                </h2>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="container">
        <div class="wrap mt">
          <h2 class="my-3"><?=_("MOBILE TECHNOLOGY")?></h2>

          <ul class="flexblock features">

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo">
                    <div class="text-right flex flex-align-center zoomIn">
                      <img alt="android" class="img-fluid lozad" src="img/android_logo.png">
                    </div>
                  </span>
                  Android
                </h2>
                Java - Kotlin
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo zoomIn">
                    <div class="text-right">
                      <img alt="swift" class="img-fluid lozad" src="img/swift_logo.png">
                    </div>
                  </span>
                  Swift
                </h2>
              </div>
            </li>

            <li class="fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo zoomIn">
                    <div class="text-right flex flex-align-center">
                      <img alt="Flutter" class="img-fluid lozad" src="img/flutter_logo.png">
                    </div>
                  </span>
                  Flutter
                </h2>
              </div>
            </li>

            <li class="alone fadeInUp">
              <div class="zoomIn">
                <h2>
                  <span class="img-logo zoomIn">
                    <div class="text-right flex flex-align-center">
                      <img alt="Ionic" class="img-fluid lozad" src="img/ionic_logo.png">
                    </div>
                  </span>
                  Ionic
                </h2>
              </div>
            </li>

          </ul>
        </div>
      </section>

      <section class="aligncenter container ">
        <div class="wrap">
          <h2 class="my-3"><strong><?=_("Ready to start a project ?")?></strong> </h2>
          <p class="text-intro my-5"><?=_("Whether it is enhancing an existing application or architecting an enterprise application, our developers are up for your challenge")?></p>
          <p>
            <a href="mailto:hola@coders.services" target="_blank" rel="noopener" title="hola@coders.services ">
            <img class="img-fluid grow zoomIn" style="width: 150px" src="img/letstalk_w.png">
            </a>
          </p>
        </div>
      </section>

    </article>

  </main>

</body>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script src="js/plugins/webslides.min.js?<?=time()?>"></script>
<script src="js/plugins/swiped-events.js?<?=time()?>"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

<script>
  let lang = "<?=$lang?>";
</script>
<script src="js//main.js?<?=time()?>"></script>

</html>
