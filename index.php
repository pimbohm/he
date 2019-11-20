<!DOCTYPE html>
<html>
<head>

</head>​
<body>​
<form method="post">
    <input type="text" name="nummer">
    <input type="submit" name="ok">
</form>
<?php

function mc() {
    if (isset($_POST['ok'])) {
        $num = $_POST['nummer'];
        $numlen = strlen($num);
        $isnum = is_numeric($num);
        $ijsje = substr($num, 0, 2);
        $ijsje2 = substr($num, 2, 2);
        $ijsje3 = substr($num, 4, 2);

        if ($numlen != 6) {
            echo 'Je moet 6 nummers invullen';
        }

        if ($isnum == false) {
            echo 'Je moet nummers invullen';
        }

        else {
            if ($ijsje == 12 ||
                $ijsje == 23 ||
                $ijsje2 == 45 ||
                $ijsje2 == 56 ||
                $ijsje3 == 78 ||
                $ijsje3 == 89
                ) {
                    if ($ijsje == 12) {
                        echo 'Smaak is chocolade';
                    }
                    if ($ijsje == 23) {
                        echo 'Smaak is vannile';
                    }
                    if ($ijsje2 == 45) {
                        echo '<br />Chocoladessoort is Twix';
                    }
                    if ($ijsje2 == 56) {
                        echo '<br />Chocoladessoort is Snicker';
                    }
                    if ($ijsje3 == 78) {
                        echo '<br />Topping is chocoladesaus';
                    }
                    if ($ijsje3 == 89) {
                        echo '<br />Topping is spikkels';
                    }
                } else {
                echo 'De code bestaat niet';
            }

        }
    }
}

mc();

?>
</body>​
</html>​