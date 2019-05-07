<?php



    // function __autoload($className){

    //     if(file_exists(ROOT . '/core' . '/' . $className . '.php')){
    //         require_once(ROOT . '/core' . '/' . $className . '.php');
    //     }elseif (ROOT . '/core' . '/' . $className . '.php') {
    //         require_once(ROOT . '/core' . '/' . $className . '.php');
    //     }elseif (ROOT . '/core' . '/' . $className . '.php') {
    //         require_once(ROOT . '/core' . '/' . $className . '.php');
    //     }

    // }



    require_once("config.php");     
    require_once(TEMPLATES_PATH . "/header.php");     
	require_once(CLASS_PATH . "/database.php");    
    require_once(CLASS_PATH . "/tutor.php");     
    require_once(CLASS_PATH . "/student.php");   
    require_once(CLASS_PATH . "/assignment.php");   
    require_once(CLASS_PATH . "/user.php");
	require_once(CLASS_PATH . "/login.php");
	require_once(CLASS_PATH . "/register_student.php");
    require_once(CLASS_PATH . "/register_tutor.php");
    require_once(CLASS_PATH . "/paginate.php");
    require_once(FUNCTIONS_PATH . "/functions.php");
    
?>