<html>
    <head>
        <meta charset="UTF-8">
        <title>Hashed</title>
        <style>
            table {
            margin: 0 auto;
            }
            body{
                background-color: beige;
            }
        </style>
    </head>
    <body>   
        <h1 align="center">Hashing Program</h1>
        <form action="index.php" method="post">
        <table style="border: 10px solid black;">
            <tr>
                <td><input id="txtInput" type="password" name="input" placeholder="Please Enter Something"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hash"/></td>
            </tr>
        </table>
        </form><br/><br/>
        <?php
        $input = "";
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
    {
        funcone();
    }
    function funcone()
    {
        $input = $_POST['input'];
        echo "The hashed answer is:";
        print (md5($input));
        
    }
        ?>
    </body>
</html>
