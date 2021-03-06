<?php
//Первое занятие PHP
?>

<?php //-так открывается тег PHP
?> //так тег PHP закрывается
//Все что внутри двух этих тегов- код PHP

<?php
//После двух слэшей пишется строчный комментарий
/*так пшется
многострочный комментарий
(в коде PHP выделяем объем текста и жмём ctrl+shift+/)*/

header('Content-Type: text/html; charset=utf-8');// этой записью применяем кодировку UTF-8
//нижние две строки выводят ВСЕ возникающие ошибки
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo 'Hello, world!'; //echo- оператор выводв на экран
print 'Hello, world!'; //print- оператор выводв на экран
//echo и print равны и ничем не отличаются

echo <<<END
<p>Еще одна форма вывода</p>
Встречается крайне редко
END;

echo '<div><b>Hello</b>, world!</div>'; //теги HTML пишутся в строке, являются строкой
echo "<div>".
    "<b>Hello</b>, world!</div>";/* Двойные кавычки так же работают для вывода,
точка в данном случае- конкатинатор. Конкатинация- операция склеивания объектов линейной
структуры, обычно строк*/
?>

<div>За пределами тегов PHP можно писать обычный код HTML</div>

<?php
$x = 2;// $x- так обозначается переменная, тут ей присвоено значение 2
echo '<b>Hello</b>, world!'.$x;//конкатинатор вне одинарных кавычек добавит к строке переменную
echo "<div><b>Hello</b>, world!$x</div>";//внутри двойных кавчек можно писать переменную, ели следующий символ отсутствует
echo "<div><b>Hello</b>, world!{$x}yz</div>";//в двойных кавычках переменную в тескте нужно писать в фигурных скобках
echo '<div><b>Hello</b>, world!$x</div>';//в одинарных кавычках переменная не обрабатывается, выводится как "$x"
$flag_1 = true;// boolean- типа данных (принимает значения либо true либо false)
$flag_2 = false;
$result = $flag_1 + $flag_2;
$pi = 3.141593;// float- тип данных, float- число с плавающей точкой
$x = 2;// integer- тип данных, integer- целое число
$y = $x + $pi;//integer + float = float
$z = $x + ' строка ';//результатом будет значение переменной $x
$z = $x + '2 строка ';//результатом будет сумма $x и 2
$z = $x + ' строка 2';//результатом будет значение переменной $x
$z = $x.' строка';//результатом будет значение переменной и строка
$z = $x + 0;//результатом будет значение переменной $x (строка, если есть, удалится)
$z = $x*1;//результатом будет значение переменной $x(строка, если есть, удалится наверняка)
$z += 0;//укороченная форма записи $z = $z + 0
$z++;//увеличение значения на единицу (в данном случае сначала возвращается значение потом плюсуется 1)
++$z;//увеличение значения на единицу (в данном случае сначала плюсуется 1 затемвозвращается значение)
$massiv = array(2,5,99,true,'Cant touch this');//array- массив данных;
$vol = [3,6,7];//можно встретить такую запись определения массива, но так писать не следует, не везде это работает
//resource - тип данных-ссылка на файл
//NULL- тип данных- отсутствие данных
$t = 'строка';//string(строка)- тип данных
$t .='LL';//присоединение к переменной являющейся строкой указанных (LL) символов
$g = (integer)'56';//преобразование строки в тип integer
echo "Text_1 ", $z, " Text_2";//Запятая как перечислитель того что нужно вывести
?>

<div><?php echo $pi; ?></div>
<div><?php echo $y; ?></div>
<div><?php echo $z; ?></div>
<div><?php echo $t; ?></div>
<div><?php echo $result; ?></div>
<?php echo '<pre>' ?>
<div><?php print_r($massiv); ?>- print_r выводит матрицу на экран</div>
<?php echo '</pre>' ?> Тег '<pre></pre>' выводит в том же форматировании в каком писался код
<div>За пределами тега PHP необходимо открывать тег PHP чтоб вывести значени переменной<?php echo $x; ?></div>
<div><?=$x?></div> /*Можно встретить такую форму записи, но так писать не следует, это не везде работает*/

