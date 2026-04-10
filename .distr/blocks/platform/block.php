<section class="platform lazy">
    <div class="container">

        <div class="platform__subtitle">Онлайн-участие</div>
        <div class="platform__head">
            <h2 class="platform__title">Платформа</h2>
            <div class="platform__logo">
                <img data-src="img/platform/logo_synergy_online.png" class="lazy" alt="Онлайн-платформа (демо)">
            </div>
        </div>

        <div class="platform__description">Демо-блок: описание образовательной онлайн-платформы для участников форума. Здесь могут быть материалы, трансляции и&nbsp;сервисы для предпринимателей&nbsp;&mdash; в&nbsp;реальном проекте ссылка вела&nbsp;бы на&nbsp;продакшен.</div>

        <div class="platform__list">
            <div class="platform__swiper swiper-container">
                <div class="swiper-wrapper">
                    {% from './data.nj' import panel as panel %}
                    {% for item in panel %}
                    <div class="swiper-slide">
                        <div class="platform__item">
                            <img src="img/platform/{{ item.img | safe }}" class="platform__item-img">
                            <p class="platform__item-text">{{ item.text | safe }}</p>
                        </div>
                    </div>
                    {% endfor %}
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