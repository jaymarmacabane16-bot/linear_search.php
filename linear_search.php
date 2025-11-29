<?php

function linearSearch($array, $target) {
    
    for ($i = 0; $i < count($array); $i++) {
        
        if ($array[$i] == $target) {
            
            return $i;
        }
    }
  
    return -1;
}


$array = [10, 20, 30, 25, 40, 50, 60, 70, 80, 90];


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['target'])) {
    $target = $_POST['target']; 
   
    $result = linearSearch($array, $target);

    
    if ($result != -1) {
        echo "$target found at index $result.";
    } else {
        echo "$target not found.";
    }
} else {
    
    echo '<form method="post" action="">
            Enter value to search: <input type="text" name="target" required>
            <input type="submit" value="Search">
          </form>';
}
?>
