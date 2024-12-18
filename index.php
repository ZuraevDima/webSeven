<?php
    //1
    $var = "hello";
    echo "1)<br>";
    echo $var[0]."<br>";
    echo $var[1]."<br>";
    echo $var[4]."<br>";
    //2
    $secondsInHour = 60*60;
    echo "2) Количество секунд в часе: $secondsInHour<br>";
    //3
    $var = 1;
	$var += 12;
	$var -= 14;
	$var *= 5;
	$var /= 7;
	$var++;
	$var--;
	echo "3) $var<br>";
    //4
    $a = 3;
    echo "4) $a". "<br>";
    //5
    $a = 10;
    $b = 2;
    echo "5) $a и $b <br>";
    echo "Сумма ".  ($a+$b) . "<br>";    
    echo "Разность ".  ($a-$b) . "<br>"; 
    echo "Произведение ".  ($a*$b) . "<br>";
    echo "Частное ".  ($a/$b) . "<br>";  
    //6
    $c = 15;
    $d = 2;
    $result = $c + $d;
    echo "6) " . $result . "<br>"; 
    //7
    $a = 10;
    $b = 2;
    $c = 5;
    echo "7) " . ($a+$b+$c) . "<br>";
    //8
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo "8) $result" . "<br>";  
    //9
    $text = "Привет, Мир!";
    echo "9) $text" . "<br>";   
    //10
    $text1='Привет, ';
    $text2='Мир!';
    echo "10) " . $text1 . $text2 . "<br>";
    //11
    $name = "Дмитрий";
    echo "11) " . "Привет, $name!<br>"; 
    //12
    $age = 20;
    echo "12) Мне $age лет!<br>";
    //13
    $text = "abcde";
    echo "13)<br>";
    echo $text[0]."<br>";
    echo $text[2]."<br>";
    echo $text[4]."<br>";
    //14
    $str = "abcde";
    $str[0] = "!";
    echo "14) $str<br>";
    //15
    $num = '12345';
    $sum = 0;

    for ($i = 0; $i < strlen($num); $i++) {
        $sum += $num[$i];
    }

    echo "15) Сумма цифр числа $num равна: $sum<br>";
    //16
    $secondsInDay = $secondsInHour*24;
    $secondsInMonth = $secondsInDay*30;
    echo "9) Количество секунд в часе: $secondsInHour<br>Количество секунд в сутках: $secondsInDay<br>Количество секунд в месяце: $secondsInMonth<br>";
    //17
    $hour = 11;
    $minute = 50;
    $second = 49;
    echo "17) $hour:$minute:$second<br>";
    //echo date("H:i:s", strtotime("+8 hours"));
    //18
    $number = 4;
    $square = $number * $number;
    echo "18) $square<br>";
    //19
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo "19) $var<br>";
    //20
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo "20) $text<br>";
    //21
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo "21) $var<br>";
    //22
    $var = 10;
    $var += 7;
    $var++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo "22) $var<br>";