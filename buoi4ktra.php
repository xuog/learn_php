<?php
//Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
echo 'Cau 1: ';
function evenOrOdd($number){
    if($number % 2 == 0){
        echo'Đây là số chẵn';
    }else{
        echo'Đây là số lẻ';
    }
}
$number = 1;
echo evenOrOdd($number);
echo '<br>';

//Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ
echo 'Cau 2: ';
function academicRanking($midtermScore, $endPoint){
    $mediumScore  = ($midtermScore * 30/100) + ($endPoint * 70/100);
    if ($mediumScore < 5.0){
        echo 'Trung bình - yếu';
    }elseif($mediumScore >= 5.0 && $mediumScore < 7.0){
        echo 'Khá';
    }elseif($mediumScore >= 7.0 && $mediumScore < 9.0){
        echo 'Giỏi';
    }elseif($mediumScore >= 9.0 && $mediumScore < 10.0){
        echo 'Xuất sắc';
    }else{
        echo 'Nhập điểm chưa chính xác';
    }
}
$midtermScore = 8;
$endPoint = 9;
echo academicRanking($midtermScore, $endPoint);
echo '<br>';

//Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
echo 'Cau 3: ';
function checkEvenOrOddYear() {
    $currentYear = date('Y');

    if ($currentYear % 2 == 0) {
        echo 'Năm hiện tại là năm chẵn';
    } else {
        echo 'Năm hiện tại là năm lẻ';
    }
}
checkEvenOrOddYear();
echo '<br>';

//Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
echo 'Cau 4: ';
function printfNumber(){
    for( $i = 1; $i <= 100; $i++){
    echo $i . ' ';
}
return 0;
}
printfNumber();
echo '<br>';

//Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
echo 'Cau 5: ';
function printfNumberOddEven(){
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) {
            echo '<b>' . $i . '</b> ';
        } else {
            echo $i .' ';
        }
    }  
}
printfNumberOddEven();
echo '<br>';

//Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây:
echo 'Cau 6: ';
function printArray($nam){
    foreach($nam as $val){
        echo $val . ' ';
    }
}
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);
printArray($nam);
echo '<br>';
?>