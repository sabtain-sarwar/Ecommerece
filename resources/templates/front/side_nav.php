<div class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
        <?php
            $query = "SELECT * FROM categories";
            $send_query = mysqli_query ($connection , $query);
            confirmQuery($send_query);
            while ($row = fetch_array ($send_query)) {
                echo "<a href='' class='list-group-item'>{$row['cat_title']}</a>";
            }
        ?>
    </div>
</div>