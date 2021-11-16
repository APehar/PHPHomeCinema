<div id="content">
<?php
                if(isset($_GET['page'])):
                
                    $movie = $_GET['page'];
                    //if($movie == 0):
                    for($i=1; $i<200; $i++):
                    
                        if($movie == $i):
                            $query = "SELECT * FROM movies WHERE id_movies = $i";
                            $detail = $connect->query($query)->fetch();      
            ?>
                <span id="headline">
                    <h2><?php echo $detail['name']?></h2>
                </span>
                <iframe src="<?php echo $detail['video']?>"></iframe>
                <table id="movie-info">
                    <tr>
                        <td><b>Copies:</b></td>
                        <td><?php echo $detail['copies']?></td>
                    </tr>
                    <tr>
                        <td><b>Year:</b></td>
                        <td><?php echo $detail['year']?></td>
                    </tr>
                    <tr>
                        <td><b>Description:</b></td>
                        <td><?php echo $detail['info']?></td>
                    </tr>
                    <?php
                        if(isset($_SESSION['user'])):

                            $surveyQuery = "SELECT COUNT(*) AS score FROM movies m INNER JOIN users u ON m.id_movies = u.movies_id WHERE u.movies_id = $i";
                            $survey = $connect->query($surveyQuery)->fetch();
                    ?>
                    <tr>
                        <td><b>Survey Score:</b></td>
                        <td><?php echo $survey['score']?> points</td>
                    </tr>  
                    <?php endif;?>
                    <tr>
                        <td>
                            <form action="#" method="#">
                                <button class="add" type="button">Add to Cart</button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                </table>
            <?php
            endif;endfor; endif;
            ?>
</div>            
</div>

    <div class="cleaner"></div>