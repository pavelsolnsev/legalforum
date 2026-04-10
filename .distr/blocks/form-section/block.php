{% if section1 %}

<section class="form-section form-section_1 lazy">
    <div class="container">
        <div class="form-section__box form-section__box_dark">
        {{ form.form( 'reg', form_class='form_horisontal') }}
        </div>
    </div>
</section>

{% elif section2 %}

<section class="form-section form-section_2 lazy">
    <div class="container">
        <div class="form-section__box form-section__box_light">
        {{ form.form( 'reg', form_class='form_horisontal') }}
        </div>
    </div>
</section>

{% endif %}