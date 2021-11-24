<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="PƠST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="login"></td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_GET['login'])){
            echo `<h1>Sai tk</h1>`;
        }
    ?>
</body>
</html>