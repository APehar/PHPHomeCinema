<div id="content">
            <?php
             

                if(isset($_GET['page'])):
                    $page = $_GET['page'];

                    //

                    include 'views/switch.php';
  

                                  
                        $rowCount = $connect->query($rowQuery)->fetch();
                        $number_of_rows = $rowCount['rowCount'];
                        $rows_per_page = 16;
                        $number_of_pages = ceil($number_of_rows / $rows_per_page);
                        

                        
                        
                        $list = $connect->query($query)->fetchAll();

                        if(count($list)>0):

                            foreach($list as $movie):


            ?>
                                <div class="gallery">
                                    <img src="img/<?php echo $movie['image']?>" alt="<?php echo $movie['name']?>">
                                </div>

            <?php endforeach; endif;
            endif;
    

            
            $startingGroup = ['all', 'Action', 'Adventure', 'Animation', 'Comedy', 'Drama', 'Fantasy', 'Horror', 'Musical', 'Romance', 'Sci Fi', 'Thriller', 'War', 'Western', 'gallery'];

            if($number_of_pages > 1)
            {
                echo "<div id='pagination'>";
                    if(in_array($page, $startingGroup))
                    {
                        echo "<a href='form.php?page=". $page ."'>1</a>";
                    }
                    else
                    {
                        echo "<a href='form.php?page=". substr($page, 0, -1) ."'>1</a>";
                    }
                    //echo "<a href='index.php?page=". $page ."'>1</a>";
                    for($i=2; $i<=$number_of_pages; $i++)
                    {
                        if(!in_array($page, $startingGroup))
                        {
                            
                            echo "<a href='form.php?page=". substr($page, 0, -1) . $i ."'>$i</a>";
                        }
                        else
                        {
                            echo "<a href='form.php?page=". $page . $i ."'>$i</a>";
                        }
                        
                    }
                echo "</div>";
            }

           // echo substr('a,b,c,d,e,', 0, -1)
            ?>






        
</div>

       
      
</div>

    <div class="cleaner"></div>
    
