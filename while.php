<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="while.css">
</head>
<body>
     
     <h1>งานที่ 1 ศิวกร ทองอ่วม BIT.2/5 เลขที่ 4</h1>

<div class="all">
    
    <h2>While Loop</h2>

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>
        <div class="table">
            <?php
                if(isset($_GET["num"])){
                    $num = $_GET["num"];

                    echo "สูตรคูณแม่" . $num . "<br>";
        
                while ($i <= 12) {
                    echo $num . "x" . $i . "=" . $num * $i . "<br>";
                    $i++;
                    }
                        
                }
    
            ?>
          <br>
        </div>
    <div class="bottom">
        <a href="index.php">For loop</a>
    </div>
</div>

</body>
</html>