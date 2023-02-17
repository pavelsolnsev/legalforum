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