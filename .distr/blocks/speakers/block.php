{% from './data.php' import data as speakers %}

<section class="speakers lazy" id="speakers">
	<div class="container">
		<h2 class="speakers__title">Спикеры</h2>

		<div class="row speakers__content" data-more-options='{"target":".speakers__col", "init":6, "inittablet":6, "initmobile":6, "desktop":3, "tablet":3, "mobile":2}'>

			{% for item in speakers %}
			<div class="col-6 col-sm-6 col-md-4 speakers__col" data-more-hidden>
				<div href="#popup-speaker" {{ 'data-fancybox' if item.descr }} class="speakers__item">
					<div class="speakers__item-box">
						<div class="speakers__info">
							<div class="speakers__name">{{ item.name | safe }}</div>
							<div class="speakers__post">{{ item.post | safe }}</div>
						</div>
						{% if item.id %}
						<div class="speakers__photo">
							<img data-src="img/speakers/card/{{ item.id }}.jpg" alt="{{ item.name | striptags }}" class="lazy">
						</div>
						{% endif %}
						{% if item.theme %}
						<div class="speakers__theme">{{ item.theme | safe }}</div>
						{% endif %}
						{% if item.descr %}
						<div class="speakers__detail">
							<div class="speakers__detail-link">Подробнее о&nbsp;спикере</div>
						</div>
						{% endif %}
					</div>
				</div>
			</div>
			{% endfor %}
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
