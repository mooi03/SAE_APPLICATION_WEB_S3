<?php
class ConnexionBaseDeDonnees
{
    private $host = "localhost";
    private $user = "root";
    private $password = "tutu";
    private $connection;

    public function __construct()
    {
        $this->connection = $this->initialiserConnexion();
    }

    private function initialiserConnexion()
    {
        $connection = mysqli_connect($this->host, $this->user, $this->password) or die ("erreur");
        $db = "bd_sae";
        $connectdb = mysqli_select_db($connection, $db) or die ("erreur");
        return $connection;
    }

    public function getConnection() {
        return $this->connection;
    }


}

