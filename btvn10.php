<?php
//Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
echo "câu 1: ";
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius**2;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}
$circle = new Circle(5);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea();
echo "<br> câu 2: ";
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
       return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}
$dog = new Dog();
$cat = new Cat();
echo $dog->makeSound(); 

echo $cat->makeSound();

//Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương). 
//Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.
echo "<br> câu 3: ";
abstract class Employee {
        protected $name;
        protected $salary;
    
         public function __construct($name, $salary) {
             $this->name = $name;
             $this->salary = $salary;
         }
    
         abstract public function bonusSales();
    
         public function getDetails() {
             return "Name: " . $this->name . ", Salary: " . $this->salary;
         }
     }
    
     class Manager extends Employee {
        private $allowance;

        public function __construct($name, $salary, $allowance) {
             parent::__construct($name, $salary);
             $this->allowance = $allowance;
         }
    
         public function bonusSales() {
             return $this->salary * 0.2;
         }
    
         public function getDetails() {
             return parent::getDetails() . ", Allowance: " . $this->allowance;
         }
     }
    
     class Staff extends Employee {
         public function bonusSales() {
             return $this->salary * 0.1;
         }
     }
    
     $manager = new Manager("A", 500, 1000);
     echo $manager->getDetails() . "\n";
     echo "Bonus: " . $manager->bonusSales() . "<br />";
    
     $staff = new Staff("B", 3000);
     echo $staff->getDetails() . "\n";
     echo "Bonus: " . $staff->bonusSales();
//Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai phương thức start theo cách riêng của từng loại phương tiện.
echo "<br> câu 4: ";
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Car is starting";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Motorcycle is starting";
    }
}

$car = new Car();
$motorcycle = new Motorcycle();

echo $car->start;
echo $motorcycle->start;
//Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", "query" và "disconnect". Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.
echo "<br> câu 5: ";
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    public function connect() {
        echo "Kết nối thành công .<br>";
    }

    public function query($sql) {
        echo "Thực hiện truy vấn: " . $sql . "<br>";
    }

    public function disconnect() {
        echo "Không kết nối được.<br>";
    }
}

class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Kết nối thành công với P.<br>";
    }

    public function query($sql) {
        echo "Thực hiện truy vấn P: " . $sql . "<br>";
    }

    public function disconnect() {
        echo "Kết nói không thành công với P.<br>";
    }
}
$mysql = new MySQLDatabase();
$mysql->connect();
$mysql->query("SELECT * FROM users"); 

//interface
//Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật
echo "Câu 1: ";
interface Resizable {
    public function resize($width, $height);
}
class Rectangle implements Resizable {
    protected $width;
    protected $height;
    public function __construct($width, $height) {
        $this->width=$width;
        $this->height=$height;
    }
    public function resize($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getHeight(){
        return $this->height;
    }
}
$rectangle = new Rectangle(10, 20);
echo "Kích thước ban đầu: Width = " . $rectangle->getWidth() . ", Height = " . $rectangle->getHeight() . "\n";

$rectangle->resize(15, 25);
echo "<br> Kích thước sau khi thay đổi: Width = " . $rectangle->getWidth() . ", Height = " . $rectangle->getHeight() . "\n";
//Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp.
echo "<br> Câu 2: ";
//Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình.
interface Logger {
    public function logInfo();
    public function logWarning();
    public function logError();
}
class FileLogger implements Logger {
    public function logInfo() {

    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->log;
    }
}
class DatabaseLogger implements Logger {
    public function logInfo() {

    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $log;
    public function __construct($log) {
        $this->log = $log;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->log;
    }
}
$filelogger = new FileLogger("bug...1");
$databaselogger = new DatabaseLogger("bug...2");
echo $filelogger->getLog(). "<br>";
echo $databaselogger->getLog(). "<br>";
echo "<br> Câu 3: ";
interface Drawable {
         public function draw();
     }
class Circle implements Drawable {
    protected $radius;

     public function __construct($radius)
     {
         $this -> radius = $radius;
     }

     public function draw(){
         echo "Vẽ đường tròn với bán kính " . $this -> radius . " cm" . "<br>";
     }
 }

 class Square implements Drawable{
     protected $length;
     protected $width;

     public function __construct($length, $width){
         $this -> length = $length;
         $this -> width = $width;
     }

     public function draw(){
         echo "Vẽ hình chữ nhật có chiều dài là " . $this -> length . " cm chiều rộng là " . $this -> width . "cm" ;
     }
 }
 $Circle = new circle(10);
 $Circle -> draw();

 $square = new Square(4,6);
 $square -> draw();
// Tạo một interface "Sortable" với phương thức "sort". Tạo một lớp "ArraySorter" (Sắp xếp mảng) và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp.
echo "<br> Câu 4: ";
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function sort() {
        sort($this->data);
        return $this->data;
    }
}

$arraySorter = new ArraySorter([1,2,3,7,6]);
$sortedArray = $arraySorter->sort();
echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);