@extends('layout')

@section('content')

@include('page-head', ['page' => 'about'])


<section class="who-we-are contained region">
    <h2 class="region__title">Who we are</h2>
    <div class="grid-wrapper who-we-are__grid-wrapper">
        <section class="who-we-are__item">
            <div class="who-we-are__text">
                <h3>Vision</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>
            </div>
            <img src="{{ asset('assets/img/icons/vision-icon.png') }}" class="who-we-are__img"
                alt="Vision icon">
        </section>

        <section class="who-we-are__item">
            <div class="who-we-are__text">
                <h3>Mission</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>
            </div>
            <img src="{{ asset('assets/img/icons/mission-icon.png') }}" class="who-we-are__img"
                alt="Mission icon">
        </section>



        <section class="who-we-are__item">
            <div class="who-we-are__text">
                <h3>Awards & Recognitions</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>
            </div>
            <img src="{{ asset('assets/img/icons/awards-icon.png') }}" class="who-we-are__img"
                alt="Awards icon">
        </section>
    </div>

</section>

<section class="team contained region">
    <h2 class="region__title">Our Team</h2>

    <div class="grid-wrapper team__grid-wrapper">

        <section class="card">
            <div class="card__text">
                <h3>Michael</h3>

                <span class="designation">Co-founder</span>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>


            </div>

            <img src="{{ asset('assets/img/cfo.jpg') }}" alt="A man with a smiling face wearing a 
            white t-shirt" class="card__img" />
        </section>

        <section class="card">
            <div class="card__text">
                <h3>James</h3>

                <span class="designation">Founder</span>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>

            </div>

            <img src="{{ asset('assets/img/ceo.jpg') }}" alt="A middle aged man wearing a suit"
                class="card__img" />
        </section>

        <section class="card">
            <div class="card__text">
                <h3>Ryan</h3>

                <span class="designation">Marketing Head</span>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>

            </div>

            <img src="{{ asset('assets/img/marketing-head.jpg') }}"
                alt="A young man with a smiling face" class="card__img" />
        </section>
    </div>
</section>

<div class="testimonial region contained">
    <h2 class="region__title">What our clients say about us</h2>

    <div class="grid-wrapper testimonial__grid-wrapper">
        <figure class="testimonial__item">
            <blockquote class="testimonial__text">
                <img src="{{ asset('assets/img/icons/quotation-mark-icon.png') }}"
                    alt="quotation mark icon" />

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                    laborum sed quod eos ratione. Eum veritatis sunt, reiciendis nihil
                    repudiandae asperiores?
                </p>
            </blockquote>

            <figcaption>
                <span class="testimonial__client-name">Mark</span>
                <span class="testimonial__client-designation">CEO, ABC Company</span>
            </figcaption>
        </figure>

        <figure class="testimonial__item">
            <blockquote class="testimonial__text">
                <img src="{{ asset('assets/img/icons/quotation-mark-icon.png') }}"
                    alt="quotation mark icon" />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                    laborum sed quod eos ratione. Eum veritatis sunt, reiciendis nihil
                    repudiandae asperiores?
                </p>
            </blockquote>

            <figcaption>
                <span class="testimonial__client-name">Sam</span>
                <span class="testimonial__client-designation">CEO, XYZ Inc.</span>
            </figcaption>
        </figure>

        <figure class="testimonial__item">
            <blockquote class="testimonial__text">
                <img src="{{ asset('assets/img/icons/quotation-mark-icon.png') }}"
                    alt="quotation mark icon" />
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                    laborum sed quod eos ratione. Eum veritatis sunt, reiciendis nihil
                    repudiandae asperiores?
                </p>
            </blockquote>

            <figcaption>
                <span class="testimonial__client-name">John</span>
                <span class="testimonial__client-designation">Founder, ABC Inc.</span>
            </figcaption>
        </figure>
    </div>
</div>

@include('cta')

@endsection