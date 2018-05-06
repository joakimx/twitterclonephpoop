<?php
class Follow extends User {
    /**
     * @var PDO
     */
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
}
?>