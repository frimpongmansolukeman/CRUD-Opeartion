<?php 
if (isset($_POST['sub-num'])) {
    $totalNumber = $_POST['total'];
    if ($totalNumber <= 100) {
        $tax = 25;
        $num = $totalNumber * 5;
        $result = $tax / 100 * $num;
        $total = $num + $result;
        echo "Total <strong>without</strong> moms: ".$num."kr a month <br>";
        echo "Total <strong>including</strong> moms: ".$total. "kr a month";
    }elseif ($totalNumber > 100 && $totalNumber <= 200) {
        $tax = 25;
        $otherPayment = 100 * 5;
        $newTotal = $totalNumber - 100;
        $num = $newTotal * 3;
        $finalNumber = $otherPayment + $num;
        $result = $tax / 100 * $finalNumber;
        $total = $finalNumber + $result;
        echo "Total <strong>without</strong> moms: ".$finalNumber."kr a month <br>";
        echo "Total <strong>including</strong> moms: ".$total. "kr a month";
    }elseif ($totalNumber > 200 && $totalNumber <= 300) {
        $tax = 25;
        $otherPayment = (100 * 5) + (100 * 3);
        $newTotal = $totalNumber - 200;
        $num = $newTotal * 2;
        $finalNumber = $otherPayment + $num;
        $result = $tax / 100 * $finalNumber;
        $total = $finalNumber + $result;
        echo "Total <strong>without</strong> moms: ".$finalNumber."kr a month <br>";
        echo "Total <strong>including</strong> moms: ".$total. "kr a month";
    }elseif ($totalNumber > 300) {
        $tax = 25;
        $otherPayment = (100 * 5) + (100 * 3) + (100 * 2);
        $newTotal = $totalNumber - 300;
        $num = $newTotal * 1;
        $finalNumber = $otherPayment + $num;
        $result = $tax / 100 * $finalNumber;
        $total = $finalNumber + $result;
        echo "Total <strong>without</strong> moms: ".$finalNumber."kr a month <br>";
        echo "Total <strong>including</strong> moms: ".$total. "kr a month";
    }else {
        echo "sorry no calculations";
    }
}
?>