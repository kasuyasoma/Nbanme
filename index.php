<?php

$s = "hoge";
$n = 3;

$m = strlen($s); // strlen — 文字列の長さを得る

if (($n > $m) || ($n <= 0))
{
  echo $m . "以下の正の整数を入力してください";
}
else
{
  $a = substr($s, $n - 1, 1);
  echo $a;
}