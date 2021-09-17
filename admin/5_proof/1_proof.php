<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php");

    require("../1_log/db.php");


    $where = "";
    $srch = "";
    if(isset($_REQUEST['srch'])){
        extract($_REQUEST);
        $where = "WHERE `image` LIKE '%$srch%'";
    }

    $sql = "select * from `proof` $where";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    $total = mysqli_num_rows($res);
 
    $start = 0;
    $limit = 3;
    $page = ceil($total/$limit);

    if(isset($_REQUEST['p'])){
        $start = ($_REQUEST['p']-1)* $limit;
    }

    print "<form action='1_proof.php?title=Proof Page' method='post'>
            <input type='text' name='srch' placeholder='Search name'>
            <input type='submit' value='Search'>
            <a href='1_proof.php?title=proof Page'>show all</a>
            </form>";
    
    $sql = "SELECT * from `proof` $where LIMIT $start,$limit";
    $res = mysqli_query($con, $sql);
    if(isset($_REQUEST['msg'])){
        print"<div style='color:#f00;'> $_REQUEST[msg]</div>";
    }
    ?>
    <!-- print "<a href='2_add_proof.php?title=Add proof'>Add more proof</a><br><br>"; -->
    <form action="2_add_proof.php"  method="post" enctype="multipart/form-data">
        Upoload proof image : <input type="file" name="im">
        <input type="submit" value="Add Poof"><br><br>
    </form>


<?php
    print "<table class='mx-auto shadow' border='1' align='center' style=' border: 1px solid black;border-collapse: collapse;'>
		<tr style=' border: 1px solid black;'>
			<th style=' border: 1px solid black;'>proof Id</th> 
			<th style=' border: 1px solid black;'>Image</th>
			<th style=' border: 1px solid black;'>Post Date</th> 
			<th style=' border: 1px solid black;'>Option</th>
		</tr>";
        
    while($row= mysqli_fetch_assoc($res))
    {
        $path = "pro_images/".$row['image'];
        print "
            <tr style=' border: 1px solid black;'>
                <td style=' border: 1px solid black;'>$row[proof_id]</td>
                <td style=' border: 1px solid black;'><img src='$path' height='200' width='400'></td>
                <td style=' border: 1px solid black;'>$row[post_date]</td> 
                <td style=' border: 1px solid black;'>
                <a href='4_edit_proof.php?id=$row[proof_id]&title=Edit proof'>Edit</a>  ||
                <a href='#' onclick='confirmDel(\"3_del_proof.php?id=$row[proof_id]\")'>Delete</a>
                </td>
            </tr>";
    }
    print "</table>";

    print "<div>";
    for($i=1;$i<=$page;$i++){
        echo "<a href='1_proof.php?title=Proof Page&p=$i&srch=$srch'>$i</a> | ";
    }
    print "</div>";

?>

<script type="text/javascript">
function confirmDel(x){
	var r = confirm("Are you sure to delete?");
	if (r == true) {
		window.location = x;
	} 
	else {
		return false;
	}

}
</script>

<?php
    require("../include/footer.php");
?>