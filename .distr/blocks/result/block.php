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
                    {% from './data.nj' import panel as panel %}
                    {% for item in panel %}
                    <div class="swiper-slide" data-more-hidden>
                        <div class="result__item">
                            <div class="result__item-head">
                                <div class="result__item-num">{{ item.num | safe }}</div>
                                <img src="img/result/{{ item.img | safe }}" class="result__item-img">
                            </div>
                            <p class="result__item-text">{{ item.text | safe }}</p>
                        </div>
                    </div>
                    {% endfor %}
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