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
      // ｔｒｙプログラム内での発生する例外をキャッチして適切なエラーハンドリングを行うための構文
      try
      {
        // データーベー接続
        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
        $user ='root';
        $password ='araiofficeDaisaku208';
        $dbh = new PDO($dsn, $user, $password);

        // try設定
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        // レコードを指定
        $sql ='SELECT code,name FROM mst_staff WHERE code=?';

        // SQL文を実行するための準備
        $stmt = $dbh->prepare($sql);
        $staff_code = $_GET['staffcode'];
        $data[] = $staff_code;
      
        // SQL文を実行し結果を取得
        $stmt->execute($data);
        
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $staff_name=$rec['name'];


        // データーベース接続終了
        $dbh = null;
      
      }
      // tryブロック内でエラーがしたときユーザに表示、プログラムの実行を終了
      catch(Exception $e)
      { 
        print 'ただいま障害の為大変ご迷惑かけしておりす。';
        exit();
      } 
      ?>     
      スタッフ抹消<br>
      <br>
      スタッフコード<br>
      <?php print $staff_code; ?>
      <br>
      スタッフ名<br>
      <?php print $staff_name;?>
      <br>
      このスタッフを解雇しますか本当に？
      <br>
      <form method="post" action="staff_delete_done.php">
        <input type="hidden" name="code" value="<?php print $staff_code;?>">
       
          <input type="button" onclick="history.back()" value="戻る">
          
          <input type="submit" value="OK">
      </form>

  </body>
</html>