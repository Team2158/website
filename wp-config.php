<?php
# Database Configuration
define('DB_NAME','wp_jwsperry');
define('DB_USER','jwsperry');
define('DB_PASSWORD','QGqpXhmsn6ugLajkM1PG');
define('DB_HOST','127.0.0.1');
define('DB_HOST_SLAVE','localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'o-=0rw}i3y,O>2f/F}mF+d.R5@=M-Of-h#+@FHcIbf,+t9}(&++.J&fxQTuNW*_J');
define('SECURE_AUTH_KEY',  ',N,DI@j)+Emv_[rTt&c$F&S<!-7fOpYk?mE4SY1of1jp#*IU f0i|AeO~M>3$G46');
define('LOGGED_IN_KEY',    'z #vRgt|zgKYEb|$+LmjW|/4C?O]y7%~gZ1|D}L)p3IiJk@-U<wo+ Qf+*Zz-$MP');
define('NONCE_KEY',        'v>b%H{pkdS+K+<0E}MrKg++D(-^agzw||mm9wK?kW+4tUiz61oAFMl[8)WYn.vq$');
define('AUTH_SALT',        '>*5bq7-.-r-j/|L<i-wB9o_$pvC(q;H}V:sJ`|c-pGJ =U)mE33[,[L9{3cNsl;0');
define('SECURE_AUTH_SALT', '&r-_Vg`#_;WF!P+H1S({_wO&7.Q@udv0s%hb1Y,Q7+/7L>W2;W*BicX*0m=BC10)');
define('LOGGED_IN_SALT',   'NRKyJn+FJu:;]THIO+B)9(u@$FZjY:@fR{RNHg YrW&pU5z~AP~^9{af(oQdAQZF');
define('NONCE_SALT',       'q>#aU:Sk mXgH8:>:9l8U[gN+KXRXb]kuTDL~(6FsqA+q*7,_$wrE4.-j>n-~-5l');


# Localized Language Stuff

define('WP_CACHE',TRUE);

define('WP_AUTO_UPDATE_CORE',false);

define('PWP_NAME','jwsperry');

define('FS_METHOD','direct');

define('FS_CHMOD_DIR',0775);

define('FS_CHMOD_FILE',0664);

define('PWP_ROOT_DIR','/nas/wp');

define('WPE_APIKEY','23209e45e2abd900e0f056fa17f873562fd23f27');

define('WPE_FOOTER_HTML',"");

define('WPE_CLUSTER_ID','1594');

define('WPE_CLUSTER_TYPE','pod');

define('WPE_ISP',true);

define('WPE_BPOD',false);

define('WPE_RO_FILESYSTEM',false);

define('WPE_LARGEFS_BUCKET','largefs.wpengine');

define('WPE_CDN_DISABLE_ALLOWED',true);

define('DISALLOW_FILE_EDIT',FALSE);

define('DISALLOW_FILE_MODS',FALSE);

define('DISABLE_WP_CRON',false);

define('WPE_FORCE_SSL_LOGIN',false);

define('FORCE_SSL_LOGIN',false);

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define('WPE_EXTERNAL_URL',false);

define('WP_POST_REVISIONS',FALSE);

define('WPE_WHITELABEL','wpengine');

define('WP_TURN_OFF_ADMIN_BAR',false);

define('WPE_BETA_TESTER',false);

umask(0002);

$wpe_cdn_uris=array ();

$wpe_no_cdn_uris=array ();

$wpe_content_regexs=array ();

$wpe_all_domains=array (  0 => 'jwsperry.wpengine.com',  1 => 'andersonengineering.org',  2 => 'www.andersonengineering.org',);

$wpe_varnish_servers=array (  0 => 'pod-1594',);

$wpe_ec_servers=array ();

$wpe_largefs=array ();

$wpe_netdna_domains=array ();

$wpe_netdna_push_domains=array ();

$wpe_domain_mappings=array ();

$memcached_servers=array ();
define('WPLANG','');

# WP Engine ID


define('PWP_DOMAIN_CONFIG', 'andersonengineering.org' );

# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
