<?php

class Cours {

    private $connection;

    public $validationErrors = [];

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->connection = mysqli_connect( DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME );
        $errorNum = mysqli_connect_errno();
        if( $errorNum ){
            $message = sprintf(
                'Failed to connect to MySQL with message : "%s".',
                mysqli_connect_error()
            );
            throw new Exception( $message, $errorNum );
        }
    }

    public function query( $sql )
    {
        $result = mysqli_query($this->connection, $sql);
        if( $result === false ){
            $message = sprintf(
                'Unable to execute query "%s". Message : "%s".',
                $sql,
                mysqli_error( $this->connection )
            );
            throw new Exception( $message );
        }
        return $result;
    }

    public function queryAll( $sql )
    {
        $result = $this->query($sql);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        mysqli_free_result($result);
        return $rows;
    }

    public function queryOne( $sql )
    {
        $result = $this->query( $sql );
        $row = mysqli_fetch_assoc( $result );
        mysqli_free_result( $result );
        return $row;
    }

    /**
     * Liste des cours
     */
    public function list()
    {
        return $this->queryAll( "SELECT * FROM cours" );
    }

    /**
     * Création d'un cours
     */
    public function create()
    {
        $sql = "INSERT INTO cours (name, description, url, duration, date, teacher) VALUES ('{$_POST['name']}', '{$_POST['description']}', '{$_POST['url']}', '{$_POST['duration']}', '{$_POST['date']}', '{$_POST['teacher']}')";
        return $this->query( $sql );
    }

    public function validate() 
    {
        // Nom
        if( !isset($_POST['name']) || empty($_POST['name']) )
        {
            $this->validationErrors['name'] = 'Nom requis';
        }
        // Description
        if( !isset($_POST['description']) || empty($_POST['description']) )
        {
            $this->validationErrors['description'] = 'Description requise';
        }
        // URL
        if( !isset($_POST['url']) || empty($_POST['url']) )
        {
            $this->validationErrors['url'] = 'URL requise';
        } else if ( !filter_var($_POST['url'], FILTER_VALIDATE_URL) ) {
            $this->validationErrors['url'] = 'URL non valide.';
        }
        // Durée
        if( !isset($_POST['duration']) || empty($_POST['duration']) )
        {
            $this->validationErrors['duration'] = 'Durée requise';
        } else if ( !is_numeric($_POST['duration']) ) {
            $this->validationErrors['duration'] = 'La durée doit être un nombre.';
        }
        // Date
        if( !isset($_POST['date']) || empty($_POST['date']) )
        {
            $this->validationErrors['date'] = 'Date requise';
        } else if ( !preg_match('#^\d{4}-\d{2}-\d{2}$#', $_POST['date']) ) {
            $this->validationErrors['date'] = 'La date doit être de la forme YYYY-MM-DD.';
        }
        // Professeur
        if( !isset($_POST['teacher']) || empty($_POST['teacher']) )
        {
            $this->validationErrors['teacher'] = 'Professeur requise';
        }
        return empty($this->validationErrors);
    }


    /**
     * Détail d'un cours
     */
    public function read( $id )
    {
        return $this->queryOne( "SELECT * FROM cours WHERE id=$id" );
    }

    /**
     * Mise à jour d'un cours
     */
    public function update( $id )
    {
        $parts = [];
        foreach ( $_POST as $k => $v ) {
            $parts[] = "$k='".mysqli_real_escape_string($this->connection, $v)."'";
        }
        $sql = sprintf("UPDATE cours SET %s WHERE id=$id", join(', ', $parts));
        return $this->query( $sql );
    }

    /**
     * Suppression d'un cours
     */
    public function delete( $id )
    {
        return $this->query( "DELETE FROM cours WHERE id=$id LIMIT 1" );
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}