<!DOCTYPE html>
<html lang="es-co">
<?php
    include "views/template/head.php";    
?>
<body>
    <!-- Inicio Seccion - Header -->
    <?php
        include __DIR__."/template/header.php";    
    ?>
    <!-- Fin Seccion - Header -->
    
    <!-- Incio Seccion 01 - banner de presentacion del sitio web -->
    <section class="container-fluid home-seccion-01">
        <div class="home-sec-01-cover"></div>
        <div class="row">
            <div class="col-12 home-sec-01-advert">
                <!-- Aqui Voy a usar php para crear un bucle con 3 frases
                    COMMUNITY-DRIVEN CULTURE
                    FITNESS THAT STICKS
                    WORKOUTS TAILORED TO YOU
                -->
                <div class="home-sec-01-text-1">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <p class="d-block w-100">COMMUNITY-DRIVEN CULTURE</p>
                            </div>
                            <div class="carousel-item">
                                <p class="d-block w-100">FITNESS THAT STICKS</p>
                            </div>
                            <div class="carousel-item">
                                <p class="d-block w-100">WORKOUTS TAILORED TO YOU</p>
                            </div>
                        </div>
                    </div>
                    <span>Find Gyms Near You</span>
                </div>
                <div class="home-sec-01-search">
                    <input type="search" placeholder="Search by location, zip code or gym...">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="home-sec-01-text-2">
                    <span>Please enable location services</span>
                    <br>
                    <span><i class="bi bi-crosshair"></i>  Use Current Location</span>
                </div>
                <div class="home-sec-01-link">
                    <span><a href="#">VISIT THE CROSSFIT MAP <i class="bi bi-arrow-right"></i></a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Seccion 01 -->

    <!-- Incio Seccion 02 - Descripcion -->
    <section class="container home-seccion-02">
        <div class="row">
            <div class="col-10 home-sec-02-title">
                <h2>CROSSFIT IS FOR YOU</h2>
            </div>
            <div class="col-2 home-sec-02-link">
                <span><a href="#">VIEW ALL <i class="bi bi-arrow-right"></i></a></span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-5 home-sec-02-card">
            <div class="col">
                <div class="card">
                    <img src="routes/public/assets/images/43j2t0a6rqnrc0cucc0m.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">A Father's Promise: Losing 84 Pounds To Run With His Kids</h5>
                        <p class="card-text">“Walking is easier, climbing the stairs, running after the kids—all of these things are just so much easier.”</p>
                        <span><a href="#">WATCH <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="routes/public/assets/images/izft0n7n2hs2fi09hxrr.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Go Beyond the Physical: Developing Grit & Mental Strength</h5>
                        <p class="card-text">“Practicing a physical thing that’s difficult helps develop mental toughness for when something doesn’t go right in life.”</p>
                        <span><a href="#">WATCH <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="routes/public/assets/images/vdgb0xm11py34yt7m1l5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">A Sense of Belonging: A Community That Wills You to Hit Your Goals</h5>
                        <p class="card-text">“There’s something binding about struggling together. We support each other and we do a lot of things together.”</p>
                        <span><a href="#">WATCH <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Seccion 02 -->

    <!-- Incio Seccion 03 - Descripcion -->
    <section class="container-fluid home-seccion-03">
        <div class="home-sec-03-cover"></div>
        <div class="row">
            <div class="col-12 home-sec-03-advert">
                <h2>ENHANCE YOUR LIFE IN & OUT OF THE GYM</h2>
                <p>For over 20 years, CrossFit has delivered life-changing results to people of all ages and fitness levels. The CrossFit formula combines consistent training through constantly varied, functional movement with sound nutrition and community accountability to build a program that never gets old.</p>
                <div class="home-sec-03-btn">
                    <span class="home-sec-03-btn-1"><a href="#">TRY CROSSFIT</a></span>
                    <span class="home-sec-03-btn-2"><a href="#">LEARN MORE</a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Seccion 03 -->    

    <!-- Incio Seccion 04 - Descripcion -->
    <section class="container home-seccion-04">
        <div class="row">
            <div class="col-10 home-sec-04-title">
                <h2>FAQS, EXPERT ANSWERS</h2>
            </div>
            <div class="col-2 home-sec-04-link">
                <span><a href="">VIEW ALL <i class="bi bi-arrow-right"></i></a></span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-5 home-sec-04-card">
            <div class="col">
                <div class="card">
                    <img src="routes/public/assets/images/056hh5vv14yrmr48ue75.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Do I Have To Be Fit To Start CrossFit?</h5>
                        <p class="card-text">No! You don’t become fit to join CrossFit, you join CrossFit to become fit! While some movements might seem intimidating, we’ll scale the workout appropriately to keep you safe and help you progress.</p>
                        <span><a href="#">LEARN MORE <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="routes/public/assets/images/n7uf9sokpo96rv9fo9k2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">How Will My Body Change With Regular CrossFit Training?</h5>
                        <p class="card-text">Your goals and effort will drive your results. Typically, people feel stronger and improve their endurance significantly. Combined with our nutrition recommendations, you will also see improvements in your overall health.</p>
                        <span><a href="#">LEARN MORE <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="routes/public/assets/images/gxrhsk5774y5sizq593u.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">What Should I Expect at My First CrossFit Class?</h5>
                        <p class="card-text">You might be nervous, and that’s normal! From knowing what to bring to finding your coach and learning the CrossFit language, we’ll guide you through it.</p>
                        <span><a href="#">LEARN MORE <i class="bi bi-arrow-right"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Seccion 04 -->

    <!-- Incio Seccion 05 - Descripcion -->
    <section class="container-fluid home-seccion-05">
        <div class="home-sec-05-cover"></div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 home-sec-05-advert">
                <h2>FIND A CROSSFIT GYM NEAR YOU</h2>
                <p>Your CrossFit journey starts at a gym near you. We’ll help you find a location that’s convenient and ready to welcome you.</p>
                <div  class="home-sec-05-bnt">
                    <span><a href="#">FIND A CROSSFIT GYM</a></span>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </section>
    <!-- Fin Seccion 05 -->

    <!-- Incio Seccion 06 - Descripcion -->
    <section class="container home-seccion-06">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6"></div>
            <div class="col-3"></div>
        </div>
    </section>
    <!-- Fin Seccion 06 -->

    <!-- Incio Seccion - Footer -->
    <?php
        include __DIR__."/template/footer.php";    
    ?>
    <!-- Fin Seccion - Footer -->

    <!-- Incio Seccion - Scripts -->
    <?php
        include __DIR__."/template/scripts.php";    
    ?>
    <!-- Fin Seccion - Scripts -->
</body>
</html>