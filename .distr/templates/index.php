<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
require_once 'version.php';

$franchising_metrika_head = '';
$franchising_metrika_body = '';
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://example.com/demo/legal-forum/">
    <meta property="og:image" content="">
    <link rel="image_src" href="">

    <link href="https://example.com/demo/favicon.ico" type="image/x-icon" rel="icon">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->
    <!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8"></script><![endif]-->
    <!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<![endif]-->

    <?= $franchising_metrika_head ?>

</head>

<body class="<?= $version ? 'version-'.$version : '' ?> <?= $partner ? 'partner-'.$partner : '' ?> no-gtm">

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
    </div>

    <!-- Плагины и хелперы -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>

    <script src="js/script.js"></script>

</body>
</html>
