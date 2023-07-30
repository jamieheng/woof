<style>
    @font-face {
        font-family: "Raleway-regular";
        src: url(./fonts/Raleway-Regular.ttf)
    }

    @font-face {
        font-family: "Raleway-medium";
        src: url(./fonts/Raleway-Medium.ttf)
    }

    @font-face {
        font-family: "Raleway-bold";
        src: url(./fonts/Raleway-Bold.ttf)
    }

    @font-face {
        font-family: "Raleway-extrabold";
        src: url(./fonts/Raleway-ExtraBold.ttf)
    }

    @font-face {
        font-family: "Raleway-semibold";
        src: url(./fonts/Raleway-SemiBold.ttf)
    }

    @font-face {
        font-family: "Raleway-black";
        src: url(./fonts/Raleway-Black.ttf)
    }

    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    section {
        font-family: "Raleway-regular";

        width: 100%;
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
    }

    .card-registration .select-arrow {
        top: 13px;
    }

    .bg-grey {
        background-color: #eae8e8;
    }

    @media (min-width: 992px) {
        .card-registration-2 .bg-grey {
            border-top-right-radius: 16px;
            border-bottom-right-radius: 16px;

        }

        .card .p-5 {
            font-size: 10px;
        }


    }

    @media (max-width: 991px) {
        .card-registration-2 .bg-grey {
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }

        .card .p-5 {
            font-size: 10px;
        }
    }

    @media (max-width: 600px) {
        .card .p-5 {
            font-size: 10px;
        }
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YourWoof - Cart</title>
    <link rel="icon" type="image/icon" sizes="16x16" href="./images/yourwoof16x16.png">
    <link rel="apple-icon" type="image/icon" href="./images/yourwoof180x180-apple.png">
    <link rel="icon" type="image/icon" href="./images/yourwoof512x512.png">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>



<section class="h-100 h-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h1 class="fw-bold mb-0 text-black"> Cart <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                                                <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                            </svg></h1>
                                        <h6 class="mb-0 text-muted">3 items</h6>
                                    </div>
                                    <hr class="my-8">

                                    <div class="row mb-5 d-flex justify-content-between align-items-center" id="text">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="./images/dog1.png" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Pet Name</h6>
                                            <h6 class="text-black mb-0">Money</h6>
                                        </div>
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <h6 class="text-muted">Breed</h6>
                                            <h6 class="text-black mb-0">German Shephered</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Gender</h6>
                                            <h6 class="text-black mb-0">Female</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Age</h6>
                                            <h6 class="text-black mb-0">6 Months</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Remove</h6>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#BF94E4" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </div>
                                    </div>

                                    <hr class="my-8">

                                    <div class="row mb-5 d-flex justify-content-between align-items-center" id="text">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="./images/dog2.png" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Pet Name</h6>
                                            <h6 class="text-black mb-0">Skipper</h6>
                                        </div>
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <h6 class="text-muted">Breed</h6>
                                            <h6 class="text-black mb-0">Strate</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Gender</h6>
                                            <h6 class="text-black mb-0">Male</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Age</h6>
                                            <h6 class="text-black mb-0">6 Months</h6>
                                        </div>
                                        <div class="col-md-1 col-lg-1 col-xl-1">
                                            <h6 class="text-muted">Remove</h6>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#BF94E4" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <hr class="my-8">



                                    <div class="pt-5 ">
                                        <!-- <h6 class="mb-0"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6> -->
                                        <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark"><a href="./payment.php" onMouseOver="this.style.color='#BF94E4'" onMouseOut="this.style.color='#FEFEFE'">Checkout</a></button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>