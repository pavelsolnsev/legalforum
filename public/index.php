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

    

    <div class="wrapper">
        

        <header class="header">
    <div class="container">
        <div class="header__box">
            <div class="header__logo">
                <img src="img/header/logo.png" alt="Школа бизнеса Синергия" class="header__logo-img">
                <img src="img/header/logo_vtb.png" alt="ВТБ - генеральный партнёр" class="header__logo-img">
                <img src="img/header/logo_lemchik.svg" alt="Лемчик, Крупский и партнеры" class="header__logo-img header__logo-img_lemchik">
            </div>
            <div class="header__phone">
                <a href="tel:<?=$phone_link?>" class="header__phone-number"><?=$phone?></a><br>
            </div>
            <div class="header__buttonbox">
                <a href="#popup-reg" class="button button_link header__button" data-fancybox>Участвовать </a>
            </div>
        </div>
    </div>
</header>

        
        
        
<section class="main main_top">



    <div class="container">
        <?php if ($version != 'offline' && $version != 'online') { ?>
        <div class="main__main_theme">
        Очное участие в Москве <br>и онлайн по всему миру
        </div>
        <?php } ?>

        <div class="main__date">
            <span><?=$date?></span>
            <span class="main__date-separator">|</span>
            <span><?=$location?></span>
        </div>

        <h1 class="main__title">Юридический форум</h1>

        <div class="main__logo">
            <img src="img/main/main_title.png" alt="Synergy legal Forum">
        </div>

        <div class="main__description">Для юристов всех сфер, владельцев малого, среднего и&nbsp;крупного бизнеса</div>

        <div class="main__info">
            <span>1&nbsp;день форума</span>
            <span class="main__info-separator">|</span>
            <span>16&nbsp;спикеров</span>
        </div>

    </div>

    <div class="main__figure">
        <img src="img/main/main_figure.png" alt="">
    </div>

    

<section class="form-section form-section_1 lazy">
    <div class="container">
        <div class="form-section__box form-section__box_dark">
        
<form action="<?=$action?>&form=reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Принять участие</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="ИМЯ" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="ТЕЛЕФОН" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Соглашаюсь с&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и&nbsp;на&nbsp;получение рассылок.</div>
            </label>
        </div>
    </div>
</form>

        </div>
    </div>
</section>


    
</section>

        <section class="themes lazy">

    <div class="container">
        <div class="themes__block">
            <h2 class="themes__title">Ключевые темы</h2>
            <div class="swiper-nav">
                <div class="themes__btn-next swiper-button-next"></div>
                <div class="themes__pagination swiper-pagination"></div>
                <div class="themes__btn-prev swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <div class="themes-swiper swiper-container">
        <div class="swiper-wrapper">
        
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-1.png" class="swiper-item__img">
                <p class="swiper-item__text">Структурирование бизнеса в&nbsp;новых реалиях 2020 года</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-2.png" class="swiper-item__img">
                <p class="swiper-item__text">Налоговый контроль в&nbsp;2020&nbsp;году: актуальные тренды и&nbsp;способы защиты</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-3.png" class="swiper-item__img">
                <p class="swiper-item__text">Уголовная и&nbsp;субсидиарная ответственность топ-менеджеров</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-4.png" class="swiper-item__img">
                <p class="swiper-item__text">Практика проведения оперативно-розыскных мероприятий</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-5.png" class="swiper-item__img">
                <p class="swiper-item__text">Страхование ответственности топ-менеджеров: тенденции 2020</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-6.png" class="swiper-item__img">
                <p class="swiper-item__text">Кто виноват в&nbsp;убытках компании: найти и&nbsp;просудиться</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-7.png" class="swiper-item__img">
                <p class="swiper-item__text">Охота за&nbsp;бенефициаром. Возможности налоговых органов по&nbsp;привлечению к&nbsp;субсидиарной ответственности.</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-8.png" class="swiper-item__img">
                <p class="swiper-item__text">Безопасное партнерство.</p>
            </div>
          </div>
        
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/pic-9.png" class="swiper-item__img">
                <p class="swiper-item__text">Громкие дела судебной практики по налоговым спорам: тенденции 2020</p>
            </div>
          </div>
        
        </div>
    </div>

</section>

        <section class="concept lazy">

    <div class="concept__figure">
        <img src="img/concept/concept_figure.png" alt="">
    </div>

    <div class="container">
        <h2 class="concept__title">Концепция</h2>

        <div class="concept__text">Пандемия и&nbsp;ее&nbsp;последствия отразились на&nbsp;всех сферах бизнеса. Пришло время максимально быстро реагировать на&nbsp;изменения.</div>

        <div class="concept__subtitle">
            <div class="concept__subtitle-logo">
                <img data-src="img/concept/logo_legal.png" class="lazy" alt="Synergy legal Forum">
            </div>
            <div class="concept__subtitle-text">поможет Вам в&nbsp;этом!</div>
        </div>

        <div class="concept__description">Это уникальное событие, объединяющее ведущих специалистов в области права. На нем встретятся признанные эксперты и практики права, руководители юридических департаментов крупнейших организаций, государственные деятели, а также топ менеджеры и бизнес-руководители. Вы сможете расширить свои бизнес контакты и обменяться опытом.</div>

        <div class="concept__text">Время кризиса&nbsp;&mdash; это не&nbsp;только время, когда бизнес вынужден принимать экстренные меры и&nbsp;спасать себя, но&nbsp;и&nbsp;момент, когда важно принять стратегические решения, определяющие будущее компании, бренда, людей.</div>
    </div>