<?php
echo $massiv[2];
?>

<?php
$name = 'chislo';
$chislo = 5;

define ('PEREMENNAYA',11);// Глобальная  именованная константа

?>
<div><?php echo $name; ?> = <?php echo $$name; ?> Т.е. $$name воспринимается как $chislo = $($name)</div>
<div><?php echo $name; ?> = <?php echo "$$name"; ?> "$$name" все что в кавычках выведется строкой, текстом</div>
<div><?php echo $name; ?> = <?php echo "{$$name}"; ?> "{$$name}" все что в кавычках
                                                        и фиг-х скобках обработается и выведется значение</div>
<div><?php echo PEREMENNAYA; ?> Глобальная именованная константа</div>

<ul>
    <li><?php echo __LINE__; ?>- номер строки</li>
    <li><?php echo __FILE__; ?>- путь к файлу страницы</li>
    <li><?php echo __FUNCTION__; ?>- название текущей функции</li>
    <li><?php echo __CLASS__; ?>- название текущего класса</li>
    <li><?php echo __METHOD__; ?>- метод текущего класса</li>
    <li><?php echo PHP_VERSION; ?>- версия PHP</li>
    <li><?php echo PHP_OS; ?>- ОС на которой запущен сервер</li>
    <li><?php echo DEFAULT_INCLUDE_PATH; ?>- список путей с подключаемыми файлами</li>
</ul>

<?php
                                                // Второе занятие PHP
?>
<?php
//Условный оператор, при его написании лучше всегда использовать фигурные скобки
$a = 2;
$b =5;
if ($a > $b) {
    echo '<div>А больше Б</div>>';
} else {
    echo'<div>А не больше Б</div>';
}
if ($a >= $b) {
    echo '<div>'.__LINE__.': '.$a.'>='.$b.'</div>';
}else {
    echo '<div>'.__LINE__.': '.$a.'<'.$b.'</div>';
}
$a = '6';
//== (два символа равенства- опреация проверки равенства правой и левой части, без учета типа данных)
//=== (три символа равенства- опреация проверки равенства правой и левой части, с учетом типа данных)
if ($a === 6) {
    echo '<div>'.__LINE__.': '.$a.' = 6</div>';
}else {
    echo '<div>'.__LINE__.': '.$a.' ne ravno 6</div>';
}
$q = 'true';
if ($q === true) {
    echo '<div>'.__LINE__.': true(boolean) ==(равен) true(string)</div>';
}else {
    echo '<div>'.__LINE__.': true(boolean) ===(не равен) true(string)</div>';
}
// !=     -не равно пишется так, можновстретить и  <>  но лучше так не писать

$w = 0;
if ($w > 2 && $w < 10 || $w == 0) { // && (это логическое "и") должны выполнятся оба условия справа и слева от данного символа
    //  || (это логическое "или") достаточно выполнения условия слева, либо справа от данного символа
    echo '<div>'.__LINE__.': больше 2 и меньше 10 или вообще равно нулю</div>';
}else {
    echo '<div>'.__LINE__.': или мнеьше 2 или больше 10</div>';
}

$o = 'black';
if ($o == 'blue'){
    echo '<div>'.__LINE__.': синий</div>';
}elseif ($o == 'red') {
    echo '<div>'.__LINE__.': красный</div>';
}else {
    echo '<div>'.__LINE__.': другое...</div>';
}
//elseif (если при невыполнении условия возможны варианты при которых выполнится иное условие, то это условие проверяется после elseif)
// в принципе elseif то же самое что и elae if

$m = 111;
switch ($m){
    case 1: echo '<div>'.__LINE__.': один</div>';
    break;//break дает понять что действия при определенном case закончились
    case 3: echo '<div>'.__LINE__.': три</div>';
        break;
    case 8: echo '<div>'.__LINE__.': восемь</div>';
        break;
    case 'ок': echo '<div>'.__LINE__.': ок</div>';
        break;
    default: echo '<div>'.__LINE__.': вне списка</div>';
}

