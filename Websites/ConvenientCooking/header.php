<div id="hader">
    <header class="alignleft">
        <div id="logodiv">
            <img src="logo2.png" 
                    alt=""
                    title="" 
                    id="logo2"
                    class=""
            />
        </div>
    </header>
    <nav id="pages">
        <ul>
        <?php
        foreach ($content as $page => $location){
            echo "<li><a href='$location'".($page==$currentpage?" class='active'":"").">".$page."</a></li>";            
        }
        ?>
        </ul>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if($_POST['action'] == "logout"){
                    echo "Logging you out!";
                    session_destroy();
              }
            }
        ?>
        <!-- <form method="post" id="login">
            <input type="hidden" name="action" value="logout">
            <input type = "submit"  value = "Logout" />
        </form> -->
    </nav>
</div>
<form method="post" id="login" class="logout">
    <input type="hidden" name="action" value="logout">
    <input type = "submit"  value = "Logout" />
</form>
