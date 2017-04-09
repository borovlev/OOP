<?php


class Fraction
{
    public $numerator;
    public $denominator;


    public function printFraction ($numerator,$denominator )
    {
        echo $numerator . '/' . $denominator . "<br>";
    }

    public function FractionAddition ($numerator1,$denominator1,$numerator2,$denominator2)
    {
        if ($denominator2 != $denominator1) {
            $result = $denominator1 * $denominator2;  // общий знаменатель
            $result2 = $numerator1 * $denominator2;
            $result3 = $numerator2 * $denominator1;
            echo $numerator1 . '/' . $denominator1 . " + " . $numerator2 . '/' . $denominator2 . " = ";
            echo $result2 . "/" . $result . " + " . $result3 . "/" . $result . " = " . ($result2 + $result3) . "/" . $result . "<br>";
        }
        else {
            echo $numerator1 . '/' . $denominator1 . " + " . $numerator2 . '/' . $denominator2 . " = ";
            echo ($numerator1 + $numerator2) . "/" . $denominator2 . "<br>" ;
        }
    }
    public function FractionSubtraction ($numerator1,$denominator1,$numerator2,$denominator2)
    {
        if ($denominator2 != $denominator1) {
        $result = $denominator1 * $denominator2;  // общий знаменатель
        $result2 = $numerator1 * $denominator2;
        $result3 = $numerator2 * $denominator1;
        echo $numerator1 . '/' . $denominator1 . " - " . $numerator2 . '/' . $denominator2 . " = " ;
        echo $result2 . "/" . $result . " - " . $result3 . "/" . $result . " = " . ($result2 - $result3) . "/" . $result . "<br>";
        }
        else {
            echo $numerator1 . '/' . $denominator1 . " - " . $numerator2 . '/' . $denominator2 . " = ";
            echo ($numerator2 - $numerator2) . "/" . $denominator2 . "<br>" ;
        }
    }
    public function FractionMultiplication ($numerator1,$denominator1,$numerator2,$denominator2) {
        $result = $numerator1 * $numerator2;
        $result2 = $denominator1 * $denominator2;
        echo $numerator1 . '/' . $denominator1 . " * " . $numerator2 . '/' . $denominator2 . " = " . $result . '/' . $result2 . "<br>"  ;
    }
    public function FractionDivision ($numerator1,$denominator1,$numerator2,$denominator2) {
        $result = $numerator1 * $denominator2;
        $result2 = $denominator1 * $numerator2;
        echo $numerator1 . '/' . $denominator1 . " : " . $numerator2 . '/' . $denominator2 . " = " . $result . '/' . $result2 . "<br>"  ;
    }
    public function FractiunInDecimal ($numerator,$denominator)
    {
        echo "В десятичном виде - " . $numerator / $denominator . "<br> ";
    }
    public function Fraction_reduction ($numerator , $denominator)
    {
        if ($numerator > 0 && $denominator > 0) {
            $MaxReductionValues = array();
            for ($i = 2; $i < $numerator or $i < $denominator; $i++) {
                if ($numerator % $i == 0 && $denominator % $i == 0) {
//                echo $i . "<br>";

                    $MaxReductionValues[] = $i;
                }
            }
            if (count($MaxReductionValues) > 0) {
                $maxValue = (max($MaxReductionValues));
//                echo $maxValue;
                echo "Дробь сокращается на $maxValue <br>";
                echo "После сокращения - " . $numerator / $maxValue . '/' . $denominator / $maxValue . "<br>";;
            } else {
                echo "Дробь " . $numerator . '/' . $denominator . " не сокращается <br>";
            }
        }
        else {
            echo "Некорректная дробь" ;
        }
    }
}

$Fraction1 = new Fraction;
//$Fraction1->printFraction(10,16);
//$Fraction1-> Fraction_reduction(10,16);
//$Fraction1-> FractiunInDecimal(10,16);
//$Fraction1-> FractionMultiplication(10,16,12,20);
//$Fraction1-> FractionDivision(10,16,12,20);
$Fraction1-> FractionAddition(2,5,5,5);
$Fraction1-> FractionSubtraction(5,10,5,10);