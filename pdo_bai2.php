<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "pdo_bai2.php";
$USER_NAME = "root";
$USER_PASSWORD = "";

$conn = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);

//create table
$stsm = $conn->prepare('CREATE TABLE IF NOT EXISTS `giaodich` (
    `Id` int(6) NOT null AUTO_INCREMENT,
  `NgayGD` date NOT null,
  `LoaiGD` varchar(50),
  `SoTien` float,
  `MoTa` varchar(100),
  PRIMARY KEY (`Id`)

)');
$result=$stsm-> execute();
if (!$result) {
    die("Database failed: " . mysqli_error()); 
    
} else {
    echo "Database success";
};

//insert
 $stsm = $conn->prepare('INSERT INTO `giaodich`(`Id`, `NgayGD`, `LoaiGD`, `SoTien`, `MoTa`) 
 VALUE (?, ?, ?, ?, ?)');
 $data1 = array('1', '2023/07/05','rút tiền','500','rút tiền ATM');
 $data2 = array('2', '2023/08/05','rút tièn','600','rút tiền ATM');
 $data3 = array('3', '2023/09/05','rút tiền','700','rút tiền ATM');
 $data4 = array('4', '2023/10/05','gửi tiền','800','gửi tiền ATM');
 $data5 = array('5', '2023/11/05','rút tiền','900','rút tiền ATM');

  $result=$stsm-> execute($data1);
  if (!$result) {
      die("Adding failed: " . mysqli_error()); 
   
 } else {
      echo "Adding success";
  }
  $result2=$stsm-> execute($data2);
  if (!$result2) {
      die("Adding failed: " . mysqli_error()); 
   
  } else {
      echo "Adding success";
  }
  $result3=$stsm-> execute($data3);
  if (!$result3) {
      die("Adding failed: " . mysqli_error()); 
   
  } else {
     echo "Adding success";
  }
  $result4=$stsm-> execute($data4);
  if (!$result4) {
      die("Adding failed: " . mysqli_error()); 
   
  } else {
      echo "Adding success";
  }
  $result5=$stsm-> execute($data5);
  if (!$result5) {
      die("Adding failed: " . mysqli_error()); 

  } else {
      echo "Adding success";
  };

 //update
  $stsm = $conn->prepare("UPDATE giaodich SET SoTien = ?  WHERE ID= ?");
  $data = [1000,'3'];

  $result=$stsm-> execute($data);
  if (!$result) {
      die("Update failed: " . mysqli_error()); 
   
  } else {
      echo "Update success";
  };

//delete
$stsm = $conn->prepare("DELETE from giaodich WHERE ID=?");
$data = ['5'];

$result=$stsm-> execute($data);
if (!$result) {
    die("Delete failed: " . mysqli_error()); 
    
} else {
    echo "Delete success";
};
?>


