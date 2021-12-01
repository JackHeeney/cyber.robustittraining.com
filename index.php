<?php
// Change page title and meta tags here
$title = "Microsoft Certified Training | Robust IT Training";
$meta['keywords'] = "";
$meta['description'] = "";

// Social media meta tags
$meta['og:title'] = "Microsoft Certified Training | Robust IT Training";
$meta['og:description'] = "";
$meta['og:image'] = "";
$meta['og:url'] = "";

?>

<?php include './assets/inc/header.php' ?>
<?php include './assets/inc/components/nav.php' ?>
<?php include './assets/inc/components/hero.php' ?>


<main id="home" class="container-fluid">


    <div class="container my-5" id="practice">
        <div class="row">
            <div class="col-12 text-center">
                <span class="font-bitcon">Our Practice</span>
                <h2>Cyber Security Practice</h2>
                <p class="mx-auto">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime suscipit harum molestias architecto
                    similique ab modi voluptas. Porro laudantium quasi cupiditate dolores atque voluptatum, eum,
                    mollitia aut odit numquam eveniet?
                </p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card mt-4">
                    <div class="card-header">
                        <img src="<? echo SITE_ADDR ?>/assets/img/cards/card-1.png" class="card-img img-fluid"
                            alt="hacker icon green">
                    </div>
                    <div class="card-body">
                        <h2>Heading One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem quaerat nihil in,
                            a repudiandae odit veritatis nesciunt harum quia excepturi culpa adipisci quisquam
                            provident, suscipit nam blanditiis, quo assumenda!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<? echo SITE_ADDR ?>/" class="btn btn--primary" alt="view course"
                            title="view course">View Course</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card ">
                    <div class="card-header">
                        <img src="<? echo SITE_ADDR ?>/assets/img/cards/card-2.png" class="card-img img-fluid"
                            alt="hacker icon green">
                    </div>
                    <div class="card-body">
                        <h2>Heading One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem quaerat nihil in,
                            a repudiandae odit veritatis nesciunt harum quia excepturi culpa adipisci quisquam
                            provident, suscipit nam blanditiis, quo assumenda!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<? echo SITE_ADDR ?>/" class="btn btn--primary" alt="view course"
                            title="view course">View Course</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        <img src="<? echo SITE_ADDR ?>/assets/img/cards/card-3.png" class="card-img img-fluid"
                            alt="hacker icon green">
                    </div>
                    <div class="card-body">
                        <h2>Heading One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem quaerat nihil in,
                            a repudiandae odit veritatis nesciunt harum quia excepturi culpa adipisci quisquam
                            provident, suscipit nam blanditiis, quo assumenda!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<? echo SITE_ADDR ?>/" class="btn btn--primary" alt="view course"
                            title="view course">View Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5" id="faq">
        <div class="row">
            <div class="col-12 text-center">
                <span class="font-bitcon">FAQ</span>
                <h2>Got A Question?</h2>
                <p class="mx-auto">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.
                </p>
            </div>
        </div>

        <!-- one -->
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleOne">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExampleOne">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleTwo">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #2
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExampleTwo">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- two -->
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleThree">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #3
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExampleThree">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleFour">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #4
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExampleFour">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- three -->
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleFive">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #5
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExampleFive">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleSix">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #6
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExampleSix">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- four -->
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleSeven">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #7
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExampleSeven">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExampleEight">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt. #8
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExampleEight">
                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <a href="<? echo SITE_ADDR ?>/" class="btn btn-lg btn--primary" alt="Browse all FAQs"
                    title="Browse all FAQs">Browse all FAQs</a>
            </div>
        </div>

    </div>

    <div class="container my-5" id="banner">
        <div class="row">
            <div class="col-12">
                <div class="banner-content">
                    <img src="<? echo SITE_ADDR ?>/assets/img/banner/cyber-banner-1.png" alt="" class="img-fluid">

                    <div class="banner-body">
                        <h2>Heading One</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex fugit voluptatibus laboriosam
                            adipisci iusto at qui, sed eveniet quo consectetur omnis! Consequuntur accusamus esse optio?
                            Corrupti, sit? Nostrum, sit consequuntur?</p>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <img src="<? echo SITE_ADDR ?>/assets/img/cards/card-1.png" class="card-img img-fluid"
                            alt="hacker icon green">
                    </div>
                    <div class="card-body">
                        <h2>Heading One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem quaerat nihil in,
                            a repudiandae odit veritatis nesciunt harum quia excepturi culpa adipisci quisquam
                            provident, suscipit nam blanditiis, quo assumenda!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<? echo SITE_ADDR ?>/" class="btn btn--primary" alt="view course"
                            title="view course">View
                            Course</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4">
                <div class="card ">
                    <div class="card-header">
                        <img src="<? echo SITE_ADDR ?>/assets/img/cards/card-2.png" class="card-img img-fluid"
                            alt="hacker icon green">
                    </div>
                    <div class="card-body">
                        <h2>Heading One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem quaerat nihil in,
                            a repudiandae odit veritatis nesciunt harum quia excepturi culpa adipisci quisquam
                            provident, suscipit nam blanditiis, quo assumenda!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<? echo SITE_ADDR ?>/" class="btn btn--primary" alt="view course"
                            title="view course">View
                            Course</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 ">
                <div class="card">
                    <div class="card-header">
                        <img src="<? echo SITE_ADDR ?>/assets/img/cards/card-3.png" class="card-img img-fluid"
                            alt="hacker icon green">
                    </div>
                    <div class="card-body">
                        <h2>Heading One</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatem quaerat nihil in,
                            a repudiandae odit veritatis nesciunt harum quia excepturi culpa adipisci quisquam
                            provident, suscipit nam blanditiis, quo assumenda!
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<? echo SITE_ADDR ?>/" class="btn btn--primary" alt="view course"
                            title="view course">View
                            Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




</main>

<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>



<?php include './assets/inc/footer.php' ?>