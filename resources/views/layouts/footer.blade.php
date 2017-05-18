<!--Footer-Wrap-->
    <div class="footer-wrap">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <section class="widget">
                            <img alt="Venue" src="{{asset('img/logo-white.png')}}" style="height: 40px; margin-bottom: 20px;">
                            <p class="pull-bottom-small">
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel,
                                congue sed ligula auctor fringill torquent per conubia nostra.
                                Class aptent taciti sociosqu ad litora conubia nostra
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel,
                                congue sed ligula auctor fringill torquent per conubia nostra.
                                Class aptent taciti sociosqu ad litora conubia nostra
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel,
                                congue sed ligula auctor fringill torquent per conubia nostra.
                                Class aptent taciti sociosqu ad litora conubia nostra
                                congue sed ligula auctor fringill torquent per conubia nostra.
                                Class aptent taciti sociosqu ad litora conubia nostra.
                            </p>
                        </section>
                    </div>
                    <div class="col-sm-3">
                        <section class="widget">
                            <div class="widget-heading">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="footer-contact-info">
                                <ul>
                                    <li>
                                        <p><i class="fa fa-building"></i>Your Company </p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-map-marker"></i>1 Liberty St New York, NY 5006 </p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-phone"></i><strong>Phone:</strong> (123) 456-7890</p>
                                    </li>
                                </ul>
                                <br />

                                <ul class="social-icons standard">
                                    <li class="twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                    <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>

                                    <li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
                                    <li class="googleplus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-col">
                            <h4>Talk to Us</h4>
                            <form  method="post" action="{{url('/faleconnosco')}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-sm-6" style="height: 50px">
                                        <input type="text" name="nome" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                    </div>
                                    <br>
                                    <div class="col-sm-12" style="height: 50px">
                                        <input type="text" name="assunto" class="form-control" placeholder="Subject" required>
                                    </div>
                                     <br>
                                    <div class="col-sm-12" style="height: 113px">
                                        <textarea class="form-control" name="mensagem" placeholder="Message" rows="5" required></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                         <a class="btn v-btn v-second-light">SEND</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright">
            <div class="container">
                <p>© Copyright 2017 by Me. All Rights Reserved.</p>
                <nav class="footer-menu std-menu">
                    <ul class="menu">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li><a href="#">Users</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--End Footer-Wrap-->
</div>

<!--// BACK TO TOP //-->
<div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>

<!-- Libs -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('js/jquery.easing.js')}}"></script>
<script src="{{asset('js/jquery.fitvids.js')}}"></script>
<script src="{{asset('js/jquery.carouFredSel.min.js')}}"></script>
<script src="{{asset('js/theme-plugins.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/imagesloaded.js')}}"></script>

<script src="{{asset('js/view.min.js?auto')}}"></script>

<script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('js/theme-core.js')}}"></script>
</body>
</html>