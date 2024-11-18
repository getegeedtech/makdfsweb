<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <?php
        if(!empty($title)){
            $e = array('general' => true,'og' => true,'twitter'=> true,'robot'=> true);
            meta_tags($e, $title, $desc, $imgurl, $url, $keyword);
        }
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="<?php echo img_url() ?>assets/images/favicon.ico">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "MAKDFS",
      "url": "https://www.makdfs.com/",
      "logo": "https://www.makdfs.com/assets/images/logos.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1614 (633) 0109",
        "contactType": "customer service",
        "contactOption": "TollFree",
        "areaServed": "US",
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/makdfs0",
        "https://www.instagram.com/makdfs/",
        "https://twitter.com/makdfs0"
      ]
    }
  </script>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <?php linkCss("css/bootstrap.min.css") ?>
    <?php linkCss("css/typography.css") ?>
    <?php linkCss("css/mediaelementplayer.min.css") ?>
    <?php linkCss("css/style.css") ?>
    <?php linkCss("css/responsive.css") ?>

      <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3MCCDSZW8L"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-3MCCDSZW8L');
    </script>

    <!-- Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11389004302"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11389004302');
    </script>

</head>

<body data-spy="scroll" data-offset="80">    
    <div class="download">
        <a href="https://play.google.com/store/apps/details?id=makdfs.com">DOWNLOAD APP</a> 
    </div>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="la la-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>#iq-about">What is makdfs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>#education">Education</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>#contact-us">Contact Us</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>privacy">Privacy Policy</a>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>blogs">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav justify-content-end">
                            <li class="nav-item iq-mlr-0">
                                <a class="nav-link button"  href="https://m.makdfs.com/" target="_blank">Login</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>