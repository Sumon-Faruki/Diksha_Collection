<div class="content-sidebar">
		    		<h4>Categories</h4>
		    		<?php
		    		$sql = "SELECT * FROM `category` WHERE `is_active`='y'";
		    		$res = mysqli_query($con,$sql) or die("error 1");

		    		
					print"<ul>";
					while($row = mysqli_fetch_assoc($res)){
						print"<li><b><a href='5_product.php?title=Produts $row[name]&cid=$row[id]'>$row[name]</a><b></li>";
					}
							
					?>	
						</ul>
</div>