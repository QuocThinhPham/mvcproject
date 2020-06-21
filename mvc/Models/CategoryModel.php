<?php

class CategoryModel extends Database
{
    // table name need query
    const CATEGORIES = 'categories';

    public function getAll()
    {
        // preparing the query
        $query = "SELECT * FROM " . self::CATEGORIES;
        // run the query and return result
        return mysqli_query($this->connection, $query);
    }

    public function add($id, $name)
    {
        // preparing the query
        $query = "INSERT INTO " . self::CATEGORIES . " VALUES(" . ($id != null ? $id : null) . ", " . "N'" . $name . "')";
        return mysqli_query($this->connection, $query);
    }
}