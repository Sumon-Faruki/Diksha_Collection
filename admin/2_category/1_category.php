<?php
    require("../1_log/login_check_up.php");
    require("../include/header.php");
    require("../include/nav.php");

    require("../1_log/db.php");

    //starting of searching code
    $where = "";
    $srch = "";
    if(isset($_REQUEST['srch'])){
        extract($_REQUEST);
        $where = "WHERE `name` LIKE '%$srch%'";
    }

    $sql = "SELECT * FROM `category` $where";
    $res = mysqli_query($con, $sql) or die(mysqli_error($con));
    $total = mysqli_num_rows($res);
    
    // end of searching code

    //paging code 
    $start = 0;
    $limit = 3;
    $page = ceil($total/$limit);

    if (isset($_REQUEST['p'])) {
        # code...
        $start = ($_REQUEST['p']-1)* $limit;
    }

    // end of paging

    //searching form
    print "<form action='1_category.php?title=Category Page' method='post'>
            <input type='text' name='srch'>
            <input type='submit' value='Search'>
            <a href='1_category.php?title=Category Page'>show all</a>
            </form>";
    // end of searching code 

    //starting the table

    $sql = "SELECT * from `category` $where LIMIT $start,$limit";
    $res = mysqli_query($con, $sql);
    if(isset($_REQUEST['msg'])){
        print"<div style='color:#f00;'> $_REQUEST[msg]</div>";
    }

    print "<a href='2_add_cat.php?title=Add category page'>Add more category</a><br><br>";

    print "<table class='mx-auto shadow' border='1' align='center' style=' border: 1px solid black;border-collapse: collapse;'>
		<tr style=' border: 1px solid black;'>
			<th style=' border: 1px solid black;'>Id</th>
			<th style=' border: 1px solid black;'>Name</th>
			<th style=' border: 1px solid black;'>isActive</th>
			<th style=' border: 1px solid black;'>Option</th>
		</tr>";

        while($row= mysqli_fetch_assoc($res))
    {
        print "
            <tr style=' border: 1px solid black;'>
                <td style=' border: 1px solid black;'>$row[id]</td>
                <td style=' border: 1px solid black;'>$row[name]</td>
                <td style=' border: 1px solid black;'>$row[is_active]</td>
                <td style=' border: 1px solid black;'>
                <a href='5_edit_cat.php?id=$row[id]&title=Editing category page&nm=$row[name]'>Edit</a>  ||
                <a href='#' onclick='confirmDel(\"4_del_cat.php?id=$row[id]\")'>Delete</a>
                </td>
            </tr>";
    }
    print "</table>";

    print "<div>";
    for($i=1;$i<=$page;$i++){
        echo "<a href='1_category.php?p=$i&srch=$srch'>$i</a> | ";
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