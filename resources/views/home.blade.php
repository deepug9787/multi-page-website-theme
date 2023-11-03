@extends('layout')

@section('content')
<h1 class="visually-hidden">{{ config('app.name') }} - Home page</h1>

<section class="hero contained" id="hero">
    <div class="hero__text">
        <h2 class="hero__title">Solar Panel Installation</h2>
        <p class="hero__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod accusantium alias
            aut asperiores aperiam tempore exercitationem corrupti quis voluptatem.
        </p>
        <a href="{{ url('contact#contact-form-wrapper') }}" class="link link--primary hero__link">
            <span>Get a free quote </span>
            <img src="{{ asset('assets/img/icons/right-arrow-light.png') }}" alt="right arrow">
        </a>
    </div>

    <img src="{{ asset('assets/img/solar.jpg') }}"
        alt="A home with solar panels installed on the rooftop" class="hero__img">
</section>


<section class="about-intro contained region">
    <h2 class="visually-hidden">About</h2>

    <span class="about-intro__title">The best solar panel installation & maintenance service</span>

    <p class="about-intro__description">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor assumenda quia ea
        alias! Atque, suscipit. Vitae velit facere similique dicta neque nam perspiciatis,
        tenetur cupiditate quas voluptatibus modi quibusdam sint.
    </p>

    <a href="{{ url('about') }}" class="link link--primary about-intro__link">
        <span>Learn more about us</span>
        <img src="{{ asset('assets/img/icons/right-arrow-light.png') }}" alt="right arrow">
    </a>
</section>

<section class="services-intro contained region">
    <h2 class="region__title">Services</h2>

    <div class="grid-wrapper services-intro__grid-wrapper">
        <section class="card">
            <div class="card__text">
                <h3>Residential</h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>

                <a href="{{ url('services') }}" class="link link--secondary">
                    <span>Learn More</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>

            <img src="{{ asset('assets/img/residential.jpg') }}"
                alt="A home with solar panels installed on rooftop" class="card__img" />
        </section>

        <section class="card">
            <div class="card__text">
                <h3>Commercial</h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>

                <a href="{{ url('services') }}" class="link link--secondary">
                    <span>Learn More</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>

            <img src="{{ asset('assets/img/commercial.jpg') }}" alt="An large array of solar panels installed 
            on an open field" class="card__img" />
        </section>

        <section class="card">
            <div class="card__text">
                <h3>Maintenance</h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                    doloremque labore eius dolores illum?
                </p>

                <a href="{{ url('services') }}" class="link link--secondary">
                    <span>Learn More</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>

            <img src="{{ asset('assets/img/maintenance.jpg') }}"
                alt="A technician repairing a solar panel" class="card__img" />
        </section>
    </div>
</section>

<section class="why-choose-us region">
    <div class="contained">
        <h2 class="region__title why-choose-us__title">Why Choose Us</h2>

        <div class="grid-wrapper why-choose-us__grid-wrapper">
            <section class="reasons-item">
                <div class="reasons-item__text">
                    <h3 class="reasons-item__title">Customer Support</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                        doloremque labore eius dolores illum?
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/customer-support-icon.png') }}"
                    class="reasons-item__img" alt="Customer support icon">
            </section>

            <section class="reasons-item">
                <div class="reasons-item__text">
                    <h3 class="reasons-item__title">Experienced Technicians</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                        doloremque labore eius dolores illum?
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/tools-icon.png') }}" class="reasons-item__img"
                    alt="Tools icon">
            </section>

            <section class="reasons-item">
                <div class="reasons-item__text">
                    <h3 class="reasons-item__title">Quick Installation</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam nihil,
                        doloremque labore eius dolores illum?
                    </p>
                </div>
                <img src="{{ asset('assets/img/icons/quick-installation-icon.png') }}"
                    class="reasons-item__img" alt="A clock icon">
            </section>
        </div>
    </div>
</section>


<section class="pricing contained region">
    <h2 class="region__title">Pricing</h2>

    <div class="grid-wrapper pricing__grid-wrapper">
        <div class="package">
            <h3 class="package__type">Basic</h3>

            <div class="package__body">
                <span class="package__price">$500</span>
                <p class="package__description">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, vero.
                </p>
                <ul class="package__features">
                    <li>Feature one</li>
                    <li>Feature two</li>
                    <li class="package__missing-feature">Feature three</li>
                    <li class="package__missing-feature">Feature four</li>
                    <li class="package__missing-feature">Feature five</li>
                    <li class="package__missing-feature">Feature six</li>
                </ul>

                <a href="{{ url('contact') }}" class="link link--secondary">
                    <span>Choose Plan</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>
        </div>

        <div class="package package--most-popular">
            <h3 class="package__type">Most Popular</h3>

            <div class="package__body">
                <span class="package__price">$750</span>
                <p class="package__description">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, vero.
                </p>
                <ul class="package__features">
                    <li>Feature one</li>
                    <li>Feature two</li>
                    <li>Feature three</li>
                    <li>Feature four</li>
                    <li class="package__missing-feature">Feature five</li>
                    <li class="package__missing-feature">Feature six</li>
                </ul>
                <a href="{{ url('contact') }}" class="link link--primary">
                    <span>Choose Plan</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-light.png') }}"
                        alt="right arrow">
                </a>
            </div>
        </div>

        <div class="package">
            <h3 class="package__type">Premium</h3>

            <div class="package__body">
                <span class="package__price">$900</span>
                <p class="package__description">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, vero.
                </p>
                <ul class="package__features">
                    <li>Feature one</li>
                    <li>Feature two</li>
                    <li>Feature three</li>
                    <li>Feature four</li>
                    <li>Feature five</li>
                    <li>Feature six</li>
                </ul>
                <a href="{{ url('contact') }}" class="link link--secondary">
                    <span>Choose Plan</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="blog-intro contained region">
    <h2 class="region__title">Blog</h2>

    <div class="grid-wrapper blog-intro__grid-wrapper">

        <section class="card">
            <div class="card__text">
                <h3>Tips for choosing the right solar system for your home</h3>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem nisi in,
                    minima
                    error id sed placeat fuga enim cum accusamus aut quod, modi corporis voluptate.
                </p>

                <a class="link link--secondary">
                    <span>Learn More</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>

            <img src="{{ asset('assets/img/home-panels.jpg') }}" alt="A home with solar panels installed 
            on the rooftop" class="card__img" />
        </section>

        <section class="card">
            <div class="card__text">
                <h3>Difference between Off-Grid and On-Grid explained</h3>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem nisi in,
                    minima
                    error id sed placeat fuga enim cum accusamus aut quod, modi corporis voluptate.
                </p>

                <a class="link link--secondary">
                    <span>Learn More</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>

            <img src="{{ asset('assets/img/rooftop-panels.jpg') }}" alt="Solar panels installed on the terrace 
            of a building" class="card__img" />
        </section>

        <section class="card">
            <div class="card__text">
                <h3>How installing solar panel can benefit your home or business</h3>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem nisi in,
                    minima
                    error id sed placeat fuga enim cum accusamus aut quod, modi corporis voluptate.
                </p>

                <a class="link link--secondary">
                    <span>Learn More</span>
                    <img src="{{ asset('assets/img/icons/right-arrow-dark.png') }}"
                        alt="right arrow">
                </a>
            </div>

            <img src="{{ asset('assets/img/panel-installation.jpg') }}" alt="A man placing a solar panel onto the 
            roof of a building" class="card__img" />
        </section>
    </div>
</section>

@include('cta')

@endsection