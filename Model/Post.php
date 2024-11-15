<?php
class Post{
    private ?string $title;
    private ?string $category;
    private ?DateTime $post_date;
    private ?int $user_id;
    private ?int $id_post;
    private ?string $content;

    
    

    public function __construct( ?string $title, ?int $user_id, ?DateTime $post_date,?string $category,?string $content) {
        $this->title = $title;
        $this->post_date = $post_date;
        $this->category = $category;
        $this->user_id = $user_id;
        $this->content = $content;
    }

    
    public function getIdpost(): ?int {
        return $this->id_post;
    }

    public function setIdpost(?int $id_post): void {
        $this->id_post = $id_post;
    }
    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(?string $title): void {
        $this->title = $title;
    }
    public function getpostDate(): ?DateTime {
        return $this->post_date;
    }

    public function setpostDate(?DateTime $post_date): void {
        $this->post_date = $post_date;
    }
    public function getCategory(): string {
        return $this->category;
    }

    public function setCategory(string $category): void {
        $this->category = $category;
    }
    public function getuserid(): ?int {
        return $this->user_id;
    }
    public function setuserid(?int $user_id): void {
        $this->user_id = $user_id;
    }
    
    
}
?>