//Тернарные операции:
$u = 5;
$u = $u>3 ? 'больше трех' : 'меньше трех';
echo '<div>'.__LINE__.': '.$u.'</div>';
echo $u==5 ? 'пять' : 'не пять';//в строке 174 переменная $u становится строкой 'больше трех'

//Цикл for
for ($i=0; $i< 10; $i++){
    echo '<div>'.__LINE__.': i='.$i.' </div>';
};
//Сначала переменной $i присваивается начальное значение,
//потом проверяется условие (меньше ли 10),
//затем выполняется описанное в фигурных скобках,
// в последнюю очередь выполняется действие $i++ (прибавление единицы)
echo '<div>'.__LINE__.': i='.$i.' - после цикла</div>';

//цикл while - проверяется уссловие, затем выполняется действие в фиг. скобках
$l = 0;
while($l<4){
    echo '<div>'.__LINE__.': l='.$l.' </div>';
    $l+=1.5;
}
echo '<div>'.__LINE__.': l='.$l.' - после цикла</div>';

//цикл do whule- сначала выполняется действие, затем проверяется условие

do{
    $l+=1.5;
    echo '<div>'.__LINE__.': l='.$l.' </div>';
}while($l<10);


$massiv2 = array(3,5.34,'string',true,88);//не ассоциативная матрица- элементы просто нумеруются в порядке их расположения начиная с нуля
sizeof($massiv2);//функция позволяющая узнать количество элементов в массиве
for($i=0;$i<sizeof($massiv2);$i++){
    echo '<div>'.__LINE__.': Элемент '.$i.'='.$massiv2[$i].' </div>';
};
//$man- ассоцитивная матрица, каждое значение не нумеровано, а подписано (т.е. привязан ключ)
$man=array(
        'age'=> 36,
        'name'=>'Василий',
        'gender'=> 'м',
        'married'=>true,
);
foreach($man  as $key=>$value){
    echo '<div>'.__LINE__.': '.$key.' - '.$value.'</div>';
}
$titles= array(
    'age'=> 'возраст',
    'name'=>'Имя',
    'gender'=> 'Пол',
    'married'=>'семейное положение',
);
foreach($man  as $key=>$value){
    echo '<div>'.__LINE__.': '.$titles[$key].' - '.$value.'</div>';
}
?>

<?php
//                                         Третье зантяие PHP

$strok = 'StringFor';
echo '<div>'.$strok.'</div>';
print '<div>'.$strok.'</div>';


//str_replace- функция замены части содержимого строки
$strok = str_replace('For','777',$strok);
echo '<div>'.$strok.'</div>';

//str_shuffle- функция перемешивания символов в строке
$strok = str_shuffle($strok);
echo '<div>'.$strok.'</div>';

//str_split- превращает символы строки в переменной, в МАССИВ с строковыми символами
$strok = str_split($strok);
echo '<pre>';
print_r ($strok);
echo'</pre>';

//strpos- ф-ия определяет на какой позиции в СТРОКЕ ПЕРВЫЙ раз встречается интересующий нас символ
$strok2 = 'Stroki979';
$sypo = strpos($strok2, '7');
echo '<div>'.$sypo.'</div>';

//strrpos- ф-ия определяет на какой позиции в СТРОКЕ ПОСЛЕДНИЙ раз встречается интересующий нас символ
$strok3 = 'Stroki979';
$strok3 .='text7';
$sypo = strrpos($strok3, '7');
echo '<div>'.$sypo.'</div>';

//strlen- функция определяющая длину строки (кол-во символов)
$sle = strlen($strok2);
echo '<div>Кол-во смволов в строке- '.$sle.'</div>';

//substr- записывает в переменную часть существующей строки
$sub = substr($strok3, '6',3);
echo '<div>'.$sub.'</div>';

//trim- удаляет  начальные и конечные пробелы из строки
$strok4 = 'ggg';
$strok4 = '      '.$strok4.'      ';
echo '<div>'.$strok4.'</div>';
echo '<pre>'.$strok4.'</pre>';
$strok4 = trim($strok4);
echo '<pre>'.$strok4.'</pre>';

