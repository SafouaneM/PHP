<?php
/**
 * Created by PhpStorm.
 * User: safou
 * Date: 11-4-2018
 * Time: 12:46
 */
//print_r($_GET);


print_r($_POST['voetballer']);

foreach ($_POST['voetballer'] as $voetbal) {
    echo "<img src='img/voetballers/".$voetbal.".jpg'>";
}
