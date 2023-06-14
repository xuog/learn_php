<?php
$db_server = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "mysqli_bai2.php";

//connect
$dbh = mysqli_connect($db_server,$db_username,$db_pass);

 if (!$dbh)     
 die("Unable to connect to MySQL: " . mysqli_error());

 if (!mysqli_select_db($dbh, $db_name))     
 die("Unable to select database: " . mysqli_error());

//create table 
$sql_stmt = "CREATE TABLE IF NOT EXISTS giaodich(
    id int(6) AUTO_INCREMENT PRIMARY key,
    NgayGD date NOT null, 
    LoaiGD varchar (50) ,
    SoTien float ,
    MoTa varchar(100)
);";
$result = mysqli_query($dbh, $sql_stmt);//Thực hiện

if (!$result)     
     die("Database access failed: " . mysqli_error()); 
else {
   echo "Database success";
}    

//insert
$sql_stmt = "INSERT INTO `giaodich`(`id`, `NgayGD`, `LoaiGD`, `SoTien`, `MoTa`)"; 
$sql_stmt .= "VALUES('1', '2023/07/05','rút tiền','500','rút tiền ATM'),
                    ('2', '2023/08/05','rút tièn','600','rút tiền ATM'),
                    ('3', '2023/09/05','rút tiền','700','rút tiền ATM'),
                    ('4', '2023/10/05','gửi tiền','800','gửi tiền ATM'),
                    ('5', '2023/11/05','rút tiền','900','rút tiền ATM')"; 
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding failed: " . mysqli_error()); 
   // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Add success";
};



//update
$sql_stmt = "UPDATE `giaodich` SET SoTien = 1000 WHERE id = '3'";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

 if (!$result) {
     die("Update failed: " . mysqli_error());
    
} else {
    echo "Update success";
 }

 //delete
$sql_stmt = "DELETE from `giaodich` WHERE id = '5'";
$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

 if (!$result) {
     die("Delete failed: " . mysqli_error());
    
} else {
    echo "Delete success";
 }
 ?>
 