<?php
     
     $conn = mysql_connect("localhost","root","","University");

     if(!$conn){
        die("Error");

     }

     $sql = "select form students";

     $result = $conn -> query($sql);

     if($result -> num_rows>0){

        while($row= $result ->fetch_assoc()){
            echo "10:" , $row["id"] , "Name : " . $row["name"] . "<br>";
        }

        else{
            echo "data";
        }
     }

?>