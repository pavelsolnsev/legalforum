{% if top %}
<section class="main main_top">
{% else %}
<section class="main main_bottom lazy">
{% endif %}


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

    {% include 'form-section/block.php' %}
    
</section>