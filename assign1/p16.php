
<html>
    <body>
        <br><br><br><center><table>
        <form method="POST" action="">
            <tr>
                <td> Username : </td>
                <td><input type="text" name="uname" pattern="[a-zA-Z][a-zA-Z0-9]+" title="Alphanumeric only & First letter alphabet" placeholder="Alphanumeric only & First letter alphabet" required autofocus/></td>
            </tr>
            <tr>
                <td> Password : </td>
                <td><input type="password" name="pass" pattern="(?=.*\d)(?=.*[.,;:'/\?!_()]).{1,}" title="Atleast one Digit and one Punctuation mark" placeholder="Atleast one Digit and one Punctuation mark" required/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" name="submit" /> </td>
            </tr>
        </form>
        </table>
        <?php
            if(isset($_POST["submit"]))
            {
                echo "<br><br><br> Username : ".$_POST['uname']."<br> Password : ".$_POST['pass'];
            }
        ?>
        </center>
    </body>
</html>