</section>

        
        
        

<section class="form-section form-section_2 lazy">
    <div class="container">
        <div class="form-section__box form-section__box_light">
        
<form action="<?=$action?>&form=reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Принять участие</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="ИМЯ" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="ТЕЛЕФОН" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Соглашаюсь с&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и&nbsp;на&nbsp;получение рассылок.</div>
            </label>
        </div>
    </div>
</form>

        </div>
    </div>
</section>



        

<section class="speakers lazy" id="speakers">
	<div class="container">
		<h2 class="speakers__title">Спикеры</h2>

		<div class="row speakers__content" data-more-options='{"target":".speakers__col", "init":6, "inittablet":6, "initmobile":6, "desktop":3, "tablet":3, "mobile":2}'>

			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Астахов <br>Павел</div>
							<div class="speakers__post">Президент МКА &laquo;Коллегия адвокатов Павла Астахова&raquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/astakhov.jpg" alt="Астахов Павел" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Эффективное структурирование группы компаний</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Анатолий <br>Кучерена</div>
							<div class="speakers__post">Российский адвокат, доктор юридических наук, профессор, председатель Общественного совета при МВД&nbsp;РФ.</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/kucherena_anatoly.jpg" alt="Анатолий Кучерена" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Ответственность предпринимателя за&nbsp;налоговые преступления</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Евгений <br>Тимофеев</div>
							<div class="speakers__post">Партнер BRYAN CAVE LEIGHTON PAISNER (RUSSIA) LLP</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/timofeev.jpg" alt="Евгений Тимофеев" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Проблемы налоговой реконструкции в&nbsp;рамках&nbsp;ст.&nbsp;54.1</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Ольга <br>Ясько</div>
							<div class="speakers__post">Партнер, юридическая практика. КПМГ в&nbsp;России и&nbsp;СНГ</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/yasko.jpg" alt="Ольга Ясько" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Корпоративное управление в новых реалиях</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Олег <br>Трошин</div>
							<div class="speakers__post">Директор департамента по международному налогообложению Deloitte</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/troshin.jpg" alt="Олег Трошин" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Изменения в&nbsp;применении международных налоговых соглашений (СИДН) РФ</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Александр <br>Лемчик</div>
							<div class="speakers__post">Управляющий партнер юридической компании &laquo;Лемчик, Крупский и&nbsp;Партнеры&raquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/lemchik.jpg" alt="Александр Лемчик" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Изменения в&nbsp;области налогового администрирования 2020. Что ждать в&nbsp;2021&nbsp;году. <br>1. Изменения при проведении выздных налоговых проверок. <br>2. Способы минимизации налоговых рисков.</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Андрей <br>Бастраков</div>
							<div class="speakers__post">Адвокат, советник уголовно-правовой практики Адвокатского бюро «Егоров, Пугинский, Афанасьев и партнеры»</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/bastrakov.jpg" alt="Андрей Бастраков" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Правила игры в&nbsp;уголовном судопроизводстве: надлежащая оценка доказательств как выражение подлинного равноправия сторон и&nbsp;гарантии от&nbsp;необоснованного привлечения к&nbsp;уголовной ответственности</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Андрей <br>Крупский</div>
							<div class="speakers__post">Управляющий партнер юридической компании &laquo;Лемчик, Крупский и&nbsp;Партнеры&raquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/krupskiy.jpg" alt="Андрей Крупский" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Привлечение к&nbsp;убыткам как старый новый способ ответственности. Субсидиарная ответственность или убытки: что выбрать кредитору</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Анастасия <br>Кучерена</div>
							<div class="speakers__post">Партнер &laquo;Кучерена групп&raquo; и&nbsp;эксперт в&nbsp;области антикризисной юриспруденции</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/kucherena_anastasia.jpg" alt="Анастасия Кучерена" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Безопасное партнерство. Как правильно выстроить отношения в&nbsp;бизнесе с&nbsp;партнерами и&nbsp;не&nbsp;рисковать</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Сергей <br>Матюнин</div>
							<div class="speakers__post">Управляющий партнер адвокатского бюро города Москвы &laquo;Матюнины и&nbsp;партнеры&raquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/matunin.jpg" alt="Сергей Матюнин" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Как проходит обыск в&nbsp;2020</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Валерий <br>Еременко</div>
							<div class="speakers__post">Партнер Адвокатского бюро &laquo;Егоров, Пугинский, Афанасьев и&nbsp;партнеры&raquo;, руководитель судебно-арбитражной практики</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/eremenko.jpg" alt="Валерий Еременко" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Эффективные инструменты разрешения корпоративных конфликтов</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Илья <br>Софонов</div>
							<div class="speakers__post">Управляющий партнер &laquo;Софонов и&nbsp;Романько&raquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/sofonov.jpg" alt="Илья Софонов" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Охота за&nbsp;бенифициаром. Как ФНС привлекает к субсидиарной ответственности и как директору защитить себя</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Николай <br>Лукьянченко</div>
							<div class="speakers__post">Адвокат Московской городской коллегии адвокатов, экс-сотрудник Прокуратуры Москвы</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/lukyanchenko.jpg" alt="Николай Лукьянченко" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Действия руководящего состава компании при проведении проверок правоохранительными и&nbsp;налоговыми органами</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Роман <br>Шишкин</div>
							<div class="speakers__post">Кандидат юридических наук. Адвокат МКА &ldquo;Филиппов и партнеры&rdquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/shishkin.jpg" alt="Роман Шишкин" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Налоговая безопасность 2021. Тренды и структура защиты компании</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Игорь <br>Гуськов</div>
							<div class="speakers__post">Советник консалтинговой группы Guskov Associates, адвокат</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/guskov.jpg" alt="Игорь Гуськов" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Нестандартный случай субсидиарной ответственности при банкротстве</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Виктория <br>Бурковская</div>
							<div class="speakers__post">Партнер, руководитель уголовно-правовой практики адвокатского бюро &laquo;Егоров, Пугинский, Афанасьев и&nbsp;партнеры&raquo;</div>
						</div>
						
						<div class="speakers__photo">
							<img data-src="img/speakers/card/burkovskaya.jpg" alt="Виктория Бурковская" class="lazy">
						</div>
						
						
						<div class="speakers__theme">Тема уточняется</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker"  class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">Панель спикеров продолжает пополняться</div>
							<div class="speakers__post"></div>
						</div>
						
						
						
					</div>
				</div>
			</div>
			
		</div>

		<div class="speakers__more" <?php /*data-more-btn */ ?>>
			<div class="speakers__more-title">
				<div class="">Это ещё не&nbsp;все спикеры</div>
			</div>
			<div class="speakers__more-right">
				<div class="speakers__more-subtitle">Показать ещё?</div>
				<button class="button speakers__more-btn">да, КОНЕЧНО</button>
			</div>
		</div>

	</div>
