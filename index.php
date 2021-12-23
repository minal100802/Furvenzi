<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="images/logotitle.png" type="image/png"/>
    <title>Furvenzi</title>
</head>
<body>

    <?php echo $alert; ?>
<!-- Header/Navbar part -->

    <header>
        <a href="#" class="logo">Furvenzi <img class="paw" src="images/paw-black-shape.png" alt="paw"></a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a href="#home" onclick="toggleMenu();">Home</a></li>
            <li><a href="#service" onclick="toggleMenu();">Services</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Contact Us</a></li>
            <li><a href="about.html" onclick="toggleMenu();">About Us</a></li>
            <li><a href="Signin/signin(in).php" onclick="toggleMenu();">Signout</a></li>
        </ul>
    </header>

<!-- It's all about pets part -->

    <section class="banner" id="home">
        <div class="textbx">
            <h2>It's All About Pets</h2>
        </div>
    </section>

<!-- Circlular-image part -->

    <section class="circular-img">
        <div class="circle">
            <img class="circle1" src="images/dogcatplaying.jpg" alt="cat">
            <p>"Your ONE STOP destination for everything. <br>Pawfect for your furry friends"</p>
        </div>
        <div class="circle">
            <img class="circle2" src="images/hpkutta.jpg" alt="dog">
            <p>" From food supplies and veterinary care to cute outfits for your pets!"</p>
        </div>
    </section>

<!-- Services Part -->

    <div class="service-heading" id="service">
        <h2>Services</h2>
        <p class="service-text">We provide an all-under-one-roof services for your pet</p>
    </div>
    <section class="services">
        <div class="container">
            <div class="card">
                <div class="img-bx" data-text="Buying">
                    <img src="images/buy-button.png" alt="buying">
                </div>
                <div class="content">
                    <div>
                        <h3>Buying</h3>
                        <p>Bring home paw-radise with these cute lil' paws and furs! All sorts of breeds available for both pups and kittens </p>
                        <a href="buying.html">View More</a>
                    </div>
                </div>
            </div> 
            <div class="card">
                <div class="img-bx" data-text="Selling">
                    <img src="images/selling.png" alt="selling">
                </div>
                <div class="content">
                    <div>
                        <h3>Selling</h3>
                        <p>Who said you can't buy happiness. Definitely forgot about pets!</p>
                        <a href="selling.html">View More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img-bx" data-text="Parenting">
                    <img src="images/parents.png" alt="parenting">
                </div>
                <div class="content">
                    <div>
                        <h3>Parenting</h3>
                        <p>You only have so much love to give! Why not share it with a furry pet!</p>
                        <a href="parenting.html">View More</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img-bx" data-text="Strolling">
                    <img src="images/dog-walking.png" alt="strolling">
                </div>
                <div class="content">
                    <div>
                        <h3>Strolling</h3>
                        <p>Busy with your work! Can't take your pet out for a walk! We've got you covered!</p>
                        <a href="strolling.html">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonial-heading" id="testimonials">
        <h2>Testimonials</h2>
        <p class="testimonial-text">Some Feedback From Our Valuable Customers</p>
    </div>
    <section class="testimonies">
        <div class="testimonials">
            <div class="clients-card">
                <div class="layer"></div>
                <div class="feedbacks">
                    <p>My Experience With Furvenzi Has Been A Merry Trip In Itself. Their Easy To Understand Website Makes It Easy To Navigate!</p>
                    <div class="client-img">
                    </div>
                    <div class="client-details">
                        <h2>Gaurav R<br> <em>Lucknow</em></h2>
                    </div>
                </div>
            </div>
            <div class="clients-card">
                <div class="layer"></div>
                <div class="feedbacks">
                    <p>Furvenzi is the name of the game when it comes to anything and everything related to pets. Really happy with my purchase.</p>
                    <div class="client-img">
                    </div>
                    <div class="client-details">
                        <h2>Ranveer K<br> <em>Mumbai</em></h2>
                    </div>
                </div>
            </div>
            <div class="clients-card">
                <div class="layer"></div>
                <div class="feedbacks">
                    <p>Completely Satistied With The Services Provided By Furvenzi. Top-Notch Quality And Unparalled Service. Cheers!!</p>
                    <div class="client-img">
                    </div>
                    <div class="client-details">
                        <h2>Nikhil A<br> <em>Delhi</em></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact-info">
            <h2>Contact Us</h2>
        </div>
        <div class="contact-container">
            <div class="contact-details">
                <div class="box">
                    <div class="text">
                        <p>Got Any Queries?? <br> Send In Your Detials And We'll Get Back To You. <br>~Love, Furvenzi</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form method="POST" enctype="multipart/form-data" name="EmailForm">
                    <h2>Send Message</h2>
                    <div class="input-Box">
                        <input type="text" name="name" required>
                        <span>Full Name</span>
                    </div>
                    <div class="input-Box">
                        <input type="text" name="email" required>
                        <span>Email</span>
                    </div>
                    <div class="input-Box">
                        <textarea name="message" required></textarea>
                        <span>Type your Message..</span>
                    </div>
                    <div class="input-Box">
                        <input type="submit" name="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Copyright © 2021 Furvenzi All Rights Reserved</p>
    </footer>

    <script src="index.js"></script>
</body>
</html>