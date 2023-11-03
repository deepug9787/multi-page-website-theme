@extends('layout')

@section('content')

@include('page-head', ['page' => 'services'])


<div class="services contained">
    <section class="service-item">
        <div class="service-item__text">
            <h3 class="service-item__title">Residential Solutions</h3>
            <p class="service-item__description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque amet
                excepturi ratione quibusdam atque sapiente eligendi repellat! Quaerat,
                saepe amet. Eligendi vero voluptatibus non ipsa impedit dolor aliquam rem
                laborum?
            </p>

            <ul class="list service-item__list">
                <li>Lorem ipsum</li>
                <li>Sit amet consectetur</li>
                <li>Autem totam pariatur</li>
                <li>Nostrum veniam labore</li>
                <li>Minima dicta placeat</li>
            </ul>
        </div>

        <img src="{{ asset('assets/img/residential.jpg') }}"
            alt="A home with solar panels installed on rooftop" class="service-item__img" />
    </section>

    <section class="service-item service-item--flip">
        <div class="service-item__text">
            <h3 class="service-item__title">Commercial Solutions</h3>
            <p class="service-item__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, facilis
                itaque autem totam pariatur libero optio praesentium qui et, nostrum veniam
                labore vitae ratione minima dicta placeat omnis exercitationem voluptatum?
            </p>

            <ul class="list service-item__list">
                <li>Lorem ipsum</li>
                <li>Sit amet consectetur</li>
                <li>Autem totam pariatur</li>
                <li>Nostrum veniam labore</li>
                <li>Minima dicta placeat</li>
            </ul>
        </div>

        <img src="{{ asset('assets/img/commercial.jpg') }}" alt="An large array of solar panels installed 
            on an open field" class="service-item__img" />
    </section>

    <section class="service-item">
        <div class="service-item__text">
            <h3 class="service-item__title">Maintenance</h3>
            <p class="service-item__description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque amet
                excepturi ratione quibusdam atque sapiente eligendi repellat! Quaerat,
                saepe amet. Eligendi vero voluptatibus non ipsa impedit dolor aliquam rem
                laborum?
            </p>

            <ul class="list service-item__list">
                <li>Lorem ipsum</li>
                <li>Sit amet consectetur</li>
                <li>Autem totam pariatur</li>
                <li>Nostrum veniam labore</li>
                <li>Minima dicta placeat</li>
            </ul>
        </div>

        <img src="{{ asset('assets/img/maintenance.jpg') }}"
            alt="A technician repairing a solar panel" class="service-item__img" />
    </section>
</div>

@include('cta')

@endsection