</section>


        <!-- <section class="program lazy" id="program">
	<div class="container">
		<h2 class="program__title">Программа форума</h2>

		<table class="program__teble">
			<col class="program__teble-col-1">
			<col class="program__teble-col-2">
			<col class="program__teble-col-3">
			<col class="program__teble-col-4">
			<col class="program__teble-col-5">
			<col class="program__teble-col-6">

			<tr>
				<th>№</th>
				<th>Время</th>
				<th>Тема</th>
				<th>Формат</th>
				<th>Спикер</th>
				<th>Тезисы</th>
			</tr>

			<tr>
				<td></td>
				<td>9:00-10:00</td>
				<td colspan="4">Регистрация участников. Утренний кофе</td>
			</tr>

			<tr>
				<td rowspan="5">1</td>
				<td rowspan="5">10:00-11:30</td>
				<td rowspan="5">Следуем за&nbsp;изменениями. Структурирование бизнеса в&nbsp;новых реалиях 2020 года или Кризис 2020: новые возможности для структурирования холдингов</td>
				<td rowspan="5">Сессия&nbsp;1</td>
			</tr>
			<tr>
				<td>Валерий Еременко <br>(модератор)</td>
				<td>Эффективные инструменты разрешения корпоративных конфликтов</td>
			</tr>
			<tr>
				<td>Павел Астахов <br>(онлайн)</td>
				<td>Эффективное структурирование группы компаний</td>
			</tr>
			<tr>
				<td>Анастасия Кучерена <br>(онлайн)</td>
				<td>Безопасное партнерство. Как правильно выстроить отношения в&nbsp;бизнесе с&nbsp;партнерами и&nbsp;не&nbsp;рисковать</td>
			</tr>
			<tr>
				<td>Ольга Ясько</td>
				<td>Корпоративное управление в новых реалиях</td>
			</tr>

			<tr>
				<td></td>
				<td>11:30-11:35</td>
				<td></td>
				<td></td>
				<td>Мурадян Гагик</td>
				<td>Тема уточняется</td>
			</tr>
			<tr>
				<td rowspan="5">2</td>
				<td rowspan="5">11:35-13:05</td>
				<td rowspan="5">Налоговый контроль в&nbsp;2020&nbsp;году: новые тренды. Способы защиты от&nbsp;налоговых рисков</td>
				<td rowspan="5">Сессия&nbsp;2</td>
			</tr>

			<tr>
				<td>Александр Лемчик <br>(модератор)</td>
				<td>Изменения в&nbsp;области налогового администрирования 2020. Что ждать в&nbsp;2021&nbsp;году. <br> 1. Изменения при проведении выздных налоговых проверок. <br> 2. Способы минимизации налоговых рисков.</td>
			</tr>
			<tr>
				<td>Евгений Тимофеев</td>
				<td>Проблемы налоговой реконструкции в&nbsp;рамках&nbsp;ст.&nbsp;54.1</td>
			</tr>
			<tr>
				<td>Роман Шишкин</td>
				<td>Налоговая безопасность 2021. Тренды и структура защиты компании</td>
			</tr>
			<tr>
				<td>Олег Трошин</td>
				<td>Изменения в&nbsp;применении международных налоговых соглашений (СИДН) РФ</td>
			</tr>

			<tr>
				<td></td>
				<td>13:05-14:00</td>
				<td colspan="4">Обед</td>
			</tr>

			<tr>
				<td rowspan="4">3</td>
				<td rowspan="4">14:00-15:30</td>
				<td rowspan="4">&laquo;Настоящая ответственность бывает только личной&raquo;</td>
				<td rowspan="4">Сессия 3</td>
			</tr>

			<tr>
				<td>Андрей Крупский <br>(модератор)</td>
				<td>Привлечение к&nbsp;убыткам как старый новый способ ответственности. Субсидиарная ответственность или убытки: что выбрать кредитору</td>
			</tr>
			<tr>
				<td>Илья Софонов</td>
				<td>Охота за&nbsp;бенифициаром. Как ФНС привлекает к субсидиарной ответственности и как директору защитить себя</td>
			</tr>
			<tr>
				<td>Игорь Гуськов</td>
				<td>Нестандартный случай субсидиарной ответственности при банкротстве</td>
			</tr>
			<?php /* ?>
			<tr>
				<td>Игорь Кондрашов</td>
				<td>Субсидиарная отвественность за&nbsp;невозврат кредита: практика и&nbsp;причины</td>
			</tr>
			<?php */ ?>

			<tr>
				<td></td>
				<td>15:30-16:00</td>
				<td colspan="4">Кофе-брейк</td>
			</tr>

			<tr>
				<td rowspan="6">4</td>
				<td rowspan="6">16:00-17:30</td>
				<td rowspan="6">Уголовная ответственность топ-менеджеров</td>
				<td rowspan="6">Сессия&nbsp;4</td>
			</tr>
			<tr>
				<td>Виктория Бурковская <br>(модератор)</td>
				<td></td>
			</tr>
			<tr>
				<td>Андрей Бастраков <br>(онлайн)</td>
				<td>Правила игры в&nbsp;уголовном судопроизводстве: надлежащая оценка доказательств как выражение подлинного равноправия сторон и&nbsp;гарантии от&nbsp;необоснованного привлечения к&nbsp;уголовной ответственности</td>
			</tr>
			<tr>
				<td>Анатолий Кучерена</td>
				<td>Ответственность предпринимателя за&nbsp;налоговые преступления</td>
			</tr>
			<tr>
				<td>Николай Лукьянченко</td>
				<td>Действия руководящего состава компании при проведении проверок правоохранительными и&nbsp;налоговыми органами</td>
			</tr>
			<tr>
				<td>Сергей Матюнин</td>
				<td>Как проходит обыск в&nbsp;2020</td>
			</tr>

			<tr>
				<td></td>
				<td>17:30</td>
				<td colspan="4">Закрытие</td>
			</tr>
		</table>


		<div class="program__mobile">
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">9:00-10:00</div>
				<h3 class="program__mobile-card_title">Регистрация участников. <br> Утренний кофе</h3>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">10:00-11:30</div>
				<h3 class="program__mobile-card_title">Следуем за изменениями. Структурирование бизнеса в новых реалиях 2020 года или Кризис 2020: новые возможности для структурирования холдингов</h3>
				<ul class="program__mobile-card_speakers">
					<li>Валерий Еременко (модератор)</li>
					<span>Эффективные инструменты разрешения корпоративных конфликтов</span>
					<li>Павел Астахов (онлайн)</li>
					<span>Эффективное структурирование группы компаний</span>
					<li>Анастасия Кучерена (онлайн)</li>
					<span>Безопасное партнерство. Как правильно выстроить отношения в&nbsp;бизнесе с&nbsp;партнерами и&nbsp;не&nbsp;рисковать</span>
					<li>Ольга Ясько</li>
					<span>Корпоративное управление в новых реалиях</span>
				</ul>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">11:30-11:35</div>
				<h3 class="program__mobile-card_title"></h3>
				<ul class="program__mobile-card_speakers">
					<li>Мурадян Гагик</li>
					<span>Тема уточняется</span>
				</ul>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">11:35-13:05</div>
				<h3 class="program__mobile-card_title">Налоговый контроль в&nbsp;2020&nbsp;году: новые тренды. Способы защиты от&nbsp;налоговых рисков</h3>
				<ul class="program__mobile-card_speakers">
					<li>Александр Лемчик <br>(модератор)</li>
					<span>Изменения в&nbsp;области налогового администрирования 2020. Что ждать в&nbsp;2021&nbsp;году. <br> 1. Изменения при проведении выздных налоговых проверок. <br> 2. Способы минимизации налоговых рисков.</span>
					<li>Евгений Тимофеев</li>
					<span>Проблемы налоговой реконструкции в&nbsp;рамках&nbsp;ст.&nbsp;54.1</span>
					<li>Роман Шишкин</li>
					<span>Налоговая безопасность 2021. Тренды и структура защиты компании</span>
					<li>Олег Трошин</li>
					<span>Изменения в&nbsp;применении международных налоговых соглашений (СИДН) РФ</span>
				</ul>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">13:05-14:00</div>
				<h3 class="program__mobile-card_title">Обед</h3>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">14:00-15:30</div>
				<h3 class="program__mobile-card_title">&laquo;Настоящая ответственность бывает только личной&raquo;</h3>
				<ul class="program__mobile-card_speakers">
					<li>Андрей Крупский (модератор)</li>
					<span>Привлечение к&nbsp;убыткам как старый новый способ ответственности. Субсидиарная ответственность или убытки: что выбрать кредитору</span>
					<li>Илья Софонов</li>
					<span>Охота за&nbsp;бенифициаром. Как ФНС привлекает к субсидиарной ответственности и как директору защитить себя</span>
					<li>Игорь Гуськов</li>
					<span>Нестандартный случай субсидиарной ответственности при банкротстве</span>
				</ul>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">15:30-16:00</div>
				<h3 class="program__mobile-card_title">Кофе-брейк</h3>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">16:00-17:30</div>
				<h3 class="program__mobile-card_title">Уголовная ответственность топ-менеджеров</h3>
				<ul class="program__mobile-card_speakers">
					<li>Андрей Бастраков (модератор)</li>
					<span>Правила игры в&nbsp;уголовном судопроизводстве: надлежащая оценка доказательств как выражение подлинного равноправия сторон и&nbsp;гарантии от&nbsp;необоснованного привлечения к&nbsp;уголовной ответственности</span>
					<li>Анатолий Кучерена</li>
					<span>Ответственность предпринимателя за&nbsp;налоговые преступления</span>
					<li>Николай Лукьянченко</li>
					<span>Действия руководящего состава компании при проведении проверок правоохранительными и&nbsp;налоговыми органами</span>
					<li>Сергей Матюнин</li>
					<span>Как проходит обыск в&nbsp;2020</span>
				</ul>
			</div>
			<div class="program__mobile-card">
				<div class="program__mobile-card_time">17:30</div>
				<h3 class="program__mobile-card_title">Закрытие</h3>
			</div>
		</div>

	</div>
