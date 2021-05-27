<?php
//existe a ideia de um post
class Post {
    public $id;
    public $likes = 0;
    public $comments = [];
    public $author;

    // public function __construct($qtLikes = 0) {
    //     $this->likes = $qtLikes;
    // }

    public function __construct($postId) {
        $this->id = $postId;
        //consultar banco de dados para pegar informações do POST $id
        $this->likes = 12 * $postId; 
    }

    public function aumentarLike() {
        echo 'abc';
        $this->likes++;
    }

}

$post1 = new Post(1);
// $post1->aumentarLike();
// $post1->aumentarLike();

$post2 = new Post(2);
// $post2->aumentarLike();

echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes."<br>";

