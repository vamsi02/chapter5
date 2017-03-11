<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories_guitar1
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories_guitar1
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}

function delete_category($category_id){
	  global $db;
	  $query = 'DELETE FROM categories_guitar1 WHERE categoryID = :category';
	  $statement = $db->prepare($query);
	  $statement->bindValue(':category', $category_id);
	  $statement->execute();
	  $statement->closeCursor();
}

function add_category($category_name){
	  global $db;
	  $query = "INSERT INTO categories_guitar1(categoryName) VALUES (:category_name)";
	  $statement = $db->prepare($query);
	  $statement->bindValue(':category_name', $category_name);
	  $statement->execute();
	  $statement->closeCursor();
}
?>