</section> -->

        <section class="result lazy">
    <div class="container">
        <h2 class="result__title">Вы&nbsp;узнаете</h2>

        <div class="swiper-nav">
            <div class="result__btn-next swiper-button-next"></div>
            <div class="result__pagination swiper-pagination"></div>
            <div class="result__btn-prev swiper-button-prev"></div>
        </div>

        <div class="result__list">
            <div class="result__swiper swiper-container">
                <div class="swiper-wrapper"  data-more-options='{"target":".swiper-slide", "init":6, "inittablet":6, "initmobile":13, "desktop":2, "tablet":2, "mobile":0}'>
                    
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">01</div>
                                <img src="img/result/pic-1.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Как эффективно управлять интеллектуальными активами компании: защита и&nbsp;капитализация</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">02</div>
                                <img src="img/result/pic-2.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Как правильно ссориться с&nbsp;партнером по&nbsp;бизнесу? Решение корпоративных конфликтов</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">03</div>
                                <img src="img/result/pic-3.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Изменения в&nbsp;области налогового администрирования 2020. Что ждать в&nbsp;2021&nbsp;году?</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">04</div>
                                <img src="img/result/pic-4.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Как минимизировать налоговые риски?</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">05</div>
                                <img src="img/result/pic-5.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Какие произошли изменения в&nbsp;применении международных налоговых соглашений (СИДН) РФ?</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">06</div>
                                <img src="img/result/pic-6.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Громкие дела судебной практики по&nbsp;налоговым спорам: тенденции 2020</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">07</div>
                                <img src="img/result/pic-7.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Возможности и&nbsp;ограничения использования иностранных компаний</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">08</div>
                                <img src="img/result/pic-8.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Как топ-менеджменту не&nbsp;отвечать за&nbsp;долги компании</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">09</div>
                                <img src="img/result/pic-9.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Кто должен государству? Ответственность по&nbsp;налоговым доначислениям</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">10</div>
                                <img src="img/result/pic-10.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Освобождает&nbsp;ли пандемия от&nbsp;субсидиарной ответственности?</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">11</div>
                                <img src="img/result/pic-11.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Уголовная ответственность топ-менеджера компании за&nbsp;доведение до&nbsp;банкротства</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">12</div>
                                <img src="img/result/pic-12.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Какие есть перспективы дальнейшего реформирования уголовного судопроизводства топ-менеджмента</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">13</div>
                                <img src="img/result/pic-13.png" class="result__item-img">
                            </div>
                            <p class="result__item-text">Обзор преступлений, за&nbsp;совершение которых наиболее часто привлекается мидл- и&nbsp;топ- менеджмент компании</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="result__more" data-more-btn>
			<div class="result__more-title">
				<a class="button button_2 button_link">Показать больше</a>
			</div>
		</div>

    </div>
