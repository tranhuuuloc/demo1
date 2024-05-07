<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <form action="asm.php" method = "GET">

        <input type = "text" name= "ten">
        <button type = "sumbmit"> Tìm kiếm </button>
</form>
<?php var_dump ($_GET); 
 if (isset ($_GET["ten"])){
    $ten = $_GET["ten"];
}
else {
    $ten="";
};

?>
<div class="container">
        <?php
        $dsSanPham = array(
            array("anh" => "img/aolop.jpg", "ten" => "Áo lớp", "SoLuong" => "21", "Gia" => 50000),
            array("anh" => "img/aothun.jpg", "ten" => "Áo Thun", "SoLuong" => "24", "Gia" => 34999),
            array("anh" => "img/aovest.jpg", "ten" => "Áo vest", "SoLuong" => "26", "Gia" => 23460),
            array("anh" => "img/quanau.jpg", "ten" => "Quần âu", "SoLuong" => "10", "Gia" => 33000)
        )
        ?>
        <?php foreach ($dsSanPham as $sv) {?>
            <?php if ( $ten== "" || $ten != "" && $sv["ten"] == $ten):?>
        <div class ="spsp">
        <img src="<?php echo $sv['anh'] ?>" alt="" >
        <h1 class="hhh"> <?php echo $sv["ten"] ?> </h1>
        
        <h4 class="vvv"> giá tiền:<?php echo $sv["Gia"] ?> <span><sup>đ</sup></span></h4>
        <h5 class="bbbb">số lượng :<?php echo $sv["SoLuong"] ?></h5>
        </div>
        <?php endif; ?>
        <?php }; ?>
        </div>






</body>
</html>