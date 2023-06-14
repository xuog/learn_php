<?php
$DB_TYPE = "mysql";
$DB_HOST = "localhost";
$DB_NAME = "pdo_bai1.php";
$USER_NAME = "root";
$USER_PASSWORD = "";

$conn = new PDO("$DB_TYPE:host=$DB_HOST;dbname=$DB_NAME", $USER_NAME, $USER_PASSWORD);

//create table
$stsm = $conn->prepare('CREATE TABLE IF NOT EXISTS `sinhvien` (
    `MaSV` varchar(10) not null,
  `HoTen` varchar(50) not null,
  `NgaySinh` datetime,
  `LopHoc` varchar(20),
  `DTB` float,
  PRIMARY KEY (`MaSV`)
)');
$result=$stsm-> execute();
if (!$result) {
    die("Database access failed: " . mysqli_error()); 
    
} else {
    echo "Database success";
};

//insert
 $stsm = $conn->prepare('INSERT INTO `sinhvien`(`MaSV`, `HoTen`, `NgaySinh`, `LopHoc`, `DTB`) 
 VALUE (?, ?, ?, ?, ?)');
 $data1 = array('SV001', 'Le Thi A','2002/04/02','A1','8.2');
 $data2 = array('SV002', 'Le Thi B','2002/05/02','A2','8.5');
 $data3 = array('SV003', 'Le Thi C','2002/06/02','A3','9.0');
 $data4 = array('SV004', 'Le Thi D','2002/07/02','A4','7.0');
 $data5 = array('SV005', 'Le Thi E','2002/08/02','A5','6,0');

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
  $stsm = $conn->prepare("UPDATE sinhvien SET DTB = ?  WHERE MaSV= ?");
  $data = [8.5,'SV001'];

  $result=$stsm-> execute($data);
  if (!$result) {
      die("Update failed: " . mysqli_error()); 
    
  } else {
      echo "Update success";
  };

//delete
$stsm = $conn->prepare("DELETE from sinhvien WHERE MaSV=?");
$data = ['SV003'];

$result=$stsm-> execute($data);
if (!$result) {
    die("Delete failed: " . mysqli_error()); 
    
} else {
    echo "Delete success";
};
?>
