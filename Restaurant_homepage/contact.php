```php id="q5n2vc"
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact Us</title>

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

/* NAVBAR */

.navbar{
    width:100%;
    padding:25px 8%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:rgba(0,0,0,0.4);
    backdrop-filter:blur(12px);
}

.logo{
    font-size:32px;
    font-weight:700;
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
    text-decoration:none;
}

/* CONTACT */

.contact-section{
    padding:100px 8%;
    display:flex;
    justify-content:center;
    align-items:center;
}

.contact-box{
    width:100%;
    max-width:700px;
    background:#141418;
    padding:50px;
    border-radius:35px;
    border:1px solid rgba(255,255,255,0.05);
}

.contact-box h1{
    font-size:60px;
    margin-bottom:20px;
}

.contact-box h1 span{
    color:#ffb199;
}

.contact-box p{
    color:#aaa;
    margin-bottom:35px;
    line-height:1.8;
}

.input-box{
    margin-bottom:20px;
}

.input-box input,
.input-box textarea{
    width:100%;
    padding:18px;
    border:none;
    outline:none;
    border-radius:15px;
    background:#1d1d22;
    color:#fff;
    font-size:16px;
}

textarea{
    height:150px;
    resize:none;
}

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

.info{
    margin-top:40px;
    line-height:2;
    color:#ccc;
}

/* FOOTER */

footer{
    padding:30px;
    text-align:center;
    color:#777;
    border-top:1px solid rgba(255,255,255,0.05);
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
        <a href="booking.php">Booking</a>

    </div>

</nav>

<!-- CONTACT -->

<section class="contact-section">

    <div class="contact-box">

        <h1>
            Contact <span>Us</span>
        </h1>

        <p>
            We'd love to hear from you. Get in touch
            for reservations, events, or special dining experiences.
        </p>

        <form>

            <div class="input-box">

                <input type="text" placeholder="Your Name">

            </div>

            <div class="input-box">

                <input type="email" placeholder="Your Email">

            </div>

            <div class="input-box">

                <textarea placeholder="Your Message"></textarea>

            </div>

            <button class="submit-btn">
                Send Message
            </button>

        </form>

        <div class="info">

            📍 Chennai, India <br>

            📞 +91 9876543210 <br>

            ✉ info@culinaryrestaurant.com

        </div>

    </div>

</section>

<footer>

    © 2026 Culinary Restaurant. All Rights Reserved.

</footer>

</body>

</html>
```
