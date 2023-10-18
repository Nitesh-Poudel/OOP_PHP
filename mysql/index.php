<?php
    require "database.php";
    //connecting_database_only_by_passing_name


    $db=new database("labreport");
    //$db->show("marksheet");

 
    
      
    $Arraydata=["roll"=>"7","name"=>"Aalee","dob"=>"2010-12-15","eng"=>"95","nep"=>"56","math"=>"67","science"=>"43","social"=>"82"];

   //$c=implode(',',array_keys($Arraydata));

    //$db->insert("marksheet",$Arraydata);//passed_table_name_and_arrey_as_parameter_it_will_be_broken_into_key_and_value_in_next_page
    //$db->show("marksheet");

    $db->update("apple","ball","cat");
?>