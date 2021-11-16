<div id="content">
    <form method="POST" action="views/processing.php">
    <table id="form">
        <tr>
            <td><b>Email:</b></td>
            <td>
                <input type="text" name="email">
            </td>
        </tr>
        <tr>
            <td><b>Password:</b></td>
            <td>
                <input type="password" name="pass">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="reset">Clear</button>
                <button type="submit">Log In</button>
            </td>
        </tr>
    </table>
    </form>
    <?php

if(isset($_GET['try']))
{
    echo "<h4 id='sent'>The username or password is inccorect</h4>";
}

?>   
</div>

       
      
</div>

    <div class="cleaner"></div>