<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$items = array('stones', 'grains', 'tarts');
$i = 0; 
$len = count($items); 
foreach ($items as $item) { 
if ($i == $len - 1) { 
    echo "Last item";
} else { 
    echo "Not the last element";
} 
$i++; 
}
