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
      スタッフ追加<br>
      <br>
      <form method="post" action ="staff_add_check.php">
          スタッフ名を入力してください<br>
          <input type="text" name="name" style="width:200px"><br>
          パスワードを入力してください<br>
          <input type="text" name="pass" style="width:100px"><br>
          パスワードをもう一度入力してください念のため本当に最後にもう一度
          <input type="text" name="pass2" style="width:100px"><br>
          <br>
          <input type="button" onclick="history.bock()" value="もどる">
          <input type="submit" value="OK">
      </form>
  </body>
</html>