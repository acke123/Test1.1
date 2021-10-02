<form action="save_name.php" method="post">
<input type="text" name="name" placeholder="name">
<input type="text" name="sport" placeholder="sport">
<button type="submit" name="btn">Dodaj</button>
</form>
<?php foreach($result as $row):?>
<?php echo $row['name']." "; echo $row['sport'];?><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a><a href="update.php?id=<?php echo $row['id'];?>">Update</a><hr>
   <?php endforeach; ?>
