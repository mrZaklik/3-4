<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>DZ_3-4</title>
</head>

<body>

    <?php 
    echo '<b>TASK 1</b><br/>';
    echo strtoupper('lukashenko v avtozak!');
    // echo mb_strtoupper('lukashenko v avtozak!');
    echo '<br/><br/>';


    echo '<b>TASK 2</b><br/>';
    echo date("Y.m.d");
    echo '<br/><br/>';


    echo '<b>TASK 3</b><br/>';
    echo ucwords('london is the capital of great britain');
    echo '<br/><br/>';


    echo '<b>TASK 4</b><br/>';
    $st = pow(2,10);
    echo $st;
    echo '<br/><br/>';


    echo '<b>TASK 5</b><br/>';
    $str5 = 'abc abc abc';
    echo strpos($str5, 'b');
    echo '<br/><br/>';


    echo '<b>TASK 6</b><br/>';
    echo strpos($str5, 'b', 3);
    echo '<br/><br/>';


    echo '<b>TASK 7</b><br/>';
    $str7 = 'html css php';
    $arr_str7 = explode(' ', $str7);
    print_r($arr_str7);
    echo '<br/><br/>';


    echo '<b>TASK 8</b><br/>';
    $str8 = '1234567890';
    $arr_str8 = str_split($str8, 2);
    print_r($arr_str8);
    echo '<br/><br/>';


    echo '<b>TASK 9</b><br/>';
    echo str_shuffle('lukashenko v avtozak!');
    echo '<br/><br/>';


    echo '<b>TASK 10</b><br/>';
    $str10 = "html, <b>php</b>, js";
    echo strip_tags($str10);
    echo '<br/><br/>';


    echo '<b>TASK 11</b><br/>';
    echo mktime(12,58,59,9,23,2031);
    echo '<br/><br/>';


    echo '<b>TASK 12</b><br/>';
    echo date('Y.m.d G:i:s', strtotime('+1 hours'));
    echo '<br/><br/>';


    echo '<b>TASK 13</b><br/>';
    echo date('l', strtotime('1 september 2010'));
    echo '<br/><br/>';


    echo '<b>TASK 14</b><br/>';
    echo date('t', time());
    echo '<br/><br/>';


    echo '<b>TASK 15</b><br/>';
    echo date('t', time());
    echo '<br/><br/>';


    echo '<b>TASK 16</b><br/>';
    echo date('Y-m-d') . ', ';
    echo date('d.m.Y') . ', ';
    echo date('d.m.y') . ', ';
    echo date('G:i:s');
    echo '<br/><br/>';


    echo '<b>TASK 17</b><br/>';
    $password = 'e-moe';
    if (strlen($password) > 5 && strlen($password) < 10) echo 'пароль подходит';
    else echo 'нужно придумать другой пароль';
    echo '<br/><br/>';


    echo '<b>TASK 18</b><br/>';
    $str18 = '1a2b3c4b5d6e7f8g9h0';
    echo preg_replace('/\d/', '', $str18);
    echo '<br/><br/>';


    echo '<b>TASK 19</b><br/>';
    echo sqrt(245);
    echo '<br/><br/>';


    echo '<b>TASK 20</b><br/>';
    $num20 = [4, -2, 5, 19, -130, 0, 10];
    echo min($num20) . ', ';
    echo max($num20);
    echo '<br/><br/>';


    echo '<b>TASK 21</b><br/>';
    echo rand(1, 100);
    echo '<br/><br/>';


    echo '<b>TASK 22</b><br/>';
    $text22 = ['Привет, ', 'мир', '!'];
    for ($i = 0; $i < count($text22); $i++)
    echo $text22[$i];
    echo '<br/><br/>';


    echo '<b>TASK 23</b><br/>';
    for ($i =0; $i < count($num20); $i++) {}
    echo count($num20);
    echo '<br/><br/>';


    echo '<b>TASK 24</b><br/>';
    $arr24 = [ 'ru'=> ['голубой', 'красный', 'зеленый'], 'en'=> ['blue', 'red', 'green'], ];
    echo $arr24['ru'][0];
    echo '<br/><br/>';


    echo '<b>TASK 25</b><br/>';
    $arr25 = [2, 5, 3, 9];
    $result = $arr25[0] * $arr25[1] + $arr25[2] * $arr25[3];
    echo $result;
    echo '<br/><br/>';


    echo '<b>TASK 26</b><br/>';
    $arr26 = [
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
        7 => 'Вс'
    ];
    echo $arr26[2];
    echo '<br/><br/>';


    echo '<b>TASK 27</b><br/>';
    for ($i = 1; $i <= 30; $i++) {
        $arr27[$i] = rand(1, 10);}
    echo '<pre>' . print_r($arr27, true) . '</pre>';
    echo '<br/><br/>';


    echo '<b>TASK 28</b><br/>';
    $arr28 = [1, 2, -1, -2, 3, -3];
    for ($i = 0; $i < count($arr28); $i++) {
        $arr28[$i] = - $arr28[$i];}
    echo '<pre>' . print_r($arr28, true) . '</pre>';
    echo '<br/><br/>';


    echo '<b>TASK 29</b><br/>';
    $arr29 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $sum = 0;
    $result = 0;
    for ($i = 0; $i < count($arr29); $i++) {
        if($sum < 10){
            $sum += $arr29[$i];
            $result ++;
        } else break;
    }
    echo $result;
    echo '<br/><br/>';


    echo '<b>TASK 30</b><br/>';
    $arr30 = [[1, 2, 3], [4, 5], [6]];
    $result = 0;
    for ($i = 0; $i < count($arr30); $i++) {
        for ($j = 0; $j < count($arr30[$i]); $j++){
            $result += $arr30[$i][$j];
        }
    }
    echo $result;
    echo '<br/><br/>';


    echo '<b>TASK 31</b><br/>';
    $array = [1,1,1,2,2,2,2,3];
    $result = array_unique($array);
    echo '<pre>' . print_r($result, true) . '</pre>';
    echo '<br/><br/>';


    echo '<b>TASK 32</b><br/>';
    $arr32 = [
        "index.php" => "Home",
        "about.php" => "About",
        "services.php" => "Services",
        "catalog.php" => "Catalog",
        "contacts.php" => "Contacts"
    ];
    echo "<ul>";
    foreach($arr32 as $link32 => $link){
        echo '<li><a href="'. $link32 .'">'. $link .'</a></li>';
    }
    echo "</ul>";
    echo '<br/><br/>';


    // echo '<b>TASK 34</b><br/>';
    // $arr34 = [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2];
    // $pe0 = array_search(0, $arr34);
    // $po0 = array_reverse(array_search(0, $arr34));
    // echo '<br/><br/>';

    // Всё... моя крыша на сегодня поехала...

    







    ?>

</body>
</html>