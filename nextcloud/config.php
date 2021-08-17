<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' =>
  array (
    0 =>
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 =>
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocp1phr3oizk',
  'passwordsalt' => 'y3JGkru+i4Fna6mjNoAFlRZTe8a5MP',
  'secret' => 'kPPPMjyKMzUOlyWi8h6MC1/1/SH0xVsWPpqVjRRwnB1N6E36',
  'trusted_domains' =>
  array (
    0 => '192.168.80.195:8181',
	1 => '113.161.85.66:8181',
    2 => 'local.lifetechvn.net:8181',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '16.0.1.1',
  'overwrite.cli.url' => 'http://192.168.80.195:8181',
  'dbname' => 'nextcloud',
  'dbhost' => '192.168.80.195',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'oc_admin',
  'dbpassword' => 'PKDTvr3Ykg0Migt1LomrDJ7xNkXrSv',
  'installed' => true,
  'mail_smtpmode' => 'smtp',
  'mail_smtpsecure' => 'tls',
  'mail_sendmailmode' => 'smtp',
  'mail_from_address' => 'noreply',
  'mail_domain' => 'lifetechvn.net',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => 'smtp.gmail.com',
  'mail_smtpport' => '587',
  'mail_smtpname' => 'noreply@hoanmy.net',
  'mail_smtppassword' => 'h0@nmySo',
);
?>