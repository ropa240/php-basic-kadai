<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
 </head>
 
 <body>
<p>
         <?php
         // クラスを定義する
         class Food {
             // プロパティを定義する                        
             public $name;
             public $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;

             }

             // メソッドを定義する
             public function show_price() {
              echo $this->price;
             } 

         }
 
         // インスタンス化する
         $food = new Food('potato', 250 );
   
 
         // インスタンス$foodの各プロパティの値を出力する
         print_r($food);
         echo '<br>';
         $food->show_price();
         echo '<br>';
         ?>
     </p>
     <p>
         <?php
         // クラスを定義する
         class Animal {
             // プロパティを定義する                        
             public $name;
             public $price;
 
             // コンストラクタを定義する
             public function __construct(string $name, int $height, int $weight) {
                 $this->name = $name;
                 $this->height = $height;
                 $this->weight = $weight;
             }
             // メソッドを定義する
             public function show_height() {
             echo $this->height;
            } 
         }
 
         // インスタンス化する
         $animal = new Animal('dog', 60, 5000);
 
         // インスタンス$animalの各プロパティの値を出力する
         print_r($animal);
         echo '<br>';
         $animal->show_height();
         echo '<br>';
         ?>
     </p>
</body>

</html>