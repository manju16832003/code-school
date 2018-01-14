# PHP

## OOP

[Private Constructor](https://stackoverflow.com/questions/26079/in-a-php5-class-when-does-a-private-constructor-get-called)

[Private Constructor](https://stackoverflow.com/questions/26079/in-a-php5-class-when-does-a-private-constructor-get-called)

https://stackoverflow.com/questions/12553142/when-we-should-make-the-constructor-private-why-php


## Shortcuts

PHP Ternary shortcut

```
// old
$val = $exp ? val_if_true : val_if_false

// new
$val = $exp ?: val_if_false
```

PHP isset shortcut

```
// old
$result = isset($exp) ? val_if_true : val_if_false

// new
$result = $exp ?? '' // Note: available in PHP 7 + onwards
```
