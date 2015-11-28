<?php
$divClass = 'class1';
$ulClass = 'class2';
$listItem = 'List Item #1';

$html = <<< END
<div class="$divClass">
<ul class="$ulClass">
<li>
END
.$listItem . '</li></div>';
print $html;
// Внимание! Оператор конкатенации должен быть на новой строке