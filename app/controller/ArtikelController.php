<?php

namespace Aztech\controller;

use Aztech\Connection as Connection;

//require here
// require_once 'model/News.php';

class ArtikelController {

    private $pdo = NULL;
    private $id = NULL;

    public function __construct($pdo,$id) {
        $this->pdo = Connection::get()->connect();
        $this->id = $id;
    }

    public function handleRequest() {
        try {
            $this->showArticle( $this->id);
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Galat aplikasi", $e->getMessage());
        }
    }

    public function showArticle( $id)
    {
        // $id = isset($_GET['id'])?$_GET['id']:NULL;
        // if ( !$id ) {
        //     throw new Exception('Kesalahan Internal');
        // }
        // $beritass = $this->berita->getDataBeranda();
        $stmt = $this->pdo->query('SELECT 
        tb_artikel.id, 
        tb_artikel.judul, 
        tb_artikel.isi_artikel, 
        tb_artikel.id_kategori, 
        tb_artikel.tanggal_artikel, 
        tb_artikel.slug, 
        tb_artikel.foto_headline, 
        tb_penulis.nama, 
        tb_penulis.id, 
        tb_artikel.id_penulis
      FROM 
        public.tb_artikel, 
        public.tb_penulis
      WHERE 
        tb_artikel.id_penulis = tb_penulis.id and tb_artikel.id = '. $id . ';');
        $artikel = $stmt->fetch(\PDO::FETCH_ASSOC);
        // while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
        //     $artikel = [
        //         'judul' => $row['judul'],
        //         'isi_artikel' => $row['isi_artikel'],
        //         'id_kategori' => $row['id_kategori'],
        //         'id_penulis' => $row['id_penulis'],
        //         'tanggal_artikel' => $row['tanggal_artikel'],
        //         'slug' => $row['slug'],
        //         'nama_penulis' => $row['']

        //     ];
        // }
        // var_dump($berita);
        
        include __DIR__ . '/../view/artikel.php';
    }

    public function showError($title, $message) {
        include 'view/error.php';
    }
}
?>