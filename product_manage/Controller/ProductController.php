<?php
/**
 * Created by PhpStorm.
 * User: hoatruong
 * Date: 16/02/2019
 * Time: 18:05
 */

namespace Controller;

use Model\DBconnection;
use Model\Product;
use Model\ProductDB;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $conn = new DBconnection("mysql:host=localhost;dbname=product_manage", "root", "CodeGym@123456");
        $this->productDB = new ProductDB($conn->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include "Views/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "Views/add.php";
        } else {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $productVendor = $_POST['productVendor'];
            $product = new Product($name, $price, $description, $productVendor);
            $this->productDB->create($product);
            $mesage = "Created";
            include "Views/add.php";
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include "Views/delete.php";
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include "Views/edit.php";
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['productVendor']);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }

    public function detail(){
        $id = $_GET['id'];
        $product =  $this->productDB->get($id);
        include "Views/detail.php";
    }

}