# HTML Parser

![PHP 7.1](https://img.shields.io/badge/PHP%207-%3E%3D7.1-blue.svg)

Делаю свой парсер на основе [PHP Simple HTML DOM Parser](https://sourceforge.net/projects/simplehtmldom/), ver 1.5, rev. 196.

## TODO

Улучшать тут дохрена и больше.. Прошелся только по `simple_html_dom_node` и уже нашел кучу мест, с которыми нужно разобраться.

- добавить unit-тесты. В [org/testcase/] есть какие-то тесты. Нужно переписать их на PhpUnit. Вообще прежде чем рефакторить, нужно создать максимально полный набор тестов. Иначе потом заколебешься отлавливать ошибки.

- разобрать на классы. Парсер хороший, но исходники - говнокод.

- добавить поддержку Composer. Установка должна производиться через него. Необязательно пока заявлять в Composer repository о новом пакете. Пусть работает хотя бы по прямому URL в Github.

- Нужно развязать настройку `$lowercase = false`. Когда она включена, теги и *атрибуты* приводятся к нижнему регистру. Это разные цели, они не должны управляться одной настройкой.

- В мануале есть страница FAQ, нужно создать решения под первые три вопроса. Эти решения должны быть из коробки.

- Какой-то баг получился с "NO NUMERIC NOISE KEY 1004", см. [temp/_deleteConfirm.php]

- см. комментарий в `simple_html_dom_node::parent()`. Что-то там не работает.

- см. комментарий в `simple_html_dom_node::text()`. Там вопрос про что-то.

## Copyright

В оригинальном парсере указано следующее:

```php
/**
  * Website: http://sourceforge.net/projects/simplehtmldom/
  * Acknowledge: Jose Solorzano (https://sourceforge.net/projects/php-html/)
  * Contributions by:
  *     Yousuke Kumakura (Attribute filters)
  *     Vadim Voituk (Negative indexes supports of "find" method)
  *     Antcs (Constructor with automatically load contents either text or file/url)
  *
  * ...
  *
  * @author     S.C. Chen <me578022@gmail.com>
  * @author     John Schlick
  * @author     Rus Carroll
  * @version    1.5 ($Rev: 196 $)
  */
```
