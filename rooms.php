<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookwoood Hotel-Rooms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="common.css?v=<?php echo time(); ?>">


    <style>


    </style>

</head>

<body>
    <div class="background"></div>
    <?php require('inc/header.php') ?>

    <div class="my-5 px-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <h2 class="fw-bold fs-1 h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark"></div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align mt-2" id="filterDropdown">
                            <div class="border bg-white p-3 rounded mb-3">
                                <h5 class="mb-2" style="font-size:18px;">Check Avalibility</h5>
                                <label class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none mb-3" />
                                <label class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none " />
                        
                            </div>
                            <div class="border bg-white p-3 rounded mb-3">
                                <h5 class="mb-2" style="font-size:18px;">Facilities</h5>
                                <div class="mb-2">

                                    <label class="form-label">Facility-one</label>
                                <input type="date" id="" class="form-check shadow-none mb-3" />
                                </div>
                               
                        
                            </div>
                           </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>









    <?php require('inc/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>