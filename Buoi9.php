 <?php
 class Point2D {
    public $x;
    public $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateDistance($otherPoint) {
        $distanceX = $this->x - $otherPoint->x;
        $distanceY = $this->y - $otherPoint->y;
        $distance = sqrt(pow($distanceX, 2) + pow($distanceY, 2));
        return $distance;
    }
 }

 $point1 = new Point2D(3, 4);

 $point2 = new Point2D(6, 8);

 $distance = $point1->calculateDistance($point2);
 echo "The distance from point 1 to point 2 is: " . $distance;
 
 Câu 3:
class IntArray {
     public $array;

     public function __construct($array) {
         $this->array = $array;
     }

     public function calculateSum() {
         $sum = array_sum($this->array);
         return $sum;
     }

     public function calculateAverage() {
         $count = count($this->array);
         $sum = $this->calculateSum();
         $average = $sum / $count;
         return $average;
     }

     public function findMaxElement() {
         $max = max($this->array);
         return $max;
     }
 }

 $array = [5, 10, 15, 20, 25];


 $intArray = new IntArray($array);

 $sum = $intArray->calculateSum();
 echo "The sum of the elements is: " . $sum . "<br>";

 $average = $intArray->calculateAverage();
 echo "The average of the elements in the array is: " . $average . "<br>";

 $max = $intArray->findMaxElement();
 echo "The largest element in the array is : " . $max;

Câu 4:
class Clock {
    private $hours;
    private $minutes;
    private $seconds;

    public function __construct($hours, $minutes, $seconds) {
        $this->hours = $hours;
        $this->minutes = $minutes;
        $this->seconds = $seconds;
    }

    public function displayTime() {
        $time = sprintf("%02d:%02d:%02d", $this->hours, $this->minutes, $this->seconds);
        return $time;
    }

    public function increaseSeconds($seconds) {
        $this->seconds += $seconds;

        if ($this->seconds >= 60) {
            $this->increaseMinutes(floor($this->seconds / 60));
            $this->seconds %= 60;
        }
    }

    public function increaseMinutes($minutes) {
        $this->minutes += $minutes;

        if ($this->minutes >= 60) {
            $this->increaseHours(floor($this->minutes / 60));
            $this->minutes %= 60;
        }
    }

    public function increaseHours($hours) {
        $this->hours += $hours;

        if ($this->hours >= 24) {
            $this->hours %= 24;
        }
    }
}

// Sử dụng lớp Đồng hồ
$clock = new Clock(10, 30, 45);
echo $clock->displayTime() . "\n"; 

$clock->increaseSeconds(15);
echo $clock->displayTime() . "\n";

$clock->increaseMinutes(45);
echo $clock->displayTime() . "\n"; 

$clock->increaseHours(5);
echo $clock->displayTime() . "\n"; 

Câu 5:
class Student {
protected $code;
protected $fullname;

public function __construct($id, $name) {
$this->id = $id;
$this->name = $name;
}
}
class ListStudent {
public $list = [];
public function addStudent($student) {
$this->list[] = $student;
}
public function showList() {
foreach ($this->list as $student) {
echo "Mã số: " . $student->id . ", Họ và tên: " . $student->name ."" . "<br>";
}
}
}
// Tạo đối tượng DanhSachSinhVien
$listStudent = new liststudent();
// Thêm sinh viên vào danh sách
$sv1 = new Student("SV001", "Nguyen Van A");
$sv2 = new Student("SV002", "Tran Thi B");
$listStudent->addStudent($sv1);
$listStudent->addStudent($sv2);
// Hiển thị danh sách sinh viên
$listStudent->showList();

Câu 6:
/ class Car {
 protected  $companyCar;
 protected  $color;
 protected  $manufacture;
    
 public function __construct($companyCar, $color, $manufacture) 
 $this->companyCar = $companyCar;
 $this->color = $color;
 $this->manufacture = $manufacture;
      }
    
 public function show() {
 echo "Hãng xe: " . $this->companyCar . "<br>";
 echo "Màu sắc: " . $this->color . "<br>";
 echo "Năm sản xuất: " . $this->manufacture . "<br>";
     }
    }
 $car = new car('Toyota', 'Đen', 2020);
 $car->show();

    

 Câu 8: 
class Person {
protected $name;
    protected  $age;
    protected  $address;
            
    public function __construct($name, $age, $address) 
    {
             $this->name = $name;
             $this->age = $age;
             $this->address = $address;
          }
            
          public function show() {
           echo "Tên: " . $this->name . "<br>";
          echo "Tuổi: " . $this->age . "<br>";
          echo "Địa chỉ: " . $this->address . "<br>";
            }
         }
          $person = new Person('Nguyen Van A', '22', 'An Mỹ');
      $person->show();
    
Câu 9: 
 class Product {
 public $name;
 public $price;
 public $description;
 public function __construct($name, $price, $description) {
        
 $this->name = $name;
 $this->price = $price;
 $this->description = $description;
                   }
    
 public function show() {
        echo "Tên sản phẩm: " . $this->name . "<br>";
        echo "Giá: " . $this->price . "<br>";
        echo "Mô tả: " . $this->description. "<br>";
        }
    }
    
// Tạo một đối tượng sản phẩm
    // $product = new Product('Samsung', '1400000', 'Đen');
    // // Hiển thị thông tin chi tiết của sản phẩm
    // $product->show();
   

