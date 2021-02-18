    
<?php
    include 'search.php';
?>


<div class="article-container">
<?php
    if(isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM bid_products WHERE bid_start_price > $search ";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            
            echo "<h1>Results</h1>
                <h2>Products with requested bid start price are as follows: </h2>";
            if($queryResult > 0){
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<a href='detail2.php?title=".$row['prod_id']."><div class='items-box'>
                    <h3>Product Id:".$row['prod_id']."</h3>
                </a>";
                }
            }
            else{
                echo "There are no results matching your search !";
            }
        }

?>

</div>