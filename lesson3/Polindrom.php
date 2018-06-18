<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 18.06.2018
 * Time: 11:58
 */

class Polindrom
{
    public $word = null;

    /**
     * @return null
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @param null $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    }

    public function isPolindrom($word)
    {
        if(is_string($word)) {
            $lenght = mb_strlen($word);
            echo "Длина слова " . $lenght . " символов" . PHP_EOL;
            $f = 0;
            $o = $lenght - 1;
            $step = floor($lenght / 2);
            return $this->compare($word, $f, $o, $step);
        } else {
            return "Переданное значение не является строкой";
        }

    }

    public function compare($word, $f, $o, $step)
    {
//        echo $word{$f} . PHP_EOL . $word{$o} . PHP_EOL . $step . PHP_EOL;
        if ($step > 0) {
//            echo "true ";
            if ($word{$f} === $word{$o}) {
//                echo "true". PHP_EOL;
                $this->compare($word, $f + 1, $o - 1, $step - 1);
            } else {
//                echo "false" . PHP_EOL;
                return "Слово не является полиндромом";
            }
        }
        return "Это полиндром!!!";

    }

}
$new = new Polindrom();
$new->setWord('qwertyytrewq');
echo $new->word . PHP_EOL;
echo $new->isPolindrom($new->word);
// Почему-то не всегда отрабатывает корректно, особенно с русскими символами, хотя вся логика из функции compare
// соблюдается. Не могу найти ошибку....