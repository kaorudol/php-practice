<?php
// Q1 変数と文字列
$name = 'あたらし';
var_dump($name);

$newName = '私の名前は' . $name . 'です。';
var_dump($newName);

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo $num/2;


// Q3 日付操作
$day = date('Y年m月d日 H時i分s秒');
$dayTime = '現在時刻は' . $day . 'です。';
var_dump($dayTime);

// Q4 条件分岐-1 if文
$device = 'asuos';
if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} if ($device === 'mac') {
    echo '使用OSは、macです。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$prefecture = ['群馬県', '茨城県', '栃木県', '千葉県', '埼玉県', '東京都', '神奈川県'];
var_dump($prefecture);
$newPreecture = $prefecture[2]. 'と' . $prefecture[3] . 'は関東地方の都道府県です。';
var_dump($newPreecture)

// Q7 連想配列-1
$capital = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($capital as $x => $y) {
    echo $x . 'の県庁所在地は' . $y . 'です。 "\n"';
}

// Q8 連想配列-2
foreach ($capital as $x => $y) {
    if ($x === '埼玉県') {
        echo "キー: " . $x . ;
        echo "値: " . $y . ;
        break; 
    }}
$newCapital = $x . 'の県庁所在地は' . $y . 'です。';
var_dump($newCapital)

// Q9 連想配列-3
$kanto_regions = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];
$capital['愛知県'] = '名古屋市';
$capital['大阪府'] = '大阪市';
var_dump($capital);
    foreach ($capital as $prefecture => $city) {
    if (in_array($prefecture, $kanto_regions)) {
        $messageCapital = $prefecture . 'の県庁所在地は、' . $city . 'です。';
    } else {
        $messageCapital = $prefecture . 'は関東地方ではありません。';
    }
    echo $messageCapital . "\n";
}

// Q10 関数-1
function hello($name){
    echo $name .'さん、こんにちは。';
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price){
    return $price *  1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
var_dump($price . '円の商品の税込価格は' . $taxInPrice . '円です。');

// Q12 関数とif文
function distinguishNum($number) {
    return $number % 2 === 0;
}
$number = 10;
if (distinguishNum($number)) {
    echo $number . 'は偶数です。';
} else {
    echo $number . 'は奇数です。';
}

// Q13 関数とswitch文
function evaluateGrade($result) {    
switch ($result) {
case 'A':
case 'B':
    echo '合格です。';
    break;

case 'C':
    echo '合格ですが追加課題があります。';
    break;

case 'D':
    echo '不合格です。';
    break;

default:        // 条件が全てfalseだった時の処理
    echo '判定不明です。講師に問い合わせてください。';
    break;
}}
evaluateGrade('A');
evaluateGrade('S');

?>