//еще немного о массивах
$massiv5 = array(4, 56.7,true, 'words');
echo '<pre>';
print_r ($massiv5);
echo'</pre>';
$massiv5[]= '+++';//Такая форма записи позволяет добавить элемент в существующий массив
echo '<pre>';
print_r ($massiv5);
echo'</pre>';
$massiv5[1]= 'Элемент изменен';//Такая форма записи позволяет изменить существующий элмемент массива
echo '<pre>';
print_r ($massiv5);
echo'</pre>';
$massiv5['ключ элемента']= 'сам элемент';//Такая форма записи позволяет добавить подписанный элемент (с ключем), по сути, матрица становится ассоциативной
echo '<pre>';
print_r ($massiv5);
echo'</pre>';
$massiv5[]= 'еще элемент';//будет пронумерован следующим числом из числовой подписи, игнорируя ассоциативный ключ
echo '<pre>';
print_r ($massiv5);
echo'</pre>';

foreach($massiv5 as $key=>$value){
    echo '<div>'.$key.': '.$value.' = '.$massiv5[$key].'</div>';
};

//Ассоциативная матрица
$assoc = array(
        'name'=>'Евлампий',
        'age'=>33,
);
foreach($assoc as $key=>$value){
    echo '<div>'.$key.': '.$value.'</div>';
};

//Матрицы как элементы родительской матрицы
$peoples = array (
         array(
        'name'=>'Евлампий',
        'age'=>33,
        ),
        array(
        'name'=>'Ашот',
        'age'=>45,
        ),
         array(
        'name'=>'Женя',
        'age'=>22,
        ),
);
$midle=0;
foreach ($peoples as $npoz=>$man){//цикл перебирает элементы родительской матрицы ($peoples)
    echo '<div>'.$npoz.': ';
    $midle +=$man['age'];
    foreach($man as $key=>$value){//цикл перебирает элементы дочерней матрицы ($man)
        echo "<span>$key- $value </span>";
    }
    echo '</div>';
}
$midle = $midle / sizeof($peoples);
echo '<div>Средний возраст людей- '.$midle.'</div>';

$students =array (
        array (
                'name'=> 'Макс',
                //'scores'=> array(3,5,4,),
        ),
         array (
                 'name'=> 'Игорь',
                //'scores'=> array(3,2,4,),
         ),
         array (
              'name'=> 'Дима',
              //'scores'=> array(5,5,4,),
         ),
);
foreach($students as $man){
    for ($i=0;$i < rand(3,7);$i++){
        if (empty($man['scores'])){//empty- проыеряет пуста ли переменная и isset- Определяет, была ли установлена переменная значением, отличным от NULL
            $man['scores'] = array();
        }
        $man['scores'][] = rand(1,5);
    }
    $size = sizeof($man['scores']);
    $scores = implode(', ',$man['scores']);//Функция implode переводит тип данных из МАССИВа в СТРОЧНЫЙ
    $midle = array_sum($man['scores'])/sizeof($man['scores']);//функция array_sum суммирует все элементы массива
    $midle2 = round($midle) - $midle;//функция round округляет число до целого значения
    if($midle2>0){
        $midle = ceil($midle).'- ';//функция ceil округляет число до целого значения в большую сторону
    }elseif($midle2<0){
        $midle = floor($midle).'+ ';//функция floor округляет число до целого значения в меньшую сторону
    }
    echo "<div>Студент {$man['name']} имеет оценки: {$scores} ({$size} оценок), средний балл: {$midle} </div>";
}


//                                         Четвертое занятие PHP
$array = array('php','HTML','css',);

