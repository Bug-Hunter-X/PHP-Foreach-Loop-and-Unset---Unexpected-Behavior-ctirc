function foo(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'remove') {
      unset($arr[$key]);
    }
  }
}