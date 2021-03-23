<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue test</title>
    <script src="{{asset("js/jquery.min.js")}}"></script>
    <script src="{{asset("js/jquery.dropotron.min.js")}}"></script>
    <script src="{{asset("js/jquery.scrolly.min.js")}}"></script>
    <script src="{{asset("js/jquery.slidertron.min.js")}}"></script>
    <script src="{{asset("js/skel.min.js")}}"></script>
    <script src="{{asset("js/skel-layers.min.js")}}"></script>
    <script src="{{asset("js/init.js")}}"></script>
</head>
<body class="landing">

<div id="app">
    <v-header></v-header>
    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2>Magna Aliquam</h2>
            <p>Sed lorem ipsum sed dolor nullam adipiscing</p>
            <ul class="actions">
                <li><a href="#one" class="button big scrolly">Learn More</a></li>
            </ul>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Lorem ipsum dolor</h2>
                <p>Ipsum dolor tempus commodo turpis adipiscing adipiscing in tempor placerat<br />
                    sed amet accumsan enim lorem sem turpis ut. Massa amet erat accumsan curae<br />
                    blandit porttitor faucibus in nisl nisi volutpat massa mi non nascetur.</p>
            </header>
            <div class="slider">
                <span class="nav-previous"></span>
                <div class="viewer">
                    <div class="reel">
                        <div class="slide">
                            <img src="images/slide01.jpg" alt="" />
                        </div>
                        <div class="slide">
                            <img src="images/slide02.jpg" alt="" />
                        </div>
                        <div class="slide">
                            <img src="images/slide03.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <span class="nav-next"></span>
            </div>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper style2">
        <div class="container">
            <div class="row uniform">
                <div class="4u 6u(2) 12u$(3)">
                    <section class="feature fa-briefcase">
                        <h3>Natoque phasellus</h3>
                        <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                    </section>
                </div>
                <div class="4u 6u$(2) 12u$(3)">
                    <section class="feature fa-code">
                        <h3>Ultricies dolore</h3>
                        <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                    </section>
                </div>
                <div class="4u$ 6u(2) 12u$(3)">
                    <section class="feature fa-save">
                        <h3>Magna lacinia</h3>
                        <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                    </section>
                </div>
                <div class="4u 6u$(2) 12u$(3)">
                    <section class="feature fa-desktop">
                        <h3>Praesent lacinia</h3>
                        <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                    </section>
                </div>
                <div class="4u 6u(2) 12u$(3)">
                    <section class="feature fa-camera-retro">
                        <h3>Morbi semper</h3>
                        <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                    </section>
                </div>
                <div class="4u$ 6u$(2) 12u$(3)">
                    <section class="feature fa-cog">
                        <h3>Arcu consequat</h3>
                        <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Amet nisl consequat</h2>
                <p>Ipsum dolor tempus commodo turpis adipiscing adipiscing in tempor placerat<br />
                    sed amet accumsan enim lorem sem turpis ut. Massa amet erat accumsan curae<br />
                    blandit porttitor faucibus in nisl nisi volutpat massa mi non nascetur.</p>
            </header>
            <div class="row">
                <div class="4u 6u(2) 12u$(3)">
                    <article class="box post">
                        <a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
                        <h3>Sed amet lorem</h3>
                        <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Learn More</a></li>
                        </ul>
                    </article>
                </div>
                <div class="4u 6u$(2) 12u$(3)">
                    <article class="box post">
                        <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                        <h3>Massa accumsan</h3>
                        <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Learn More</a></li>
                        </ul>
                    </article>
                </div>
                <div class="4u$ 6u(2) 12u$(3)">
                    <article class="box post">
                        <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                        <h3>Faucibus portitor</h3>
                        <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Learn More</a></li>
                        </ul>
                    </article>
                </div>
                <div class="4u 6u$(2) 12u$(3)">
                    <article class="box post">
                        <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                        <h3>Non placerat</h3>
                        <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Learn More</a></li>
                        </ul>
                    </article>
                </div>
                <div class="4u 6u(2) 12u$(3)">
                    <article class="box post">
                        <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                        <h3>Adipiscing dolor</h3>
                        <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Learn More</a></li>
                        </ul>
                    </article>
                </div>
                <div class="4u$ 6u$(2) 12u$(3)">
                    <article class="box post">
                        <a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                        <h3>Feugiat tempus</h3>
                        <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Learn More</a></li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style3">
        <h2>Sed faucibus et consequat</h2>
        <ul class="actions">
            <li><a href="#" class="button big">Get Started</a></li>
        </ul>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
        </ul>
        <ul class="menu">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <span class="copyright">
					&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a>
				</span>
    </footer>

</div>

<script src="./js/app.js"></script>

</body>
</html>