echo 'Текущий элемент: '.current($array).'<br>'; //функция current возвращает текцщий элемент массива
echo 'Следующий элемент: '.next($array).'<br>';//ф-ия next сдвигает внутренний указатель массива с текущего на следующий и возращает его значение
echo 'Предыдущий элемент: '.prev($array).'<br>';//ф-ия next сдвигает внутренний указатель массива с текущего на предыдущий и возращает его значение
echo 'Последний элемент: '.end($array).'<br>';//ф-ия next сдвигает внутренний указатель массива с текущего на последний и возращает его значение
echo 'Снова к первому элементу: '.reset($array).'<br>';//ф-ия next сдвигает (сбрасывает) внутренний указатель массива с текущего на первый и возращает его значение

echo '<pre>';
print_r($array);
echo '</pre>';

$string33 = implode(', ',$array);
echo "<div>$string33</div>";

$new_arr = explode(',',$string33);//Функция explode переводит строку в массив строк
/*foreach($new_arr as $i=>$znach){
    $new_arr[$i] = trim($znach);
};*/

$new_arr = array_map('trim',$new_arr);//ф-ия array_map обрабатывает элементы массива функцией вписанной в CALLBACK

echo '<pre>';
print_r($new_arr);
echo '</pre>';

echo '<hr>';

$arr_44 = [
        'raz'=>'odin',
        'dva'=>'two',
        'tri'=>'three',
];
extract($arr_44);// ф-ия extract импортирует переменные из массива за его пределы в PHP

echo "<div>$raz</div>";
echo "<div>$dva</div>";
echo "<div>$tri</div>";

$arr_55 = compact('tri', 'dva', 'raz');//compact — Создает массив, содержащий названия переменных и их значения
echo '<hr>';
echo '<pre>';
print_r($arr_55);
echo '</pre>';

$arr_6 = array_slice($arr_55, 0, 2);//Возвращает срез массива  от значения прописанного в offset, длинной length
echo '<hr>';
echo '<pre>';
print_r($arr_6);
echo '</pre>';

$arr_7 = ['4',
        '5',
        '6',];
$arr_6[0] = 787;
$arr_8 = ['dva'=>'perezapis'];

$arr_7 = array_merge($arr_6, $arr_7, $arr_8);//Сливает массивы в один
echo '<hr>';
echo __LINE__;
echo '<pre>';
print_r($arr_7);
echo '</pre>';

$arr_8=[
        're'=>'111',
        '2'=>'222',
        'we'=>'333',
];
$arr_9=[
    're'=>'444',
    '2'=>'555',
    '4'=>'666',
];
foreach($arr_8 as $q=>$w){
    if(!empty($arr_9[$q])&& !is_numeric($q)){//is_numeric — Проверяет, является ли переменная числом или строкой, содержащей число
        $q .='_double';
    };
    $arr_9[$q]=$w;
};
echo '<hr>';
echo '<pre>';
print_r($arr_9);
echo '</pre>';

echo __LINE__;
echo '<hr>';
$chto_1 =[
        'qwer',
        'asdf',
        'zxcv',
];
$chto_2 =[
    'qwer',
    'as',
    'zx',
];
$dif = array_diff ($chto_1, $chto_2);//array_diff — Вычислияет расхождение массивов, возвращает элементы не содержащиеся в других массивах
echo '<pre>';
print_r($dif);
echo '</pre>';

echo __LINE__;
echo '<hr>';
$chto_3 =[
    'qwer',
    'asdf',
    'tg'=>'zxcv',
];
$chto_4 =[
    'qwer',
    'tg'=>'as',
    'zx',
];
$dif_2 = array_diff_assoc ($chto_3, $chto_4);//В отличие от array_diff(), ключи также участвуют в сравнении.
$dif_3 = array_intersect ($chto_3, $chto_4);// array_intersect() возвращает массив значений, содержащихся во всех массивах
echo '<pre>';
print_r($dif_2);
echo '</pre>';
echo '<pre>';
print_r($dif_3);
echo '</pre>';

$sum= array_sum ([3,3,3,1,]);
echo '<hr>'.__LINE__.': '.$sum.' Сумма всех элементов';
echo '<hr>'.__LINE__.': ';
print_r (array_unique([3,3,3,1,]));
echo ' УНИКАЛЬНЫЕ элементы';
?>
