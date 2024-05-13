<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            background: #050617;
        }

        .registrasi {
            width: 500px;
            height: 300px;
            background: #C04809;
            position: absolute;
            left: 30%;
            top: 20%;
            padding: 10px;
            border-radius: 5px;
            
        }

        h1 {
            text-align: center; 
        }

        ul {
            margin-left: 50px;
            margin-top: 50px;
        }

        label {
            display: block;
        }

        input {
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="registrasi">
        <h1>REGISTRATION</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="password2">confirm password :</label>
                    <input type="password" name="password2" id="passsword2">
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