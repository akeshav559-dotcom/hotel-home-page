```php id="g8m2xp"
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Restaurant Gallery</title>

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
    text-align:center;
}

.hero h1{
    font-size:75px;
    margin-bottom:20px;
    font-weight:800;
}

.hero h1 span{
    color:#ffb199;
}

.hero p{
    color:#aaa;
    max-width:700px;
    margin:auto;
    line-height:1.9;
    font-size:18px;
}

/* GALLERY */

.gallery-section{
    padding:0 8% 100px;
}

.gallery-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:30px;
}

.gallery-card{
    overflow:hidden;
    border-radius:30px;
    position:relative;
    background:#141418;
    border:1px solid rgba(255,255,255,0.05);
}

.gallery-card img{
    width:100%;
    height:350px;
    object-fit:cover;
    transition:0.5s;
}

.gallery-card:hover img{
    transform:scale(1.08);
}

.gallery-overlay{
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    padding:25px;
    background:linear-gradient(to top,rgba(0,0,0,0.8),transparent);
}

.gallery-overlay h3{
    font-size:28px;
    margin-bottom:10px;
}

.gallery-overlay p{
    color:#ddd;
    font-size:15px;
}

/* FOOTER */

footer{
    padding:30px;
    text-align:center;
    color:#777;
    border-top:1px solid rgba(255,255,255,0.05);
}

/* MOBILE */

@media(max-width:768px){

    .navbar{
        flex-direction:column;
        gap:20px;
    }

    .nav-links{
        flex-wrap:wrap;
        justify-content:center;
    }

    .hero h1{
        font-size:45px;
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
        <a href="booking.php">Booking</a>

    </div>

    <a href="booking.php" class="book-btn">
        Book Table
    </a>

</nav>

<!-- HERO -->

<section class="hero">

    <h1>
        Our Luxury <span>Gallery</span>
    </h1>

    <p>
        Explore premium dining ambience, gourmet dishes,
        and unforgettable culinary experiences.
    </p>

</section>

<!-- GALLERY -->

<section class="gallery-section">

    <div class="gallery-grid">

        <!-- IMAGE -->

        <div class="gallery-card">

            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?q=80&w=1470&auto=format&fit=crop">

            <div class="gallery-overlay">

                <h3>Luxury Dining</h3>

                <p>
                    Elegant interiors with premium ambience.
                </p>

            </div>

        </div>

        <!-- IMAGE -->

        <div class="gallery-card">

            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=1470&auto=format&fit=crop">

            <div class="gallery-overlay">

                <h3>Chef Specials</h3>

                <p>
                    Gourmet dishes prepared by expert chefs.
                </p>

            </div>

        </div>

        <!-- IMAGE -->

        <div class="gallery-card">

            <img src="https://images.unsplash.com/photo-1552566626-52f8b828add9?q=80&w=1470&auto=format&fit=crop">

            <div class="gallery-overlay">

                <h3>Premium Ambience</h3>

                <p>
                    Modern interiors designed for comfort.
                </p>

            </div>

        </div>

        <!-- IMAGE -->

        <div class="gallery-card">

            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1470&auto=format&fit=crop">

            <div class="gallery-overlay">

                <h3>Fine Dining</h3>

                <p>
                    Experience unforgettable luxury dining.
                </p>

            </div>

        </div>

        <!-- IMAGE -->

        <div class="gallery-card">

            <img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?q=80&w=1470&auto=format&fit=crop">

            <div class="gallery-overlay">

                <h3>Restaurant Moments</h3>

                <p>
                    Celebrate your special occasions with us.
                </p>

            </div>

        </div>

        <!-- IMAGE -->

        <div class="gallery-card">

            <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1470&auto=format&fit=crop">

            <div class="gallery-overlay">

                <h3>Luxury Desserts</h3>

                <p>
                    Delicious desserts crafted beautifully.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer>

    © 2026 Culinary Restaurant. All Rights Reserved.

</footer>

</body>

</html>
```
