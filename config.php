<?php

    /** caminho absoluto para a pasta do sistema **/
    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

    /** caminho no server para o sistema **/
    if (!defined('BASEURL')){
        define('BASEURL', '/SAA/');
    }

    /** O nome do banco de dados */ 
    define('DB_NAME', 'db_saa');

    /** Usuário do banco de dados MySQL */ 
    define('DB_USER', 'root');

    /** Senha do banco de dados MySQL */ 
    define('DB_PASSWORD', '');

    /** nome do host do MySQL */ 
    define('DB_HOST', 'localhost');

    /** caminhos dos alertas de operacoes**/
    define('ALERT_MSG', ABSPATH . 'inc/alert.php');

    /** caminhos dos templates de header do usuário administrador**/
    define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');

    /** caminhos dos templates de footer dos usuário**/
    define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

    /** caminho do arquivo de banco de dados **/	
    if ( !defined('DBAPI') )		
        define('DBAPI', ABSPATH . 'inc/database.php');
    
    /** caminho para as funções do usuário **/
    if ( !defined('LOGIN') )		
        define('LOGIN', ABSPATH . 'model/login/funcoes.php');
    
    