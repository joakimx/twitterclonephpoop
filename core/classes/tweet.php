<?php
class Tweet extends User {
    /**
     * @var PDO
     */
    protected $pdo;

    public function __construct($pdo)
    {
        if (!$this->pdo = $pdo){
            echo "Null";
        } else {
            echo "No errors";
        }

    }
}
?>