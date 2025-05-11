<?php 
    include('includes/header.php');
    include('../middleware/adminAccess.php');
    include('middleware/users.php');
    if($_SESSION['auth_user']){
        $user_id = $_SESSION['auth_user']['user_id'];
        $user_name = $_SESSION['auth_user']['user_name'];
    }
    if($_GET['id']){
        $id = $_GET['id'];
    }
?>
<!--  -->
            <?php
                $user = getById("users",$id);
                if(mysqli_num_rows($user) > 0){
                    foreach($user as $userItem){
                        ?>
                        <div class = "h-full px-2 py-5 bg-[#f3f5f7]">
                            <div class = "w-full h-[100%] flex flex-col gap-5">
                                <div class = "h-[5%] flex justify-center items-center">
                                    <div class = "w-[95%] h-full flex justify-between items-center">
                                    <div>
                                        <h1 class = "text-md font-medium">User Profile</h1>
                                    </div>
                                    <div>
                                        <a href = "userclient.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
                                    </div>
                                    </div>
                                </div>
                                <div class = "h-[25%] w-full  flex justify-center items-start">
                                    <div class = "w-[95%] h-full flex justify-start gap-5 items-center bg-[#ffffff] rounded-md shadow-sm">
                                        <div class = "w-[15%] h-full flex justify-end items-center">
                                            <img src="<?php
                                                        if($userItem['image']){
                                                            echo "../uploads/admin/" . $userItem['image'];
                                                        }else{
                                                            echo "assets/img/default.jpg";
                                                        }
                                                    ?>" class = "rounded-full w-[100px] h-[100px]" alt="">
                                        </div>
                                        <div class = "w-[60%] h-full flex justify-start items-center">
                                            <ul>
                                                <li>
                                                    <a href="" class = "text-sm md:text-md font-medium"><?= $userItem['name']?></a>
                                                </li>
                                                <li>
                                                    <a href="" class = "text-[#646a7a] text-sm md:text-sm">Admin</a>
                                                </li>
                                                <li>
                                                    <a href="" class = "text-sm">Vathana</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class = "h-[40%] w-full  flex justify-center items-start">
                                    <div class = "w-[95%] grid grid-cols-1 md:grid-cols-2 h-full rounded-md shadow-sm  gap-5 py-1">
                                        <div class = " bg-[#ffffff] px-5 ">
                                           <div class = "w-full h-[30%]  flex justify-between items-center">  
                                            <div>
                                                <h1 class = "text-sm md:text-md font-medium flex"><span class = "hidden md:block pr-1">Personal</span> <span>information</span></h1>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class = "w-full h-[70%] flex justify-start items-center">
                                            <div class = "w-full lg:w-[100%] h-full">
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">First Name</li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Last Name</li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Create Date</li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['created_at']?></li>
                                                    </ul>
                                                </div>
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Email Address</li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['email']?></li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Email Verify</li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">User role</li>
                                                        <li class = "text-[10px] md:text-[12px]">Admin</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class = " bg-[#ffffff] px-5 ">
                                            <div class = "w-full h-[30%]  flex justify-between items-center">  
                                            <div>
                                                <h1 class = "text-sm md:text-md font-medium flex"><span class = "hidden md:block pr-1">Personal</span> <span>Product</span></h1>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class = "w-full h-[70%] flex justify-start items-center">
                                            <div class = "w-full lg:w-[100%] h-full">
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Finished</li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Pedding</li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Completed</li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['created_at']?></li>
                                                    </ul>
                                                </div>
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Total Price</li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['email']?></li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">Score</li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]">User role</li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['role_as'] == 0 ? 'User' : 'Admin'?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>  
                                </div>
                        <?php
                    }
                }
            ?>
            <!--  -->
            <div class = "h-[25%] w-full  flex justify-center items-start">
                <div class = "w-[95%] h-full items-center bg-[#ffffff] rounded-md shadow-sm">
                    <table class = "text-center w-full table-auto">
                        <thead class = "bg-[#f6f8fa]"> 
                            <tr>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Username</th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Product</th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Total</th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Created at</th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $userAll = whereOrders("orders","user_id",$id);
                            if(mysqli_num_rows($userAll) > 0){
                                foreach($userAll as $userItem){
                                    ?>
                                    <tr id = "user-<?= $userItem['id']?>">
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200"><?= $userItem['first_name'] ?> <?= $userItem['last_name'] ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200 break-words"><?= $userItem['first_name'] ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200"><?= $userItem['total_price']?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200"><?= $userItem['created_at'] ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200">
                                              <button class = "text-red-500 border-[1px] mb-1  border-red-500 rounded-md px-1 mx-1" id = "delete_user" data-id = "<?= $userItem['id'] ?>">Delete</button>
                                              <button class = "text-blue-500 border-[1px] mb-1  border-blue-500 rounded-md px-1 mx-1"><a href="adminedit.php?id=<?= $userItem['id'] ?>">Edit</a></button>
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
        </div>
    </div>
    <!--  -->
  
<?php include('includes/footer.php')?>