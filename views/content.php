<div id="content"><?php
                if(isset($_GET['page'])):
                    $page = $_GET['page'];
                    include 'views/switch.php';          
                        $rowCount = $connect->query($rowQuery)->fetch();
                        $number_of_rows = $rowCount['rowCount'];
                        $rows_per_page = 16;
                        $number_of_pages = ceil($number_of_rows / $rows_per_page);
                        $list = $connect->query($query)->fetchAll();
                        if(count($list)>0):
                            foreach($list as $movie):
            ?>
                                <div class="movie-block">
                                    <a href="movie.php?page=<?php echo $movie['id_movies']?>"><img src="img/<?php echo $movie['image']?>" alt="<?php echo $movie['name']?>"></a>
                                        <span class="movie-tag"><?php echo $movie['gName']?></span>
                                        <span class="movie-year"><?php echo $movie['year']?></span>
                                        <span class="cart-add">
                                            <form action="#" method="#">
                                                <button class="add" type="button">Add to Cart</button>
                                            </form>
                                        </span>
                                        <h3>
                                            <a href="movie.php?page=<?php echo $movie['id_movies']?>"><?php echo $movie['mName'] . " (" . $movie['copies'] . ")"?></a>
                                        </h3>
                                </div>
            <?php endforeach; endif; 
            else:
                header("Location: index.php?page=all");
            endif;  
            $startingGroup = ['all', 'Action', 'Adventure', 'Animation', 'Comedy', 'Drama', 'Fantasy', 'Horror', 'Musical', 'Romance', 'Sci Fi', 'Thriller', 'War', 'Western', 'gallery'];
            if($number_of_pages > 1)
            {
                echo "<div id='pagination'>";
                    if(in_array($page, $startingGroup))
                    {
                        echo "<a href='index.php?page=". $page ."'>1</a>";
                    }
                    else
                    {
                        echo "<a href='index.php?page=". substr($page, 0, -1) ."'>1</a>";
                    }
                    //echo "<a href='index.php?page=". $page ."'>1</a>";
                    for($i=2; $i<=$number_of_pages; $i++)
                    {
                        if(!in_array($page, $startingGroup))
                        {
                            
                            echo "<a href='index.php?page=". substr($page, 0, -1) . $i ."'>$i</a>";
                        }
                        else
                        {
                            echo "<a href='index.php?page=". $page . $i ."'>$i</a>";
                        } 
                    }
                echo "</div>";
            }
           // echo substr('a,b,c,d,e,', 0, -1)
            ?>






        
</div>

       
      
</div>

    <div class="cleaner"></div>
    
