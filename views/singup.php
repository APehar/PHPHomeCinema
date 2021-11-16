<div id="content">
    <form method="POST" onsubmit="return regCheck();" action="views/register.php">
    <table id="form">
        <tr>
            <td><b>Email:</b></td>
            <td>
                <input type="text" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td><b>Username:</b></td>
            <td>
                <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td><b>Password:</b></td>
            <td>
                <input type="password" name="pass" id="pass">
            </td>
        </tr>
        <tr>
            <td><b>Confirm Password:</b></td>
            <td>
                <input type="password" name="passCon" id="passCon">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="reset">Clear</button>
                <button type="submit" name="sub" >Submit</button>
            </td>
        </tr>
    </table>
    </form>  
    <?php
if(isset($_GET['sent']))
{
    echo "<h4 id='sent'>A validation has been sent to your email. Please validate it to <a href='form.php?page=login'>log in</a></h4>";
}
?>
</div>    
</div>
    <div class="cleaner"></div>
    