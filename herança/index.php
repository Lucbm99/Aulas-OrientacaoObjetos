<?php 

class Post {
    private $id;
    private $likes = 0;

    protected function setId($i) {
        $this->id = $i;
    }

    public function getId() {
        return $this->id;
    }

    protected function setLikes($l) {
        $this->likes = $l;
    }

    public function getLikes() {
        return $this->likes;
    }

}

class Foto extends Post {
    private $url; 

    public function __construct($id) {
        $this->setId($id);
        $this->setLikes(77);
    }

    // public function setLikes($n) {
    //     echo 'chamou!';
    // }

    public function setUrl($u) {
        $this->url = $u;
    }

    public function getUrl() {
        return $this->url;
    }
}

class Texto extends Post {
    private $body; 

    
}


$foto = new Foto(20);
$foto->setUrl('abc');

echo "FOTO #".$foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();