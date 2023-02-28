<?php

if(isset($_POST['submit']))
{
    echo $imgname=$_FILES['Image']['name'];
    echo '<br>';
    $extension=pathinfo($imgname, PATHINFO_EXTENSION);
    $randomno=rand (0,100000);
    $rename='Upload'.date('Ymd'). $randomno;
    $newname=$rename.'.'.$extension;
    $filename=$_FILES['Image']['tmp_name'];
    if(move_uploaded_file($filename, 'certifs/'.$newname))
    {
        echo "uploaded";
    }
    else
    {
        echo "not uploaded";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css?v=<?php echo time(); ?>">

    <title>Document</title>
</head>
<body>

<h1>Image Upload</h1>
<div class="container">
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
    <input type="file" name="Image" class="form-control">
</div>
    <input type="submit" name="submit" class="btn btn-primary">
</form>
</div>
                               
                                       
    
</body>
</html>