<?php


namespace application\model;


class PersonModel extends Model
{
    public function all($tableName)
    {
        $query = "SELECT * FROM " . $tableName . "; ";
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    // get biography of person
    public function getActor($actorId)
    {
        $query = "SELECT * FROM `actors` WHERE id = ? ";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getActorPicture($actorId)
    {
        $query = "SELECT * FROM `actor_pictures` WHERE actor_id = ? LIMIT 4;";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }
    public function getDirectorPicture($directorId)
    {
        $query = "SELECT * FROM `director_pictures` WHERE director_id = ? LIMIT 4;";
        $result = $this->query($query, array($directorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getActorMovies($actorId)
    {
        $query = "SELECT `movie_name`,`director`,`picture`,`release_date` FROM (`movies` INNER JOIN `movie_actor` ON `id`=`movie_id`) WHERE actor_id = ? LIMIT 8; ";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }
    public function getDirectorMovies($actorId)
    {
        $query = "SELECT `movie_name`,`director`,`picture`,`release_date` FROM (`movies` INNER JOIN `movie_actor` ON `id`=`movie_id`) WHERE actor_id = ? LIMIT 8; ";
        $result = $this->query($query, array($actorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function getDirector($directorId)
    {
        $query = "SELECT * FROM `directors` WHERE id = ? ";
        $result = $this->query($query, array($directorId))->fetchAll();
        $this->closeConnection();
        return $result;
    }

}