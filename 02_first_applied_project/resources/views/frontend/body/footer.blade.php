@php
    $allfooter = App\Models\Footer::find(1);
@endphp

<footer class="footer" style="padding-top: 100px;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{ $allfooter->number }}</h4>
                    </div>
                    <div class="footer__widget__text">
                        {{-- <p>{{ $allfooter->short_description }}</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Linkedin</h5>
                        <h4 class="title"><a href="https://www.linkedin.com/in/rafaeldravelli/">Rafael D. Ravelli</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{ $allfooter->adress }}</p>
                        <a href="mailto:{{ $allfooter->email }}" class="mail">{{ $allfooter->email }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">GitHub</h5>
                        <h4 class="title"><a href="https://github.com/rafaelravelli12">rafaelravelli12</h4>
                    </div>
                    {{-- <div class="footer__widget__social">
                        <p>Lorem ipsum dolor sit amet enim. <br> Etiam ullamcorper.</p>
                        <ul class="footer__social__list">
                            <li><a href="{{ $allfooter->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $allfooter->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{ $allfooter->copyright }}</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</footer>
