___
# МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ПРОФЕСИОНАЛЬНОГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»
### ***<center>Лабораторная работа №7. «Разработка серверных скриптов».</center>*** <br><p align="right">Подготовил студент направления подготовки 01.03.02 «Прикладная математика и информатика»<br> Института естественных наук и техносферной безопасности<br> Зураев Дмитрий Бакенович.</p><br><p align="right">Научный руководитель:<br> Соболев Евгений Игоревич</p><br> <center>Южно-Сахалинск 2023 г.</center>
___
### <center>Введение</center>
<p align="justify">PHP (Hypertext Preprocessor) — это сценарный язык программирования, который используется для разработки динамических веб-страниц и веб-приложений. Он был создан с целью интеграции в HTML-код и обработки данных на стороне сервера. PHP является серверным языком, что означает, что код PHP выполняется на веб-сервере, а не в браузере пользователя.</p>

### <center>Цели</center>
<p align="justify"></p>

### <center>Задачи</center>
<p align="justify">Применить технологию PHP.</p>

____________________
## <center>_Решение_</center>
1.	Создайте переменную $var и присвойте ей значение 'hello'. Обращаясь к отдельным символам этой строки выведите на экран символ 'h', символ 'e', символ 'o'
```php
    $var = "hello";
    echo "1)<br>";
    echo $var[0]."<br>";
    echo $var[1]."<br>";
    echo $var[4]."<br>";
```
2.	Напишите скрипт, который считает количество секунд в часе.
```php
    $secondsInHour = 60*60;
    echo "2) Количество секунд в часе: $secondsInHour<br>";
```
3.	Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
```php
<?php
	$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var;
?>
```

```php
    $var = 1;
	$var += 12;
	$var -= 14;
	$var *= 5;
	$var /= 7;
	$var++;
	$var--;
	echo "3) $var<br>";
```
4.	Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.
```php
    $a = 3;
    echo "4) $a". "<br>";
```
5.	Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
```php
    $a = 10;
    $b = 2;
    echo "5) $a и $b <br>";
    echo "Сумма ".  ($a+$b) . "<br>";    
    echo "Разность ".  ($a-$b) . "<br>"; 
    echo "Произведение ".  ($a*$b) . "<br>";
    echo "Частное ".  ($a/$b) . "<br>";  
```
6.	Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран значение переменной $result.
```php
    $c = 15;
    $d = 2;
    $result = $c + $d;
    echo "6) " . $result . "<br>"; 
```
7.	 Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
```php
    $a = 10;
    $b = 2;
    $c = 5;
    echo "7) " . ($a+$b+$c) . "<br>";   
```
8.	Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
```php 
    $a = 17;
    $b = 10;
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;
    echo "8) $result" . "<br>";  
```
9.	Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
```php
    $text = "Привет, Мир!";
    echo "9) $text" . "<br>";
```
10.	 Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.
```php
    $text1='Привет, ';
    $text2='Мир!';
    echo "10) " . $text1 . $text2 . "<br>";
```
11.	 Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.
```php
    $name = "Дмитрий";
    echo "11) " . "Привет, $name!<br>"; 
```
12.	 Создайте переменную $age и присвойте ей ваш возраст. Выведите на экран 'Мне %Возраст% лет!'.
```php
    $age = 20;
    echo "12) Мне $age лет!<br>";
```
13.	Создайте переменную $text и присвойте ей значение 'abcde'. Обращаясь к отдельным символам этой строки выведите на экран символ 'a', символ 'c', символ 'e'.
```php
    $text = "abcde";
    echo "13)<br>";
    echo $text[0]."<br>";
    echo $text[2]."<br>";
    echo $text[4]."<br>";
```
14.	 Дана произвольная строка, например, 'abcde'. Поменяйте первую букву (то есть букву 'a') этой строки на '!'.
```php
    $str = "abcde";
    $str[0] = "!";
    echo "14) $str<br>";
```
15.	 Создайте переменную $num и присвойте ей значение '12345'. Найдите сумму цифр этого числа.
```php
    $num = '12345';
    $sum = 0;

    for ($i = 0; $i < strlen($num); $i++) {
        $sum += $num[$i];
    }

    echo "15) Сумма цифр числа $num равна: $sum<br>";
```
16.	Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце.
```php
    $secondsInDay = $secondsInHour*24;
    $secondsInMonth = $secondsInDay*30;
    echo "9) Количество секунд в часе: $secondsInHour<br>Количество секунд в сутках: $secondsInDay<br>Количество секунд в месяце: $secondsInMonth<br>";
```
17.	 Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
```php
    $hour = 11;
    $minute = 50;
    $second = 49;
    echo "17) $hour:$minute:$second<br>";
    //echo date("H:i:s", strtotime("+8 hours"));
```
18.	 Создайте переменную, присвойте ей число. Возведите это число в квадрат (это значит нужно умножить его само на себя). Выведите его на экран.
```php
    $number = 4;
    $square = $number * $number;
    echo "18) $square<br>";
```
19.	Переделайте этот код так, чтобы в нем использовались операции +=, -=, *=, /=. Количество строк кода при этом не должно измениться.

