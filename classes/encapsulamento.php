<?php
//existe a ideia de um post
class Post {
    public $id;
    public $likes = 0;
    public $comments = [];
    private $author = '';

    public function aumentarLike() {
        $this->likes++;
    }
    
    public function setAuthor($n) {
        if(strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
    }

    public function getAuthor() {
        return $this->author ?? 'Visitante';
    }
}

$post1 = new Post();
$post1->setAuthor('pi');

$post2 = new Post();
$post2->setAuthor('Fulano');

echo "POST 1: ".$post1->likes." - likes - ".$post1->getAuthor()."<br>";
echo "POST 2: ".$post2->likes." - likes - ".$post2->getAuthor()."<br>";

