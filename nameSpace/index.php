<?php
    //using_same_names_class_in_same_file_using_namw_space
    require 'product.php';
    require 'test.php';

    $objTest=new testing\product();
    $objproduct=new product\product();

    function wow(){
        echo"Wow from index file";
    }
    testing\wow();//using_wow()_of_testing_file
    wow();//using_wow()_of)_this_file
?>