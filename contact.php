<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact | Life Style Store</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!--  -->
        <link href="css/indx2.css" rel="stylesheet">
        <!--  -->
</head>
<body>
<?php
    $uri = $_SERVER['SCRIPT_NAME'];
    $uri = str_replace("/eCommerce3/", "", $uri);
    $_GET['url']=$uri;
    include 'includes/header.php';
?>
<!-- <div class="container" id="content">
    <div class="row">
        <div class="col-lg">
            <img src="img/contact.png" style="float: right;">
            <h1>Get in Touch</h1>
            <p id="p1">Hi there, we are here to help you.<br> Please feel free to contact us in case you have any queries regarding the products, payment or order delivery.<br>With respect to payment, we will be accepting prepaid orders only, in order to avoid cash payment and hence maintain social distancing.<br> With respect to delay in order delivery, please note that we are trying our best to deliver your order on time, but your order may be delayed due to the current situation (or unforseen circumstances). However, we ensure that your order will be delivered soon.<br>In case you have any other queries, please fill the form below, and our team will get in touch with you within 24 hours.<br>You can also contact the number given below to get in touch with our customer care executive immediately.</p>
        </div><br><br>
        <div class="col-lg">
            <div style="float: right;">
                <h1>COMPANY INFORMATION</h1><br>
                <p id="p1">Bengaluru, India - 560011</p><br>
                <p id="p1">Phone : +91 9302385479</p><br>
                <p id="p1">Email : support@lifestylestore.com</p>
            </div>
            <h1>CONTACT US</h1>
            <div style="float: left;">
                <form>
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Name" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                    </div>
                    <div class="form-group">
                        <textarea rows="5" cols="60" placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
    
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE,We love to hear from you!</p>
    </section>

    <section id="concat-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fa-solid fa-map"></i>
                    <p>56 Classford Street Glasgow G1 1UL New York</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>contact@exmple.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-phone-alt"></i>
                    <p>contact@exmple.com</p>
                </li>
                <li>
                    <i class="fa-solid fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 16.00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3256.330368573798!2d-1.383387487767105!3d35.29777177972612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7925e6c5628457%3A0x5a70dd685bc50394!2zQWxnZXJpZSBUw6lsw6ljb20!5e0!3m2!1sen!2sdz!4v1658371904772!5m2!1sen!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" name="name" placeholder="Name" autofocus="on" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            <input  type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            <textarea rows="5" cols="60" placeholder="Address"></textarea>
            <button type="submit" class="normal">Submit</button>
        </form>
        <div class="people">
            <br><br><br>    
            <div>
                <img src="img/1.png" alt="">
                <p><span>John Doe</span> Senior Marketing Manager <br>
                    Phone: + 000 123 000 77 88 <br>
                    Email: contact@exmple.com
                </p>
            </div>
            <div>
                <img src="img/2.png" alt="">
                <p><span>William smith</span> Senior Marketing Manager <br>
                    Phone: + 000 123 000 77 88 <br>
                    Email: contact@exmple.com
                </p>
            </div>
            <div>
                <img src="img/3.png" alt="">
                <p><span>Emma Stone</span> Senior Marketing Manager <br>
                    Phone: + 000 123 000 77 88 <br>
                    Email: contact@exmple.com
                </p>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sing Up For Newsletter</h4>
            <p>Get E-mail upadtes about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sing Up</button>
        </div> 
    </section>

<?php
include 'includes/footer.php';
?>
</body>
</html>