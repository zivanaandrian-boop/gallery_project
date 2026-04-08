<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Project Five</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            min-height:100vh;
            background: linear-gradient(135deg,#ff9a9e,#fad0c4,#a1c4fd,#c2ffd8);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
        }

        @keyframes gradientMove{
            0%{background-position:0% 50%;}
            50%{background-position:100% 50%;}
            100%{background-position:0% 50%;}
        }

        .navbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:25px 80px;
        }

        .logo{
            font-weight:800;
            font-size:26px;
            color:white;
        }

        .login-btn{
            padding:8px 22px;
            border-radius:30px;
            background:white;
            color:#ff6f91;
            text-decoration:none;
            font-size:14px;
            font-weight:600;
            transition:0.3s;
            box-shadow:0 8px 20px rgba(0,0,0,0.15);
        }

        .login-btn:hover{
            transform:scale(1.1);
            background:#ff6f91;
            color:white;
        }

        .hero{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:80px;
            min-height:80vh;
        }

        .hero-text{
            max-width:550px;
            color:black;
        }

        .hero-text h1{
            font-size:50px;
            font-weight:800;
            line-height:1.2;
        }

        .hero-text p{
            margin-top:20px;
            font-size:17px;
            opacity:0.9;
        }

        .hero-text button{
            margin-top:35px;
            padding:15px 35px;
            border:none;
            border-radius:40px;
            background:black;
            color:#ff6f91;
            font-weight:600;
            font-size:15px;
            cursor:pointer;
            transition:0.3s;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        .hero-text button:hover{
            transform:scale(1.1);
            background:#ff6f91;
            color:white;
        }

        .hero-image img{
            width:480px;
            border-radius:25px;
            box-shadow:0 20px 50px rgba(0,0,0,0.25);
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float{
            0%{transform:translateY(0px);}
            50%{transform:translateY(-15px);}
            100%{transform:translateY(0px);}
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:900px){
            .hero{
                flex-direction:column;
                text-align:center;
                padding:50px 30px;
            }

            .hero-image img{
                width:90%;
                margin-top:40px;
            }
        }

        @media(max-width:768px){

            .navbar{
                padding:15px 20px;
            }

            .logo{
                font-size:20px;
            }

            .login-btn{
                padding:6px 16px;
                font-size:12px;
            }

            .hero{
                padding:40px 20px;
            }

            .hero-text h1{
                font-size:32px;
            }

            .hero-text p{
                font-size:15px;
            }

            .hero-text button{
                padding:12px 25px;
                font-size:14px;
            }

            .hero-image img{
                width:100%;
                margin-top:30px;
            }
        }

        @media(max-width:480px){

            .hero-text h1{
                font-size:26px;
            }

            .hero-text p{
                font-size:14px;
            }

        }

    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">Project Five</div>
    <a href="auth/login.php" class="login-btn">Login</a>
</div>

<div class="hero">
    <div class="hero-text">
        <h1>Share Your Moments With Family & BestFriend ✨</h1>
        <p>Upload your favorite photos & videos and create your own aesthetic digital gallery.</p>
        <a href="auth/login.php">
            <button>Get Started</button>
        </a>
    </div>

    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee">
    </div>
</div>

</body>
</html>