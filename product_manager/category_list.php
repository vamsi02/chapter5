<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
        <tr> 
              <td><?php echo $category['categoryName']; ?> </td>
              <td><form action="index.php" method="POST">
	      <input type='hidden' value='delete_category' name='action'>
	      <input type='hidden' name='category' value="<?php echo $category['categoryID']; ?>">
              <input type='submit' value='delete'></form></td>
         </tr>
<?php } ?>
    </table>

    <h2>Add Category</h2>
    <form  action="index.php" method="POST" id="add">     
	<input type="hidden" name="action" value="add_category">
	<label>Name : </label><input type="text" name="category_name"/> <input type="submit" value="Add"/>
	</form>
    <!-- add code for form here -->

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>
