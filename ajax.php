<?php
 
include "config.php";
 
if (isset($_POST['search'])) {
 
   $Name = $_POST['search'];  //storing the search variable  which is storing  the input 
                              // characters from the user when he types in the search box
 
   $sql = "SELECT Name FROM search WHERE Name LIKE '%$Name%' LIMIT 5"; //sql query fetching the result from database.
 
   $result = $conn->query($sql);
 

   echo '<ul>';
 
   while ($row = $result->fetch_assoc()) {
 
       ?>
 
   <li onclick='fill("<?php echo $row['Name']; ?>")'>
   <a>
   <?php echo $row['Name']; ?>
   </a>
   </li>
 
 
   <?php
 
}}
 
 
?>
 
</ul>