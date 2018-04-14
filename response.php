<?php
/**
 * Created by PhpStorm.
 * User: safou
 * Date: 11-4-2018
 * Time: 12:46
 */
//print_r($_GET);


print_r($_POST['voetballers']);

foreach ($_POST['voetballers'] as $bal) {
    echo "<img src='img/voetballers/".$bal.".jpg'>";
}
