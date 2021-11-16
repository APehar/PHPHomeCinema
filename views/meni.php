<body>
    <div id="wrapper">
        <div id="meni">
            <a href="index.php?page=all"><img src="img/logo.png" alt="logo"></a>
            <?php
                if(isset($_GET['page']))
                {
                    $page = $_GET['page'];
                    switch($page)
                    {
                        case 'all':
                        case 'all2':
                        case 'all3':
                        case 'all4':
                        case 'all5':
                        case 'all6':
                        case 'all7':
                        case 'all8':
                            echo "<h1>All Movies</h1>";
                            break;
                        case 'Action':
                        case 'Action2':
                        case 'Action3':
                        case 'Action4':
                        case 'Action5':
                        case 'Action6':
                        case 'Action7':
                        case 'Action8':
                            echo "<h1>Action</h1>";
                            break;
                        case 'Adventure':
                        case 'Adventure2':
                        case 'Adventure3':
                        case 'Adventure4':
                        case 'Adventure5':
                        case 'Adventure6':
                        case 'Adventure7':
                        case 'Adventure8':
                            echo "<h1>Adventure</h1>";   
                            break;
                        case 'Animation':
                        case 'Animation2':
                        case 'Animation3':
                        case 'Animation4':
                        case 'Animation5':
                        case 'Animation6':
                        case 'Animation7':
                        case 'Animation8':
                            echo "<h1>Animation</h1>";
                            break;
                        case 'Comedy':
                        case 'Comedy2':
                        case 'Comedy3':
                        case 'Comedy4':
                        case 'Comedy5':
                        case 'Comedy6':
                        case 'Comedy7':
                        case 'Comedy8':
                            echo "<h1>Comedy</h1>";
                            break;
                        case 'Drama':
                        case 'Drama2':
                        case 'Drama3':
                        case 'Drama4':
                        case 'Drama5':
                        case 'Drama6':
                        case 'Drama7':
                        case 'Drama8':
                            echo "<h1>Drama</h1>";
                            break;
                        case 'Fantasy':
                        case 'Fantasy2':
                        case 'Fantasy3':
                        case 'Fantasy4':
                        case 'Fantasy5':
                        case 'Fantasy6':
                        case 'Fantasy7':
                        case 'Fantasy8':
                            echo "<h1>Fantasy</h1>";
                            break;
                        case 'Horror':
                        case 'Horror2':
                        case 'Horror3':
                        case 'Horror4':
                        case 'Horror5':
                        case 'Horror6':
                        case 'Horror7':
                        case 'Horror8':
                            echo "<h1>Horror</h1>";
                            break;
                        case 'Musical':
                        case 'Musical2':
                        case 'Musical3':
                        case 'Musical4':
                        case 'Musical5':
                        case 'Musical6':
                        case 'Musical7':
                        case 'Musical8':
                            echo "<h1>Musical</h1>";
                            break;
                        case 'Romance':
                        case 'Romance2':
                        case 'Romance3':
                        case 'Romance4':
                        case 'Romance5':
                        case 'Romance6':
                        case 'Romance7':
                        case 'Romance8':
                            echo "<h1>Romance</h1>";
                            break; 
                        case 'Sci Fi':
                        case 'Sci Fi2':
                        case 'Sci Fi3':
                        case 'Sci Fi4':
                        case 'Sci Fi5':
                        case 'Sci Fi6':
                        case 'Sci Fi7':
                        case 'Sci Fi8':
                            echo "<h1>Sci-Fi</h1>";
                            break; 
                        case 'Thriller':
                        case 'Thriller2':
                        case 'Thriller3':
                        case 'Thriller4':
                        case 'Thriller5':
                        case 'Thriller6':
                        case 'Thriller7':
                        case 'Thriller8':
                            echo "<h1>Thriller</h1>";
                            break; 
                        case 'War':
                        case 'War2':
                        case 'War3':
                        case 'War4':
                        case 'War5':
                        case 'War6':
                        case 'War7':
                        case 'War8':
                            echo "<h1>War</h1>";
                            break; 
                        case 'Western':
                        case 'Western2':
                        case 'Western3':
                        case 'Western4':
                        case 'Western5':
                        case 'Western6':
                        case 'Western7':
                        case 'Western8':
                            echo "<h1>Western</h1>";
                            break;
                        case 'singup':
                            echo "<h1>Sing Up</h1>"; 
                            break;
                        case 'login':
                            echo "<h1>Log In</h1>";
                            break;
                        case 'contact':
                            echo "<h1>Contact</h1>";
                            break;
                        case 'gallery':
                        case 'gallery':
                        case 'gallery2':
                        case 'gallery3':
                        case 'gallery4':
                        case 'gallery5':
                        case 'gallery6':
                        case 'gallery7':
                        case 'gallery8':
                        case 'gallery9':
                            echo "<h1>Useless Gallery</h1>";
                            break;
                        case 'form':
                            echo "<h1>Survey</h1>";
                            break;
                        }
                }   
                if($connect)
                {
                    $query = "SELECT * FROM meni";
                    $meni = $connect->query($query)->fetchAll();
                    if(count($meni)>0)
                    {
                        if(isset($_SESSION['user']))
                        {
                            $user = $_SESSION['user'];
                            foreach($meni as $tab)
                            {
                                if($page=="form")
                                {
                                    if($tab['href']!="form" && $tab['href']!="singup" && $tab['href']!="login")
                                    {
                                        echo "<h2><a href='form.php?page=" . $tab['href'] . "'>" . $tab['name'] ."</a></h2>";
                                    }
                                }
                                if($page!="form" )
                                {
                                    if($tab['href']!="singup" && $tab['href']!="login")
                                    {                                        
                                        echo "<h2><a href='form.php?page=" . $tab['href'] . "'>" . $tab['name'] ."</a></h2>";
                                    }
                                }  
                            }
                            echo "<h2><a href='views/logout.php'>Log Out</a></h2>";
                            echo "<h2><a href='form.php?page=user'>" . $user['username'] ."</a></h2>";
                        }
                        else{
                            foreach($meni as $tab)
                            {
                                if($page=="login")
                                {
                                    if($tab['href']!="form" && $tab['href']!="login")
                                    {
                                        echo "<h2><a href='form.php?page=" . $tab['href'] . "'>" . $tab['name'] ."</a></h2>";
                                    }
                                }
                                else if($page=="singup")
                                {
                                    if($tab['href']!="form" && $tab['href']!="singup")
                                    {
                                        echo "<h2><a href='form.php?page=" . $tab['href'] . "'>" . $tab['name'] ."</a></h2>";
                                    }
                                }
                                else
                                {
                                    if($tab['href']!="form")
                                    {
                                        echo "<h2><a href='form.php?page=" . $tab['href'] . "'>" . $tab['name'] ."</a></h2>";
                                    }
                                }
                            }
                        }
                    }
                }   
            ?>
            <form method="#" action="#">
                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                <input type="text" placeholder="Search..." name="search" id="search">
                
            </form>
        </div>
        <div class="cleaner"></div>