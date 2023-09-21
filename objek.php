<?php

class kdrama{
    
    public $judul;
    public $gendre;
    public $episode;
    public function __construct($judul, $gendre, $episode){
        $this->judul = $judul;
        $this->gendre = $gendre;
        $this->episode = $episode;
    }
    public function showKdrama(){
        return "judul drama yg ditonton $this->judul dramanya gendre $this->gendre dan $this->episode eps";
    }
}

$nama = new kdrama("2521", "sad end", "16");
print $nama->showKdrama();

?>