<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head>
	
   <body style="background-image: url(cityci.png);">
   
      <a href = "<?php echo base_url(); ?>index.php/user/add_view">Add</a>
		
      <table border = "1"> 
         <?php 
            $i = 1; 
            echo "<tr>"; 
            echo "<td>Sr#</td>";
            echo "<td>User No.</td>";  
            echo "<td>First Name</td>";
            echo "<td>Last Name</td>";
            echo "<td>Middle Name</td>";
            echo "<td>Nickname</td>";
            echo "<td>Email Address</td>";
            echo "<td>Home Address</td>";
            echo "<td>Gender</td>";       
            echo "<td>Cellphone no.</td>"; 
            echo "<td>Edit</td>"; 
            echo "<td>Delete</td>"; 
            echo "<tr>"; 
				
            foreach($records as $r) { 
               echo "<tr>"; 
               echo "<td>".$i++."</td>";
               echo "<td>".$r->user_id."</td>";
               echo "<td>".$r->firstname."</td>";
               echo "<td>".$r->lastname."</td>";
               echo "<td>".$r->midname."</td>";
               echo "<td>".$r->nickname."</td>";
               echo "<td>".$r->email."</td>";
               echo "<td>".$r->homeadd."</td>";
               echo "<td>".$r->gender."</td>";
               echo "<td>".$r->cellno."</td>"; 
               echo "<td><a href = '".base_url()."index.php/user/edit/"
                  .$r->user_id."'>Edit</a></td>"; 
               echo "<td><a href = '".base_url()."index.php/user/delete/"
                  .$r->user_id."'>Delete</a></td>"; 
               echo "<tr>"; 
            } 
         ?>
      </table> 
		
   </body>
	
</html>

