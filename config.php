<?php
 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/

    define('DB_HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME','MIS');


    // define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',dirname(__FILE__));
    
    defined("LOGIN_PATH")
        or define("LOGIN_PATH", realpath(dirname(__FILE__) . '/public_html'));

    defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/resources/library'));
         
    defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/resources/templates'));

    defined("PAGES_PATH")
        or define("PAGES_PATH", realpath(dirname(__FILE__) . '/resources/pages'));

    defined("CLASS_PATH")
        or define("CLASS_PATH", realpath(dirname(__FILE__) . '/resources/class'));

    defined("FUNCTIONS_PATH")
        or define("FUNCTIONS_PATH", realpath(dirname(__FILE__) . '/resources/functions'));

    defined("INCLUDES_PATH")
        or define("INCLUDES_PATH", realpath(dirname(__FILE__) . '/resources/includes'));
    
    defined("IMAGES_PATH")
        or define("IMAGES_PATH", realpath(dirname(__FILE__).'/public_html/img'));   

    defined("MODALS_PATH")
        or define("MODALS_PATH", realpath(dirname(__FILE__).'/resources/modals'));    


    // admin paths
    define("AROOT",realpath(dirname(__FILE__) . '/public_html/admin'));

    defined("AINCLUDES_PATH")
        or define("AINCLUDES_PATH",realpath(AROOT . '/includes'));
    
    defined("APAGES_PATH")
        or define("APAGES_PATH",realpath(AROOT . '/pages'));

    defined("ATEMPLATES_PATH")
        or define("ATEMPLATES_PATH",realpath(AROOT . '/templates'));

    defined("AVENDOR_PATH")
        or define("AVENDOR_PATH",realpath(AROOT . '/vendor'));
    
    defined("AJS_PATH")
        or define("AJS_PATH",realpath(AROOT . '/js'));

    defined("AFUNCTIONS_PATH")
        or define("AFUNCTIONS_PATH",realpath(AROOT . '/functions'));

 



    define("TROOT",realpath(dirname(__FILE__) . '/public_html/tutor_profile'));

  
    defined("COMPONENTS_PATH")
        or define("COMPONENTS_PATH",realpath(TROOT . '/components'));
 
?>