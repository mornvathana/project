<?php 
    include('includes/header.php');
    include('../middleware/adminAccess.php');
    include('middleware/users.php');
    if($_SESSION['auth_user']){
        $user_id = $_SESSION['auth_user']['user_id'];
        $user_name = $_SESSION['auth_user']['user_name'];
    }
?>
<!--  -->
            <?php
                $user = getById("users",$user_id);
                if(mysqli_num_rows($user) > 0){
                    foreach($user as $userItem){
                        ?>
                        <div class = "h-full px-2 py-10 bg-[#f3f5f7]">
                            <div class = "w-full flex flex-col gap-5">
                                <div class = "h-[5%] flex justify-center items-center">
                                    <div class = "w-[95%] h-full flex justify-start items-center">
                                        <h1 class = "text-md font-medium">My Profile</h1>
                                    </div>
                                </div>
                                <div class = "h-[120px] w-full  flex justify-center items-start">
                                    <div class = "w-[95%] h-full flex justify-start gap-5 items-center bg-[#ffffff] rounded-md shadow-sm">
                                        <div class = "w-[15%] h-full flex justify-end items-center">
                                            <img src="<?php
                                                        if($userItem['image']){
                                                            echo "../uploads/admin/" . $userItem['image'];
                                                        }else{
                                                            echo "../uploads/default/default.png";
                                                        }
                                                    ?>" class = "rounded-full w-[50px] h-[50px] md:w-[100px] md:h-[100px]" alt="">
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
                                <div class = "h-[150px] w-full  flex justify-center items-start">
                                    <div class = "w-[95%] h-full items-center bg-[#ffffff] rounded-md shadow-sm px-5 py-1">
                                        <div class = "w-full h-[30%]  flex justify-between items-center">  
                                            <div>
                                                <h1 class = "text-sm md:text-md font-medium flex"><span class = "hidden md:block pr-1"><?php echo $text['personalinformation']?></span></h1>
                                            </div>
                                            <div>
                                                <ul class = "flex gap-5">
                                                    <li>
                                                        <a href="activitylog.php?id=<?= $userItem['id']?>"><button class="bg-blue-100 border-[1px] border-blue-500 text-blue-500 px-2 py-[1px] text-[9px] md:text-[13px] rounded-md"><i class="fas fa-user"></i> <span><?php echo $text['activitylogs']?></span></button></a>
                                                    </li>
                                                    <li>
                                                        <a href="changeinfor.php?id=<?= $userItem['id']?>"><button class="bg-blue-100 border-[1px] border-blue-500 text-blue-500 px-2 py-[1px] text-[9px] md:text-[13px] rounded-md"><i class="fas fa-edit"></i> <span><?php echo $text['changepassword']?></span></button></a>
                                                    </li>
                                                    <li>
                                                        <a href="createadmin.php?id=<?= $userItem['id']?>"><button class="bg-blue-100 border-[1px] border-blue-500 text-blue-500 px-2 py-[1px] text-[9px] md:text-[13px] rounded-md"><i class="fas fa-edit"></i> <span><?php echo $text['createadmin']?></span></button></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class = "w-full h-[70%] flex justify-start items-center">
                                            <div class = "w-full lg:w-[60%] h-full">
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['firstName']?></li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['name']?></li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['emailverify']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                if(!empty($userItem['email'])){
                                                                    echo "Yes";
                                                                }else{
                                                                    echo "No";
                                                                }
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['userrole']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">Admin</li>
                                                    </ul>
                                                </div>
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['email']?></li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['email']?></li>
                                                    </ul>
                                                    
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['date']?></li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['created_at']?></li>
                                                    </ul>
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
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['name']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['email']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['status']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['created']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['option']?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $userAll = getAdmin("users");
                            if(mysqli_num_rows($userAll) > 0){
                                foreach($userAll as $userItem){
                                    ?>
                                    <tr id = "user-<?= $userItem['id']?>">
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200"><?= $userItem['name'] ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200 break-words"><?= $userItem['email'] ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200 
                                                    <?php
                                                        if($userItem['status'] == 1){
                                                            echo 'text-green-500';
                                                        }else{
                                                            echo 'text-red-500';
                                                        }
                                                    ?>
                                                    "><?= $userItem['status'] == 1 ? $text['active'] : $text['disabled']  ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200"><?= $userItem['created_at'] ?></td>
                                        <td class = " text-[10px] md:text-[12px] py-2 border-b border-gray-200">
                                            <?php
                                                if($user_name == $userItem['name']){
                                                    ?>
                                                    <p class = "text-green-500"><?php echo $text['loginaccount']?></p>
                                                    <?php
                                                }else{
                                                    ?>
                                                    <button class = "text-red-500 border-[1px] mb-1  border-red-500 rounded-md px-1 mx-1" id = "delete_user" data-id = "<?= $userItem['id'] ?>"><?php echo $text['delete']?></button>
                                                    <button class = "text-blue-500 border-[1px] mb-1  border-blue-500 rounded-md px-1 mx-1"><a href="adminedit.php?id=<?= $userItem['id'] ?>"><?php echo $text['edit']?></a></button>
                                                    <?php
                                                    if($userItem['status'] == 0){
                                                        ?>
                                                        <button  class = "text-red-500 border-[1px]  border-red-500 rounded-md px-1 mx-1 " id = "open_active" data-id = "<?= $userItem['id'] ?>"  ><?php echo $text['disabled']?></button>
                                                        <?php
                                                    }else{
                                                        ?>
                                                        <button  class = "text-green-500 border-[1px] border-green-500 rounded-md px-1 mx-1"  id = "close_active" data-id = "<?= $userItem['id'] ?>"  ><?php echo $text['active']?></button>
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
        </div>
    </div>
    <!--  -->
<?php include('includes/footer.php')?>