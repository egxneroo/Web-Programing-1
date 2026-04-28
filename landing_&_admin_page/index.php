<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            background-color:black;
            display: flex;
            justify-content: center;
        }
        #box {
            background-color: whitesmoke;
            border-radius: 50px;
            width: 1444px;
            height: 620px;
            padding: 50px;
            margin: 20px;
        }
        .header {
            display: flex; 
            flex-direction: row; 
            font-family:Arial, Helvetica, sans-serif;
        }
        .icon{
            width: 30vw;
            margin-left: 10px;
            display: flex;
            justify-content:flex-start;
        }
        .icon img {
            width: 120px;
            height: 120px;
        }
        .nav {
            width: 30vw;
            display: flex;
            margin-left: 20vw;
            justify-content:flex-end;
        }
        .nav a {
            text-decoration: none;
            color: black;
            margin: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .nav a:hover {
            color: yellow;
        }
        .content{
            display: flex;
        }
        .title {
            display: flex;
            margin-right: 200px;
            flex-direction: column;
        }
        .title h1 {
            font-family:Arial, Helvetica, sans-serif;
            margin-left: 2vw;
            margin-top: 1vw;
            font-size: 40px;
        }
        .title p {
            font-family:Arial, Helvetica, sans-serif;
            margin: 2vw;
            margin-top: 0;
            font-size: 20px;
            word-spacing: 5px;
        }
        .image {
            display: flex;
            margin-right: 2vw;
            margin-top: 41px;
        }
        .image img {
            width: 500px;
            height: 500px;
            border-radius: 50px 50px 0 0;
            border: 10px solid yellow;
            border-bottom: none;
        }
        .button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .button a {
            text-align: center;
            padding-top: 30px;
            width: 400px;
            height: 50px;
            background-color: yellow;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            color: black;
            font-size: 40px;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }
        .button a:hover {
            background-color: black;
            color: yellow;
        }

    </style>
</head>
<body>
    <div id="box">
        <div class="header">
            <div class="icon">
                <img src="icon_1.png" alt="">
            </div>
            <div class="nav">
                <a href="index.php">Home</a>
            </div>
        </div>
        <div class="content">
            <div class="title">
                <h1>Kessoku Band!</h1>
                <p>Kessoku Band (結束バンド Kessoku Bando) is the main unit band of Bocchi the Rock! series. The name "Kessoku Band" is a pun on "Kessoku" (unity) and "Kessoku Band" (cable tie). The band has been drawn as the center of this work. The unit band is based in Shimokitazawa's live house STARRY, where Nijika's older sister, Seika, is a store manager.</p>
                 <div class="button">
                    <a href="admin_page.php">Learn More</a>
                </div>
            </div>
            <div class="image">
                <img src="band_pict_1.jpg" alt="">
            </div>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>