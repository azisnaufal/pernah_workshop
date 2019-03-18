<?php
 
require 'vendor/autoload.php';
use Aztech\controller\BeritaController as BeritaController;
use Aztech\controller\ArtikelController as ArtikelController;
use Aztech\controller\TrendingController as TrendingController;
use Aztech\controller\SoftwareController as SoftwareController;
use Aztech\controller\HardwareController as HardwareController;
use Aztech\controller\FotografiController as FotografiController;

 
use Aztech\Connection as Connection;
 
// try {
//     Connection::get()->connect();
//     echo 'A connection to the PostgreSQL database sever has been established successfully.';
// } catch (\PDOException $e) {
//     echo $e->getMessage();
// }

// $op = isset($_GET['r'])?$_GET['r']:NULL;
$rt = $_SERVER['PHP_SELF'];
$rt = explode('/',$rt);

try {
    if (empty($rt[2])){
        $pdo = Connection::get()->connect();
        $controller = new BeritaController($pdo);
        $controller->handleRequest();
    } elseif ( $rt[2] == 'berita' ) {
        $pdo = Connection::get()->connect();
        $controller = new ArtikelController($pdo, $rt[3]);
    	$controller->handleRequest();
    }
    elseif ( $rt[2] == 'trending' ) {
        $pdo = Connection::get()->connect();
        $controller = new TrendingController($pdo);
    	$controller->handleRequest();
    }
    elseif ( $rt[2] == 'software' ) {
        $pdo = Connection::get()->connect();
        $controller = new SoftwareController($pdo);
    	$controller->handleRequest();
    }
    elseif ( $rt[2] == 'hardware' ) {
        $pdo = Connection::get()->connect();
        $controller = new HardwareController($pdo);
    	$controller->handleRequest();
    }
    elseif ( $rt[2] == 'fotografi' ) {
        $pdo = Connection::get()->connect();
        $controller = new FotografiController($pdo);
    	$controller->handleRequest();
    } else {
        echo "Halaman tidak ditemukan";
    }
} catch ( Exception $e ) {
    // some unknown Exception got through here, use application error page to display it
    echo "pesan kesalahan : " . $e->getMessage();
}

?>