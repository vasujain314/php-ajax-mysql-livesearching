<?php
 
include "config.php";
 
if (isset($_POST['search'])) {
 
   $Name = $_POST['search'];
 
   $sql = "SELECT Name FROM search WHERE Name LIKE '%$Name%' LIMIT 5";
 
   $result = $conn->query($sql);
 

   echo '<ul>';
 
   while ($row = $result->fetch_assoc()) {
 
       ?>
 
   <li onclick='fill("<?php echo $row['Name']; ?>")'>
   <a>
   <?php echo $row['Name']; ?>
   </li>
   </a>
 
 
   <?php
 
}}
 
 
?>
 
</ul>