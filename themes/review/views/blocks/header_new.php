<?php
    if (isset($page_title) && $page_title != "") {
        $title = $page_title;
    }else{
        $title = get_option('website_title', "SmartStore - Social Media Marketing Store Script");
    }

    if (isset($page_meta_keywords) && $page_meta_keywords != "") {
        $meta_keywords = $page_meta_keywords;
    }else{
        $meta_keywords = get_option('website_keywords', "SmartStore, smm reseller panel, smmpanel, panelsmm, create smm store, business smm, socialmedia, instagram reseller panel, create smm store, resell smm services, smm store, start smm business, cheap smm business, buy instagram followers, instagram likes, facebook followers, facebook likes, twitter likes, youtube views, soundclound");
    }

    if (isset($page_meta_description) && $page_meta_description != "") {
        $meta_description = $page_meta_description;
    }else{
        $meta_description = get_option('website_desc', "SmartStore is the best option to get all social media services in website. Easy build Social Media Marketing Store with a unique design and business process automation");
    }
?>
<!doctype html>
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

    <link href="<?php echo BASE; ?>themes/review/assets/css/bootstrap-grid.css" rel="stylesheet" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- flag icon -->
    <link href="<?php echo BASE; ?>assets/plugins/flags/css/docs.css" rel="stylesheet">
    <link href="<?php echo BASE; ?>assets/plugins/flags/css/flag-icon.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo BASE; ?>themes/review/assets/webfont/fontawesome-free-6.1.1-web/css/all.css" />
    <link rel="stylesheet" href="<?php echo BASE; ?>themes/review/assets/css/font-awesome.min.css" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/swiper.css" rel="stylesheet" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/swipebox.css" rel="stylesheet" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/zoomslider.css" rel="stylesheet" />
    <link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css" />
    <link href="<?php echo BASE; ?>themes/review/assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo BASE; ?>assets/css/feather.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:700,800%7COpen+Sans:400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script type="text/javascript" src="<?php echo BASE; ?>themes/review/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="https://kit.fontawesome.com/82677f8dbc.js" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      var token = '<?php echo strip_tags($this->security->get_csrf_hash()); ?>',
          PATH  = '<?php echo PATH; ?>',
          BASE  = '<?php echo BASE; ?>';
      var    deleteItem = '<?php echo lang("Are_you_sure_you_want_to_delete_this_item"); ?>';
      var    deleteItems = '<?php echo lang("Are_you_sure_you_want_to_delete_all_items"); ?>';
    </script>
    <?=htmlspecialchars_decode(get_option('embed_head_javascript', ''), ENT_QUOTES)?>
    
    <style>
        .disable-arrow::-ms-expand {
          display: none;
        }

        .disable-arrow {
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          background-image: none;
          background-color: white;
          padding-right: 20px; /* add padding to the right to make room for the arrow */
          border: 1px solid #0091d1;
        }
        .wrapper {
          /* height: 100vh; */
          /*This part is important for centering*/
          display: grid;
          place-items: left;
        }

        .typing-demo {
          width: 23ch;
          animation: typing 2s steps(22), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          color: #fff;
          text-transform: uppercase;
          font-weight: bold;
          font-size: 20px;
        }

        @keyframes typing {
          from {
            width: 0
          }
        }
            
        @keyframes blink {
          50% {
            border-color: transparent
          }
        }
        
        .wrapper2 {
          /* height: 100vh; */
          /*This part is important for centering*/
          display: grid;
          place-items: left;
        }
        
        .typing-demo2 {
          width: 23ch;
          animation: typing 2s steps(22), blink .5s step-end infinite alternate;
          white-space: nowrap;
          overflow: hidden;
          border-right: 3px solid;
          color: #fff;
          text-transform: uppercase;
          font-weight: bold;
          font-size: 20px;
        }
        
        /* @keyframes typing {
          from {
            width: 0
          }
        }
            
        @keyframes blink {
          50% {
            border-color: transparent
          }
        } */
    </style>
  </head>
    <?php
        $category_class = get_category_services_class_css($this->uri->uri_string());
    ?>  
  
  <body>
    
    <!-- load general header -->
    <?php echo Modules::run("blocks/user_header_new");?>