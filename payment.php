```php id="t9w4bx"
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Secure UPI Payment</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:
            linear-gradient(rgba(53,94,59,0.85),rgba(53,94,59,0.85)),
            url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=1470&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
            padding:20px;
        }

        .payment-container{
            width:100%;
            max-width:480px;
        }

        .payment-card{
            background:rgba(255,255,255,0.15);
            backdrop-filter:blur(15px);
            border:1px solid rgba(255,255,255,0.2);
            border-radius:30px;
            padding:45px;
            text-align:center;
            box-shadow:0 15px 35px rgba(0,0,0,0.25);
            animation:fadeIn 1s ease;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(20px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .logo{
            font-size:42px;
            font-weight:700;
            color:#fff;
            margin-bottom:10px;
        }

        .logo span{
            color:#ffd54f;
        }

        .payment-card h1{
            color:#fff;
            font-size:38px;
            margin-bottom:15px;
        }

        .payment-card p{
            color:#f1f1f1;
            line-height:1.8;
            margin-bottom:30px;
            font-size:16px;
        }

        .qr-wrapper{
            background:#fff;
            padding:20px;
            border-radius:25px;
            display:inline-block;
            margin-bottom:25px;
            box-shadow:0 10px 20px rgba(0,0,0,0.1);
        }

        .qr-wrapper img{
            width:260px;
            height:260px;
            object-fit:cover;
        }

        .upi-box{
            background:rgba(255,255,255,0.2);
            color:#fff;
            padding:16px;
            border-radius:15px;
            margin-bottom:25px;
            font-size:18px;
            font-weight:600;
            border:1px solid rgba(255,255,255,0.2);
        }

        .amount-box{
            background:#ffd54f;
            color:#222;
            padding:14px;
            border-radius:15px;
            margin-bottom:25px;
            font-size:22px;
            font-weight:700;
        }

        .pay-btn{
            display:inline-block;
            width:100%;
            background:#fff;
            color:#355e3b;
            padding:16px;
            border-radius:15px;
            font-size:18px;
            font-weight:600;
            transition:0.3s;
        }

        .pay-btn:hover{
            background:#222;
            color:#fff;
            transform:translateY(-3px);
        }

        .secure-text{
            margin-top:20px;
            color:#eee;
            font-size:14px;
        }

        @media(max-width:600px){

            .payment-card{
                padding:30px 20px;
            }

            .payment-card h1{
                font-size:30px;
            }

            .qr-wrapper img{
                width:220px;
                height:220px;
            }

        }

    </style>

</head>

<body>

    <div class="payment-container">

        <div class="payment-card">

            <div class="logo">
                Savor<span>ia</span>
            </div>

            <h1>Secure UPI Payment</h1>

            <p>
                Scan the QR code below using any UPI app
                like Google Pay, PhonePe, Paytm or BHIM
                and complete your payment securely.
            </p>

            <div class="qr-wrapper">

                <img src="https://api.qrserver.com/v1/create-qr-code/?size=260x260&data=upi://pay?pa=savoria@upi&pn=SavoriaRestaurant&am=499">

            </div>

            <div class="upi-box">
                UPI ID : savoria@upi
            </div>

            <div class="amount-box">
                Amount : ₹499
            </div>

            <a href="booking.php" class="pay-btn">
                Payment Completed
            </a>

            <div class="secure-text">
                🔒 100% Secure Payment Gateway
            </div>

        </div>

    </div>

</body>

</html>
```
