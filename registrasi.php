
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            background-image: linear-gradient(to bottom right, blue, purple);
        }

        .registrasi {
            width: 500px;
            height: 300px;
            background: #fff;
            position: absolute;
            left: 30%;
            top: 20%;
            padding: 10px;
            border-radius: 5px;
            border:2px solid black;
            box-shadow:2px 2px 2px black;
            
        }

        h1 {
            position: relative;
            width: 300px;
            height: 40px;
            background-image: linear-gradient(to bottom right, blue, purple);
            text-align: center; 
            left: 19%;
            border-radius: 50px;
            color: #fff;
            box-shadow: 3px 3px 3px black;
        }

        ul {
            margin-left: 50px;
            margin-top: 50px;
        }

        li {
            list-style: none;
        }

        input {
            width: 300px;
            height: 20px;
            background: lightblue;
            box-shadow: 1px 2px 2px black;
        }

        button {
            background: #405DE6;
            color: #fff;
            position: absolute;
            left: 40%;
            margin-left: 10px;
            cursor: pointer;
        }

        button:hover {
            background-image: linear-gradient(to bottom right, blue, purple);
        }
    </style>
</head>
<body>
    <div class="registrasi">
        <h1>REGISTRATION</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <input type="text" placeholder="USERNAME" name="username" id="username">
                </li>
                <br>
                <li>
                    <input type="password" placeholder="PASSWORD" name="password" id="password">
                </li>
                <br>
                <li>
                    <input type="password" placeholder="CONFIRM PASSWORD" name="password2" id="passsword2">
                </li>
                <br>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>