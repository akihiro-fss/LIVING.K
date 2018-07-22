<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'living_k');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'root');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zw6%N@>2q.J=<IrYG[=v%{aN@c8ILH}R|i+3hR)UJz14eRHV!YY;uUo5`HvRNVRd');
define('SECURE_AUTH_KEY',  'cVH`kl|_.H}m!.ga[FK>d&o6:-YqQgaMx! (^CY&%R!u<; (2&]aegBcuTo]ZU{F');
define('LOGGED_IN_KEY',    ':s=0+}vhP%+q8VSbuY~Cz`@9{F[Nc+7ZQ<z21>kQer7(5~u<E`{=d2%xXIItPFlL');
define('NONCE_KEY',        ':nRd89rz.NgvPYx2+yi{QGTE0N}AT OD{dys1}Mv]c|vk:Cc1Cy=rZ%l zv[Lb3M');
define('AUTH_SALT',        '/ob{%x];Rgw)DnXc=EG|(y:&lmoZg{w#u6Puor SkPw-d(tig]7Ihbo2T&D<d  :');
define('SECURE_AUTH_SALT', 'HWaPWMQ(SH=tZEDb8~]Zi?ieJ2(ZM+~$eJ=sg8cMbdx f.Ug[&[B=oN o:6)[ARP');
define('LOGGED_IN_SALT',   '0w@pODx@/x8YY3V$rk45AMVouq)Y|BGIr;VzWE^VQ1VzfVH2%|{uf7C2stK$1|o!');
define('NONCE_SALT',       'Cwio;h]%&bhVGW+mG}pIO2k@(+9^d$4Ga~F. D<*6?Li^^m+ 6Pg=|mh<&-iLqL$');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'LK_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
