<?php
    include 'header.php';
?>
<h1> Detail for the selected Product is follows: </h1>
    <div class="items-container">
        <?php
            $title=mysqli_real_escape_string($conn, $_GET['title']);
            $sql = "SELECT * FROM bid_products WHERE prod_id='$title'";
            $result = mysqli_query($conn, $sql);
            $queryResults = mysqli_num_rows($result);

            if($queryResults > 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='items-box'>
                        <h3>Product Id:".$row['prod_id']."</h3>
                        <h3>Buyer's Id: ".$row['b_id']."</h3>
                        <h3>Bid Start Price: ".$row['bid_start_price']."</h3>
                    </div>";
                }
            }
        ?>
    </div>

</body>
</html>