<?php 
    include('includes/header.php');
    if($_SESSION['auth_user']){
        $user_id = $_SESSION['auth_user']['user_id'];
        $user_name = $_SESSION['auth_user']['user_name'];
    }
?>
<!--  -->
<div class = "h-full px-2 py-5">
    <div class = "w-full bg-[#ffffff] rounded-md p-5">
        <div class = "w-full lg:w-[70%] shadow-md h-[50%] bg-[#ffffff] grid grid-cols-1 md:grid-cols-[250px_1fr] ">
            <?php
                $user = getById("users",$user_id);
                if(mysqli_num_rows($user) > 0){
                    foreach($user as $userItem){
                    ?>
                    <div class = " flex flex-col justify-center items-center">
                    <img src = "assets/img/unnamed.jpg" class = "w-[100px] h-[100px] rounded-full"/>
                    <h1 class = "font-medium mt-3"><?= $userItem['name']?></h1>
                    </div>
                    <div class = "">
                        <div class = "w-full h-[10%] px-5">
                            <p class = " text-[10px] md:text-sm font-medium">Information</p>
                        </div>
                        <hr>
                        <div class = "w-full h-[25%] flex justify-between items-center py-1 px-5">
                            <div class = "">
                                <p class = " text-[10px] md:text-sm font-medium my-2">Email</p>
                                <p class = " text-[10px] md:text-sm my-1"><?= $userItem['email']?></p>
                            </div>
                            <div class = "">
                                <p class = " text-[10px] md:text-sm font-medium my-2">Created</p>
                                <p class = " text-[10px] md:text-sm my-1"><?= $userItem['created_at']?></p>
                            </div>
                        </div>
                        <div class = "w-full h-[10%] px-5">
                            <p class = " text-[10px] md:text-sm font-medium my-2">Projects</p>
                        </div>
                        <hr>
                        <div class = "w-full h-[25%] flex justify-between items-center py-1 px-5">
                            <div class = "">
                                <p class = " text-[10px] md:text-sm font-medium my-2">Status</p>
                                <p class = " text-[10px] md:text-sm my-1"><?= $userItem['status'] == 1 ? 'active' : 'underfine' ?></p>
                            </div>
                            <div class = "">
                                <p class = " text-[10px] md:text-sm font-medium my-2">Email Verify</p>
                                <p class = " text-[10px] md:text-sm my-1"><?= $userItem['created_at']?></p>
                            </div>
                        </div>
                        <hr>
                        <div class = "w-full h-[25%] flex justify-start gap-5 items-center py-1 px-5">
                            <div class = "">
                            <span class = "px-2"><i class="fa-regular fa-pen-to-square  text-[11px] md:text-sm"></i></span> <span><a href = "changeinfor.php?id=<?= $userItem['id']?>" class = " text-[11px] md:text-sm">Chanage Password</a></span>
                            </div>
                            <div class = "">
                            <span class = "px-2"><i class="fa-regular fa-pen-to-square  text-[11px] md:text-sm"></i></span> <span><a href = "createadmin.php?id=<?= $userItem['id']?>" class = " text-[11px] md:text-sm">Create Admin</a></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
            ?>
        </div>
        <div class = "w-full h-[50%] bg-[#ffffff] shadow-md mt-5 overflow-x-auto ">
        <table class = "text-center w-full table-auto">
            <thead> 
                <tr>
                    <th class = " text-[11px] md:text-sm py-1 border-b-[2px] border-black font-medium whitespace-nowrap">Username</th>
                    <th class = " text-[11px] md:text-sm py-1 border-b-[2px] border-black font-medium whitespace-nowrap">EMAIL</th>
                    <th class = " text-[11px] md:text-sm py-1 border-b-[2px] border-black font-medium whitespace-nowrap">Status</th>
                    <th class = " text-[11px] md:text-sm py-1 border-b-[2px] border-black font-medium whitespace-nowrap">Creted at</th>
                    <th class = " text-[11px] md:text-sm py-1 border-b-[2px] border-black font-medium whitespace-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $userAll = getAdmin("users");
                 if(mysqli_num_rows($userAll) > 0){
                    foreach($userAll as $userItem){
                        ?>
                        <tr id = "user-<?= $userItem['id']?>">
                            <td class = " text-[11px] md:text-sm py-2 border border-gray-200"><?= $userItem['name'] ?></td>
                            <td class = " text-[11px] md:text-sm py-2 border border-gray-200 break-words"><?= $userItem['email'] ?></td>
                            <td class = " text-[11px] md:text-sm py-2 border border-gray-200"><?= $userItem['status'] == 1 ? 'Active' : 'Disabled' ?></td>
                            <td class = " text-[11px] md:text-sm py-2 border border-gray-200"><?= $userItem['created_at'] ?></td>
                            <td class = " text-[11px] md:text-sm py-2 border border-gray-200">
                                <?php
                                    if($user_name == $userItem['name']){
                                        ?>
                                        <p class = "text-green-500">Login Account</p>
                                        <?php
                                    }else{
                                        ?>
                                         <button class = "text-red-500 border border-red-500 rounded-sm px-1 mx-1" id = "delete_user" data-id = "<?= $userItem['id'] ?>">Delete</button>
                                         <?php
                                         if($userItem['status'] == 0){
                                            ?>
                                            <a href = "" class = "text-red-500 border border-red-500 rounded-sm px-1 mx-1" id = "open_active" data-id = "<?= $userItem['id'] ?>"  >Disabled</a>
                                            <?php
                                         }else{
                                            ?>
                                            <a href = "" class = "text-green-500 border border-green-500 rounded-sm px-1 mx-1" id = "close_active" data-id = "<?= $userItem['id'] ?>"  >Active</button>
                                            <?php
                                         }
                                         ?>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                 }
                ?>
            </tbody>
        </table>
        </div>
    </div>
    <!--  -->
   <!-- <?php
    $user = getById("users",$user_id);
    if(mysqli_num_rows($user) > 0){
        foreach($user as $userItem){
            ?>
            <div class = "box-circle">
                <div class = "box-user">
                    <div class = "text-white box-user1">
                    <img src="assets/img/unnamed.jpg" class = "rounded-full w-50 h-50" alt="">
                    <p><?= $userItem['name']?></p>
                    </div>
                <div class = "box-user2">
                    <div class= "user2-header">
                        <p>Information</p>
                    </div>
                    <div class = "user3-header">
                        <div class = "user3-header-1">
                            <p>Email</p>
                            <p><?= $userItem['email']?></p>
                        </div>
                        <div class = "user3-header-1">
                            <p>Created</p>
                            <p><?= $userItem['create_at']?></p>
                        </div>
                    </div>
                    <div class = "user3-header">
                        <div class = "user3-header-1">
                            <p>Status</p>
                            <p><?= $userItem['status'] == 1 ? 'active' : 'underfine' ?></p>
                        </div>
                        <div class = "user3-header-1">
                            <p>Email verify</p>
                            <p>2:21 AM 12/1/2024</p>
                        </div>
                    </div>
                    <div class = "flex justify-between items-center mt-4">
                    <div class = "cursor-pointer user3-change flex justify-between" id = "btn-change">
                        <span class = "px-2"><i class="fa-regular fa-pen-to-square"></i></span> <span><a href = "changeinfor.php?id=<?= $userItem['id']?>">Chanage Password</a></span>
                    </div>
                    <div class = "cursor-pointer user3-change flex justify-between" id = "btn-change">
                        <span class = "px-2"><i class="fa-regular fa-pen-to-square"></i></span> <span><a href = "createadmin.php?id=<?= $userItem['id']?>">Create Admin</a></span>
                    </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
   
   ?>
    <div class = "box-user1 box-user1-item table-responsive ">        
        <table class = "text-center">
            <thead> 
                <tr>
                    <th>Username</th>
                    <th>EMAIL</th>
                    <th>Status</th>
                    <th>Creted at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $userAll = getAdmin("users");
                 if(mysqli_num_rows($userAll) > 0){
                    foreach($userAll as $userItem){
                        ?>
                        <tr id = "user-<?= $userItem['id']?>">
                            <td><?= $userItem['name'] ?></td>
                            <td><?= $userItem['email'] ?></td>
                            <td><?= $userItem['status'] == 1 ? 'Active' : 'Disabled' ?></td>
                            <td><?= $userItem['create_at'] ?></td>
                            <td>
                                <?php
                                    if($user_name == $userItem['name']){
                                        ?>
                                        <p class = "text-green-500">Login Account</p>
                                        <?php
                                    }else{
                                        ?>
                                         <button class = "text-red-500 border border-red-500 rounded-sm px-1 mx-1" id = "delete_user" data-id = "<?= $userItem['id'] ?>">Delete</button>
                                         <?php
                                         if($userItem['status'] == 0){
                                            ?>
                                            <a href = "" class = "text-red-500 border border-red-500 rounded-sm px-1 mx-1" id = "open_active" data-id = "<?= $userItem['id'] ?>"  >Disabled</a>
                                            <?php
                                         }else{
                                            ?>
                                            <a href = "" class = "text-green-500 border border-green-500 rounded-sm px-1 mx-1" id = "close_active" data-id = "<?= $userItem['id'] ?>"  >Active</button>
                                            <?php
                                         }
                                         ?>
                                        <?php
                                    }
                                ?>
                            </td>
                        </tr>
                        <?php
                    }
                 }
                ?>
            </tbody>
        </table>
    </div> -->
    
</div>
<!-- end -->
<?php include('includes/footer.php')?>