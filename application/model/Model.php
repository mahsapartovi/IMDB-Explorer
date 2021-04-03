<?php

namespace application\model;

use MongoDB\Driver\Exception\ConnectionException;
use PDO;
use PDOException;

class Model
{
    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            try {
                $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD, $options);
            } catch (PDOException $e) {
                echo "There is a problem in connection:" . $e->getMessage();
            }
        }
    }

    protected function query($query, $values = null)
    {
        try {
            if ($values == null) {
                return $this->connection->query($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
                return $stmt;
            }

        } catch (PDOException $e) {
            echo "There is some problem in connection:" . $e->getMessage();
        }

    }

    protected function execute($query, $values = null)
    {
        try {
            if ($values == null) {
                $this->connection->exec($query);
            } else {
                $stmt = $this->connection->prepare($query);
                $stmt->execute($values);
            }
            return true;
        } catch (PDOException $e) {
            echo "There is some problem in connection:" . $e->getMessage();
            return false;
        }
    }

    public function select($sql, $values = NULL)
    {
        try {
            if ($values == null) {
                return $this->connection->query($sql);
            } else {
                $stmt = $this->connection->prepare($sql);
                $stmt->execute($values);
                return $stmt;
            }
        } catch (PDOException $e) {
            echo "<div style='color:red;'> There is some problem in connection :</div>" . $e->getMessage();
            return false;
        }
    }


    public function insert($tableName, $fields, $values)
    {
        try {
            $stmt = $this->connection->prepare("INSERT INTO " . $tableName . "(" . implode(', ', $fields) . " , created_at) VALUES ( :" . implode(', :', $fields) . " , now() );");
            $stmt->execute(array_combine($fields, $values));
            return true;
        } catch (PDOException $e) {
            echo "<div style='color:red;'> There is some problem in connection :</div>" . $e->getMessage();
            return false;
        }
    }

    public function createTable($sql)
    {
        try {
            $this->connection->exec($sql);
            echo "<div style='color:purple;'> Your connection is successful. </div>";
            return true;
        } catch (ConnectionException $exception) {
            echo "<div style='color:red;'> There is some problem in connection : </div>" . $exception->getMessage();
            return false;
        }
    }

    public function update($tableName, $id, $fields, $values)
    {
        $sql = "UPDATE `" . $tableName . "` SET";
        foreach (array_combine($fields, $values) as $field => $value) {
            if ($values)
                $sql .= " `" . $field . "` = ? ,";
            else
                $sql .= " `" . $field . "` = NULL,";
        }
        $sql .= " `updated_at`=now()";
        $sql .= "WHERE `id` = ?";
        try {
            $stmt = $this->connection->prepare($sql);
            $affectedRows = $stmt->execute(array_merge(array_filter(array_values($values)), [$id]));
            if (isset($affectedRows))
                echo "Records are updated!";
            return true;
        } catch (ConnectionException $exception) {
            echo "<div style='color:red;'> There is some problem in connection : </div>" . $exception->getMessage();
            return false;
        }
    }

    public function delete($tableName, $id)
    {
        $sql = "DELETE FROM `" . $tableName . "` WHERE `id` = ? ;";
        try {
            $stmt = $this->connection->prepare($sql);
            $affectedRows = $stmt->execute([$id]);
            if (isset($affectedRows))
                echo "Record is deleted!";
            return true;
        } catch (ConnectionException $exception) {
            echo "<div style='color:red;'> There is some problem in connection : </div>" . $exception->getMessage();
            return false;
        }

    }

    public function __destruct()
    {
        $this->closeConnection();
    }


    protected function closeConnection()
    {
        $this->connection = null;
    }

}
