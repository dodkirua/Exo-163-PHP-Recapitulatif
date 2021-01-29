<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <label for="mail">Votre mail</label>
            <input type="email" name="mail" id="mail">
        </div>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['mail'])){
        $mail = trim(htmlentities($_POST['mail']));
        $file = fopen('listeMail.txt',"a+b");
        $date = date("d/m/Y H:i:s")."\n";
        fwrite($file,$mail."|".$date);
        fseek($file,0);
    ?>
    <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>

    <?php

        while ($tmp = fgets($file) ){
            $tmp1 = substr($tmp,0,(strpos($tmp,"|")));
            $tmp2 = substr($tmp,(strpos($tmp,"|")+1),strlen($tmp));
            echo "
                  <tr>
                    <td>$tmp1</td>
                    <td>$tmp2</td>
                </tr>  ";
        }



        fclose($file);
    }
    ?>
        </tbody>
    </table>
</body>
</html>
