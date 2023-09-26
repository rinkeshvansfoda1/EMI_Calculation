<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/EMIlogo.jpg">

    <title> EMI Calculator </title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>


</head>

<body>

    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light ml-auto">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                <img src=" images/EMIlogo.jpg " alt="EMILogo " style="width: 150px; height: 50px ">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Calculator"> Calculator </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Services"> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Blog"> Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Reviews"> Reviews </a>
                    </li>

                    <button type="button" class="btn btn-warning">
                        <a href="#contact"> Contact </a> </button>

                </ul>

            </div>
        </nav>
    </div>


    <br>
    <div class="container-fluid alert alert-warning">
        <br>

        <div class="container" id="Home">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/emifir.jpg" style="width: 100%; height: auto">
                </div>
                <div class="col-md-6">
                    <h1> A personal loan for multiple purposes!
                    </h1>
                    <p style="margin-top: 20px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis vestibulum ante, id gravida sem. Nam dictum ornare dictum. Sed congue accumsan arcu quis consectetur.
                    </p>
                    <button type="button" class="btn btn-success" style="margin-top: 30px;"> Learn more</button>
                </div>
            </div>
        </div> <br> <br> <br>
    </div>


    <div class="container" id="Calculator">
        <h1> Loan Calculator </h1>
        <p style="font-size: 20px; margin-top: 20px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam. Vestibulum dapibus vulputate sapien. Donec pulvinar libero at ex tristique commodo.
        </p> <br>
        <div class="row">
            <div class="row" id="first" style="display: 'none';">
                <div class="col-md-4">
                    <form class="row" id="signupForm" method="post">
                        <div class="col-md-6">
                            <label for="ft_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="f_name" id="f_name" pattern="[a-zA-Z]*" required placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <label for="l_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="l_name" id="l_name" pattern="[a-zA-Z]*" required placeholder="Last name">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="Email1" aria-describedby="emailHelp" placeholder="Email address">
                        </div>
                        <div class="col-md-6">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" placeholder="e.g. 9999999999">
                        </div>
                        <div class="col-md-6">
                            <label for="pan" class="form-label">PAN card number</label>
                            <input type=" text" class="form-control" name="pan" id="pan" placeholder="e.g. AAAAA1234Z">
                        </div>
                        <div class="col-md-6">
                            <label for="aadhaar" class="form-label">Aadhaar card number</label>
                            <input type="number" class="form-control" name="aadhaar" id="aadhaar" placeholder="e.g. 397788000234">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" id="submit-btnbtn" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row" id="second" style="display: 'box';">
                <form action="#" id="Form2" method="POST">
                    <div class="row g-3">
                        <div class="col-6">
                            <label for="ft_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="f_name" value="" id="firstName" placeholder="Enter your first name" readonly>
                        </div>
                        <div class="col-6">
                            <label for="l_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="l_name" value="" id="lastName" placeholder="Enter your last name" readonly>
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value="" id="email" aria-describedby="emailHelp" placeholder="Enter your email address" readonly>
                        </div>
                        <div class="col-6">
                            <label for="mobile" class="form-label">Mobile Number</label>
                            <input type="tel" class="form-control" name="mobile" value="" id="mobile_no" pattern="[0-9]{10}" placeholder="e.g. 9999999999" readonly>
                        </div>
                        <div class="col-6">
                            <label for="pan" class="form-label">PAN card number</label>
                            <input type="text" class="form-control" name="pan" value="" id="pan_no" placeholder="e.g. AAAAA1234Z" readonly>
                        </div>
                        <div class="col-6">
                            <label for="aadhaar" class="form-label">Aadhaar card number</label>
                            <input type="number" class="form-control" name="aadhaar" value="" id="aadhaar_no" pattern="[0-9]{12}" placeholder="e.g. 397788000234" readonly>
                        </div>
                        <div class="col-3">
                            <label for="loan_amount" class="form-label">Loan Amount</label>
                            <input type="number" class="form-control" name="amount" id="amount" placeholder="e.g. 10000" required>
                        </div>

                        <div class="col-3">
                            <label for="tenure" class="form-label">Tenure</label>
                            <input type="number" class="form-control" name="tenure" id="tenure" placeholder="In years e.g. 3" required>
                        </div>

                        <div class="col-3">
                            <label for="rate" class="form-label">Interest Rate in %</label>
                            <input type="number" class="form-control" name="rate" id="rate" placeholder="In percentage e.g. 8" step=".01" required>
                        </div>



                        <div class="col-12">
                            <button type="submit" class="btn btn-danger" id="calculate-btnbtn" value="calculate" name="calculate">Calculate EMI</button>
                        </div>
                    </div>

                </form>



            </div>


            <div class="row" id="third" style="display: 'none';">
                <form action="" method="POST">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="loan_amount" class="form-label">Loan Amount</label>
                            <input type="number" class="form-control" name="amount" id="amount1" placeholder="e.g. 10000" required>
                        </div>
                        <div class="col-md-3">
                            <label for="tenure" class="form-label">Tenure</label>
                            <input type="number" class="form-control" name="tenure" id="tenure1" placeholder="In years e.g. 3" required>
                        </div>
                        <div class="col-md-3">
                            <label for="rate" class="form-label">Interest Rate in %</label>
                            <input type="number" class="form-control" name="rate" id="rate1" placeholder="In percentage e.g. 8" step=".01" required>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-danger" id="calculate-btnbtn-btnbtn" value="calculate" name="calculate">Calculate EMI</button>
                        </div>
                    </div>
                </form>
                <div id="result1">
                </div>
                <div id="fourth">
                    <div id="result">
                    </div>
                </div>
            </div>




            <br>
            <br>
            <div class="container-fluid alert alert-warning">
                <br>
                <div class="container" id="Services">
                    <h1> Our Services </h1>
                    <p style="font-size: 20px; margin-top: 20px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam. Vestibulum dapibus vulputate sapien. Donec pulvinar libero at ex tristique commodo.
                    </p><br>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/homeloan.png" style="width: 80px; height: 80px;" class="rounded-circle mx-auto text-center">
                            <h3> Home loan </h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam.</p>
                            <img src="images/goldloan.png" style="width: 80px; height: 80px;" class="rounded-circle mx-auto text-center">
                            <h3> Gold loan </h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="images/carloan.png" style="width: 80px; height: 80px;" class="rounded-circle mx-auto text-center">
                            <h3> Car loan </h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam.</p>
                            <img src="images/educationloan.png" style="width: 80px; height: 80px;" class="rounded-circle mx-auto text-center">
                            <h3> Education loan </h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam.</p>

                        </div>
                        <div class="col-md-4">
                            <img src="images/personaloan.png" style="width: 80px; height: 80px;" class="rounded-circle mx-auto text-center">
                            <h3> Personal loan </h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam.</p>
                            <img src="images/creditcardissue.png" style="width: 80px; height: 80px;" class="rounded-circle mx-auto text-center">
                            <h3>Credit card issue </h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam.</p>

                        </div>
                    </div>
                </div>
            </div>
            <br><br> <br>

            <div class="container-fluid alert alert-info">
                <div class="container" id="Blog">
                    <h1> Latest Blog </h1>
                    <p style="font-size: 20px; margin-top: 20px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas odio sem, tempor egestas libero at, fermentum posuere quam. Vestibulum dapibus vulputate sapien. Donec pulvinar libero at ex tristique commodo.
                    </p> <br>
                    <div class="row">
                        <div class="col-md-4">

                            <img src="images/blog-1.jpg" style="width: 100%; height: 225px;">
                            <h3> Maecenas odio sem, tempor egestas</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. libero at, fermentum posuere quam.</p>
                        </div>
                        <div class=" col-md-4 ">

                            <img src="images/blog-2.jpg" style="width: 100%; height: 225px;">
                            <h3> Maecenas odio sem, tempor egestas</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. libero at, fermentum posuere quam.</p>
                        </div>
                        <div class=" col-md-4 ">

                            <img src="images/blog-3.jpg " style="width: 100%; height: 225px;">
                            <h3> Maecenas odio sem, tempor egestas</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. libero at, fermentum posuere quam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br><br>

            <div class="container" id="Reviews">
                <div class="row">
                    <div class="col-md-6">
                        <h1> Customer Story </h1>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate</p>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="images/dakshesh.jpg" class="img-fluid rounded-circle" height="80" width="80">
                                </div>
                                <div class="col-md-9">
                                    <p>
                                    <h3> Dakshesh Joshipura </h3>
                                    Business person
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <img src="images/customerstory.svg" style="width: 100%; height: 225px;">
                    </div>
                </div>
            </div>
            <Br><br> <br>

            <div class="container-fluid alert alert-warning">
                <div class="container" id="contact">
                    <h1> Get in touch </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/touch.svg" width="100%" height="310">
                        </div>

                        <div class="col-md-6">
                            <form class="contact-form">
                                <div class="contact-form-head">
                                    <h3>Send Message</h3>
                                </div>
                                <Br>
                                <div class="contact-form-inner">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Write Your Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>

                <br> <br> <br>
            </div>



            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <img src=" images/EMIlogo.jpg " alt="EMILogo " style="width: 150px; height: 50px ">
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. libero at, fermentum posuere quam.
                        </p>

                    </div>

                    <div class="col-md-3">

                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#"> Services</a></li>
                            <li><a href="#"> Calculator</a></li>
                            <li><a href="#"> Contact Us</a></li>
                            <li><a href="#"> Reviews</a></li>
                        </ul>

                    </div>
                    <div class="col-md-3 ">

                        <h5>Address</h5>
                        <p class="mt-1"> 123, ABC <br> Surat
                            <br> 0123456789
                            <br> xyz@gmail.com
                        </p>

                    </div>
                    <div class="col-md-3">

                        <h5>Social Connect</h5>
                        <a href="#">
                            <img src="images/twitter.png" height="35" width="35">
                            <img src="images/facebook.png" height="30" width="30">
                            <img src="images/insta.png" height="25" width="25">
                            <img src="images/linkedin.png" height="25" width="25">
                        </a>



                    </div>
                </div>
            </div>

            <div class="container-fluid alert alert-danger">
                <div class="container">

                    <p class="text-md-center"> Made with Love </p>
                    
                </div>
            </div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <script>
                var scroll = new slowScroll('a[href*="#"]');
            </script>
</body>

</html>