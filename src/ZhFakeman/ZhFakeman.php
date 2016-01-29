<?php
namespace ZhFakeman;

class ZhFakeman {
  public static function make($n = 1, $range = [0, 500]) {
    $sentences = json_decode(file_get_contents("http://more.handlino.com/sentences.json?n={$n}&limit={$range[0]},{$range[1]}"))->sentences;
    return $sentences;
  }
}
