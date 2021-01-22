<?php

$databases = array();

$config_directories = array();
$config_directories['sync'] = 'sites/default/sync';

$settings['hash_salt'] = 'dKPadu0eGrl8Vaun7PTWMShsdh7l1uCpdQvCK-ibpFuBoXKP0VX8b82yQx49XsyBWrEIAniaqw';
$settings['update_free_access'] = FALSE;


$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$databases['default']['default'] = array (
  'database' => 'outlands_civicrm',
  'username' => 'root',
  'password' => '12345',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['file_public_path'] = 'sites/default/files';

$conf['404_fast_paths_exclude'] = '/\/(?:styles)|(?:system\/files)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
