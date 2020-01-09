<?php


class connectDB
{
    protected $dsn;
    protected $userName;
    protected $password;

    public function __construct($dsn, $userName, $password)
    {
        $this->dsn = $dsn;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function connect()
    {
        $conn = null;
        try{
            $conn = new PDO($this->dsn, $this->userName, $this->password);
        }
        catch (\Exception $e){
            return $e->getMessage();
        }
        return $conn;
    }
}