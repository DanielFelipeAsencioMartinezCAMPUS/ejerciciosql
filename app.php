<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use data\usedata;
    $db = new Database();
    $conn = $db->get_Connection('mysql');
    usedata::setConn($conn);
?>