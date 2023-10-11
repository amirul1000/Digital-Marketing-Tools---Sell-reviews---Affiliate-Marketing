<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Language" content="en" >
    <meta name="description" content="<?php echo strip_tags(get_option('website_desc', "SmartStore is the best option to get all social media services in website. Easy build Social Media Marketing Store with a unique design and business process automation")); ?>">
    <meta name="keywords" content="<?php echo strip_tags(get_option('website_keywords', "SmartStore, smm reseller panel, smmpanel, panelsmm, create smm store, business smm, socialmedia, instagram reseller panel, create smm store, resell smm services, smm store, start smm business, cheap smm business, buy instagram followers, instagram likes, facebook followers, facebook likes, twitter likes, youtube views, soundclound")); ?>">
    <title><?php echo strip_tags(get_option('website_title', "SmartStore - Social Media Marketing Store Script")); ?></title>
    
    <link rel="icon" type="image/png" href="<?php echo get_option('website_favicon', BASE."themes/review/assets/images/handi-favicon.ico"); ?>" />
    
    <title>Sign In</title>

    <link href="<?php echo BASE; ?>themes/review/assets/css/bootstrap-grid.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo BASE; ?>themes/review/assets/webfont/fontawesome-free-6.1.1-web/css/all.css" />
    <link rel="stylesheet" href="<?php echo BASE; ?>themes/review/assets/css/font-awesome.min.css" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/swiper.css" rel="stylesheet" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/swipebox.css" rel="stylesheet" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/zoomslider.css" rel="stylesheet" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/customStyle.css" rel="stylesheet" />
    
    <!-- flag icon -->
    <link href="<?php echo BASE; ?>assets/plugins/flags/css/docs.css" rel="stylesheet">
    <link href="<?php echo BASE; ?>assets/plugins/flags/css/flag-icon.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800%7COpen+Sans:400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"></script>
    
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript" src="<?php echo BASE; ?>themes/review/assets/js/modernizr-2.6.2.min.js"></script>
    
  </head>
  
  <body class="signInBody">

    <style>
      ::-webkit-scrollbar {
        display: none;
      }
      /*  IMPORTANT CODE BELOW */

        .slide-track_c {
        width: calc(150px * 20);
        display: flex;
        animation: scroll 20s linear infinite;
        justify-content: space-between;
        }
        
        .slide-track2_c {
        width: calc(150px * 15);
        display: flex;
        animation: scroll2 15s linear infinite;
        justify-content: space-between;
        }
        
        .slide_c {
        width: 150px;
        height: 80px;
        overflow: hidden;
        display: grid;
        place-items: center;
        transition: 0.5s;
        cursor: pointer;
        }
        .slide_c:hover {
        transform: scale(0.8);
        }
        
        @keyframes scroll {
        0% {
          transform: translateX(0px);
        }
        100% {
          transform: translateX(calc(-150px * 10));
        }
        }
        
        @keyframes scroll2 {
        0% {
          transform: translateX(0px);
        }
        100% {
          transform: translateX(calc(-150px * 5));
        }
        }
        
        @media screen and (max-width: 768px) {
        .slide-track_c {
          width: calc(80px * 20);
        }
        
        .slide-track2_c {
          width: calc(80px * 15);
        }
        
        .slide_c {
          width: 80px;
        }
        
        @keyframes scroll {
          0% {
            transform: translateX(0px);
          }
          100% {
            transform: translateX(calc(-80px * 10));
          }
        }
        
        @keyframes scroll2 {
          0% {
            transform: translateX(0px);
          }
          100% {
            transform: translateX(calc(-80px * 5));
          }
        }
        }


    </style>
    
    
    <main>
      <?php echo $template['body']; ?>
    </main>


    <script>
      (function (i, s, o, g, r, a, m) {
        i["GoogleAnalyticsObject"] = r;
        (i[r] =
          i[r] ||
          function () {
            (i[r].q = i[r].q || []).push(arguments);
          }),
          (i[r].l = 1 * new Date());
        (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m);
      })(
        window,
        document,
        "script",
        "https://www.google-analytics.com/analytics.js",
        "ga"
      );

      ga("create", "UA-91006724-1", "auto");
      ga("send", "pageview");
    </script>
  </body>
</html>

