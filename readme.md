#niwatako/WordpressThemeDevelop

CentOS6.5 64bit for Virtualbox. GuestAdditions installed.

##環境
Wordpressが稼働するサーバー環境が用意されています。

	yum install httpd mysql-server php php-mysql php-mbstring php-xml
VagrantBoxはこちらのものです([niwatako/CentOS65WordpressBox](https://vagrantcloud.com/niwatako/CentOS65WordpressBox) )
##使い方
###WordPress
wordpressディレクトリに使用したいバージョンのWordPressを展開し、設定済みのwp-config.phpをコピーします。

	# WordPress 3.9.1 を wordpress ディレクトリに取得
	# github.com/WordPress/WordPressはWordPresssのSVNのミラーです。
	rm -rf wordpress
	git clone --branch 3.9.1 https://github.com/WordPress/WordPress.git wordpress
	
	# wp-config.phpをコピー
	cp wp-config.php wordpress/wp-config.php

###Theme
既存の開発中テーマがある場合、ThemeProjectディレクトリと置き換えます。

もし新規に開発する場合、[HTML5-Reset-WordPress-Theme](https://github.com/murtaugh/HTML5-Reset-WordPress-Theme) をベースに開発することをおすすめします。その場合は次のようにThemeProjectという名前でHTML5-Reset-WordPress-Themeを取得します。

	rm -rf ThemeProject
    git clone https://github.com/murtaugh/HTML5-Reset-WordPress-Theme.git ThemeProject

###vagrant up

	vagrant up

http://localhost:8080/　にアクセスするとWordPressの初期設定画面になります。

[テーマユニットテストデータXML(英語)](https://wpcom-themes.svn.automattic.com/demo/theme-unit-test-data.xml) （[日本語テストデータ](https://github.com/jawordpressorg/theme-test-data-ja) ）をインポートすればテーマの動作確認に必要なサンプルデータを表示しながらテーマを開発することが出来ます。

##詳しい説明
次のファイル、ディレクトリが含まれています。

* README.md
* ThemeProject
* Vagrantfile
* wordpress
* wp-config.php

###各ディレクトリ・ファイルについて

####REAMDE.md
このファイルです。
####ThemeProject
このディレクトリの中でテーマを開発します。WordPress本体のwp-content/themes/の中にマウントされるので、WordPress管理画面からこのディレクトリで開発しているテーマを選択することが出来ます。
####Vagrantfile
Vagrantの設定が記載されています。
####wordpress
WordPress本体のディレクトリです。初期状態では、WordPressは
####wp-config.php
Vagrant仮想マシン内で動いているMySQLデータベースに接続するためのWordPressの設定が記載されたwp-config.phpです。これをWordPress本体にコピーすることですぐにWordpressを動かすことが出来ます。