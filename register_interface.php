<?php
$name = $sdt = $id_cmnd = $soxe =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["sdt"]);
  $website = test_input($_POST["id_cmnd"]);
  $comment = test_input($_POST["soxe"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dang ky gui xe</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <style>
        body{ font:14px san-serif;background-color:burlywood;}
        .wrapper{float:left; width: 400px; padding:20px; margin: 50px;}
        .table_width{margin:auto; width:70%;}
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body>
    <div class="wrapper border border-primary rounded rounded-3">
        
        <h3>Dien vao bieu mau</h3>
        <br>
        <form action="" id="form">
            <div class="mb-3">
                <label for="hoten" class="form-label">Ho ten</label>
                <input type="text" class="form-control" name="ht" id="hoten" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <div class="mb-3">
                <label for="sodienthoai" class="form-label">So dien thoai</label>
                <input type="text" class="form-control" name="sdt" id="sodienthoai" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <div class="mb-3">
                <label for="id_socmnd" class="form-label">ID/CMND</label>
                <input type="text" class="form-control" name="id_cmnd" id="id_socmnd" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <div class="mb-3">
                <label for="soxe" class="form-label">So xe</label>
                <input type="text" class="form-control" name="sx" id="soxe" aria-describedby="ghichu">
                <div id="ghichu" class="form-text">Thong tin cua ban se duoc bao mat.</div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="wrapper border border-primary rounded rounded-3">
        <h3> Thong tin moi cap nhat </h3>
       
    
        <table class="table table-hover table-striped table_width">
            <tr>
                <th scope="col">Ho Ten</th> 
                <td id="td1">  </td>   
            </tr>
            <tr>
                <th scope="col">So dien thoai</th> 
                <td id="td2">  </td>   
            </tr>
            <tr>
                <th scope="col">ID/CMND</th> 
                <td id="td3"> </td>   
            </tr>
            <tr>
                <th scope="col">So Xe</th> 
                <td id="td4">  </td>   
            </tr>

        </table>
    </div>
    
    <div class="right_area">
        <a href="home.html" class="return_btn">Return Home</a>
</body>
</html>
