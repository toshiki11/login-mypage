<?php
session_start();
if (isset($_SESSION['id'])){
    header("Location:mypage.php");
}

?>
<!DOCATYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページの登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

<body>
    <header>
        <img src="4eachblog_logo.jpg">
    </header>

    <main>
        <form action="mypage.php" method="post">
            <div class="form_contents">
                    <div class="mail">
                       <label>メールアドレス</label><br>
                            <input type="text" class="formbox" size="68" name="mail" value="<?php echo $_COOKIE['mail']; ?>">
                        </div>
                    <div class="password">
                        <label>パスワード</label><br>
                            <input type="password" class="formbox" size="68" value="<?php echo $_COOKIE['password']; ?>" name="password" valueid="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                        </div>
                        <div class="save">
                            <input type="checkbox" class="formbox" name="login_keep" value="login_keep">
                            <?php
                            if (isset($_SESSION['id'])){
                                echo "checked= 'checked'";
                            }
                            ?>
                            ログイン状態を保持する。
                        </div>
                    <div class="toroku">
                        <input type="submit" class="submit_button" size= "35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
    <footer>
    ©️　2018 InterNous.inc. All rights reserved
    </footer>
    </body>
    </html>