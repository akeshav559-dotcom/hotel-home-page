<?php

$name = "";

if(isset($_GET['name'])){

    $name = $_GET['name'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Booking Confirmed</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#050505;
    color:white;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:30px;
    overflow-x:hidden;
}

/* BACKGROUND */

.bg1{
    position:absolute;
    width:280px;
    height:280px;
    background:#ff8a7a;
    filter:blur(150px);
    opacity:0.12;
    top:-100px;
    left:-100px;
}

.bg2{
    position:absolute;
    width:280px;
    height:280px;
    background:#ffb199;
    filter:blur(150px);
    opacity:0.10;
    bottom:-100px;
    right:-100px;
}

/* CARD */

.success-card{
    position:relative;
    z-index:10;
    width:100%;
    max-width:720px;
    background:#111116;
    border-radius:30px;
    padding:45px;
    border:1px solid rgba(255,255,255,0.05);
    text-align:center;
}

/* BADGE */

.badge{
    display:inline-block;
    padding:10px 24px;
    border-radius:30px;
    background:rgba(255,177,153,0.12);
    color:#ffb199;
    font-size:13px;
    margin-bottom:25px;
    letter-spacing:1px;
}

/* TITLE */

.success-card h1{
    font-size:52px;
    line-height:1.2;
    margin-bottom:20px;
    font-weight:800;
}

.success-card h1 span{
    color:#ffb199;
}

/* TEXT */

.desc{
    color:#a1a1a1;
    line-height:1.8;
    font-size:17px;
    margin-bottom:35px;
}

/* DETAILS */

.details{
    background:#18181d;
    border-radius:24px;
    padding:30px;
    margin-bottom:35px;
    text-align:left;
}

.details h2{
    color:#ffb199;
    margin-bottom:25px;
    font-size:28px;
}

.row{
    display:flex;
    justify-content:space-between;
    padding:16px 0;
    border-bottom:1px solid rgba(255,255,255,0.05);
}

.row:last-child{
    border:none;
}

.label{
    color:#8d8d8d;
}

.value{
    font-weight:600;
}

/* BUTTONS */

.buttons{
    display:flex;
    justify-content:center;
    gap:18px;
    flex-wrap:wrap;
}

.btn{
    padding:15px 32px;
    border-radius:14px;
    text-decoration:none;
    font-weight:600;
    transition:0.3s;
}

.home-btn{
    background:linear-gradient(45deg,#ff8a7a,#ffb199);
    color:white;
}

.menu-btn{
    background:#1d1d22;
    color:white;
    border:1px solid rgba(255,255,255,0.08);
}

.btn:hover{
    transform:translateY(-3px);
}

/* MOBILE */

@media(max-width:768px){

    .success-card{
        padding:30px 22px;
    }

    .success-card h1{
        font-size:38px;
    }

    .row{
        flex-direction:column;
        gap:8px;
    }

}

</style>

</head>

<body>

<div class="bg1"></div>
<div class="bg2"></div>

<div class="success-card">

    <div class="badge">
        Reservation Confirmed
    </div>

    <h1>

        Welcome
        <span><?php echo $name; ?></span>

    </h1>

    <p class="desc">

        Your luxury dining reservation has been successfully confirmed.
        We look forward to serving you.

    </p>

    <div class="details">

        <h2>Reservation Details</h2>

        <div class="row">

            <div class="label">
                Customer Name
            </div>

            <div class="value">
                <?php echo $name; ?>
            </div>

        </div>

        <div class="row">

            <div class="label">
                Reservation Status
            </div>

            <div class="value">
                Confirmed
            </div>

        </div>

        <div class="row">

            <div class="label">
                Restaurant
            </div>

            <div class="value">
                Culinary Restaurant
            </div>

        </div>

        <div class="row">

            <div class="label">
                Location
            </div>

            <div class="value">
                Chennai, India
            </div>

        </div>

    </div>

    <div class="buttons">

        <a href="index.php" class="btn home-btn">
            Back Home
        </a>

        <a href="menu.php" class="btn menu-btn">
            Explore Menu
        </a>

    </div>

</div>

</body>

</html>