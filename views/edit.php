<div id="content"><?php
    $user = $_GET['user'];
    $thisUser = "SELECT * FROM users u INNER JOIN roles r ON u.role_id = r.id_role WHERE u.id_users = $user";
    $userTab = $connect->query($thisUser)->fetch();
    $val = $userTab;   
?>
<form method="POST" onsubmit="return editCheck3();" action="views/editProcessing.php">
    <input type="hidden" id="id" name="id" value="<?php echo $user?>">
    <table id="form">
        <tr>
            <td><b>Email:</b></td>
            <td>
                <input value="<?php echo $val['email']?>" type="text" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td><b>Username:</b></td>
            <td>
                <input value="<?php echo $val['username']?>" type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td><b>Active:</b></td>
            <td>
                <input value="<?php echo $val['active']?>" type="text" name="active" id="active">
            </td>
        </tr>
        <tr>
            <td><b>Role:</b></td>
            <td>
                <input value="<?php echo $val['name']?>" type="text" name="role" id="role">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" id="send" name="editUser">Submit</button>
            </td>
        </tr>
    </table>
    </form>
    <div id="message">
    </div>
 

</div>

       
      
</div>

    <div class="cleaner"></div>