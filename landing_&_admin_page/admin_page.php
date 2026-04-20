<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            background-color:black;
        }
        .header {
            background-color: yellow;
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
            width: 70px;
            height: 70px;
        }
        .title {
            display: flex;
            justify-content:center;
            width: 30vw;
            margin-left: 10px;
        }
        .nav {
            width: 30vw;
            padding-top: 20px;
            display: flex;
            justify-content:flex-end;
        }
        a {
            text-decoration: none;
            color: black;
            margin: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        a:hover {
            color: white;
        }
        h2 {
            color: yellow;
            font-family:Arial, Helvetica, sans-serif;
            margin: 2vw;
            margin-top: 3vw;
            font-size: 40px;
        }
        #galery {
            display: flex;
            flex-wrap: wrap;    
            justify-content: flex-start;
            margin-left: 2vw;
        }
        .galery-item{
            margin-left: 2vw;
            border: 2px solid yellow;
            width: 300px;
            height: 300px;
        }
        .galery-item:hover {
           border: 2px solid white;
        }
        .galery-item img {
            width: 100%;
            height: 80%;
        }
        .desc {
            padding: 20px;
            text-align: center;
            color: whitesmoke;
            font-family:Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: bold;
        }
        .members{
            margin-top: 2vw;
            display: flex;
            flex-direction: column;
        }
        .members h3 {
            color: yellow;
            font-family:Arial, Helvetica, sans-serif;
            margin-left: 2vw;
            margin-top: 1vw;
            font-size: 40px;
        }
        .members p {
            color: whitesmoke;
            font-family:Arial, Helvetica, sans-serif;
            margin: 2vw;
            margin-top: 0;
            font-size: 20px;
            word-spacing: 5px;
        }
        #songs{
            display: flex;
            flex-wrap: wrap;    
            justify-content: flex-start;
            margin-left: 2vw;
        }
        .list_1 p {
            color: whitesmoke;
            font-family:Arial, Helvetica, sans-serif;
            margin: 2vw;
            margin-top: 0;
            font-size: 20px;
        }
        .list_1 p:hover {
            color: yellow;
        }
        .list_2 p {
            color: whitesmoke;
            font-family:Arial, Helvetica, sans-serif;
            margin: 2vw;
            margin-top: 0;
            font-size: 20px;
        }
        .list_2 p:hover {
            color: yellow;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="icon">
            <img src="icon_1.png" alt="">
        </div>
        <div class="title">
            <h1>Kessoku Band!</h1>
        </div>
        <div class="nav">
            <a href="index.php">Home</a>
            <a href="#galery">Members</a> 
            <a href="#songs">Songs</a> 
        </div>
    </div>
    <h2>Members:</h2>
    <div id="galery">
        <div class="galery-item">
            <img src="object_1.jpg" alt="Ikuyo Kita" width="300px" height="200px">
            <div class="desc">Ikuyo Kita Gt.</div>
        </div>
        <div class="galery-item">
            <img src="object_2.jpg" alt="Gotou Hitori" width="300px" height="200px">
            <div class="desc">Gotou Hitori Gt.</div>
        </div>
        <div class="galery-item">
            <img src="object_3.jpg" alt="Hamada Ryo" width="300px" height="200px">
            <div class="desc">Yamada Ryo Bs.</div>
        </div>
        <div class="galery-item">
            <img src="object_4.jpg" alt="Nijika Ijichi" width="300px" height="200px">
            <div class="desc">Nijika Ijichi Dr.</div>
        </div>
        <div class="members">
            <h3>Description</h3>
            <p>- Ikuyo Kita: A bright and popular first year of high school. She is in charge of the guitar and vocals of Kessoku Band. She is a cheerful character who likes to interact with people and can talk to her with a smile without hesitation, even when she meets her for the first time. She looks up to Ryo, and her feelings can go too far. She often takes photos and uploads to Isosta</p>
            <p>- Gotou Hitori: An extremely introverted girl with high social anxiety, making it very difficult for her to talk to strangers. She often tries to avoid interactions, even performing her first live house show from inside a cardboard mango box.</p>
            <p>- Yamada Ryo: A cool and solitary second-year high school student. She is the bassist of Kessoku Band and Nijika's best friend. Her hobbies are out of the ordinary, and she rejoices when called a weirdo. She lives with a wealthy family but never has any money because she spends it all on instruments.</p>
            <p>- Nijika Ijichi: An energetic and cheerful second-year high school student. She is the drummer of Kessoku Band. The organizer of her band who takes care of Hitori was already joined Kessoku Band. She has an older sister, Seika, who is the manager of the live house "STARRY" and has a special feeling for the live house</p>
        </div>
    </div>
    <h2>Songs:</h2>
    <div id="songs">
       <div class="list_1">
            <p>1. That Band</p>
            <p>2. Guitar, Loneliness and blue planet</p>
            <p>3. Wasurette Yaranai</p>
            <p>4. If i could be constellation</p>
            <p>5. Seishun Complex</p>
            <p>6. Hitoribocchi Tokyo</p>
            <p>7. Distortion!!</p>
            <p>8. Karakara</p>
       </div>
       <div class="list_2">
            <p>9. Nani Ga Warui</p>
            <p>10. korogaru iwa, kimi ni asa ga furu</p>
            <p>11. Himitsu kichi</p>
            <p>12. Love song ga utaenai</p>
            <p>13. Chiisana umi</p>
            <p>14. Flashbacker</p>
            <p>15. Hikaru no naka e</p>
            <p>16. Aoi haru to nishi sora</p>
       </div>
    </div>
</body>
</html>