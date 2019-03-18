<?php

namespace Aztech\controller;

use Aztech\Connection as Connection;

//require here
// require_once 'model/News.php';

class SoftwareController {

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
        $stmt = $this->pdo->query('SELECT * from tb_artikel where id_kategori = 3');
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
        
        include __DIR__ . '/../view/software.php';
    }

    public function showError($title, $message) {
        include 'view/error.php';
    }
    
}
?>