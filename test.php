<!DOCTYPE html>
<html>
<body>



<?php

$b = array();
for($i=0; $i<10; $i++){
    $b[]=rand(0,10);
}

$a = array();
for($i=0; $i<10; $i++){
    $a[$i] = array();
    for($j=0; $j<10; $j++){
        $a[$i][$j] = rand(0,10);
        if(!array_search($a[$i][$j], $b)){
            $a[$i][$j]='нет';
        }
    }
}


/*Вывести результат работы в таблицу: первой строкой должен идти массив B выделенный жирным, остальные строки: массива A каждая переменная должна остаться на своем месте без сдвига после фильтрации массивом B. Если переменной не существует, вместо нее вывести текст “Нет”.*/

?>
<table >
    <tr>
        <?php foreach ($b as $b_item): ?>
            <td><b><?php echo $b_item; ?></b></td>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($a as $items): ?>
        <tr>
            <?php foreach ($items as $row): ?>
                <td><?php echo $row; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>


</body>
</html>
