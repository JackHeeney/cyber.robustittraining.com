<div id="hero">
    <div class="row">
        <div class="col-12">
            <!-- Slider main container -->
            <div class="swiper swiperHero">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <div class="swiper-slide"
                        style="background: linear-gradient(45deg, rgba(0, 0, 0, 0.7) 0%, rgba(103, 39, 109, 0.1) 100%), url('<?php echo SITE_ADDR ?>/assets/img/hero/hero-3.jpeg') no-repeat; background-size: cover; background-position: center;">
                        <div class="text-start swiper-slide-content">
                            <div class="row align-items-center g-lg-5 py-5">
                                <div class="col-lg-7 text-center text-lg-start">
                                    <h1 class="display-4 fw-bold lh-1 mb-3">Let us hear from you directly!</h1>
                                    <p class="col-lg-10 fs-4">We always want to hear from you! Let us know how we can
                                        best help you and we'll do our very best.</p>

                                    <a href="" class="btn btn-lg btn--primary" data-bs-toggle="modal"
                                        data-bs-target="#myModal" id="hero-form-btn">Get In
                                        Touch</a>

                                </div>
                                <div class="col-md-10 mx-auto col-lg-5 text-center text-lg-start">
                                    <form class="bg-light p-4 rounded" action="" method="POST" name="hero-form"
                                        id="hero-form">

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

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="name" class="form-label">Your firstname *</label>
                                                    <input type="text" name="strLeadFirstName" id="strLeadFirstName"
                                                        placeholder="Enter your firstname" required="required"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="surname" class="form-label">Your lastname *</label>
                                                    <input type="text" name="strLeadLastName" id="strLeadLastName"
                                                        placeholder="Enter your lastname" required="required"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Your email *</label>
                                                    <input type="email" name="strLeadEmail" id="strLeadEmail"
                                                        placeholder="Enter your email" required="required"
                                                        class="form-control" />
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

                                        <div class="form-group ">
                                            <label for="message" class="form-label">Your message for us </label>
                                            <textarea rows="4" name="strLeadData4" id="strLeadData4"
                                                placeholder="Enter your message" class="form-control"></textarea>
                                        </div>
                                        <button type="submit" name="submit" value="Submit"
                                            class="btn btn--primary w-100 my-3">Send
                                            message</button>

                                        <hr>

                                        <span class="text-muted mx-auto fs-7">
                                            * We do not share any personal information.
                                        </span>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slides -->
                    <div class="swiper-slide"
                        style="background: linear-gradient(45deg, rgba(0, 0, 0, 0.7) 0%, rgba(103, 39, 109, 0.1) 100%), url('<?php echo SITE_ADDR ?>/assets/img/hero/hero-2.jpeg') no-repeat; background-size: cover; background-position: center;">
                        <div class="text-center text-lg-start swiper-slide-content">
                            <h1 class="display-4 fw-bold lh-1 mb-3">Official Cyber Security Certifications</h1>
                            <h3 class="my-4">The cyber security industry needs more
                                qualified professionals!
                            </h3>
                            <a href="<?php echo SITE_ADDR ?>/" class="btn btn-lg btn--primary">View courses</a>

                            <a href="<?php echo SITE_ADDR ?>/" class="btn btn-lg btn--primary" data-bs-toggle="modal"
                                data-bs-target="#searchModal">Call us </a>
                        </div>
                    </div>
                    <div class="swiper-slide"
                        style="background: linear-gradient(45deg, rgba(0, 0, 0, 0.7) 0%, rgba(103, 39, 109, 0.1) 100%), url('<?php echo SITE_ADDR ?>/assets/img/hero/hero-3.jpeg') no-repeat; background-size: cover; background-position: center;">
                        <div class="text-center text-lg-start swiper-slide-content">
                            <h1 class="display-4 fw-bold lh-1 mb-3">Become an Ethical Hacker</h1>
                            <h3 class="my-4">The average salary for an ethical hacker job in London is £72,500 per
                                year.
                            </h3>
                            <a href="<?php echo SITE_ADDR ?>/" class="btn btn-lg btn--primary">View courses</a>

                            <a href="<?php echo SITE_ADDR ?>/" class="btn btn-lg btn--primary" data-bs-toggle="modal"
                                data-bs-target="#searchModal">Call us </a>
                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

        </div>
    </div>
</div>