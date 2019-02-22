<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 16/02/2019
 * Time: 17:52
 */

namespace Model;


class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $item) {
            $product = new product($item['name'], $item['price'], $item['description'], $item['productVendor']);
            $product->id = $item['id'];
            $products[] = $product;
        }
        return $products;

    }

    public function create($product)
    {
        $sql = "INSERT INTO `products`(`name`, `price`, `description`, `productVendor`) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->description);
        $stmt->bindParam(4, $product->productVendor);
        return $stmt->execute();
    }

    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $item = $stmt->fetch();
        $product = new product($item['name'], $item['price'], $item['description'], $item['productVendor']);
        $product->id = $item['id'];
        return $product;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id=?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function update($id, $product)
    {
        $sql = "UPDATE products SET name = ?, price = ?, description = ?, productVendor = ? WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->price);
        $stmt->bindParam(3, $product->description);
        $stmt->bindParam(4, $product->productVendor);
        $stmt->bindParam(5, $id);
        return $stmt->execute();

    }

}