<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>YourWoof - Payment</title>

    <link rel="icon" type="image/icon" sizes="16x16" href="./images/yourwoof16x16.png">
    <link rel="apple-icon" type="image/icon" href="./images/yourwoof180x180-apple.png">
    <link rel="icon" type="image/icon" href="./images/yourwoof512x512.png">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        ::-webkit-scrollbar {
            width: 8px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            padding: 5px;
            background-color: #F0F0F0;
        }

        p {
            margin: 0%;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            overflow: hidden;
            background-color: #f8f9fa;
        }

        .box-1 {
            max-width: 450px;
            padding: 10px 40px;
            user-select: none;
        }

        .box-1 div .fs-12 {
            font-size: 8px;
            color: white;
        }

        .box-1 div .fs-14 {
            font-size: 15px;
            color: white;
        }

        .box-1 img.pic {
            width: 20px;
            height: 20px;
            object-fit: cover;
        }

        .box-1 img.mobile-pic {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .box-1 .name {
            font-size: 11px;
            font-weight: 600;
        }

        .dis {
            font-size: 12px;
            font-weight: 500;
        }

        label.box {
            width: 100%;
            font-size: 12px;
            background: #ddd;
            margin-top: 12px;
            padding: 10px 12px;
            border-radius: 5px;
            cursor: pointer;
            border: 1px solid transparent;
        }

        #one:checked~label.first,
        #two:checked~label.second,
        #three:checked~label.third {
            border-color: #BF94E4;
        }

        #one:checked~label.first .circle,
        #two:checked~label.second .circle,
        #three:checked~label.third .circle {
            border-color: #7a34ca;
            background-color: #fff;
        }

        label.box .course {
            width: 100%;
        }

        label.box .circle {
            height: 12px;
            width: 12px;
            background: #ccc;
            border-radius: 50%;
            margin-right: 15px;
            border: 4px solid transparent;
            display: inline-block;
        }

        input[type="radio"] {
            display: none;
        }

        .box-2 {
            max-width: 450px;
            padding: 10px 40px;
        }


        .box-2 .box-inner-2 input.form-control {
            font-size: 12px;
            font-weight: 600;
        }

        .box-2 .box-inner-2 .inputWithIcon {
            position: relative;
        }

        .box-2 .box-inner-2 .inputWithIcon span {
            position: absolute;
            left: 15px;
            top: 8px;
        }

        .box-2 .box-inner-2 .inputWithcheck {
            position: relative;
        }

        .box-2 .box-inner-2 .inputWithcheck span {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: green;
            font-size: 12px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            right: 15px;
            top: 6px;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            outline: none;
            border: 1px solid #7700ff;
        }

        .border:focus-within {
            border: 1px solid #7700ff !important;
        }

        .box-2 .card-atm .form-control {
            border: none;
            box-shadow: none;
        }

        .form-select {
            border-radius: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;

        }

        .address .form-control.zip {
            border-radius: 0;
            border-bottom-left-radius: 10px;

        }

        .address .form-control.state {
            border-radius: 0;
            border-bottom-right-radius: 10px;

        }

        .box-2 .box-inner-2 .btn.btn-outline-primary {
            width: 120px;
            padding: 10px;
            font-size: 11px;
            padding: 0% !important;
            display: flex;
            align-items: center;
            border: none;
            border-radius: 0;
            background-color: whitesmoke;
            color: black;
            font-weight: 600;
        }

        .box-2 .box-inner-2 .btn.btn-primary {
            background-color: #BF94E4;
            border: 1px solid #BF94E4 !important;
            color: whitesmoke;
            font-size: 14px;
            display: flex;
            align-items: center;
            font-weight: 600;
            justify-content: center;

            padding: 10px;
        }

        .box-2 .box-inner-2 .btn.btn-primary:hover {
            background-color: #FEFEFE;
            color: #BF94E4;
            border: 1px solid #BF94E4 !important;
        }

        .box-2 .box-inner-2 .btn.btn-primary .fas {
            font-size: 13px !important;
            color: whitesmoke;
        }

        .carousel-indicators [data-bs-target] {
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .carousel-inner {
            width: 100%;
            height: 250px;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
        }

        .carousel-control-prev {
            transform: translateX(-50%);
            opacity: 1;
        }

        .carousel-control-prev:hover .fas.fa-arrow-left {
            transform: translateX(-5px);
        }

        .carousel-control-next {
            transform: translateX(50%);
            opacity: 1;
        }

        .carousel-control-next:hover .fas.fa-arrow-right {
            transform: translateX(5px);
        }

        .fas.fa-arrow-left,
        .fas.fa-arrow-right {
            font-size: 0.8rem;
            transition: all .2s ease;
        }

        .icon {
            width: 30px;
            height: 30px;
            background-color: #f8f9fa;
            color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transform-origin: center;
            opacity: 1;
        }

        .fas,
        .fab {
            color: #6d6c6d;
        }

        ::placeholder {
            font-size: 12px;
        }

        @media (max-width:768px) {
            .container {
                max-width: 700px;
                margin: 10px auto;
            }

            .box-1,
            .box-2 {
                max-width: 600px;
                padding: 20px 90px;
                margin: 20px auto;
            }

        }

        @media (max-width:426px) {

            .box-1,
            .box-2 {
                max-width: 400px;
                padding: 20px 10px;
            }

            ::placeholder {
                font-size: 9px;
            }
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3">
                <!-- <img src="https://images.pexels.com/photos/4925916/pexels-photo-4925916.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="pic rounded-circle" alt=""> -->
                <p class="ps-2 name">
                    <?php echo ($_SESSION['username']); ?>
                </p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold"><a href="./cart_list.php">View Cart</a> </p>
                    <p class="fw-lighter"></span>3 pets</p>
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/258092/pexels-photo-258092.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100 h-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/7974/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon">
                            <span class="fas fa-arrow-left"></span>
                        </div>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon">
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis info my-3">Choose your option
                </p>
                <div class="radiobtn">
                    <input type="radio" name="box" id="one">
                    <input type="radio" name="box" id="two">
                    <input type="radio" name="box" id="three">
                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Pick Up
                                    </span>
                                    <span class="fas fa-dollar-sign">Free</span>
                                </div>
                                <!-- <span>10 x Presets. Released in 2018</span> -->
                            </div>
                        </div>
                    </label>
                    <label for="two" class="box py-2 second">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Deleivery
                                    </span>
                                    <span class="fas fa-dollar-sign">Base on location</span>
                                </div>
                                <!-- <span>10 x Presets. Released in 2018</span> -->
                            </div>
                        </div>
                    </label>

                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email address</p>
                        <input class="form-control" type="email">
                    </div>
                    <div class="my-3 cardname">
                        <p class="dis fw-bold mb-2">Username</p>
                        <input class="form-control">
                    </div>
                    <div class="my-3 cardname">
                        <p class="dis fw-bold mb-2">Phone Number</p>
                        <input class="form-control" type="number">
                    </div>
                    <div class="my-3 cardname">
                        <p class="dis fw-bold mb-2">Home Address</p>
                        <input class="form-control" type="text">
                    </div>
                    <div>

                        <p class="dis fw-bold mb-2">Donate</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa ps-3"></div>
                            <input type="text" class="form-control" placeholder="Card Details">
                            <div class="d-flex w-50">
                                <input type="text" class="form-control px-0" placeholder="MM/YY">
                                <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV">
                            </div>
                        </div>

                        <div class="btn btn-primary mt-2">Finish
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'></script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>