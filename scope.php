<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         $user_name = '侍華子'；
         function show_user_name() {
             // ローカル変数を定義する
             $user_name = '侍太郎';
 
             // ローカルスコープの範囲内でローカル変数を使う
             echo $user_name . '<br>';
         }
 
         show_user_name();
      echo $user_name;
         ?>
     </p>
 </body>
 
 </html>