</section>
        <?php if ($version == 'offline') { ?>
            <section class="location">
    
    <div class="container">
        <h2 class="location__title">Место проведения</h2>
    </div>

    <div class="location__box">
        <div class="location__info">
            <div class="location__type">Очное участие</div>
            <div class="location__name">ОТЕЛЬ <br>HOLIDAY INN</div>
            <div class="location__description">Гостиница премиум-класса в&nbsp;центре Москвы располагает 6&nbsp;современными залами со&nbsp;всем необходимым оснащением. Holiday Inn находится рядом с&nbsp;Белой Площадью и&nbsp;всего в&nbsp;3&nbsp;км от&nbsp;Красной Площади. Ближайшая станция метро &laquo;Белорусская&raquo; расположена в&nbsp;300&nbsp;метрах.</div>
        </div>
        <div class="location__photo">
            <img data-src="img/location/hotel.jpg" class="lazy" alt="ОТЕЛЬ HOLIDAY INN">
        </div>
    </div>

</section>
        <?php } elseif ($version == 'online') { ?>
            <section class="platform lazy">
    <div class="container">

        <div class="platform__subtitle">Онлайн-участие</div>
        <div class="platform__head">
            <h2 class="platform__title">Платформа</h2>
            <div class="platform__logo">
                <img data-src="img/platform/logo_synergy_online.png" class="lazy" alt="Synergy Online">
            </div>
        </div>

        <div class="platform__description">Каждый участник форума получит доступ к&nbsp;платформе Synergy.Online, которая создана для того, чтобы аккумулировать самые актуальные знания и&nbsp;сервисы для предпринимателей. Получайте образование в&nbsp;онлайн-формате, используйте современные IT-решения, развивайтесь и&nbsp;развивайте свой бизнес.</div>

        <div class="platform__list">
            <div class="platform__swiper swiper-container">
                <div class="swiper-wrapper">
                    
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-1.png" class="platform__item-img">
                            <p class="platform__item-text">ЕЖЕНЕДЕЛЬНЫЕ ОНЛАЙН-ФОРУМЫ С&nbsp;ВЕДУЩИМИ МИРОВЫМИ СПИКЕРАМИ</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-2.png" class="platform__item-img">
                            <p class="platform__item-text">ОНЛАЙН-ПРАКТИКУМЫ И&nbsp;ВЕБИНАРЫ</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-3.png" class="platform__item-img">
                            <p class="platform__item-text">БАЗА ЗНАНИЙ С&nbsp;ЛУЧШИМИ ВИДЕО С&nbsp;СОБЫТИЙ &laquo;СИНЕРГИИ&raquo;</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-4.png" class="platform__item-img">
                            <p class="platform__item-text">ЦИФРОВЫЕ СЕРВИСЫ ДЛЯ БИЗНЕСА</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-5.png" class="platform__item-img">
                            <p class="platform__item-text">АНТИКРИЗИСНЫЕ IT-РЕШЕНИЯ</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-6.png" class="platform__item-img">
                            <p class="platform__item-text">НОВОСТИ И&nbsp;АНАЛИТИКА</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="swiper-nav">
            <div class="platform__btn-next swiper-button-next"></div>
            <div class="platform__pagination swiper-pagination"></div>
            <div class="platform__btn-prev swiper-button-prev"></div>
        </div>
        
    </div>
</section>
        <?php } else { ?>
            <section class="location">
    
    <div class="container">
        <h2 class="location__title">Место проведения</h2>
    </div>

    <div class="location__box">
        <div class="location__info">
            <div class="location__type">Очное участие</div>
            <div class="location__name">ОТЕЛЬ <br>HOLIDAY INN</div>
            <div class="location__description">Гостиница премиум-класса в&nbsp;центре Москвы располагает 6&nbsp;современными залами со&nbsp;всем необходимым оснащением. Holiday Inn находится рядом с&nbsp;Белой Площадью и&nbsp;всего в&nbsp;3&nbsp;км от&nbsp;Красной Площади. Ближайшая станция метро &laquo;Белорусская&raquo; расположена в&nbsp;300&nbsp;метрах.</div>
        </div>
        <div class="location__photo">
            <img data-src="img/location/hotel.jpg" class="lazy" alt="ОТЕЛЬ HOLIDAY INN">
        </div>
    </div>

</section>
            <section class="platform lazy">
    <div class="container">

        <div class="platform__subtitle">Онлайн-участие</div>
        <div class="platform__head">
            <h2 class="platform__title">Платформа</h2>
            <div class="platform__logo">
                <img data-src="img/platform/logo_synergy_online.png" class="lazy" alt="Synergy Online">
            </div>
        </div>

        <div class="platform__description">Каждый участник форума получит доступ к&nbsp;платформе Synergy.Online, которая создана для того, чтобы аккумулировать самые актуальные знания и&nbsp;сервисы для предпринимателей. Получайте образование в&nbsp;онлайн-формате, используйте современные IT-решения, развивайтесь и&nbsp;развивайте свой бизнес.</div>

        <div class="platform__list">
            <div class="platform__swiper swiper-container">
                <div class="swiper-wrapper">
                    
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-1.png" class="platform__item-img">
                            <p class="platform__item-text">ЕЖЕНЕДЕЛЬНЫЕ ОНЛАЙН-ФОРУМЫ С&nbsp;ВЕДУЩИМИ МИРОВЫМИ СПИКЕРАМИ</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-2.png" class="platform__item-img">
                            <p class="platform__item-text">ОНЛАЙН-ПРАКТИКУМЫ И&nbsp;ВЕБИНАРЫ</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-3.png" class="platform__item-img">
                            <p class="platform__item-text">БАЗА ЗНАНИЙ С&nbsp;ЛУЧШИМИ ВИДЕО С&nbsp;СОБЫТИЙ &laquo;СИНЕРГИИ&raquo;</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-4.png" class="platform__item-img">
                            <p class="platform__item-text">ЦИФРОВЫЕ СЕРВИСЫ ДЛЯ БИЗНЕСА</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-5.png" class="platform__item-img">
                            <p class="platform__item-text">АНТИКРИЗИСНЫЕ IT-РЕШЕНИЯ</p>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/pic-6.png" class="platform__item-img">
                            <p class="platform__item-text">НОВОСТИ И&nbsp;АНАЛИТИКА</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="swiper-nav">
            <div class="platform__btn-next swiper-button-next"></div>
            <div class="platform__pagination swiper-pagination"></div>
            <div class="platform__btn-prev swiper-button-prev"></div>
        </div>
        
    </div>
</section>
        <?php } ?>
        <section class="organizer lazy">
    <div class="container">

        <div class="organizer__content">
            <div class="organizer__content-left">
                <h2 class="organizer__title">Организатор</h2>
                <div class="organizer__logo">
                    <img data-src="img/organizer/logo_synergy.png" class="lazy" alt="Синергия">
                </div>
            </div>
            <div class="organizer__content-right">Школа бизнеса &laquo;Синергия&raquo; была основана в&nbsp;1988 году и&nbsp;является первой бизнес-школой в&nbsp;России и&nbsp;СНГ. На&nbsp;базе школы проводится обучение по&nbsp;программам МВА и&nbsp;профессиональной переподготовки, семинары и&nbsp;тренинги ведущих российских и&nbsp;мировых экспертов.</div>
        </div>

        <div class="organizer__info">
            <div class="organizer__info-item">
                <div class="organizer__info-number">50 000</div>
                <div class="organizer__info-text">успешных выпускников</div>
            </div>
            <div class="organizer__info-item">
                <div class="organizer__info-number">500+</div>
                <div class="organizer__info-text">профессиональных программ по&nbsp;развитию бизнеса</div>
            </div>
            <div class="organizer__info-item">
                <div class="organizer__info-number">30</div>
                <div class="organizer__info-text">лет на&nbsp;рынке бизнес-образования</div>
            </div>
            <div class="organizer__info-item">
                <div class="organizer__info-number">6</div>
                <div class="organizer__info-text">престижных аккредитаций AMBA</div>
            </div>
        </div>

        <div class="organizer__second">
            <div class="organizer__second-head">
                <div class="organizer__second-title">Соорганизатор</div>
                <div class="organizer__second-logo">
                    <img data-src="img/organizer/logo_lkp.png" class="lazy" alt="Лемчик, Крупский и Партнеры">
                </div>
            </div>
            <div class="organizer__second-text">Юридическая компания &laquo;Лемчик, Крупский и&nbsp;Партнеры&raquo;. <br>Структурный и&nbsp;налоговый консалтинг&quot;&nbsp;&mdash; это профессиональная команда корпоративных юристов, налоговых консультантов и&nbsp;адвокатов, которая оказывает клиентам услуги в&nbsp;области структурирования бизнеса, налогового консалтинга и&nbsp;комплексного сопровождения бизнеса. Компания &laquo;Лемчик, Крупский и&nbsp;Партнеры&raquo; работает на&nbsp;юридическом рынке более 13&nbsp;лет.</div>
        </div>

        <section class="vtb">

        <div class="vtb__box">
                <div class="vtb__logo">
                    <img src="img/vtb/logo_vtb.png" alt="ВТБ - генеральный партнёр" class="lazy">
                </div>
                <div class="vtb__title">Откройте <span class="vtb__title-part">счёт для бизнеса</span> до&nbsp;1&nbsp;ноября <span class="vtb__title-part">бесплатно</span></div>
                <ul class="vtb__list">
                    <li class="vtb__list-item">Обслуживание 12&nbsp;месяцев&nbsp;&mdash; <span class="vtb__list-item-part">0&nbsp;руб.</span></li>
                    <li class="vtb__list-item">Обслуживание бизнес-карт&nbsp;&mdash; <span class="vtb__list-item-part">0&nbsp;руб.</span></li>
                    <li class="vtb__list-item">Платежи клиентам ВТБ&nbsp;&mdash; <span class="vtb__list-item-part">0&nbsp;руб.</span></li>
                    <li class="vtb__list-item">Без посещения отделения банка</li>
                </ul>
                <div class="vtb__subtitle">Удобные сервисы для малого бизнеса:</div>
                <ul class="vtb__list">
                    <li class="vtb__list-item">Цифровая бухгалтерия &laquo;Цифра&raquo;</li>
                    <li class="vtb__list-item">Образовательный портал для предпринимателей</li>
                    <li class="vtb__list-item">Бесплатная онлайн-регистрация&nbsp;ИП и&nbsp;ООО</li>
                </ul>
                <div class="vtb__buttonbox">
                    <a href="http://vtb.synergy.ru" class="button button_link vtb__button" target="_blank">ПОДРОБНЕЕ</a>
                </div>
        </div>

