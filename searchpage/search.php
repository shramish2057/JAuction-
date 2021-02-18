<?php
    include 'header.php';
    ?>
  

    <h1>Search items According to Bid Start Price</h1>
    <form action="searchresults.php" method="POST">
        <label><h3>Items with Bid Start Price Greater Than: </h3></label><br>
        <input type="text" name="search" placeholder="Enter Bid Start Price" required>
        <button type="submit" name="submit-search">Search</button>
    </form>
  
</div>
</body>
</html>