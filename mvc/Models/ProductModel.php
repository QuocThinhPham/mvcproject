<?php

class ProductModel extends Database
{
    // table name need query
    const PRODUCTS = 'products';
    const CATEGORIES = 'categories';

    public function getAll()
    {
        // preparing the query
        $query = 'SELECT products_id, products_name, products_amount, categories_name FROM ' . self::PRODUCTS . ', ' . self::CATEGORIES . ' WHERE ' . self::PRODUCTS . '.categories_id = ' . self::CATEGORIES . '.categories_id';
        // run the query and return result
        return mysqli_query($this->connection, $query);
    }

    public function findById($id)
    {
        // preparing the query
        $query = "SELECT * FROM " . self::PRODUCTS . " WHERE id = " . $id;
        // run the query and return result
        return mysqli_query($this->connection, $query);
    }

    public function findByName($name)
    {
        // preparing the query
        $query = "SELECT * FROM " . self::PRODUCTS . " WHERE products_name LIKE N'%$name%'";
        // run the query and return result
        return mysqli_query($this->connection, $query);
    }
}