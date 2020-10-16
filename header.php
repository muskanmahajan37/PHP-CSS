<div class="navbar navbar-inverse navbar-fixed-top navig">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse">
                <span class="icon-bar"></span>                
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand logo" style="color:white;">Violinshala</a>
        </div>
        <div class="navbar-collapse collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){?>
                    <li class="nav-links"><a href="info.php"><span class="glyphicon glyphicon-book X"></span> About</a></li>
                    <li><a href="lesson.php"><span class="glyphicon glyphicon-education"></span> Lession</a></li>
                    <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    
                <?php }
                else{?>
                    <li><a href="info.php"><span class="glyphicon glyphicon-book"></span> About</a></li>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
