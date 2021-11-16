<div id="content">
<?php
        $username = $user['username'];
        
        
        if($user['form']==0):
            echo "<h3>Hello <i>$username</i> and welcome to a one time survey. All poits can be seen on every individual movie page :)</h3>";
?>
            <div id="favorite">
                <h4>What is your favorite movie:</h4>
                <form method="POST" onsubmit="return surveyCheck();" action="views/surveyEnter.php">
                <select id="drop" name="select">
                    <option value="0">Pick Movie:</option>
                    <?php
                    $listQuery = "SELECT * FROM movies";
                    $list = $connect->query($listQuery)->fetchAll();
                    if(count($list)>0)
                    {
                        foreach($list as $movie)
                        {
                            echo "<option value='" . $movie['id_movies'] . "'>" . $movie['name'] . "</option>";
                        }
                    } 
                    ?>
                </select>
                
                    <button id="surveySubmit" type="submit" name="sub" >Submit</button>
                </form>
            </div>
    <?php
        else:
            echo "<h3 id='sorry'>Thank you <i>$username</i> for taking part in our survey. Points for each movie can be seen on every individual movie page.</h3>";
        endif;
    ?>       
</div>
     
</div>

    <div class="cleaner"></div>