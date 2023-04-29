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
      $staff_code=$_POST['code'];
      $staff_name=$_POST['name'];
      $staff_pass=$_POST['pass'];
      $staff_pass2=$_POST['pass2'];

      $staff_name= htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
      $staff_pass= htmlspecialchars($staff_pass,ENT_QUOTES,'UTF-8');
      $staff_pass2= htmlspecialchars($staff_pass2,ENT_QUOTES,'UTF-8');

      if($staff_name=='')
      {
        print'スタッフ名の入力がされてません。<br>';
      }
      else
      {
        print'スタッフ名 : ';
        print $staff_name;
        print '<br>';
      }

      if($staff_pass=='')
      {
        print 'パスワードが入力されてません。<br>';
      }

      if($staff_pass!=$staff_pass2)
      {
        print 'パスワードが一致しません<br>';  
      }

      if($staff_name==''||$staff_pass==''||$staff_pass!=$staff_pass2)
      {
        print'<form>';
        print'<input type="button" onclick="history.back()" value="戻る">';
        print'</form>';
      }
      else
      {
        $staff_pass=md5($staff_pass);
        print'<form method="post" action="staff_edit_done.php">';
        print'<input type="hidden" name="code" value="'.$staff_code.'">';
        print'<input type="hidden" name="name" value="' . $staff_name . '">';
        print'<input type="hidden" name="pass" value="'. $staff_pass . '">';
        print'<br>';
        print'<input type="button" onclick="history.back()" value="戻る">';
          
        print'<input type="submit" value="OK">';
        print'</form>';
      }
    }
    // tryブロック内でエラーがしたときユーザに表示、プログラムの実行を終了
    catch(Exception $e)
    { 
      print 'ただいま障害の為大変ご迷惑かけしておりす。';
      exit();
    } 
      ?>

      
         
  </body>
</html>


















