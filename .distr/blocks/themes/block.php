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
        {% from './data.nj' import panel as panel %}
        {% for item in panel %}
          <div class="swiper-slide">
            <div class="swiper-item">
                <img src="img/themes/{{ item.img | safe }}" class="swiper-item__img">
                <p class="swiper-item__text">{{ item.text | safe }}</p>
            </div>
          </div>
        {% endfor %}
        </div>
    </div>

</section>