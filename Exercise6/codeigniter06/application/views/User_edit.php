<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('User_controller/update_student'); 
            echo form_hidden('old_user_id',$old_user_id); 
            echo form_label('User No.'); 
            echo form_input(array('id'=>'user_id',
               'name'=>'user_id','value'=>$records[0]->user_id)); 
            echo "<br/>"; 
				
            echo form_label('First Name'); 
            echo form_input(array('id'=>'firstname','name'=>'firstname',
               'value'=>$records[0]->firstname)); 
            echo "<br/>"; 

             echo form_label('Last Name'); 
            echo form_input(array('id'=>'lastname','name'=>'lastname',
               'value'=>$records[0]->lastname)); 
            echo "<br/>"; 

            echo form_label('Middle Name'); 
            echo form_input(array('id'=>'midname','name'=>'midname',
               'value'=>$records[0]->midname)); 
            echo "<br/>"; 

            echo form_label('Nickname'); 
            echo form_input(array('id'=>'nickname','name'=>'nickname',
               'value'=>$records[0]->nickname)); 
            echo "<br/>";

            echo form_label('Email Address'); 
            echo form_input(array('id'=>'email','name'=>'email',
               'value'=>$records[0]->email)); 
            echo "<br/>";  

            echo form_label('Home Address'); 
            echo form_input(array('id'=>'homeadd','name'=>'homeadd',
               'value'=>$records[0]->homeadd)); 
            echo "<br/>"; 

            echo form_label('Gender'); 
            echo form_input(array('id'=>'gender','name'=>'gender',
               'value'=>$records[0]->gender)); 
            echo "<br/>"; 

            echo form_label('Cellphone no.'); 
            echo form_input(array('id'=>'cellno','name'=>'cellno',
               'value'=>$records[0]->cellno)); 
            echo "<br/>"; 


				
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>




