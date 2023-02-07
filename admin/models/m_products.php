<?php

namespace Assigment\models;

class m_product extends db
{
    public function getAllProduct()
    {
        $sql = "SELECT * FROM hang_hoa";
        return $this->getData($sql);
    }

    public function addProduct()
    {
        $sql = "INSERT INTO hang_hoa(ten_hh,don_gia,hinh,mo_ta) Values
        ()";
        return $this->getData($sql);
    }
    public function deleteData($id)
    {
        $sql = "DELETE FROM products WHERE id=$id";
        return $this->getData($sql);
    }
}
