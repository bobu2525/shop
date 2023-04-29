<!-- <!DOCTYPE html>は、HTML文書の最初の行に書かれる宣言文で、
この文書がHTML5で書かれた文書であることを宣言します。 -->
<!DOCTYPE html>
<!-- このコードはHTML文書の開始を示す要素であり、lang属性を使用して、文書の言語が日本語であることを示します。 -->
<html lang="ja">
  <!-- HTML文書のヘッダー（head）に含まれる要素を定義します。 -->
  <head>
      <!-- このコードは、HTMLドキュメントで使用する文字コードを指定するためのmetaタグの1つで、UTF-8という文字コードを指定しています。 -->
      <meta charset="UTF-8">
      <!-- 「viewport」という名前の属性に、ブラウザでのページの表示方法に関する情報を指定することができます。 -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- このコードは、HTMLドキュメントのタイトルを設定するための要素であり、ブラウザーのタブや検索結果の見出しに表示されます。 -->
      <title>新井ファーム直売所</title>
      
      <!-- Google Fontsの読み込み -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
   </head>
  <body>
      <?php
      try
      {
      
      
          $staff_name = $_POST['name'];
          $staff_pass = $_POST['pass'];  
          $staff_name = htmlspecialchars($staff_name, ENT_QUOTES, 'UTF-8');
          $staff_pass = htmlspecialchars($staff_pass, ENT_QUOTES, 'UTF-8');
      
          $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8mb4';
          $user = 'root';
          $password = 'araiofficeDaisaku208';
          $dbh = new PDO($dsn, $user, $password);
          $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
          $sql = 'INSERT INTO mst_staff(name,password) VALUES (?, ?)';
          $stmt = $dbh->prepare($sql);
          $data = array($staff_name, $staff_pass);
          $stmt->execute($data);
      

      $dbh = null;

      print $staff_name;
      print 'さんを追加しました。<br>';

      }

      catch (Exception $e)
      {
        print 'ただいま節電中の為サーバー不通でござるWw';
        exit();
      }

      ?> 
      
      <a href="staff_list.php">戻る</a>

  </body>
</html>