
    <!-- header ends-->
    <?php get_header(); ?>
    <!-- carousel starts  -->
    <section>

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                <img src="<?php echo get_template_directory_uri().'/assets/images/black_hole.jpg'; ?>" alt="" class="w-100 carousel_h" />
                    <div class="carousel-caption card-slide" style="left: 5%;">
                        SPACE FOR ALL
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <img src="<?php echo get_template_directory_uri().'/assets/images/space2.jpg'; ?>" alt="" class="d-block w-100 carousel_h" />
                    <div class="carousel-caption card-slide" style="left: 5%;">
                        SPACE FOR ALL
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <img src="<?php echo get_template_directory_uri().'/assets/images/space3.jpg'; ?>" alt="" class="d-block w-100 carousel_h" />
                    <div class="carousel-caption card-slide" style="left: 5%;">
                        SPACE FOR ALL
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                <img src="<?php echo get_template_directory_uri().'/assets/images/nebula.jpg'; ?>" alt="" class="d-block w-100 carousel_h" />
                    <div class="carousel-caption card-slide">
                        SPACE FOR ALL
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- carousel ends -->

    <!-- card section starts -->
    <section class="p-3" style="background-color: white;">
        <div class="row row-cols-1 row-cols-md-3 g-4 mx-3">
            <div class="col card-slide">
                <div class="card h-100" onclick="showModal('modal1', 'Quasar')">
                <img src="<?php echo get_template_directory_uri().'/assets/images/quasar.jpg'; ?>" alt="..." class="card-img-top img_h" />
                    <div class="card-body">
                        <h5 class="card-title">QUASAR</h5>
                        <p class="card-text">A quasar is a powerful and extremely distant celestial object found at the
                            center of some galaxies. It emits an intense amount of energy, making it one of the
                            brightest and most energetic objects in the universe.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col card-slide">
                <div class="card h-100" onclick="showModal('modal2', 'EARTH FROM SPACE')">
                <img src="<?php echo get_template_directory_uri().'/assets/images/space.jpg'; ?>" alt="..." class="card-img-top img_h" />
                    <div class="card-body">
                        <h5 class="card-title">EARTH FROM SPACE</h5>
                        <p class="card-text">The majestic view of Earth from Space as captured by the International
                            Space Station.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col card-slide">
                <div class="card h-100" onclick="showModal('modal3', 'VENUS ALIGNS WITH MOON')">
                <img src="<?php echo get_template_directory_uri().'./assets/images/venus.jpeg'; ?>" alt="..." class="card-img-top img_h" />
                    <div class="card-body">
                        <h5 class="card-title">VENUS ALIGNS WITH MOON</h5>
                        <p class="card-text">The moment when Venus came to greet our very own moon, aligning right at
                            the top of the moon.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- card section ends  -->


    <!-- news section starts     -->
    <section class="p-3">
        <div class="container mx-4 my-5">
            <div class="row border border-white rounded-4">
                <div class="col-lg-6">
                    <div class="p-5">
                        <h1 class="text-white">JAMES WEBB TELESCOPE</h1>
                        <p class="text-white mt-5 p_font ">The James Webb Space Telescope is a space telescope specifically
                            designed to conduct infrared astronomy. Its high-resolution and high-sensitivity instruments
                            allow it to view objects too old, distant, or faint for the Hubble Space Telescope</p>
                    </div>
                </div>
                <div class="col d-flex px-0">
                <img src="<?php echo get_template_directory_uri().'./assets/images/jameswebb.jpg'; ?>" alt="..." class="img-fluid w-100 border rounded-4" />
                </div>
            </div>
        </div>


        <div class="container mx-4 my-5">
            <div class="row border border-white rounded-4">
                <div class="col-lg-6 d-flex px-0">
                <img src="<?php echo get_template_directory_uri().'./assets/images/iss.jpeg'; ?>" alt="..." class="img-fluid w-100 border rounded-4" />
                </div>

                <div class="col-lg-6">
                    <div class="p-5">
                        <h1 class="text-white text-end" >INTERNATIONAL SPACE STATION</h1>
                        <p class="text-white mt-5 ms-lg-5 p_font text-end">The International Space Station is the largest modular space
                            station in low Earth orbit. The project involves five space agencies: the United States'
                            NASA, Russia's Roscosmos, Japan's JAXA, Europe's ESA, and Canada's CSA.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-4 my-5">
            <div class="row border border-white rounded-4">
                <div class="col">
                    <div class="p-5">
                        <h1 class="text-white">SPACE X FALCON 9</h1>
                        <p class="text-white mt-5  p_font">Falcon 9 is a partially reusable medium-lift launch vehicle that
                            can carry cargo and crew into Earth orbit, designed, manufactured and launched by American
                            aerospace company SpaceX. It can also be used as an expendable heavy-lift launch vehicle.
                            The first Falcon 9 launch was in June 2010.</p>
                    </div>
                </div>
                <div class="col d-flex px-0">
                    <img src="<?php echo get_template_directory_uri().'./assets/images/falcon.jpg'; ?>" alt="..." class="img-fluid w-100 border rounded-4" />
                </div>
            </div>
        </div>



        <!-- news section ends  -->

    </section>

    <!-- modal section starts  -->
    <section>

        <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal_1_body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel2"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"id="modal_2_body" >
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel3"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal_3_body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- quotes section starts  -->


<section class="p-3" style="background-color: white;">
    <div class="container">
        <div class="card mb-3 mx-auto w-75">
            <div class="row g-0 align-items-center">
                <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri().'./assets/images/neil.jpg'; ?>" alt="..." class="img-fluid rounded-start"/>
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">NEIL ARMSTRONG</h5>
                        <p class="card-text">THAT’S ONE SMALL STEP FOR MAN, ONE GIANT LEAP FOR MANKIND.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 mx-auto w-75">
            <div class="row g-0">
                <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri().'./assets/images/buzz.jpg'; ?>" alt="..." class="img-fluid rounded-start"/>
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">BUZZ ALDRIN</h5>
                        <p class="card-text">Your mind is like a parachute: if it isn't open, it doesn't work."</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3 mx-auto w-75">
            <div class="row g-0">
                <div class="col-md-2">
                <img src="<?php echo get_template_directory_uri().'./assets/images/jfk.jpg'; ?>" alt="..." class="img-fluid rounded-start"/>

                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title">JOHN F. KENNEDY</h5>
                        <p class="card-text">"I believe that this Nation should commit itself to achieving the goal,
                            before this decade is out, of landing a man on the moon and returning him safely to earth.
                        </p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- quotes section ends  -->
<?php get_footer(); ?>
    <!-- footer starts  -->

