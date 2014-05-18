<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>テーマを用意して下さい</title>
    </head>
    <body>
    	<h1>テーマを用意して下さい</h1>
    	<p>Vagrantfileと同じ階層にあるThemeProjectディレクトリが、<br />
    	wordpress/wp-content/themesの中にマウントされます。</p>
    	
    	<p>いちからテーマを作成する場合、<br />
    	HTML5で書かれたリセットCSS付きのWordpress用テーマ・テンプレート<br />
    	<a href="https://github.com/murtaugh/HTML5-Reset-WordPress-Theme">HTML5-Reset-WordPress-Theme</a>が便利です。</p>
    	
    	<p>rm -rf ThemeProject<br />
    	git clone https://github.com/murtaugh/HTML5-Reset-WordPress-Theme.git ThemeProject<br />
    	vagrant up
</p>
    </body>
</html>
