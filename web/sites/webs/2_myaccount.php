<?php
// session_start();
require("../../includes/head.php");
// print_r($_SESSION);
// die();
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM `client` WHERE `id`=$id";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($res);

?>


<div class="about">
		    		<h4>Edit your profile</h4>

<form name="frm" action="3_registering.php" method="post"  enctype="multipart/form-data">
	<?php		    		
if(isset($_REQUEST['msg'])){
	print"<div style='width:200px;margin:0 auto;border:0px solid #ccc;'> $_REQUEST[msg]</div>";
}
?>
		    		<div style="border:1px solid #ccc; width:400px;margin:0 auto;height:650px;border-radius:10px;border-left:2px solid #ccc;">

		    			<div style="margin:10px;color:#ccc">Please fill the form to create your <b>profile</b>:</div>
		    			<div style="margin:10px;color:#ccc">Atleast fill your your name.</div>


		    			<div style="width:197px;float:left;border:0px solid #ccc;margin-top: 10px" align="right">
		    				Full Name:	
		    			</div>
		    			<div style="width:197px;float:right;margin-top: 10px;border:0px solid #ccc;"> 
						    <input type="text" name="nm" required placeholder="Enter your name" value="<?php echo isset($_SESSION['user_name'])? $_SESSION['user_name']:'' ?>" style="width:150px;">
		    			</div>


		    			<div style="clear: both;"></div>
 

		    			<div style="width:197px;float:left;border:0px solid #ccc;margin-top: 30px" align="right">
		    				Mobile:	
		    			</div>
		    			<div style="width:197px;float:right;margin-top: 25px;border:0px solid #ccc;">
		    				<input type="number" name="mobile" value="<?php echo $row['phone'] ?>" style="width:150px;">

		    			</div>

		    			<div style="clear: both;"></div>

		    			<div style="width:197px;float:left;border:0px solid #ccc;margin-top: 30px" align="right">
		    				Gender:	
		    			</div>
		    			<div style="width:197px;float:right;margin-top: 25px;border:0px solid #ccc;">

                            <?php  
                                    if($row['gender']=='m'){
                                        print "<input type='radio' name='gender' value='m' checked='checked'> Male
                                        <input type='radio' name='gender' value='f'> Female";
                                    }
                                    else{
                                        print "<input type='radio' name='gender' value='m'> Male
                                        <input type='radio' name='gender' value='f' checked='checked'> Female";
                                    }
                            ?>
                        <br><br>
                        </div>
		    			<div style="clear: both;"></div>


		    			<div style="width:197px;float:left;border:0px solid #ccc;margin-top: 30px" align="right">
		    			<img src="pro_images/<?php echo $row['user_pic'];?>" alt="" height=30px; width 30px;> Profile picture:	
		    			</div>
		    			<div style="width:197px;float:right;margin-top: 25px;border:0px solid #ccc;">
                        <input type="file" name="im"><br><br>
                        <?php 
                            $old_img= "";
                            $t = $row['user_pic'];
							// echo $t;
							// die();
                            if( $t !=""){
                                $old_img= $row['user_pic'] ;
								// echo $old_img;
								// die();
                            }
                            
                        ?>
                        <input type="hidden" name="old_im" value="<?php echo $old_img;?>"><br><br>

		    			</div>

		    			<div style="clear: both;"></div>



		    			<div style="width:197px;float:left;border:0px solid #ccc;margin-top: 30px" align="right">
		    				About yourself:	
		    			</div>
		    			<div style="width:197px;float:right;margin-top: 25px;border:0px solid #ccc;">
                            <textarea name="about" rows="3" cols="18"><?php echo $row['about'] ?></textarea> 
		    			</div>
                        
		    			<div style="clear: both;"></div>
  

		    			<div style="width:197px;float:left;border:0px solid #ccc;margin-top: 30px" align="right">
		    				Address:	
		    			</div>
		    			<div style="width:197px;float:right;margin-top: 25px;border:0px solid #ccc;">
		    				<textarea name="addess" rows="6" cols="18"><?php echo $row['addess'] ?></textarea> 
		    			</div>

		    			<div style="clear: both;"></div>



		    			<div style="width:197px;float:right;border:0px solid #ccc;margin-top: 30px;margin-right:25px;" align="right">
		    				
		    				<!-- // echo $_SESSION['captcha']['image_src']; -->
                            <!-- <img src="<?php echo $_SESSION['captcha']['image_src'] ?>"> -->
		    			</div>
		    			<div style="clear: both;"></div>


						<!-- <div style="width:197px;float:left;border:0px solid #ccc;margin-top: 30px" align="right">
		    				Enter the text shown in image:	
		    			</div> -->
		    			<div style="width:197px;float:right;margin-top: 25px;border:0px solid #ccc;">
		    				<!-- <input type="text" name="cpt">   -->
		    			</div>
		    			<div style="clear: both;"></div>


		    			<div align="center" style="margin-top: 15px;">
                            <input type="submit" value="Update profile" style="height:40px;width:100px;"> 
                        </div>
		    		</div>

</form>				
				</div>
				
		    	</div>
		    	</div>
		    	
		    </div>
<?php

require("../../includes/footer.php");