<!-- Write a PHP program to store current date-time in a COOKIE and display the “Last visited on
‟date-time on the web page upon reopening of the same page. -->

<html>

<head>
    <title> PHP - Cookies </title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="box-cont">
            <div class="box-header" style="text-align:center;">
                <h2>Cookie Power</h2>
            </div>
            <div class="box" style="text-align:center;">
                Hello Visitor!!
                </br>
                <?php
                    $duration=time()+60*60*24*60;
                    $found=0;
                    $visit=0;
                    if(isset($_COOKIE[$visit]))
                    {
                    $found=1;
                    $lastvisit=$_COOKIE[$visit];
                    }
                    setcookie($visit,date("m/d/y-G:i:s"),$duration);
                    print "<center>";
                    if($found==1)
                    {
                    print "<h2>Welcome back, You have visited on
                    $lastvisit</h2>";
                    }
                    else
                    {
                    print "<h3>Welcome to this website</h3>";
                    }
                    print "</center>";
                ?>
            </div>
        </div>
    </div>
</body>

</html>