<?php
/**
 * Created by PhpStorm.
 * User: dung
 * Date: 13/11/2018
 * Time: 17:09
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
        }
    }
}
