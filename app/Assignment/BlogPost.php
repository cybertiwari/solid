<?php
namespace App\Assignment;

use App\Assignment\Model\Author;

class BlogPost
{
    private $author;
    private $title;
    private $content;
    protected \DateTime $date;

    public function __construct(
        Author $author
    ) {
        $this->author = $author;
        $this->title = "Test Title";
        $this->content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, vero.";
    }

    public function getData(): array
    {
        return [
            'author' => $this->author->fullName(),
            'title' => $this->title,
            'content' => $this->content,
        ];
    }

    public function getJson()
    {
        return json_encode($this->getData());
    }

    public function getHtml()
    {
        return "<article>
                    <h1>".$this->title."</h1>
                    <article>
                        <p>".$this->author->fullName()."</p>
                        <p>".$this->content."</p>
                    </article>
                </article>";
    }
}