</section><!-- vtb -->
        
    </div>
</section>
        <section class="gallerey lazy">
    <div class="gallerey_left">
        <img src="img/gallerey/bg_left.png" alt="">
    </div>
    <div class="gallerey_right">
        <img src="img/gallerey/bg_right.png" alt="">
    </div>
    <div class="container">
        <h2 class="gallerey-title">Как это было</h2>
        <div class="gallerey_block">
            <a href="video/Legal_Forum.mp4" data-fancybox class="gallerey-video">
                <img src="img/gallerey/video.png" alt="">
            </a>
        </div>
        <h2 class="gallerey-title">Галерея</h2>
        <div class="gallerey__slider">
            <div class="gallerey__list swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/gallerey/card-1.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-2.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-3.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-4.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-6.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-7.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-8.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-9.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="img/gallerey/card-10.jpg" alt="">
                </div>
            </div>
            <div class= swiper-controls>
    		    <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>

        </div>
    </div>
</section>
        <section class="partners">
    <div class="container">
        <h2 class="partners__title">Партнёры</h2>
        
        <div class="partners__block">
            <img src="img/partners/lki.png" alt="">
        </div>

        <h2 class="partners__title">Инфопартнёры</h2>

        <div class="partners__slider">
            <div class="partners__list swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/partners/infopartners/cetre.png" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/expert.jpg" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/fedpress.png" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/finam.jpg" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/finansgazeta.png" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/holiday.png" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/mir24.png" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/nbj.jpg" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="img/partners/infopartners/rambler.png" alt="">
                </div>
            </div>
            <div class= swiper-controls>
    		    <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button swiper-button-prev"></div>
            </div>

        </div>

        <div class="partners__buttonbox">
            <a href="#popup-partner" class="button button_link" data-fancybox>аккредитация сми</a>
        </div>
    </div>
