<?php
require "credentials.php";

function createProduct()
{

  global $data;
  $fields = ['title', 'prix', 'quantite', 'id_cat', 'image'];

  if (isset($_POST['sub'])) {
    $title = $_POST['title'];
    $prix = $_POST['prix'];
    $qte = $_POST['quantite'];
    $id_cat = $_POST['id_cat'];
    $image = $_FILES['image']['name'];
    $img_hover = $_FILES['img_hover']['name'];
    try {
      print_r($_POST);

      $sql = "INSERT INTO `produits`(`id_prod`, `title`, `image`, `prix`, `quantite`, `id_cat`,`img_hover`) VALUES (null,'$title','$image',$prix,$qte,$id_cat,'$img_hover')";
      $res = $data->prepare($sql);
      $res->execute();
      move_uploaded_file($_FILES['image']['tmp_name'], "../images/$image");
      move_uploaded_file($_FILES['img_hover']['tmp_name'], "../images/$img_hover");

      header("location: ./dashboard.php");

      exit();
    } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }
}
function update()
{
  global $data;
  $id = $_GET['id'];
  $sql = "SELECT * FROM `produits` WHERE `id_prod`= $id";
  $resultat = $data->prepare($sql);
  $resultat->execute();
  $rowProducts = $resultat->fetchAll();
  if (isset($_POST['sub'])) {
    $title = $_POST['title'];
    $prix = $_POST['prix'];
    $qte = $_POST['quantite'];
    $id_cat = $_POST['id_cat'];
    $sql2 = "UPDATE `produits` SET `title`='$title',`prix`='$prix',`quantite`='$qte',`id_cat`='$id_cat'   WHERE `produits`.`id_prod` = $id";
    $resultat2 = $data->prepare($sql2);
    $resultat2->execute();
    header("Location: ./dashboard.php");
  }
  return $rowProducts;
}


function delete()
{
  global $data;
  $id = $_GET['id'];
  $sql = "DELETE FROM `produits` WHERE `produits`.`id_prod`= '$id'";
  $req = $data->prepare($sql);
  $req->execute();
  header("Location: dashboard.php");
}

function getProducts()
{
  global $data;
  $sql = "SELECT * FROM `produits`";
  $res = $data->prepare($sql);
  $res->execute();
  $products = $res->fetchAll();
  return $products;
}

function getProductsCat($para)
{
  global $data;
  $sql = "SELECT * FROM `produits` WHERE id_cat='$para'";
  $res = $data->prepare($sql);
  $res->execute();
  $products = $res->fetchAll();
  return $products;
}



function getCategories()
{
  global $data;
  $sql1 = "SELECT * FROM `categories`";
  $res1 = $data->prepare($sql1);
  $res1->execute();
  $categories = $res1->fetchAll();
  return $categories;
}

function printCategories($num)
{
  global $data;
  $sql = "SELECT * FROM `categories` WHERE id_cat='$num'";
  $res = $data->prepare($sql);
  $res->execute();

  $cat = $res->fetch();

  return $cat['categorie'];
}


function searchProduct($nameProd)
{
  global $data;
  if (isset($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $query = $data->prepare("SELECT * FROM produits WHERE title LIKE '$keyword' or id_prod='$keyword' ");
    $query->execute();
    $target = $query->fetch();

    while ($target) {
    }
  }


  $product = $query->fetchAll();
  return $product;
}
