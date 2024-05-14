<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo $i . "\n";
  }
}

// Q2 多次元連想配列

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

//多次元の問１//
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。";

//１はインデックス番号の１をさしていてインデクス番号は０．１．２という数え方をするので　１つまり二番目のBさんを指定して呼び出している//

//多次元問２//
foreach ($personalInfos as $key => $info) {
    echo ($key + 1) . "番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
}

//keyの部分はインデックス番号０から始まるので＋１にして一番目のという風に出すようにしている あとはforeachで繰り返してmail変数とtel変数で三つの答えを出し\nで改行//
//多次元問３//

$ageList = [25, 30, 18];
foreach ($personalInfos as $key => &$info) {
    $info['age'] = $ageList[$key];
}

var_dump($personalInfos);

//personalinfosに＆infoでageという情報を追加$agelistと＄key（インデックス番号）をつかって上から順にAさんは２５歳、Bさんは３０歳、Cさんは１８歳と追加する。あとはvar_dump($personalInfos);でよびだすことで答えが出る//


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$student = new Student(120, 'クラウド');
echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

//thisはオブジェクトを読み込んでいるそのオブジェクトはnewで指定することが可能。今回でいうとこの１２０とクラウドがオブジェクトでそこからtihsで読み込んでいる認識//

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject = '')
    {
        if (!empty($subject)) {
            echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
        } else {
            echo '授業に出席しました。';
        }
    }
}

$yamada = new Student(120, 'クラウド');
$yamada->attend('PHP');


// Q5 定義済みクラス

$today = new DateTime(); // 今日の日付を表すDateTimeインスタンスを作成 個人メモで例題インスタンスとはクラスの中の生徒のこと、クラスの中にいる小田君やクラウド君山田君のこと　今回は現在の時刻をインスタンスとしている
$oneMonthAgo = clone $today; // 今日の日付をコピーして1ヶ月前の日付を表すDateTimeインスタンスを作成
$oneMonthAgo->modify('-1 month'); // 1ヶ月前に移動

echo $oneMonthAgo->format('Y-m-d'); // 指定された日付を出力
?>

<?php
// 現在の日付を取得
$today = new DateTime();

// 比較する日付を設定
$date = new DateTime('1992-04-25');

// 日数差を計算　現在の日付引くの1992-04-25
$interval = $today->diff($date);

// 数学の答えがこちら
echo $interval->days . "日\n";
?>