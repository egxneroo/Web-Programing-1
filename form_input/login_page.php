<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            background: black;
            background-image: url('media.jpg');
            background-size:cover;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .box{
            display: flex;
            flex-wrap: wrap;
            background-color: whitesmoke;
            border-radius: 50px;
            width: 50vw;
            height: 620px;
            padding: 50px;
            margin: 20px;
            box-shadow: 4px 7px 11px 0px rgba(0, 0, 0, 0.45);
        }
        .header {
            display: flex; 
            flex-direction: row;
            justify-content: center;
            width: 100%; 
        }
        .header h1 {
            color: black;
        }
        .form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 2vw;
        }
        .form label {
            margin-bottom: 0.5vw;
        }
        .form input {
            border: none;
            border-style: none none solid none;
            background-color: whitesmoke;
            width: 47vw;
        }
        .form-submit {
            display: flex;
            justify-content: center;
            padding-top: 3vw;
        }
        .form-submit input{
            text-align: center;
            background-color: yellow;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 50px;
            color: black;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="header">
            <h1>Login</h1>
        </div>
        <form method="POST" action="get_data_login.php">
            <div class="form">
                <label for="inputusername">USERNAME</label> 
                <input type="text" name="inputusername" id="inputusername"></input>
            </div>
            <div class="form">
                <label for="inputpassword">CREATE PASSWORD</label>
                <input type="password" name="inputpassword" id="inputpassword"></input>
            </div>
            <div class="form-submit">
                <input type="submit" placeholder="submit"/>
            </div>
        </form>
    </div>
</body>
</html>