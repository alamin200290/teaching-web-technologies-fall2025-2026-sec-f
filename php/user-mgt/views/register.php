<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
        <form action="../controllers/registerCheck.php" method="post" enctype="">
            <fieldset>
                <legend>Signin</legend>
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="Register">
                            <a href='login.php'> Sign in </a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
</body>
</html>