<?php
// Q1 tic-tac問題
<?php
for ($i = 1; $i <= 100; $i++) {
    $array[] = $i;

if($i % 4 === 0 && $i % 5 === 0){
    echo  'tic-tac' . "\n";
}else if($i % 5 === 0){
    echo  'tac' . "\n";
}else if($i % 4 === 0){  
    echo  'tic' . "\n";
} else {
    echo $i ."\n" ;
}}
?>

// Q2 多次元連想配列
//問題1
<?php
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。'
?>

//問題2
<?php
foreach ($personalInfos as $i => $info) {
    $number = $i + 1;
    $message = $number . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。';
    
    echo $message . "\n";
}
?>


//問題3
<?php
$ageList = [25, 30, 18];
foreach($personalInfos as $key =>& $val){
    $val["age"]=$ageList[$key];
}
var_dump($personalInfos);
?>

// Q3 オブジェクト-1
<?php
$yamada = new Student('120', '山田');
echo '学籍番号' .$yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';
?>


// Q4 オブジェクト-2
<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo  $this->studentName . 'は' . $subject. 'の授業に出席しました。学籍番号：' . $this->studentId ;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');
?>

// Q5 定義済みクラス
//問題1
<?php
$date = new DateTime();
$date->modify('-1 month');
echo  $date->format('Y-m-d') . "\n";

//問題2
$date2 = new DateTime('1992-4-25');
$diff = $date->diff($date2);
echo $diff->format('あの日から%a日経過しました。'); 

?>







