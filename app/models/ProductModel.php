<?php

class ProductModel
{
    private $db;
    private $tableName;

    public function __construct()
    {
        $this->db = new Database;
        $this->tableName = 'medicine';
    }

    public function add($prams)
    {
        // foreach ($prams as $key => $value) {
        //     $i = 0;
        # code...
      
        $sql =  "INSERT INTO " . $this->tableName . " (`name`, `category`, `price`, `contenance`, `image`, `expired_date`)  VALUES (:name,:category,:price,:contenance,:image, :expired)";
        $this->db->prepareQuery($sql);
        $this->db->bind(':name', $prams["name"]);
        $this->db->bind(':category', $prams["category"]);
        $this->db->bind(':price', $prams["price"]);
        $this->db->bind(':contenance', $prams["contenance"]);
        $this->db->bind(':image', $prams["image"]);
        $this->db->bind(':expired', $prams["expired"]);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    private function callErorr()
    {
        die("This is An Error Sir");
    }



    public function editWithoutImage($id, $data)
    {
        // die($id);
        $this->db->prepareQuery("UPDATE " . $this->tableName . " SET name = :name, category = :category, contenance = :contenance , price = :price WHERE id = :id");
        // Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':contenance', $data['mein']);
        $this->db->bind(':price', $data['price']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editWithImage($id, $data)
    {
        die(var_dump($data['category']));
        $this->db->prepareQuery("UPDATE " . $this->tableName . " SET name = :name, category = :category, contenance = :contenance , price = :price, image= :image  WHERE id = :id");
        // Bind values
        $this->db->bind(':id', $id);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':contenance', $data['mein']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':image', $data['image']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getMedicineById($id)
    {


        // $this->db->prepareQuery("SELECT * FROM " . $this->tableName . " WHERE id = :id");
        $this->db->prepareQuery(" SELECT medicine.id,  medicine.name , medicine.price , category.name as 'category_name' , category.id as 'cat_id', medicine.contenance , medicine.image , medicine.created_date , medicine.expired_date FROM `medicine` inner join category ON medicine.category = category.id  AND medicine.id = :id");
        // Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->singleRow();

        return $row;
    }

    public function deleteMedicine($id)
    {

        // die($this->tableName);
        // $id = (int) $data;
        $sql = 'DELETE FROM ' . $this->tableName  . ' WHERE id = :id';
        $this->db->prepareQuery($sql);
        // Bind values
        $this->db->bind(':id', $id);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function search($name)
    {
        $this->db->prepareQuery('SELECT  medicine.name , medicine.price , category.name as "category_name" , medicine.contenance , medicine.image , medicine.created_date , medicine.expired_date FROM `medicine` inner join category ON medicine.category = category.id AND  medicine.name LIKE "%":name"%" ');
        $this->db->bind(':name', $name);

        if ($this->db->allRows()) {
            return $this->db->allRows();
        } else {
            return false;
        }
    }

    public function getMedicines($query = "")
    {
        $sql = " SELECT medicine.id,  medicine.name , medicine.price , category.name as 'category_name' , medicine.contenance , medicine.image , medicine.created_date , medicine.expired_date FROM `medicine` inner join category ON medicine.category = category.id " . $query;
        $this->db->prepareQuery($sql);

        $results = $this->db->allRows();

        return $results;
    }

    public function tableCount($coulum = "medicineCount", $table = "medicine")
    {
        $this->db->prepareQuery('SELECT COUNT(id) as ' . "$coulum " . 'FROM ' . $table);

        $row = $this->db->singleRow();

        if ($row) {
            return $row->$coulum;
        } else {
            return false;
        }
    }

    public function tableCountAvilable($coulum = "availableCount", $table = "medicine", $query = 'WHERE expired_date < now() ')
    {
        $this->db->prepareQuery('SELECT COUNT(id) as ' . "$coulum " . 'FROM ' . $table . ' ' . $query);

        $row = $this->db->singleRow();

        if ($row) {
            return $row->$coulum;
        } else {
            return false;
        }
    }



    public function getPriceAverege()
    {
        $this->db->prepareQuery('SELECT AVG(price) as "priceAverege" FROM medicine');

        $row = $this->db->singleRow();

        if ($row) {
            return $row['priceAverege'];
        } else {
            return false;
        }
    }

    public function getMaxPrice()
    {
        $this->db->prepareQuery('SELECT MAX(price) as "maxPrice" FROM medicine');

        $row = $this->db->singleRow();

        if ($row) {
            return $row['maxPrice'];
        } else {
            return false;
        }
    }

    public function getMinPrice()
    {
        $this->db->prepareQuery('SELECT MIN(price) as "minPrice" FROM medicine');

        $row = $this->db->singleRow();

        if ($row) {
            return $row['minPrice'];
        } else {
            return false;
        }
    }
}
