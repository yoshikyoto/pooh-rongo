<?php

class PoohRongo {
    const RONGOS = [
        '<a href="https://kids.yahoo.co.jp/games/sports/013.html" target="_blank">https://kids.yahoo.co.jp/games/sports/013.html</a>',
        '笑顔でいることが<br>良い循環を生む',
        '難しいことに<br>挑戦することには<br>大きな意味が<br>あるのです',
        '1日の終わりに<br>3つの反省を<br>しましょう',
        '考えすぎずに<br>はじめの1歩を<br>踏み出しましょう',
        '多くの言葉よりも<br>ひとつの行動が<br>人を動かす',
        '今が辛くても<br>がんばったことは<br>必ずあとで<br>生きてくる',
    ];

    public function getRandomRongo()
    {
        $index = mt_rand(0, count(static::RONGOS) - 1);
        return static::RONGOS[$index];
    }
}

$pooh = new PoohRongo(); ?>
<html>
<head><title>くまのプーさん心が変わる「論語」</title></head>
<body>
<font size="+5"><?php echo $pooh->getRandomRongo(); ?></font>
</body>
</html>
