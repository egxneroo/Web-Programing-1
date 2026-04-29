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
        height: 920px;
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
    .form-dropdown {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin: 2vw;
    }
    .form-dropdown label {
        margin-bottom: 0.5vw;
    }
    .form-dropdown select {
        border-style: none none solid none;
        background-color: whitesmoke;
        width: 10vw;
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
    .form-check {
        display: flex;
        flex-direction: row;
        margin-left: 2vw;
    }
    </style>
</head>
<body>
    <div class="box">
        <div class="header">
            <h1>Register</h1>
        </div>
        <form method="POST" action="get_data_reg.php">
            <div class="form">
                <label for="inputusername">USERNAME</label> 
                <input type="text" name="inputusername" id="inputusername" required></input>
            </div>
            <div class="form">
                <label for="inputemail">EMAIL</label>
                <input type="email" name="inputemail" id="inputemail"></input>
            </div>
            <div class="form">
                <label for="inputpassword">CREATE PASSWORD</label>
                <input type="password" name="inputpassword" id="inputpassword" required></input>
            </div>
            <div class="form">
                <label for="inputconfirmpassword">CONFIRM PASSWORD</label>
                <input type="password" name="inputconfirmpassword" id="inputconfirmpassword" required></input>
            </div>
            <div class="form-dropdown">
                <label for="inputrole">SELECT ROLE</label>
                <select name="inputrole" id="inputrole" required>
                    <option value="brawler">Brawler</option>
                    <option value="shooter">Shooter</option>
                    <option value="mage">Mage</option>
                    <option value="support">Support</option>
                </select>
            </div>
            <div class="form">
                <label for="inputdate">BIRTHDAY</label>
                <input type="date" name="inputdate" id="inputdate" required/>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
                <input class="form-check-input" type="radio" name="inputgender" id="flexRadioDefault1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexRadioDefault2">
                    Female
                </label>
                <input class="form-check-input" type="radio" name="inputgender" id="flexRadioDefault2" checked>
            </div>
            <div class="form">
                <label for="inputaddress">ADDRESS</label>
                <textarea name="inputaddress" id="inputaddress" rows="4" cols="50" required></textarea>
            </div>
            <div class="form-submit">
                <input type="submit" placeholder="submit"/>
            </div>
        </form>
    </div>
</body>
</html>