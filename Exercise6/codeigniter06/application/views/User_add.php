<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
   <body> 
         <?php 
            echo form_open('User_controller/add_student');
            echo form_label('User No.'); 
            echo form_input(array('id'=>'user_id','name'=>'user_id')); 
            echo "<br/>"; 
         
            echo form_label('First Name'); 
            echo form_input(array('id'=>'firstname','name'=>'firstname')); 
            echo "<br/>"; 

            echo form_label('Last Name'); 
            echo form_input(array('id'=>'lastname','name'=>'lastname')); 
            echo "<br/>"; 

            echo form_label('Middle Name'); 
            echo form_input(array('id'=>'midname','name'=>'midname')); 
            echo "<br/>"; 

            echo form_label('Nickname'); 
            echo form_input(array('id'=>'nickname','name'=>'nickname')); 
            echo "<br/>"; 

            echo form_label('Email Address'); 
            echo form_input(array('id'=>'email','name'=>'email')); 
            echo "<br/>"; 

            echo form_label('Home Address'); 
            echo form_input(array('id'=>'homeadd','name'=>'homeadd')); 
            echo "<br/>"; 

            echo form_label('Gender'); 
            echo form_input(array('id'=>'gender','name'=>'gender')); 
            echo "<br/>"; 

            echo form_label('Cellphone no.'); 
            echo form_input(array('id'=>'celllno','name'=>'cellno')); 
            echo "<br/>"; 

         
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>





