```php
$array = [1, 2, 3];
$array = array_filter($array, function ($value) {
  return $value !== 2;
});
print_r($array);
```