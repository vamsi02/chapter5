<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <link rel='stylesheet' type='text/css' href='../mai.css'>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
        <tr> 
              <td><?php echo $category['categoryName']; ?> </td>
              <td><input type='submit' value='delete'>
         </tr>
<?php } ?>
    </table>

    <h2>Add Category</h2>
    <form>
    <p><label> Name: </label><input type='text' name = 'category_name'> &nbsp <input type='submit' value='add'></p>
    </form>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>