```php
$var = 47;
$var = $var + 7;
$var = $var - 18;
$var = $var * 10;
$var = $var / 20;
echo $var;
```
```php
    $var = 47;
    $var += 7;
    $var -= 18;
    $var *= 10;
    $var /= 20;
    echo "19) $var<br>";
```

20.	 Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться.
```php
$text = 'Я';
$text = $text.' хочу';
$text = $text.' знать';
$text = $text.' PHP!';
echo $text;
```
```php
    $text = 'Я';
    $text .= ' хочу';
    $text .= ' знать';
    $text .= ' PHP!';
    echo "20) $text<br>";
```
21.	 Переделайте этот код так, чтобы в нем использовались операции ++ и --. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 1;
$var = $var + 1;
$var = $var - 1;
echo $var;
```

```php
    $var = 10;
    $var++;
    $var++;
    $var--;
    echo "21) $var<br>";
```
22.	 Переделайте этот код так, чтобы в нем использовались операции ++, -- , +=, -=, *=, /=. Количество строк кода при этом не должно измениться.
```php
$var = 10;
$var = $var + 7;
$var = $var + 1;
$var = $var - 1;
$var = $var + 12;
$var = $var * 7;
$var = $var - 15;
echo $var;
```

```php
    $var = 10;
    $var += 7;
    $var++;
    $var--;
    $var += 12;
    $var *= 7;
    $var -= 15;
    echo "22) $var<br>";
```
<center><b>Задачи CodeWars:</b></center>

[1 Kata](https://www.codewars.com/kata/534ea96ebb17181947000ada)
```js
function breakChocolate(n, m) {
  if (n <= 0 || m <= 0) {
    return 0;
  }
  
  return (n * m - 1);
}
```
[2 Kata](https://www.codewars.com/kata/5552101f47fc5178b1000050)
```js
function digPow(n, p) {
  const digits = String(n).split('').map(Number);

  const sum = digits.reduce((acc, digit, index) => acc + Math.pow(digit, p + index), 0);

  return sum % n === 0 ? sum / n : -1;
}
```
[3 Kata](https://www.codewars.com/kata/52988f3f7edba9839c00037d)
```js
function reject(array, predicate) {
  return array.filter(item => !predicate(item));
}
```
[4 Kata](https://www.codewars.com/kata/5506b230a11c0aeab3000c1f)
```js
function evaporator(content, evap_per_day, threshold){ 
var days = 0;
var gas = 100;
  while(gas >= threshold){
    gas -= gas * evap_per_day / 100;
    days++;
}
  return days;
}
```
[5 Kata](https://www.codewars.com/kata/57bf599f102a39bb1e000ae5)
```js
var fibsFizzBuzz = function(n) {
    let fibSeq = [1, 1];
    
    for (let i = 2; i < n; i++) {
        fibSeq.push(fibSeq[i - 1] + fibSeq[i - 2]);
    }

    return fibSeq.map(num => {
        if (num % 3 === 0 && num % 5 === 0) {
            return 'FizzBuzz';
        } else if (num % 3 === 0) {
            return 'Fizz';
        } else if (num % 5 === 0) {
            return 'Buzz';
        } else {
            return num;
        }
    });
};

```
[6 Kata](https://www.codewars.com/kata/5901f361927288d961000013)
```js
/**
 * Returns product of all numbers in a numeric array.
 * Returns null if param is null or array is empty.
 * @param {Array} values - The array containing the items.
 */
function product(values) {
  if (values === null || values.length === 0) {
    return null;
  }
  
  return values.reduce((acc, curr) => acc * curr, 1);
}
```
[7 Kata](https://www.codewars.com/kata/546f922b54af40e1e90001da)
```js
function alphabetPosition(text) {
  return text
    .toLowerCase()
    .split('')
    .filter(char => /[a-z]/.test(char))
    .map(char => char.charCodeAt(0) - 96)
    .join(' ');
}
```
[8 Kata](https://www.codewars.com/kata/5679aa472b8f57fb8c000047)
```js
function findEvenIndex(arr) {
  const totalSum = arr.reduce((acc, num) => acc + num, 0);
  let leftSum = 0;
  
  for (let i = 0; i < arr.length; i++) {
    const rightSum = totalSum - leftSum - arr[i];
    
    if (leftSum === rightSum) {
      return i;
    }
    
    leftSum += arr[i];
  }
  
  return -1;
}

