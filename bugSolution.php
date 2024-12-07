function foo(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'remove') {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
}