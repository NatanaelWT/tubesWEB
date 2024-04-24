<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
        }

        body {
            min-width: 425px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: linear-gradient(#d66f1b 0%, #ec2eef 100%);
        }

        .main-container {
            background: #fff;
            border-radius: 15px;
            margin: 1rem;
            padding: 20px;
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.4);
        }

        h2 {
            text-align: center;
        }

        hr {
            width: 10rem;
            margin: 10px auto;
        }

        .members {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .team-member {
            margin: 8px;
            transition: all .3s ease;
            cursor: pointer;
        }

        .team-member:hover {
            transform: scale(1.1);
        }

        .team-member img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 10px;
        }

        h4,
        p {
            text-align: center;
            font-size: 12px;
            margin: 7px;
        }

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .mySlides img {
            height: 300px;
        }

        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="img/natan.jpg" style="width:100%">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="img/tsalits.png" style="width:100%">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="img/3.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>
        </div>
        <br>
        <h2>Our Team</h2>
        <hr>
        <div class="members">
            <a href="yulan.php">
                <div class="team-member">
                    <img class="profileImg" src="img/natan.jpg">
                    <h4>Yulan</h4>
                    <p>1203220022</p>
                </div>
            </a>
            <a href="yuandytha.php">
                <div class="team-member">
                    <img class="profileImg" src="img/natan.jpg">
                    <h4>Yuandytha</h4>
                    <p>1203220120</p>
                </div>
            </a>
            <a href="tsalis.php">
                <div class="team-member">
                    <img class="profileImg" src="img/tsalits.png">
                    <h4>Tsalits</h4>
                    <p>1203220135</p>
                </div>
            </a>
            <a href="natanael.php">
                <div class="team-member">
                    <img class="profileImg" src="img/natan.jpg">
                    <h4>Natanael</h4>
                    <p>1203220140</p>
                </div>
            </a>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>