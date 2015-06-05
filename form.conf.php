<?php

define('HYB_TO', 'info@hyberia.ca');
define('HYB_CC', '');
define('HYB_BCC', '');

define('HYB_REDIRECT', 'http://hyberia.ca');

define('HYB_ROOT_DIR',dirname(__FILE__));
define('HYB_SAVE_FILE', HYBERIA_ROOT_DIR . '/form-data-log.php'); //save submitted data to this file.

define('HYB_CHARSET','UTF-8');
define('HYB_MAIL_TYPE','html');
define('HYB_ACTION','mailandfile');

//smtp options
define('HYB_USE_SMTP','N');
define('HYB_SMTP_HOST','');
define('HYB_SMTP_USER','');
define('HYB_SMTP_PASSWORD','');
define('HYB_SMTP_PLAIN_PASSWORD','');
define('HYB_SMTP_PORT','');
define('HYB_SMTP_SECURE','');

//ReCaptcha settings
define( 'RECAP_SITE_KEY' , "6LfuNgcTAAAAAJq5uj9u8O_u2VO7wb7ixETtU355" );
define( 'RECAP_SECRET_KEY' , "6LfuNgcTAAAAAEi0jaU7adh3YXFwVBgnyMduDxRI" );
define( 'RECAP_LANGUAGE' , "en" );
define( 'RECAP_THEME' , "light" );


define('HOST_NAME',getEnv('SEVER_NAME'));
define('PHP_SELF',getEnv('SCRIPT_NAME'));
define('HYB_LFCR', hyberia_linebreak());


function hyberia_linebreak(){
    $os = strtolower(PHP_OS);
    switch( true ){
        case ("\\" == DIRECTORY_SEPARATOR) : // windows
            return "\x0d\x0a" ;
        case ( strpos($os, 'darwin') !== false ) : // Mac
            return "\x0d" ;
        default :
            return "\x0a" ; // *nix
    };
}
?>