 <!-- end header -->
 <div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "box-circle">  
                <div class = "header-circle">
                    <p>Create Admin</p>
                    <p class = 'bg-blue-500 text-white px-1 h-7 text-center cursor-pointer rounded-md'><a href="useradmin.php">Back</a> <i class="fa-solid fa-arrow-right-to-bracket"></i></p>
                </div>
                <!-- form -->
                <div class = "w-full">
                <?php
                if(mysqli_num_rows($user_detail) > 0){
                    foreach($user_detail as $user){
                        ?>
                        <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                            <div class = "frm ">
                                <label for="username">Username</label>
                                <input type="text" name = "username" require placeholder = "Enter username ">
                                <input type="hidden" name = "userid" value = "<?= $user_id?>">
                                <input type="hidden" name="page_id" >
                                <label for="email">Email</label>
                                <input type="email" name = "email" require placeholder = "Enter email">
                                <label for="password">Password</label>
                                <input type="password" name = "new_password" required placeholder="Enter your new password...">
                                <label for="con_password">Confirm Password</label>
                                <input type="password" name = "con_password" required placeholder="Enter your confirm password...">
                                <button type = "submit" class = "px-3 py-1 rounded-sm shadow-sm text-md bg-blue-500 text-white mt-4" name = "create_admin" >Submit</button>
                            </div>
                        </form>
                        <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    <!--  -->