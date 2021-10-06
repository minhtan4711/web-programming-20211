<!DOCTYPE html>
<html lang="en">
<head>
    <title>Receiving Student Input</title>
</head>
<body>
    <font size=5>Thank You: Got Your Input</font>
    <?php
        $name = $_POST["name"];
        $class = $_POST["class"];
        $uni = $_POST["uni"];
        $hobby1 = $_POST["sport"];
        $hobby2 = $_POST["book"];
        $hobby3 = $_POST["movie"];

        print ("<br>Hello, $name");
        print ("<br>You are studying at $class, $uni");
        print ("<br>Your hobby is");
        print ("<br>1. $hobby1");
        print ("<br>2. $hobby2");
        print ("<br>3. $hobby3");


    ?>
</body>
</html>