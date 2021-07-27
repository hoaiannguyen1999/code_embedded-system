<?php
        //connect to database
        include("config.php");
        //read data of website

        //send data to database
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name =$_POST["username"];
        $sdt =$_POST["sdt"];
        $id_cmnd = $_POST["id_cmnd"];
        $so_xe = $_POST["soxe"];
        $sql = "insert into parking (Name,ID_CMND,So_xe,phone) value ('$name','$id_cmnd','$so_xe','$sdt')";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dang ky gui xe</title>
    <meta charset="utf-8">
    <style>
        body{ font:14px san-serif;background-color:burlywood;}
    </style>

</head>
<body>
<div style="border: 2px solid black;padding: 20px;width: 350px;">
    <h2>Sign up</h2>
    <p>Please fill this form.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Username</label><br>
                <input type="text" name="username" id="username">
                <div style="font-size:70%;">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <br>
            <div>
                <label>ID_CMND</label><br>
                <input type="text" name="id_cmnd" id="id_cmnd">
                <div style="font-size:70%;">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <br>
            <div>
                <label>So xe</label><br>
                <input type="text" name="soxe" id="soxe">
                <div style="font-size:70%;">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <br>
            <div>
                <label>So dien thoai</label><br>
                <input type="text" name="sdt" id="sdt">
                <div style="font-size:70%;">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <br>
            <div>
            <input type="submit"  value="Submit" style="background-color:aqua;">
            </div>
    </form>
</div>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $sdt;
echo "<br>";
echo $id_cmnd;
echo "<br>";
echo $so_xe;
echo "<br>";
?>
    
<div class="right_area">
        <a href="home.html" class="return_btn">Return Home</a>


</div>
</body>
</html>