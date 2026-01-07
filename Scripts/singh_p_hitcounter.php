<?php 

require ('singh_p_opendb.php');

session_start(); 
 
if (isset($_SESSION['visited'])){
    $query = 'select * from hit_counter order by hitCounter desc limit 1';
    
    if ($result = $conn->query($query)){
        $row = $result->fetch_assoc();
        $nbrhits = $row['hitCounter'];
        echo ' Visitor #: ' . $nbrhits;
        
    }
}
else {
    $_SESSION ['visited'] = 1;
    $sql= 'insert into hit_counter (hitCounter) values (NULL)';
    
    if ($conn->query($sql)){
        $query = 'select * from hit_counter order by hitCounter desc limit 1';
        $nbrhits = 0;
        if ($result = $conn->query($query)){
            while ($row = $result->fetch_assoc()){
                $nbrhits = $row['hitCounter'];
                echo ' Visitor #: ' . $nbrhits;
            }
            $result->free();
            
            $query = 'delete from hit_counter where hitCounter < ' . $nbrhits;
            
            if (!$conn->query($query)){
                echo '<h2>Error: Cannot delete record(' . $conn->errno . ') ' . $conn->error . '</h2>';
            }
        }
    }
}
?>