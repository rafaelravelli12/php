@extends('frontend.main_master')
@section('main')
    <main>
        <section class="breadcrumb__wrap" style="padding-top: 200px; padding-bottom: 100px;">
            <div class="custom-container container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Contact us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                    <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                    <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                    <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                    <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                    <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                </ul>
            </div> --}}
        </section>
        <div id="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.603737257534!2d-46.64820978447841!3d-23.56333806614165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58e456e105ab%3A0xd2a1d4f8a4a481a7!2sAvenida%20Paulista%2C%201726%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-200%2C%20Brazil!5e0!3m2!1sen!2sus!4v1656802539895!5m2!1sen!2sus" allowfullscreen loading="lazy"></iframe>
        </div>
        <div class="contact-area">
            <div class="container">
                <form method="post" action="{{ route('store.message') }}" class="contact__form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input name="name" type="text" placeholder="Enter your name*">
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="email" placeholder="Enter your mail*">
                        </div>
                        <div class="col-md-6">
                            <input name="subject" type="text" placeholder="Enter your subject*">
                        </div>
                        <div class="col-md-6">
                            <input name="phone" type="text" placeholder="Your Phone*">
                        </div>
                    </div>
                    <textarea name="message" id="message" placeholder="Enter your message*"></textarea>
                    <button type="submit" class="btn">send message</button>
                </form>
            </div>
        </div>
    </main>
@endsection
