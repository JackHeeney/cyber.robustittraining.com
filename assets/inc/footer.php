<!-- Footer -->
<footer class="bg-black text-light pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-start">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Content -->
                <h5 class="font-weight-bold  ">Cyber Security</h5>
                <img src="<? echo SITE_ADDR ?>/assets/img/robust-it-logo-svg-white.svg" alt="">
                <p class="my-3">A better way to learn.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Courses</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">EC-Council</a>
                    </li>
                    <li>
                        <a href="#!">CompTIA</a>
                    </li>
                    <li>
                        <a href="#!">Cisco</a>
                    </li>
                    <li>
                        <a href="#!">(ISC)&#178;</a>
                    </li>
                    <li>
                        <a href="#!">ISACA</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Certified</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">GCHQ Certified</a>
                    </li>
                    <li>
                        <a href="#!">Microsoft Gold Partners</a>
                    </li>
                    <li>
                        <a href="#!">CompTIA Authorised Partners</a>
                    </li>

                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">General</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Home</a>
                    </li>
                    <li>
                        <a href="#!">About</a>
                    </li>
                    <li>
                        <a href="#!">Contact</a>
                    </li>
                    <li>
                        <a href="#!">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#!">Terms & Conditions</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">Register for today!</h5>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="btn btn--primary ">Sign up!</a>
        </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-twitter"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fab fa-google-plus-g"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <i class="fab fa-dribbble"> </i>
            </a>
        </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© Robust IT Training. All rights reserved.
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-dark bg-gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <a href="<? echo SITE_ADDR ?>/" class="brand-wrap h3 me-3">
                                <img src="<? echo SITE_ADDR ?>/assets/img/robust-it-logo-svg-white.svg"
                                    class="img-fluid" width="250" alt="zak learning header logo">
                            </a>
                        </div>
                        <div class="col-6">
                            <h2 class="modal-title close text-end ml-auto" id="exampleModalLabel"
                                data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer">CLOSE
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body bg-dark ">

                <div class="container">
                    <form action="" method="" class="">


                        <div class="row g-3 align-items-center my-3">
                            <!-- <label for="search" class="form-label">Search</label> -->
                            <div class="col-12 ">
                                <input type="search" id="search" name="search" class="form-control search"
                                    aria-label="Search" placeholder="Search Website e.g. 'Microsoft Excel'"
                                    onKeyUp="showResult(this.value)">
                            </div>
                        </div>
                        <div id="livesearch" class="text-light">Search results:</div>


                        <section class="blog-post-area">
                            <div class="container">
                                <div class="row py-5">
                                    <?php include './assets/inc/blog-posts.php' ?>
                                </div>
                            </div>
                        </section>


                    </form>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade bg-dark " id="myModal" role="dialog" displayed="false" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Get in Touch</h5>
                <button type="button" class="btn btn--primary" data-bs-dismiss="modal">CLOSE</button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div class="lottie-player mx-auto">

                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_5yhibpv8.json"
                                background="transparent" speed="1" style="width: 100%; height: auto;" loop autoplay>
                            </lottie-player>

                        </div>
                    </div>

                </div>

                <form action="" method="POST" name="get-in-touch">

                    <input type="hidden" name="intLeadGroupID" value="" />
                    <input type="hidden" name="strSource" value="" />
                    <input type="hidden" name="strMedium" value="" />
                    <input type="hidden" name="strTerm" value="" />
                    <input type="hidden" name="intSiteID" value="" />
                    <input type="hidden" name="intReferrerBuyerID" value="0" />
                    <input type="hidden" name="intDPAStatusPhoneID" value="1">
                    <input type="hidden" name="intDPAStatusSMSID" value="1">
                    <input type="hidden" name="intDPAStatusEmailID" value="1">
                    <input type="hidden" name="strAPISuccessURL" value="" />
                    <input type="hidden" name="strAPIFailURL" value="" />
                    <input type="hidden" name="strLeadData2"
                        value="Lead is from cyber.robustittraining.com 'get-in-touch' form" />

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Your firstname *</label>
                                <input type="text" name="strLeadFirstName" id="strLeadFirstName"
                                    placeholder="Enter your firstname" required="required" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="surname" class="form-label">Your lastname *</label>
                                <input type="text" name="strLeadLastName" id="strLeadLastName"
                                    placeholder="Enter your lastname" required="required" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="form-label">Your email *</label>
                                <input type="email" name="strLeadEmail" id="strLeadEmail" placeholder="Enter your email"
                                    required="required" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number </label>
                                <input type="number" name="strLeadPhone1" id="strLeadPhone1"
                                    placeholder="Enter your phone num" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Your message for us </label>
                        <textarea rows="4" name="strLeadData4" id="strLeadData4" placeholder="Enter your message"
                            class="form-control"></textarea>
                    </div>
                    <button type="submit" name="submit" value="Submit" class="btn btn--primary w-100 my-3">Send
                        message</button>

                </form>
            </div>

        </div>

    </div>
</div>


<script type="text/javascript">
/*****************************
 *        live search        *
 *****************************/
function showResult(str) {
    if (window.XMLHttpRequest) {
        // Code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { //Code for IE6, IE5
        xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "<?php echo SITE_ADDR ?>/livesearch.php?q=" + str, true);
    xmlhttp.send();
}
</script>



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="<? echo SITE_ADDR ?>/assets/js/main.js"></script>

<script src="<? echo SITE_ADDR ?>/assets/js/vendor/aos.js"></script>

</body>

</html>