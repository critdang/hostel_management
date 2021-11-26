<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- foreach để lấy mảng ra -->
    <?php foreach ($rooms as $room ) : ?> 
        <div>
            <h1><?php echo $room['room_detail']?></h1>
            <p><?php echo $room['room_desc']?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>