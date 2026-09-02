```php id="x8m2qp"
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Culinary Restaurant</title>

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
    overflow-x:hidden;
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
    transition:0.3s;
}

.nav-links a:hover{
    color:#ffb199;
}

.book-btn{
    padding:14px 30px;
    border-radius:14px;
    background:linear-gradient(45deg,#ff8a7a,#ffb199);
    color:#fff;
    font-weight:600;
}

/* HERO */

.hero{
    padding:180px 8% 100px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:70px;
    align-items:center;
}

.hero-text h1{
    font-size:85px;
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
    max-width:550px;
    font-size:17px;
}

.hero-buttons{
    display:flex;
    gap:20px;
}

.btn1{
    padding:16px 35px;
    border-radius:14px;
    background:linear-gradient(45deg,#ff8a7a,#ffb199);
    color:#fff;
    font-weight:600;
}

.btn2{
    padding:16px 35px;
    border-radius:14px;
    border:1px solid #444;
    color:#fff;
}

.hero-image img{
    width:100%;
    height:650px;
    object-fit:cover;
    border-radius:35px;
}

/* DISHES */

.section-title{
    padding:0 8%;
    margin-bottom:50px;
}

.section-title h2{
    font-size:55px;
}

.section-title p{
    color:#888;
    margin-top:10px;
}

.dishes{
    padding:0 8% 100px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}

.card{
    background:#141418;
    border-radius:30px;
    overflow:hidden;
    border:1px solid rgba(255,255,255,0.05);
    transition:0.4s;
}

.card:hover{
    transform:translateY(-10px);
}

.card img{
    width:100%;
    height:260px;
    object-fit:cover;
}

.card-content{
    padding:25px;
}

.card-content h3{
    margin-bottom:10px;
    font-size:24px;
}

.price{
    color:#ffb199;
    font-size:22px;
    font-weight:700;
}

/* QUOTE */

.quote{
    margin:0 8% 100px;
    background:#141418;
    border-radius:35px;
    padding:80px;
    text-align:center;
}

.quote h2{
    font-size:50px;
    line-height:1.5;
}

.quote span{
    color:#ffb199;
}

/* TESTIMONIALS */

.testimonials{
    padding:0 8% 100px;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.test-card{
    background:#141418;
    padding:30px;
    border-radius:25px;
}

.test-card p{
    color:#aaa;
    line-height:1.8;
    margin-bottom:20px;
}

.test-card h4{
    color:#ffb199;
}

/* BOOKING */

.booking{
    margin:0 8% 100px;
    padding:70px;
    border-radius:35px;
    background:linear-gradient(45deg,#1b1b22,#111);
    text-align:center;
}

.booking h2{
    font-size:60px;
    margin-bottom:20px;
}

.booking p{
    color:#aaa;
    margin-bottom:35px;
}

.booking a{
    display:inline-block;
    padding:18px 40px;
    border-radius:14px;
    background:linear-gradient(45deg,#ff8a7a,#ffb199);
    color:#fff;
    font-weight:600;
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
        font-size:60px;
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

    .hero-text h1{
        font-size:45px;
    }

    .quote{
        padding:40px 25px;
    }

    .quote h2{
        font-size:30px;
    }

    .booking{
        padding:40px 25px;
    }

    .booking h2{
        font-size:40px;
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

    <a href="booking.php" class="book-btn">
        Book Table
    </a>

</nav>

<!-- HERO -->

<section class="hero">

    <div class="hero-text">

        <h1>
            Flavors That
            Stay In
            <span>Your Memory</span>
        </h1>

        <p>
            Experience luxury dining with gourmet dishes,
            premium ambience, and unforgettable culinary moments.
        </p>

        <div class="hero-buttons">

            <a href="menu.php" class="btn1">
                View Menu
            </a>

            <a href="booking.php" class="btn2">
                Book Table
            </a>

        </div>

    </div>

    <div class="hero-image">

        <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=1470&auto=format&fit=crop">

    </div>

</section>

<!-- DISHES -->

<div class="section-title">

    <h2>Chef Special Dishes</h2>

    <p>Premium Indian dishes crafted by expert chefs.</p>

</div>

<section class="dishes">

    <div class="card">

        <img src="https://images.unsplash.com/photo-1701579231349-d7459c40919d?q=80&w=687&auto=format&fit=crop">

        <div class="card-content">

            <h3>Chicken Biryani</h3>

            <div class="price">₹499</div>

        </div>

    </div>

    <div class="card">

        <img src="https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?q=80&w=1470&auto=format&fit=crop">

        <div class="card-content">

            <h3>Butter Chicken</h3>

            <div class="price">₹699</div>

        </div>

    </div>

    <div class="card">

        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1470&auto=format&fit=crop">

        <div class="card-content">

            <h3>Tandoori Platter</h3>

            <div class="price">₹899</div>

        </div>

    </div>

</section>

<!-- QUOTE -->

<section class="quote">

    <h2>
        “Cooking is not just chemistry;
        it’s a silent dialogue between
        <span>the season and the plate.</span>”
    </h2>

</section>

<!-- TESTIMONIALS -->

<section class="testimonials">

    <div class="test-card">

        <p>
            Absolutely loved the ambience and gourmet dishes.
            One of the finest dining experiences in India.
        </p>

        <h4>— Rajinikanth</h4>

    </div>

    <div class="test-card">

        <p>
            Every dish was beautifully crafted and tasted incredible.
            A truly luxurious restaurant experience.
        </p>

        <h4>— Shah Rukh Khan</h4>

    </div>

    <div class="test-card">

        <p>
            Elegant interiors, premium service,
            and unforgettable flavors.
        </p>

        <h4>— Deepika Padukone</h4>

    </div>

</section>

<!-- BOOKING -->

<section class="booking">

    <h2>Secure Your Table</h2>

    <p>
        Reserve your premium dining experience now.
    </p>

    <a href="booking.php">
        Book Reservation
    </a>

</section>

<!-- FOOTER -->

<footer>

    © 2026 Culinary Restaurant. All Rights Reserved.

</footer>

</body>

</html>
```
