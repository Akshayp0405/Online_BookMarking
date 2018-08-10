<?php
    include_once 'header_2.php';
?>
<?php
if (isset($_POST['news'])) {


include_once 'dbh.inc.php';


// Attempt select query execution with sort by clause
$sql = "SELECT * FROM p1 WHERE li_type= 'News and Article' ORDER BY rating DESC ";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
    	echo "<br>";
    	
        echo "<center><font color='white' size='18px'><b>News and Article</b></font><center></b>";
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>li_url</th>";
                echo "<th>li_name</th>";
              
               echo "<th>rating</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
?>
                <td>
                    <a href="<?php echo $row['li_url'] ?>" target="_blank">
                         <?php echo $row['li_url']; ?> 
                    </a>
                </td>
<?php 
              
                echo "<td>" . $row['li_name'] . "</td>";
                echo "<td>" . $row['rating'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } 
    else{
        echo "No records matching your query were found.";
    }
 	}
 	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);

 }
 else {
		header("Location: p2=error_public");
	exit();
}

?>
