<?php
$list = ['first' => 'a', 'second' => 'b'];
$list['first'];
$list['second'];
print_r(array_key_exists('a', $list));
print_r(array_keys($list));

