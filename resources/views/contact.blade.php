@extends('layout')

@section('content')

@include('page-head', ['page' => 'contact'])

<section class="contact-info contained region">
    <h2 class="region__title contact-info__title">Contact Info</h2>

    <div class="contact-info__grid-wrapper">
        <section class="contact-info__item">
            <div class="contact-info__text">
                <h3 class="contact-info__subtitle">Address:</h3>
                <address class="contact-info__address">
                    Lorem ipsum dolor sit,<br />
                    Adipisicing elit,<br />
                    Quibusdam ipsam.
                </address>
            </div>

            <img src="{{ asset('assets/img/icons/location-icon.png') }}" class="contact-info__img"
                alt="Location icon">
        </section>

        <section class="contact-info__item">
            <div class="contact-info__text">
                <h3 class="contact-info__subtitle">Email:</h3>
                <span>lorem@gmail.com</span>
            </div>

            <img src="{{ asset('assets/img/icons/email-icon.png') }}" class="contact-info__img"
                alt="Email icon">
        </section>

        <section class="contact-info__item">
            <div class="contact-info__text">
                <h3 class="contact-info__subtitle">Phone:</h3>
                <span>1234556634</span>
            </div>

            <img src="{{ asset('assets/img/icons/phone-icon.png') }}" class="contact-info__img"
                alt="Phone icon">
        </section>

    </div>
</section>

<section class="contact-form-wrapper contained region" id="contact-form-wrapper">
    <h2>Get a free quote</h2>

    <form method="post" action="" class="form contact-form" id="contact-form">
        <div class="contact-form__item">
            <label for="name" class="form__label">Name: <span class="required">*</span></label>
            <input type="text" id="name" name="name" value="" class="form__input" required
                minlength="3" maxlength="50" />

        </div>

        <div class="contact-form__item">
            <label for="email" class="form__label">Email Address: <span
                    class="required">*</span></label>
            <input type="email" id="email" name="email" value="" class="form__input" required />
        </div>

        <div class="contact-form__item">
            <label for="message" class="form__label">Message: <span
                    class="required">*</span></label>
            <textarea id="message" name="message" class="form__textarea" required minlength="10"
                maxlength="250"></textarea>

        </div>

        <div class="form__required-fields">
            <span class="required">*</span> All fields are required.
        </div>

        <button name="submit" class="btn form__btn">Send Message</button>
    </form>
</section>
@endsection