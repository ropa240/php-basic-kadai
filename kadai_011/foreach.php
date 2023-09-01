<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
 </head>
 
 <body>
     <p>
         <?php
         $personal_data = ['name' => '玉ねぎ', 'price' => 200, 'area' => '北海道'];
         foreach ($personal_data as $key => $value) {
         echo "{$key}:{$value}" . '<br>';
         }
         ?>
     </p>
 </body>
 
 </html>