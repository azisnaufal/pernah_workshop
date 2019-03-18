<?php

namespace Aztech\controller;

use Aztech\Connection as Connection;

//require here
// require_once 'model/News.php';

class BeritaController {

    private $berita = NULL;
    private $pdo = NULL;

    public function __construct($pdo) {
        $this->pdo = Connection::get()->connect();
    }

    public function handleRequest() {
        try {
            $this->beranda();
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Galat aplikasi", $e->getMessage());
        }
    }

    public function beranda()
    {
        // $id = isset($_GET['id'])?$_GET['id']:NULL;
        // if ( !$id ) {
        //     throw new Exception('Kesalahan Internal');
        // }
        // $beritass = $this->berita->getDataBeranda();
        $stmt = $this->pdo->query('SELECT * from tb_artikel where trending = 1 limit 3');
        $carousel = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $carousel[] = [
                'id' => $row['id'],
                'judul' => $row['judul'],
                'isi_artikel' => $row['isi_artikel'],
                'id_kategori' => $row['id_kategori'],
                'id_penulis' => $row['id_penulis'],
                'tanggal_artikel' => $row['tanggal_artikel'],
                'slug' => $row['slug'],
                'foto_headline' => $row['foto_headline'], 
                'trending' => $row['trending'],
            ];
        }
        
        $stmt = $this->pdo->query('SELECT * from tb_artikel where id_kategori = 1 limit 5');
        $fotografi = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $fotografi[] = [
                'id' => $row['id'],                
                'judul' => $row['judul'],
                'isi_artikel' => $row['isi_artikel'],
                'id_kategori' => $row['id_kategori'],
                'id_penulis' => $row['id_penulis'],
                'tanggal_artikel' => $row['tanggal_artikel'],
                'slug' => $row['slug'],
                'foto_headline' => $row['foto_headline'], 
                'trending' => $row['trending'],
            ];
        }

        $stmt = $this->pdo->query('SELECT * from tb_artikel where id_kategori = 2 limit 5');
        $hardwares = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $hardwares[] = [
                'id' => $row['id'],                
                'judul' => $row['judul'],
                'isi_artikel' => $row['isi_artikel'],
                'id_kategori' => $row['id_kategori'],
                'id_penulis' => $row['id_penulis'],
                'tanggal_artikel' => $row['tanggal_artikel'],
                'slug' => $row['slug'],
                'foto_headline' => $row['foto_headline'], 
                'trending' => $row['trending'],
            ];
        }

        $stmt = $this->pdo->query('SELECT * from tb_artikel where id_kategori = 3 limit 5');
        $softwares = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $softwares[] = [
                'id' => $row['id'],                
                'judul' => $row['judul'],
                'isi_artikel' => $row['isi_artikel'],
                'id_kategori' => $row['id_kategori'],
                'id_penulis' => $row['id_penulis'],
                'tanggal_artikel' => $row['tanggal_artikel'],
                'slug' => $row['slug'],
                'foto_headline' => $row['foto_headline'], 
                'trending' => $row['trending'],
            ];
        }

        // var_dump($berita);
        
        include __DIR__ . '/../view/beranda.php';
    }

    public function showError($title, $message) {
        include 'view/error.php';
    }

    public function base_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
        if (isset($_SERVER['HTTP_HOST'])) {
            $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
            $hostname = $_SERVER['HTTP_HOST'];
            $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

            $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
            $core = $core[0];

            $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
            $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
            $base_url = sprintf( $tmplt, $http, $hostname, $end );
        }
        else $base_url = 'http://localhost/';

        if ($parse) {
            $base_url = parse_url($base_url);
            if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
        }

        return $base_url;
    }
    
}
?>