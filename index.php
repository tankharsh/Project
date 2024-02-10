<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
    </style>
</head>

<body>
    <!-- navbar start  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Property List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-outline-success btnSign" type="submit" onclick='showModal()'>Sign Up
                    <img src="./assets/arrow.svg" alt="">
                </button>
            </div>
        </div>
    </nav>
    <!-- navbar end  -->

    <section class="header">
        <div class="imageBG">
            <img src="./img/bg3.jpg" alt="">
        </div>
        <div class="layer">
        </div>
        <div class="wrapper-txt">
            <div class="typing-demo headText bigText ms-5">
                Build Your Dream.</div>
        </div>
        <div class="headText smText">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, est?
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </div>
        <form class="d-flex justify-content-center align-middle search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </section>

    <!-- Welcome PopUp notification  -->
    <div class="notification">
        <p>Welcome Sir,</p>
        <span class="notification_program"></span>
    </div>
    <!-- Welcome PopUp notification  -->

    <!-- Login form start  -->
    <div class="overLay"></div>
    <section>
        <div class="wrapper">
            <span class="cancle" onclick="removeModal()">X </span>
            <div class="form signup">
                <header>Signup</header>
                <form action="#">
                    <input type="text" placeholder="Full name" required />
                    <input type="text" placeholder="Contact No." required />
                    <input type="email" placeholder="Email address" required />
                    <input type="password" placeholder="Password" required />
                    <div class="checkbox">
                        <input type="checkbox" id="signupCheck" />
                        <label for="signupCheck">I accept all terms & conditions</label>
                    </div>
                    <input type="submit" value="Signup" class="btn btn-success" />
                </form>
            </div>
            <div class="form login">
                <header>Login</header>
                <form action="#">
                    <input type="text" placeholder="Email address" required />
                    <input type="password" placeholder="Password" required />
                    <a href="#">Forgot password?</a>
                    <input type="submit" value="Login" />
                </form>
            </div>
        </div>
    </section>
    <!-- login Form Ends -->
    <hr>
    <div class="about d-flex mt-5 main">
        <div class="left">
            <img src="img/about-img.jpg" class="rounded" alt="About Us">
        </div>
        <div class="right main">
            <h1 class="text-center">About Us</h1>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident impedit, repellendus ut ratione eos tempore amet. Modi excepturi atque exercitationem quae nisi iusto nobis non voluptatum ipsum molestiae aliquid eos eum, earum, enim repellat quas?
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque fugit magnam ipsam eligendi commodi aliquam. Velit, laborum rerum minus repellat nemo harum ratione. <br>
            <button class="btn btn-success mt-5 me-auto">Read More</button>
        </div>
    </div>
    <hr class="mt-5">
    <section class="pt-1 main">
        <h2 class="text-center my-5">Property</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <img src="./img/bg3.jpg" class="card-img-top image" alt="...">
                        <div class="middle">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <img src="./img/bg3.jpg" class="card-img-top image" alt="...">
                        <div class="middle">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <img src="./img/bg3.jpg" class="card-img-top image" alt="...">
                        <div class="middle">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card">
                        <img src="./img/bg3.jpg" class="card-img-top image" alt="...">
                        <div class="middle">
                            <h5 class="card-title">Card title</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="mt-5">
    <section class="main pt-1">
        <h2 class="text-center my-5">Property List</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <div class="cards">
                        <img src="./img/about-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="cards">
                        <img src="./img/about-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="cards">
                        <img src="./img/about-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="cards">
                        <img src="./img/about-img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="mt-5">
    <div class="container main">
        <div class="row">
            <div class="col-lg mt-5">
                <div class="Aboutcard">
                    <img src="./assets/client.svg" alt="..">
                    <h3 class="Aboutcard-txt">Client</h3>
                </div>
            </div>
            <div class="col-lg mt-5">
                <div class="Aboutcard">
                    <img src="./assets/deals.svg" alt="..">
                    <h3 class="Aboutcard-txt">Deals</h3>
                </div>
            </div>
            <div class="col-lg mt-5">
                <div class="Aboutcard">
                    <img src="./assets/agent.svg" alt="..">
                    <h3 class="Aboutcard-txt">Agent</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-5">

    <section>
        <h2 class="text-center my-5">Agents List</h2>
        <div class="container Agent-dash">
            <div class="row agent-row">
                <div class="col-lg">
                    <div class="Agent">
                        <img src="./img/prince.jpeg" alt="Avatar" class="Agentimage">
                        <div class="Agentoverlay">
                            <div class="Agenttext">
                                <p>Name : Prince Vora</p>
                                <p>Contact : 0000000</p>
                                <p>Address : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, reiciendis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="Agent">
                        <img src="./img/prince.jpeg" alt="Avatar" class="Agentimage">
                        <div class="Agentoverlay">
                            <div class="Agenttext">
                                <p>Name : Prince Vora</p>
                                <p>Contact : 0000000</p>
                                <p>Address : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, reiciendis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="Agent">
                        <img src="./img/prince.jpeg" alt="Avatar" class="Agentimage">
                        <div class="Agentoverlay">
                            <div class="Agenttext">
                                <p>Name : Prince Vora</p>
                                <p>Contact : 0000000</p>
                                <p>Address : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, reiciendis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <footer class="footer mt-5">
        <div class="left-footer mt-5 text-center">
            <h1 class="">Property List</h1>
            <h5 class="mt-3">Lorem psum dolor sit amet consectetur adipisicing elit. Nobis aliquid alias unde excepturi fuga.</h5>
            <h5 class="mt-3">Lorem psum dolor sit amet consectetur adipisicing elit. Nobis aliquid alias unde excepturi fuga.</h5>
            <button class="btn btn-success px-5 mt-5">Contact Us</button>
        </div>
        <div class="right-footer">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 mx-5">
                        <h4 class="mt-5">Support</h4>
                        <p>How to get here</p>
                        <p> Support center</p>
                        <p> Lost & found</p>
                        <p> Meetings & events</p>
                        <p> Press center</p>
                        <p> Privacy policy</p>
                        <p> Safety standards</p>
                        <p> Terms & cancellation policy</p>
                        <p> Opening hours</p>
                    </div>
                    <div class="col-6 col-md-4">
                        <h4 class="mt-5">Company</h4>
                        <p>About us</p>
                        <p> CSR Report</p>
                        <p> B Corp</p>
                        <p>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-youtube"></a>
                            <a href="#" class="fa fa-instagram"></a>
                        </p>
                        <form>
                            <input class="form-control mb-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success me-5" type="submit">Search</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>