</section>

        
        
        
<section class="main main_bottom lazy">



    <div class="container">
        <?php if ($version != 'offline' && $version != 'online') { ?>
        <div class="main__main_theme">
        Очное участие в Москве <br>и онлайн по всему миру
        </div>
        <?php } ?>

        <div class="main__date">
            <span><?=$date?></span>
            <span class="main__date-separator">|</span>
            <span><?=$location?></span>
        </div>

        <h1 class="main__title">Юридический форум</h1>

        <div class="main__logo">
            <img src="img/main/main_title.png" alt="Synergy legal Forum">
        </div>

        <div class="main__description">Для юристов всех сфер, владельцев малого, среднего и&nbsp;крупного бизнеса</div>

        <div class="main__info">
            <span>1&nbsp;день форума</span>
            <span class="main__info-separator">|</span>
            <span>16&nbsp;спикеров</span>
        </div>

    </div>

    <div class="main__figure">
        <img src="img/main/main_figure.png" alt="">
    </div>

    

<section class="form-section form-section_1 lazy">
    <div class="container">
        <div class="form-section__box form-section__box_dark">
        
<form action="<?=$action?>&form=reg" class="form form_horisontal">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Принять участие</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="ИМЯ" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="ТЕЛЕФОН" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Соглашаюсь с&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и&nbsp;на&nbsp;получение рассылок.</div>
            </label>
        </div>
    </div>
