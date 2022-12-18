<footer class="footer bg-heading">
    <div class="bg-img"><img src="{{ asset('assets/website') }}/images/backgrounds/2.png" alt="backgrounds"></div>
    <div class="footer-contact pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="contact-info">
                        <h6 class="footer-widget__title">Quick Contact</h6>
                        <ul class="contact-list list-unstyled mb-0">
                            <li><a href="tel:00923364634620">+92 336 4634620</a></li>
                            <li><a href="mailto:info@reversals.co">info@reversals.co</a></li>
                        </ul>
                    </div><!-- /.contact-info -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="contact-info">
                        <h6 class="footer-widget__title">Our Address</h6>
                        <ul class="contact-list list-unstyled mb-0">
                            <li>Cantt Lahore, Pakistan</li>
                        </ul>
                    </div><!-- /.contact-info -->
                </div><!-- /.col-lg-2 -->
                {{-- <div class="col-sm-4 col-md-4 col-lg-2">
                    <div class="contact-info">
                        <h6 class="footer-widget__title">Opening Hours</h6>
                        <ul class="contact-list list-unstyled mb-0">
                            <li>Mon - Fri: 8am - 7pm</li>
                            <li>Sat - Sun: 9 am - 8pm</li>
                        </ul>
                    </div><!-- /.contact-info -->
                </div><!-- /.col-lg-2 --> --}}
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <h6 class="footer-widget__title">Newsletter</h6>
                    <form class="footer-form d-flex mb-0">
                        <input type="text" class="form-control mr-20" placeholder="Your Email Address">
                        <button type="submit" class="btn btn__primary btn__primary-style2">Subscribe</button>
                    </form>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-contact -->


    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 footer-widget footer-widget-about">
                    <div class="footer-widget__content">
                        <img src="{{ asset('assets/website') }}/images/logo/logo-light.png" alt="logo"
                            class="mb-30">
                        <p class="color-gray mb-40">We are a team of highly skilled people, most having appreciable work experience in diverse areas of Technological Field. Our aim is to make  our client’s expectations higher in the form of value, quality and satisfaction.</p>
                        <ul class="social-icons list-unstyled mb-0">
                            <li><a href="https://www.facebook.com/reversals.co"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/reversals.co"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li><a href="https://twitter.com/reversals_co"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/reversals"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul><!-- /.social-icons -->
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Company</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('services.index') }}">What We Offer</a></li>
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="{{ route('team') }}">Meet Our Team</a></li>
                                <li><a href="{{ route('blogs.index') }}">News & Media</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ route('faqs') }}">Help & FAQs</a></li>
                                <li><a href="{{ route('why-us') }}">Why Us</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Services</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('services.show') }}">Web Development</a></li>
                                <li><a href="{{ route('services.show') }}">Content Writing</a></li>
                                <li><a href="{{ route('services.show') }}">Graphic Designing</a></li>
                                <li><a href="{{ route('services.show') }}">Social Media Management</a></li>
                                <li><a href="{{ route('services.show') }}">UI/UX Designing</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">Resources</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('pricing') }}">Pricing and Plans</a></li>
                                <li><a href="{{ route('services.show') }}">Terms of Service</a></li>
                                <li><a href="{{ route('faqs') }}">Help & FAQ</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                                <li><a href="{{ route('services.show') }}">Site map</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                {{-- <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">We're Hiring</h6>
                    <div class="footer-widget__content">
                        <p class="fz-14 color-white">Interested in joining the Mintech team?</p>
                        <a href="careers.html" class="btn btn__primary btn__primary-style2 btn__link">
                            <span>Our Careers</span><i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 --> --}}
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    
    <div class="footer-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <span class="fz-14">&copy; 2020 Mintech, All Rights Reserved. With Love by</span>
                    <a class="fz-14 color-primary" href="http://themeforest.net/user/7oroof">7oroof.com</a>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
