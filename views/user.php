<div id="content"><?php
        if(isset($_SESSION['user'])):
            $user = $_SESSION['user'];
            $role = $user['role_id'];
            //echo $role;
            if($role=="1"):
    ?>  
    <h3>Hello <i><?php echo $user['username'];?></i> and welcome to your profile page. Becouse you are an admin of this web site here you can change the profiles of all users, enjoy your new power :)</h3>  
    <?php
        $userQuery = "SELECT * FROM users u INNER JOIN roles r ON u.role_id = r.id_role";
        $userTab = $connect->query($userQuery)->fetchAll();
        foreach($userTab as $tab):
    ?>   
    <div class="profile">
        <table class="profile-tab">
            <tr>
                <td><b>ID:</b></td>
                <td>
                    <span><?php echo $tab['id_users'];?></span>
                </td>
            </tr>
            <tr>
                <td><b>Usrename:</b></td>
                <td>
                    <span><?php echo $tab['username'];?></span>
                </td>
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td>
                    <span><?php echo $tab['email'];?></span>
                </td>
            </tr>
            <tr>
                <td><b>Active:</b></td>
                <td>
                    <span><?php echo $tab['active'];?></span>
                </td>
            </tr>
            <tr>
                <td><b>Role:</b></td>
                <td>
                    <span><?php echo $tab['name'];?></span>
                </td>
            </tr>
            <tr>
                <td>
                    
                    <b><a href="form.php?page=edit&user=<?php echo $tab['id_users'];?>">Edit Profile</b></td>
                <td>
                    <form method="POST" action="views/delete.php?user=<?php echo $tab['id_users']?>">
                        <button class="delete" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
<?php
    endforeach;
            else:
    ?>
    <h3>Hello <i><?php echo $user['username'];?></i> and welcome to your profile page. Here you can look at the information you have provided :)</h3>
    <table id="form">
    
        <tr>
            <td><b>Usrename:</b></td>
            <td>
                <span><?php echo $user['username'];?></span>
            </td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td>
                <span><?php echo $user['email'];?></span>
            </td>
        </tr>
        <tr>
            <td><b>Role:</b></td>
            <td>
                <span>Guest</span>
            </td>
        </tr>
     
    </table>
<?php endif;
else:
    header("Location: form.php?page=login");
endif;?>
</div>     
</div>
<div class="cleaner"></div>