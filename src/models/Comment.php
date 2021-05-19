<?php
    namespace App\src\models;

class Comment{
    //! Propriétés
        /**
     * Id of comment.
     *
     * @var int
     */
    private $id;

        /**
     * content of comment.
     *
     * @var string
     */
    private $content;

        /**
     * author name of comment.
     *
     * @var string
     */
    private $author_name;

    /**
     * author mail of comment.
     *
     * @var string
     */
    private $author_mail;

        /**
     * Creation Date of comment.
     *
     * @var DateTime
     */
    private $created_at;

    //! Méthodes magiques et de construction

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $dataforObj)
    {
        foreach ($dataforObj as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->{$method}($value);
            }
        }
    }

    //! Méthodes Getters & Setters
    /**
     * Get creation Date of comment.
     *
     * @return  DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set creation Date of comment.
     *
     * @param  DateTime  $created_at  Creation Date of comment.
     *
     */
    public function setCreatedAt(\DateTime $created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * Get author mail of comment.
     *
     * @return  string
     */
    public function getAuthorMail()
    {
        return $this->author_mail;
    }

    /**
     * Set author mail of comment.
     *
     * @param  string  $author_mail  author mail of comment.
     *
     */
    public function setAuthorMail(string $author_mail)
    {
        if(!empty($author_name)){
            $this->author_mail = $author_mail;
        }
    }

    /**
     * Get author name of comment.
     *
     * @return  string
     */
    public function getAuthorName()
    {
        return $this->author_name;
    }

    /**
     * Set author name of comment.
     *
     * @param  string  $author_name  author name of comment.
     *
     */
    public function setAuthorName(string $author_name)
    {
        if(!empty($author_name)){

        }
        $this->author_name = $author_name;
    }

    /**
     * Get content of comment.
     *
     * @return  string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set content of comment.
     *
     * @param  string  $content  content of comment.
     *
     */
    public function setContent(string $content)
    {
        if (strlen($content) > 5) {
            $this->content = $content;
        }
    }

    /**
     * Get id of comment.
     *
     * @return  int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id of comment.
     *
     * @param  int  $id  Id of comment.
     *
     */
    public function setId(int $id)
    {
        if ($id > 0) {
            $this->id = $id;
        }
    }
}