```php id="k4m2xp"
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "Restaurant_homepage"
);

if(!$conn){

    die("Connection Failed: " . mysqli_connect_error());

}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $persons = $_POST['persons'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $sql = "INSERT INTO bookings
    (name, phone, persons, booking_date, booking_time)

    VALUES

    ('$name','$phone','$persons','$date','$time')";

    if(mysqli_query($conn, $sql)){

        echo "
        
        <script>

        alert('Booking Saved Successfully');

        window.location.href='booking-success.php?name=$name';

        </script>

        ";

    }
    else{

        echo mysqli_error($conn);

    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Table</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#0b0b0d;
    color:#fff;
}

a{
    text-decoration:none;
}

/* NAVBAR */

.navbar{
    width:100%;
    padding:25px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    position:fixed;
    top:0;
    z-index:1000;
    background:rgba(0,0,0,0.4);
    backdrop-filter:blur(12px);
}

.logo{
    font-size:32px;
    font-weight:700;
    color:#fff;
}

.logo span{
    color:#ffb199;
}

.nav-links{
    display:flex;
    gap:35px;
}

.nav-links a{
    color:#ddd;
    font-weight:500;
}

.home-btn{
    padding:14px 30px;
    border-radius:14px;
    background:linear-gradient(45deg,#ff8a7a,#ffb199);
    color:#fff;
    font-weight:600;
}

/* HERO */

.hero{
    padding:170px 8% 100px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:70px;
    align-items:center;
}

.hero-text h1{
    font-size:75px;
    line-height:1.05;
    margin-bottom:25px;
    font-weight:800;
}

.hero-text h1 span{
    color:#ffb199;
}

.hero-text p{
    color:#aaa;
    line-height:1.9;
    margin-bottom:35px;
    font-size:17px;
}

/* FEATURES */

.features{
    display:flex;
    gap:20px;
    flex-wrap:wrap;
}

.feature-box{
    background:#141418;
    padding:20px 25px;
    border-radius:20px;
    border:1px solid rgba(255,255,255,0.05);
}

.feature-box h3{
    color:#ffb199;
    margin-bottom:10px;
}

/* FORM */

.booking-box{
    background:#141418;
    padding:45px;
    border-radius:35px;
    border:1px solid rgba(255,255,255,0.05);
}

.booking-box h2{
    font-size:45px;
    margin-bottom:15px;
}

.booking-box p{
    color:#aaa;
    margin-bottom:30px;
}

.input-box{
    margin-bottom:20px;
}

.input-box input{
    width:100%;
    padding:18px;
    border:none;
    outline:none;
    background:#1d1d22;
    border-radius:15px;
    color:#fff;
    font-size:16px;
}

.row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

/* PAYMENT */

.payment-card{
    background:#1d1d22;
    padding:25px;
    border-radius:20px;
    margin-bottom:25px;
    border:1px solid rgba(255,255,255,0.05);
    text-align:center;
}

.payment-icon{
    font-size:45px;
    margin-bottom:15px;
}

.payment-card h3{
    color:#ffb199;
    margin-bottom:10px;
}

/* BUTTON */

.submit-btn{
    width:100%;
    padding:18px;
    border:none;
    border-radius:15px;
    background:linear-gradient(45deg,#ff8a7a,#ffb199);
    color:#fff;
    font-size:18px;
    font-weight:600;
    cursor:pointer;
}

/* FOOTER */

footer{
    padding:30px;
    text-align:center;
    color:#777;
    border-top:1px solid rgba(255,255,255,0.05);
}

@media(max-width:992px){

    .hero{
        grid-template-columns:1fr;
    }

    .hero-text h1{
        font-size:55px;
    }

}

@media(max-width:768px){

    .navbar{
        flex-direction:column;
        gap:20px;
    }

    .nav-links{
        flex-wrap:wrap;
        justify-content:center;
    }

    .row{
        grid-template-columns:1fr;
    }

    .hero-text h1{
        font-size:42px;
    }

    .booking-box{
        padding:30px;
    }

}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar">

    <div class="logo">
        Culinary<span>Restaurant</span>
    </div>

    <div class="nav-links">

        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="gallery.php">Gallery</a>
        <a href="contact.php">Contact</a>

    </div>

    <a href="index.php" class="home-btn">
        Back Home
    </a>

</nav>

<!-- HERO -->

<section class="hero">

    <div class="hero-text">

        <h1>
            Reserve Your
            <span>Luxury Table</span>
        </h1>

        <p>
            Experience premium fine dining with elegant ambience,
            gourmet dishes, and unforgettable moments.
        </p>

        <div class="features">

            <div class="feature-box">

                <h3>🍽 Premium Food</h3>

                <p>Luxury gourmet dishes</p>

            </div>

            <div class="feature-box">

                <h3>✨ Elegant Ambience</h3>

                <p>Modern fine dining</p>

            </div>

            <div class="feature-box">

                <h3>👨‍🍳 Expert Chefs</h3>

                <p>World-class cuisine</p>

            </div>

        </div>

    </div>

    <!-- BOOKING FORM -->

    <div class="booking-box">

        <h2>Book Your Table</h2>

        <p>
            Fill the details below to reserve your premium dining experience.
        </p>

        <form method="POST">

            <div class="input-box">

                <input type="text" name="name" placeholder="Your Name" required>

            </div>

            <div class="input-box">

                <input type="text" name="phone" placeholder="Phone Number" required>

            </div>

            <div class="row">

                <div class="input-box">

                    <input type="number" name="persons" placeholder="No. of Persons" required>

                </div>

                <div class="input-box">

                    <input type="date" name="date" required>

                </div>

            </div>

            <div class="input-box">

                <input type="time" name="time" required>

            </div>

            <!-- PAYMENT -->

            <div class="payment-card">

                <div class="payment-icon">💵</div>

                <h3>Cash Payment</h3>

                <p>
                    Pay directly at the restaurant after dining.
                </p>

            </div>

            <button type="submit" class="submit-btn">

                Reserve Table

            </button>

        </form>

    </div>

</section>

<footer>

    © 2026 Culinary Restaurant. All Rights Reserved.

</footer>

</body>

</html>
```
