<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 13.06.2018
 * Time: 23:10
 */

$prices = [
    [
        'price' => 21999,
        'shop_name' => 'Shop 1',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21550,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21950,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21350,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ],
    [
        'price' => 21050,
        'shop_name' => 'Shop 2',
        'shop_link' => 'http://'
    ]
];

function ShellSort($elements) {
    $k=0;                                   // 1. Назначается переменная $k и ей присваивается значение 0.
                                            //    Она будет использоваться для обращения к 0 элементу массива $gap.
                                            //    Сложность O(1).
    $length = count($elements);             // 2. Назначается переменная $length и ей присваивается значение,
                                            //    равное длине сортируемого массива. (В данном случае 5).
                                            //    Сложность O(1).
    $gap[0] = (int) ($length / 2);          // 3. Объявляется масссив $gap и нулевому элементу массива присваивается
                                            //    целочисленное значение равное половине длине сортируемого массива
                                            //    (отбросив дробную часть). (В данном случае 2).
                                            //    Сложность O(1).

    while($gap[$k] > 1) {                   // 4. Формируется массив $gap, в котором будут содержаться значения,
        $k++;                               //    которые будут использоваться, как значение расстояния между сравниваемыми
        $gap[$k]= (int)($gap[$k-1] / 2);    //    элементами сортируемого массива.(В данном случае [2, 1]).
    }                                       //    Сложность ...?

    var_dump($gap);

    for($i = 0; $i <= $k; $i++){            // 5. Запускается цикл for, он отработает $k+1 раз(столько элементов(значений
                                            //    расстояния для сравнения) в массиве $gap)(В данном случае будет 2 итерации).
                                            //    Сложность O(n)
        $step = $gap[$i];                   //    Выбираем определённый шаг для сравнения.

        for($j = $step; $j < $length; $j++) {   //  Внутренний цикл for. В нём будет $length - $step
                                                //  (кол-во элем. в первонач. массиве - значение расстояния для сравнения)
                                                //  (В данном случае в первый раз 3 итерации(5-2), во второй раз 4(5-1)).
                                                //  Сложность O(log(n))?
            $temp = $elements[$j];              //  Выбираем элемент для сравнения из первоначального массива.
            $p = $j - $step;                    //  Вводится новая перменная, необходимая для дальнейшего сравнения.

            while($p >= 0 && $temp['price'] < $elements[$p]['price']) { //  Ещё один внутренния цикл
                $elements[$p + $step] = $elements[$p];                  //  Если условие выполняется элемент с которым, производится
                                                                        //  сравнение переставляется на место ранее выбранного элемента
                $p = $p - $step;                                        //  Это действие может быть сделано несколько раз в
                                                                        //  зависимости от значения $p
            }

            $elements[$p + $step] = $temp;                              //  И наконец значение, ранее выбранного нами элемена
                                                                        //  записывается на финальное в этой итерации место в массиве.
                                                                        //  Затем выбирается следующий элемент массива и все шаги повторяются.
        }


    }

    return $elements;                                                   // Возвращаем отсортированный массив
}

// В методичке написано, что сложность данного алгоритма O(n*log(n)). Честно не до конца понял, часть про логорифм(уже подзабылись они)
// Ну я так понимаю, что O(log(n)) это сложность вложенного цикла for. При вычислении финальной сложности алгоритма, первыми 4-мя
// пунктами можно пренебречь, потому что у них незначительные значения, а сложность первого цикла for O(n) перемножить со
// сложностью вложенного цикла for O(log(n)). Итого: O(n*log(n)). Я понял так.
ShellSort($prices);

var_dump(ShellSort($prices));