</form>

        </div>
    </div>
</section>


    
</section>

        <footer class="footer">
    <div class="container">
    	<a href="files/contract-offer.pdf" target="blank">Договор оферты</a>
    </div>
</footer>

        
    </div>

    <div hidden>
        

        <div class="popup popup-reg" id="popup-reg">
    
<form action="<?=$action?>&form=reg" class="form form_vertical">
    <div class="form__wrapper">
        
        <h3 class="form__title ">Принять участие</h3>
        

        

        <div class="form__items">
            
            
<div class="form__item form__item_text ">
    
    <input name="name" type="text" placeholder="ИМЯ" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_text ">
    
    <input name="phone" type="text" placeholder="ТЕЛЕФОН" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            
            
<div class="form__item form__item_email ">
    
    <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
    
</div><!-- form__item -->

            

            

            <div class="form__item form__item_button"><button class="form__button button " type="submit">Участвовать</button></div>
        </div><!-- form__items -->

        <div class="form__more">
            <label class="form__footer ">
                <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
                    <div class="form__footer-checkbox-icon lazy"></div>
                </div>
                <div class="form__footer-text">Соглашаюсь с&nbsp;<a href="#privacy" class="fancybox form__more-link">политикой конфиденциальности</a> и&nbsp;на&nbsp;получение рассылок.</div>
            </label>
        </div>
    </div>
</form>

</div>

<div class="popup popup-partner" id="popup-partner">
    <div class="popup-partner__block">
        <h2 class="title">Запрос на аккредитацию СМИ присылать на почту</h2>
        <p class="subtitle"><a href="mailto:Rapopov@synergy.ru">Rapopov@synergy.ru</a></p>
        <span class="text">Решение о предоставление аккредитации будет направлено Вам на почту.</span>
        <a href="files/rules.docx" target="_blank" class="links">Правила цитирования для СМИ</a>
    </div>
</div>




        

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
