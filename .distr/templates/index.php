<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
require_once 'version.php';
?>

<?php
  $franchising_metrika_head = file_get_contents("https://franch.sbs.edu.ru/franchising_metrika.php?partner={$partner}&host={$_SERVER['HTTP_HOST']}&part=head");
  $franchising_metrika_body = file_get_contents("https://franch.sbs.edu.ru/franchising_metrika.php?partner={$partner}&host={$_SERVER['HTTP_HOST']}&part=body");
?>
<!DOCTYPE html>
<html>
    

<head>
    <?php if ( !$version ) { ?>
        <!-- Redirect JS -->
	    <script type="text/javascript">
            location.replace("https://synergyglobal.ru/legalforum/");
        </script>
        <!-- END Redirect JS -->
    <?php }  ?>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="image_src" href="">

    <link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" />
    <link rel="stylesheet" href="https://cdn.synergy.ru/fonts/ProximaNova/style.min.css" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<![endif]-->

    <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '388928375624786');
        fbq('track', 'PageView');
        </script>

    <!-- End Facebook Pixel Code -->

    <?php if ( $GTMID ) { ?>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-<?=$GTMID?>');
    </script>
    <!-- End Google Tag Manager -->
    <?php } ?>
    
    <?= $franchising_metrika_head ?>

</head>

<body class="<?= $version ? 'version-'.$version : '' ?> <?= $partner ? 'partner-'.$partner : '' ?> no-gtm">

    <!-- Facebook Pixel Code -->
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=388928375624786&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <?php if ( $GTMID ) { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-<?=$GTMID?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php } ?>

    <?= $franchising_metrika_body ?>

    {% import 'form/macro.php' as form %}

    <div class="wrapper">
        {% block blocks %}

        {% include 'header/block.php' %}

        {% set top=true %}
        {% set section1=true %}
        {% include 'main/block.php' %}

        {% include 'themes/block.php' %}

        {% include 'concept/block.php' %}

        {% set section1=false%}
        {% set section2=true %}
        {% include 'form-section/block.php' %}

        {% include 'speakers/block.php' %}

        <!-- {% include 'program/block.php' %} -->

        {% include 'result/block.php' %}
        <?php if ($version == 'offline') { ?>
            {% include 'location/block.php' %}
        <?php } elseif ($version == 'online') { ?>
            {% include 'platform/block.php' %}
        <?php } else { ?>
            {% include 'location/block.php' %}
            {% include 'platform/block.php' %}
        <?php } ?>
        {% include 'organizer/block.php' %}
        {% include 'gallerey/block.php' %}
        {% include 'partners/block.php' %}

        {% set top=false %}
        {% set section1=true %}
        {% include 'main/block.php' %}

        {% include 'footer/block.php' %}

        {% endblock %}
    </div>

    <div hidden>
        {% block popups %}

        {% include 'popups/block.php' %}

        {% endblock %}

        <a href="//sydi.ru/"></a>
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>

    <!-- Скрипт ALM Lander -->
    <script src="https://syn.su/js/lander.js" defer></script>
    <script src="js/script.js"></script>

</body>
</html>
