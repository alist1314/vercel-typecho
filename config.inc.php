<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new \Typecho\Db('Pdo_Pgsql', 'typecho_');
$db->addServer(array (
  'host' => 'db.prisma.io',
  'port' => 5432,
  'user' => '1c7a69b07ebd33c8b3b96ad5c5a6720188dc96bfd74753556d401fd7c8f432e9',
  'password' => 'sk_zdswG0DOarVbeRoum_42T',
  'charset' => 'utf8',
  'database' => 'postgres',
  'sslVerify' => true,
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
