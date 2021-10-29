<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coin Flip!</title>
</head>
<body>
    <font size=4 color="blue">Please Pick Heads or Tails</font>

    <form>
        <?php
            print "<INPUT TYPE=\"RADIO\" NAME=\"PICK\" VALUE=0 > Heads";
            print "<INPUT TYPE=\"RADIO\" NAME=\"PICK\" VALUE=1 > Tails";
            print "<BR>"
        ?>

        <input type="submit" value="Flip Coin!">
        <input type="reset" value="Restart">
    </form>
    
</body>
</html>