```
[9 Kata](https://www.codewars.com/kata/57a2013acf1fa5bfc4000921)
```js
function findAverage(array) {
  if (array.length === 0) {
    return 0;
  }

  const sum = array.reduce((acc, num) => acc + num, 0);

  return sum / array.length;
}
```
[10 Kata](https://www.codewars.com/kata/5a995c2aba1bb57f660001fd)
```js
function scrollingText(text) {
  const result = [];
  
  for (let i = 0; i < text.length; i++) {
    const rotated = text.slice(i) + text.slice(0, i);
    result.push(rotated.toUpperCase());
  }
  
  return result;
}
```
[11 Kata](https://www.codewars.com/kata/57ed30dde7728215300005fa)
```js
const bump = x => {
  let string = "";
  for (let count = 0; count < x.length; count++) {
    if (x[count] == 'n') {
      string += x[count];
    }
  }
  if (string.length > 15) {
    return 'Car Dead';
  } else {
    return 'Woohoo!'
  }
};
```
[12 Kata](https://www.codewars.com/kata/582746fa14b3892727000c4f)
```js
function countDevelopers(list) {
  return list.filter(dev => dev.language === 'JavaScript' && dev.continent === 'Europe').length;
}

```
[13 Kata](https://www.codewars.com/kata/5b39e3772ae7545f650000fc)
```js
function removeDuplicateWords (str) {
let newStr = str.split(" ")
let newArr = []

newStr.forEach((element) => {
if(!newArr.includes(element)) {
    newArr.push(element)
}
})
return newArr.join(" ")
}
```
<center><b>Сервис по созданию qr-кода на мой инстаграм</b></center>

```js
const express = require('express');
const QRCode = require('qrcode');

const app = express();

app.get('/generate', async (req, res) => {
  const url = req.query.url;

  if (!url) {
    return res.status(400).send('URL не указан.');
  }

  try {
    const qr = await QRCode.toDataURL(url);
    res.send(`<img src="${qr}" />`);
  } catch (err) {
    res.status(500).send('Ошибка при создании QR-кода.');
  }
});
app.get('/', async (req, res) => {
    res.send("Создание QR-кода. Пример:/generate?url=https://instagram.com/d_zur1")
  });

app.listen(3000, () => {
  console.log(`Сервер запущен на порту 3000`);
});
```

<center><b>Cкрипт для отправки электронной почты через SMTP-сервер.</b></center>

```js
const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
  host: 'host',
  port: port,
  auth: {
    user: 'zuraev.dima@yandex.ru', // Ваш адрес электронной почты
    pass: 'fake_pas' // Ваш пароль от почты
  }
});

// Настройте параметры письма
const mailOptions = {
  from: 'zuraev.dima@yandex.ru',
  to: 'zuraevd@yandex.ru', // Адрес получателя
  subject: 'Тема вашего письма',
  text: 'Текст вашего письма'
};

// Отправьте письмо
transporter.sendMail(mailOptions, (error, info) => {
  if (error) {
    console.error('Ошибка отправки письма:', error);
  } else {
    console.log('Письмо успешно отправлено:', info.response);
  }
});
```
<center><b>Cкрипт для парсинга данных с веб-страницы и сохранения их в базу данных</b></center>

```js
const axios = require("axios");
const getData = async() => {
try{
    const response = await axios.get("https://books.toscrape.com/"); 
    let res = response.data.match(/<p class=\"price_color\">(.*)<\/p>/g);    
    let res1 = response.data.match(/<a href=\"catalogue(.*)title(.*)<\/a>(.*)/g); 
    res = res.map(item => item.split('>')[1].slice(1, -3));
    res1 = res1.map(item => item.match(/title=\"(.*)\"/)[1]);
    //console.log(res, res1);
    const books = [];
    for(let i=0; i<res.length; i++){
        books.push([res[i], res1[i]]);
    } 
    return books;
}
catch(e)
{
    console.log(e);
}
}
module.exports.books = getData;
```
database
```js
const getData = require('./parser.js');
const mysql = require('mysql');

//Данные нашей базы данных
const dbConfig = {
host: 'host',
user: 'user',
password: 'password',
database: 'database'
};

//подключение к базе данных
function createDbConnection() {
return mysql.createConnection(dbConfig);
}

//SQL-запрос
function executeQuery(connection, query) {
connection.query(query, (error, results) => {
if (error) {
console.error('Ошибка выполнения SQL-запроса:', error);
}
});
}
//парсинг данных 
async function parseToDb() {
try {  
  const connection = createDbConnection();
  let books  = getData.books();
  books.then(result=>{
    for(let i=0; i<result.length; i++){
      const query = `INSERT INTO \`table\` (title, price) VALUES ('${result[i][1]}', ${result[i][0]})`; 
      console.log(query);       
      executeQuery(connection, query);
    }  
  });
} catch (error) {
console.error('Ошибка при запросе', error.message);
}
}
parseToDb();
```
## <center>_Вывод_</center>
Таким образом, мне удалось поработать с основами PHP, со строками и переменными.