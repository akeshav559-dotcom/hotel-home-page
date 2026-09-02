```php id="q8m2xp"
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Restaurant Menu</title>

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

/* CATEGORY */

.category-title{
    font-size:42px;
    margin:60px 0 30px;
    color:#ffb199;
}

/* MENU */

.menu-section{
    padding:0 8% 100px;
}

.menu-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:35px;
}

.menu-card{
    background:#141418;
    border-radius:30px;
    overflow:hidden;
    transition:0.4s;
    border:1px solid rgba(255,255,255,0.05);
}

.menu-card:hover{
    transform:translateY(-10px);
}

.menu-card img{
    width:100%;
    height:260px;
    object-fit:cover;
}

.menu-content{
    padding:25px;
}

.menu-content h3{
    font-size:26px;
    margin-bottom:12px;
}

.menu-content p{
    color:#999;
    line-height:1.7;
    margin-bottom:18px;
}

/* MENU BOTTOM */

.menu-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-top:20px;
}

.price{
    color:#ffb199;
    font-size:24px;
    font-weight:700;
}

.premium-tag{
    padding:8px 16px;
    border-radius:30px;
    background:rgba(255,177,153,0.12);
    color:#ffb199;
    font-size:13px;
    border:1px solid rgba(255,177,153,0.2);
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
        <a href="booking.php">Booking</a>
        <a href="#">Contact</a>

    </div>

    <a href="booking.php" class="book-btn">
        Book Table
    </a>

</nav>

<!-- HERO -->

<section class="hero">

    <h1>
        Explore Our <span>Multi Cuisine Menu</span>
    </h1>

    <p>
        Indian • Chinese • Italian • Arabian • Mexican • Desserts
    </p>

</section>

<section class="menu-section">

<!-- INDIAN -->

<h2 class="category-title">
    Indian Cuisine
</h2>

<div class="menu-grid">

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1701579231349-d7459c40919d?q=80&w=687&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Chicken Biryani</h3>

        <p>
            Aromatic basmati rice cooked with rich spices and chicken.
        </p>

        <div class="menu-bottom">

            <div class="price">₹499</div>

            <span class="premium-tag">
                Indian
            </span>

        </div>

    </div>

</div>

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?q=80&w=1470&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Butter Chicken</h3>

        <p>
            Creamy curry loaded with rich Indian flavors.
        </p>

        <div class="menu-bottom">

            <div class="price">₹699</div>

            <span class="premium-tag">
                Indian
            </span>

        </div>

    </div>

</div>

</div>

<!-- CHINESE -->

<h2 class="category-title">
    Chinese Cuisine
</h2>

<div class="menu-grid">

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1585032226651-759b368d7246?q=80&w=1470&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Hakka Noodles</h3>

        <p>
            Wok tossed noodles with vegetables and sauces.
        </p>

        <div class="menu-bottom">

            <div class="price">₹349</div>

            <span class="premium-tag">
                Chinese
            </span>

        </div>

    </div>

</div>

</div>

<!-- ITALIAN -->

<h2 class="category-title">
    Italian Cuisine
</h2>

<div class="menu-grid">

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?q=80&w=1374&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Alfredo Pasta</h3>

        <p>
            Creamy Italian pasta topped with herbs and cheese.
        </p>

        <div class="menu-bottom">

            <div class="price">₹549</div>

            <span class="premium-tag">
                Italian
            </span>

        </div>

    </div>

</div>

</div>

<!-- ARABIAN -->

<h2 class="category-title">
    Arabian Cuisine
</h2>

<div class="menu-grid">

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1529006557810-274b9b2fc783?q=80&w=1470&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Arabian Shawarma</h3>

        <p>
            Juicy grilled shawarma served with garlic sauce.
        </p>

        <div class="menu-bottom">

            <div class="price">₹449</div>

            <span class="premium-tag">
                Arabian
            </span>

        </div>

    </div>

</div>

</div>

<!-- MEXICAN -->

<h2 class="category-title">
    Mexican Cuisine
</h2>

<div class="menu-grid">

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1552332386-f8dd00dc2f85?q=80&w=1470&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Mexican Tacos</h3>

        <p>
            Crispy tacos loaded with spicy Mexican fillings.
        </p>

        <div class="menu-bottom">

            <div class="price">₹399</div>

            <span class="premium-tag">
                Mexican
            </span>

        </div>

    </div>

</div>

</div>

<!-- DESSERT -->

<h2 class="category-title">
    Desserts
</h2>

<div class="menu-grid">

<div class="menu-card">

    <img src="https://images.unsplash.com/photo-1563805042-7684c019e1cb?q=80&w=1527&auto=format&fit=crop">

    <div class="menu-content">

        <h3>Chocolate Lava Cake</h3>

        <p>
            Rich chocolate dessert with hot molten center.
        </p>

        <div class="menu-bottom">

            <div class="price">₹299</div>

            <span class="premium-tag">
                Dessert
            </span>

        </div>

    </div>

</div>

</div>

</section>

<footer>

    © 2026 Culinary Restaurant. All Rights Reserved.

</footer>

</body>

</html>
```
