<div id="categorys">

        <h2><a href="index.php?page=all">All Movies</a></h2>
        <?php
        if($connect)
        {
                $query = "SELECT * FROM genres";
                $categories = $connect->query($query)->fetchAll();

                if(count($categories)>0)
                {
                        foreach($categories as $row)
                        {
                                echo "<h2><a href='index.php?page=" . $row['name'] . "'>" . $row['name'] ."</a></h2>";
                        }
                }

        }
        
        ?>

</div>
        <div class="cleaner"></div>