
<html lang="ru">
<meta charset="UTF-8">
  
<?php
$a = 1;
$b = 1;

if ($_GET["number"]) 
{
    while ($a < $_GET["number"])
    {
        $c = $a;
        $a = $a + $b;
        $b = $c;
    }
        if ($a > $_GET["number"]) 
        {
        echo "Задуманное число НЕ входит в числовой ряд";
        }   
            elseif ($a == $_GET["number"]) 
                {
                echo "Задуманное число входит в числовой ряд";
                }
            
}
echo 
'
<form>
   <p>Введите любое число:</p>
   <p><input type="number" name="number"></p>
   <p><input type="submit" value="Отправить"></p>
</form>
'
;