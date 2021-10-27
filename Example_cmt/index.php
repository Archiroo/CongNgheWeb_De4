<?php

    include'config.php';
    
    error_reporting(0);

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        
        $sql = "INSERT INTO comments(name ,email, comment)
                VALUES ('$name','$email','$comment')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo"<script>alert('Comment added successfully.')</script>";
        }else{
            echo"<script>alert('Comment does not add.')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="../css/comment.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST" class="form">
            
                <div class="row">
                    <div class="input-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your Name" value="<?php echo $name;  ?>" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter your Email" value="<?php echo $email;  ?>" required>  
                    </div>
                </div>
                <div class="input-group">
                    <label for="commment">Comment</label>
                    <textarea id="comment" name="comment" placeholder="Enter your Comment" required> <?php echo $commnet;  ?> </textarea>
                </div>

                <div class="input-group">
                    <button name="submit" class="btn">Post Comment</button>
                </div>
            
        </form>
        <div class="prev-comments">
            <?php
                $sql = "SELECT * FROM comments";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    while ($row=mysqli_fetch_assoc($result)){
                

            ?>

            <div class="single-item">
                <h4><?php echo $row['name'] ?></h4>
                <a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a>
                <P><?php echo $row['comment'] ?></P>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>
</html>