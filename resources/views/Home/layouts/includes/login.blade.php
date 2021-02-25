<div id="loginForm" class="modal ">

    <form class="modal-content animate" action="data/data_login.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('loginForm').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>

        <div class="container">
            <label for="u_username"><b>User Name</b></label>
            <input type="text" placeholder="Enter Username" name="u_username" required>

            <label for="u_password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="u_password" required>

            <button type="submit">Login</button>

        </div>

        <div class="container" style="background-color:transparent">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">New User </span>
            <button type="button" onclick="document.getElementById('register').style.display='block';document.getElementById('loginForm').style.display='none'" class="regbtn" >Register</button>
            <span class="psw"><a href="#">Forgot password?</a></span>
        </div>
    </form>
</div>
