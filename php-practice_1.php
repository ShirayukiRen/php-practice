<?php
// Q1 変数と文字列
$name = "小田";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$calculation = 5 * 4;
echo "{$calculation}\n";
$result = $calculation / 2;
echo "{$result}";

// Q3 日付操作
$now = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、{$now}です。";

// Q4 条件分岐-1 if文
$device = "windows";

if ($device == "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device == "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 20;

$message = ($age < 18) ? "未成年です。" : "成人です。";
echo $message;


// Q6 配列

$kanto = array("茨城県", "栃木県", "群馬県", "埼玉県", "千葉県", "東京都", "神奈川県");

echo $kanto[2]."と".$kanto[3]."は関東地方の都道府県です。";

//インデックス番号は０から始まるので指定が二番目（三個目）のようになる//



// Q7 連想配列-1
$kanto = array(
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
);

foreach ($kanto as $prefecture => $capital) {
    echo $prefecture . 'の県庁所在地は' .$capital . "\n";
}

//kantoのキー（県）にasでprefecture(変数）要素を代入することができる。kantoのprefectureが茨城県だとcapitalの水戸市が出力され茨城県の県庁所在地は水戸市となる　\nで改行させて出力している。//


// Q8 連想配列-2

$kanto = array(
    "茨城県" => "水戸市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "東京都" => "新宿区",
    "神奈川県" => "横浜市"
);

// 関東以外の都道府県を追加
$kanto["愛知県"] = "名古屋市";
$kanto["大阪府"] = "大阪市";

foreach ($kanto as $prefecture => $capital) {
    if (in_array($prefecture, array("愛知県", "大阪府"))) {
        echo "{$prefecture}は関東地方ではありません。\n";
    } else {
        echo "{$prefecture}の県庁所在地は、{$capital}です。\n";
    }
}


// Q9 連想配列-3

$kanto = [
    "東京都" => "新宿区" ,
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];
$kanto["愛知県"] = "名古屋市";
$kanto["大阪府"] = "大阪市";
foreach ($kanto as $prefecture => $city) {
    if (
        $prefecture === "東京都" || //Ⅱはorでこれかこれかこれかという風に抽出してここにあるものに当てはまらない愛知大阪は対象外になるので関東地方ではありませんと出る//
        $prefecture ==="埼玉県" ||
        $prefecture ==="栃木県" ||
        $prefecture ==="千葉県" ||
        $prefecture ==="神奈川県" ||
        $prefecture ==="群馬県" ||
        $prefecture ==="埼玉県" ||
        $prefecture ==="茨城県"
    ) {
        echo "$prefecture" . "の県庁所在地は、" . "$city" . "です。" . "\n";
    } else {
        echo $prefecture . "は関東地方ではありません。" . "\n";
    }
}


// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。\n";
}

echo hello("金谷");
echo hello("安藤");


// Q11 関数-2
$price = 1000;
function calcTaxInPrice($price)
{
    return $price * 1.1;
}
$taxInPrice = calcTaxInPrice($price);
echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";

//1000円の１．１倍してるので答えが１１００円になる//


// Q12 関数とif文

function distinguishNum($number) {
    if ($number % 2 == 0) {
        return "{$number}は偶数です。";
    } else {
        return "{$number}は奇数です。";
    }
}

$oddNumber = 11;
$evenNumber = 24;

echo distinguishNum($oddNumber) . "\n";
echo distinguishNum($evenNumber) . "\n";

//％が÷の意味で２で割れるのが偶数で割れないものをelseで奇数と判断している//


// Q13 関数とswitch文

function evaluateGrade($grade)
{
    switch ($grade) {
        case "A":
            return "合格です。"; // 関数の終わり
        case "B":
            return "合格です。";
        case "C":
            return "合格ですが追加課題があります。";
        case "D":
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

$result = evaluateGrade("A");
echo $result . "\n";
$result = evaluateGrade("E");
echo $result . "\n";


?>