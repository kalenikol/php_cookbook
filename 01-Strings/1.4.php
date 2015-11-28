<?php
$remaining_cards = 0;

if($remaining_cards > 0) {
    $url = '/deal.php';
    $text = "Deal more cards";
} else {
    $url = '/new-game.php';
    $text = "Start a New Game";
}

print <<< HTML
There are <b>$remaining_cards</b> left.<br>
<p>
<a href="$url">$text</a>
</p>
HTML;


