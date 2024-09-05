<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h4>Result</h4>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		require 'config.php';
		$query = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_name` LIKE '%$keyword%' ORDER BY `product_name`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
	?>
	<div style="word-wrap:break-word;">
		<a href="get_product.php?id=<?php echo $fetch['product_name']?>"><h4><?php echo $fetch['product_name']?></h4></a>
		<p><?php echo substr($fetch['product_image'], 0, 100)?>...</p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>