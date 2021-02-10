<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">November Salon</a>

            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div class="p-5 text-center bg-image" id="intro">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">November Salon</h1>
                    <h4 class="mb-3">A leading beauty palour in town</h4>
                    <a class="btn btn-outline-light btn-lg m-2" href="#!" role="button">See menu</a>
                    <a class="btn btn-outline-light btn-lg m-2" href="#!" role="button">Book a table</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Background image -->
</header>
<main>
    <div class="container-fluid px-0">
        <section class="divider py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-end pr-5">
                    <h2>Discover our menu</h2>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, cum neque. Cumque recusandae facere expedita explicabo eos. Non a sint quisquam odio soluta qui porro maxime corporis, tenetur adipisci corrupti.</p>
                </div>
            </div>
        </section>
        <section id="about" class="text-center text-white">
            <h2 class="my-5">Our promise:</h2>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-end">
                    <h2>100% meat</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique eligendi est ipsa id dolorum quod aperiam tenetur dolores quasi perferendis modi vel dicta autem, aspernatur libero? Commodi eaque in cum.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/sample/1.jpg') ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-end">
                    <h2>100% spices</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit sit nihil iure, neque exercitationem consequatur facere numquam fugit ullam hic eius quisquam accusantium non minima doloribus cum voluptas, minus velit!</p>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/sample/2.jpg') ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 text-end">
                    <h2>100% taste</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique eligendi est ipsa id dolorum quod aperiam tenetur dolores quasi perferendis modi vel dicta autem, aspernatur libero? Commodi eaque in cum.</p>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url('assets/img/sample/3.jpg') ?>" alt="" class="img-fluid">
                </div>
            </div>
        </section>
    </div>

    <section id="book">
        <!-- Background image -->
        <div class="d-flex justify-content-center align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.6)">
            <div class="text-white">
                <a class="btn btn-outline-light btn-lg m-2" href="#!" role="button">Book a table</a>
            </div>
        </div>
        <!-- Background image -->
    </section>
    <section id="team" class="text-center">
        <h2 class="my-5 text-white">Our team</h2>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/sample/t1.jpg') ?>" alt="..." class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Shivani</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/sample/t2.jpg') ?>" alt="..." class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Prakash</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3" style="max-width: 540px">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url('assets/img/sample/t3.jpg') ?>" alt="..." class="img-fluid" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Rosy</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <footer class="bg-black text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-5">Locations:</h5>
                    <P>
                        226 Halifax Court <br>
                        New York, NY 10031<br>
                        (248) 675-4007
                    </P>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <p class="mt-3">
                        416 NE. Sherman St<br>
                        New York, NY 10027<br>
                        (248) 675-4007
                    </p>
                    <p>
                        59 North Shadow brook St.<br>
                        Bronx, NY 10457<br>
                        (248) 675-4007

                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-5">Working hours:</h5>
                    <div class="row">
                        <div class="col-6">
                            <p>Moday-Friday</p>
                            <p>Saturday</p>
                            <p>Sunday</p>
                        </div>
                        <div class="col-6">
                            <p>9:00 AM - 5:00 PM</p>
                            <p>12:00 Noon - 11:00 PM</p>
                            <p>12:00 Noon - 10:00 PM</p>
                        </div>
                    </div>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2021 Copyright:
            <a class="text-white" href="https://novembersalon.co.in/">novembersalon.co.in</a>
        </div>
        <!-- Copyright -->
    </footer>
</footer>