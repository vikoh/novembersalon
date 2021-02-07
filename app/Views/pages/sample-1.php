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
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
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
</main>
<footer></footer>