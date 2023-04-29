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
    <!-- スタッフ情報を消去する為の処理 -->
    <?php
      // エラー発生時にエラーメッセ時を表示
      try
      {
        // HTTP POSTリクエストで送信されたフォームのcodeフィールドから値を取得
        // $staff_code変数に割り当てます
        $staff_code =$_POST['code'];
        
        // PDOオブジェクトが使用するデーターソース名、ホスト名、
        // 文字エンコーディングを含むDSN(データベースに接続するために必要な情報を含む文字列)を設定しています
        $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8mb4';
        $user = 'root';
        $password = 'araiofficeDaisaku208';
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          

        // データーベースからデータを削除する為の処理
        $sql = 'DELETE FROM mst_staff WHERE code=?';
        $stmt = $dbh->prepare($sql);
        $data[] = $staff_code;
        $stmt->execute($data);
        
        $dbh = null;
        // リダイレクト

        header('Location: staff_list.php');
     
        exit();
      }

      // tryブロック内で例外が発生したときにエラーメッセージを表示(ただいま節電中の為サーバー不通でござるWw)して
      // プログラムを終了する為のエラーハンドリング処理
      catch (Exception $e)
      {
        print 'ただいま節電中の為サーバー不通でござるWw';
         exit();
      }

    ?> 
    <h1>抹消しました手数料１００円</h1><br><br>
      
    <a href="staff_list.php">スタッフ一覧に戻る</a>

  </body>
</html>