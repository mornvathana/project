<?php 
    include('includes/header.php');
    include('middleware/users.php');
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
                    <img src = "
                            <?php
                                if($userItem['image']){
                                    echo "../uploads/admin/" . $userItem['image'];
                                }else{
                                    echo "assets/img/default.jpg";
                                }
                            ?>
                                " class = "w-[100px] h-[100px] rounded-full"/>
                    <h1 class = "font-medium mt-3"><?= $userItem['name']?></h1>
                    </div>
                    <div class = "">
                        <div class = "w-full h-[10%] px-5">
                            <p class = " text-[10px] md:text-[13px] font-medium">Information</p>
                        </div>
                        <hr>
                        <div class = "w-full h-[25%] flex justify-between items-center py-1 px-5">
                            <div class = "">
                                <p class = " text-[10px] md:text-[13px] font-medium my-2">Email</p>
                                <p class = "text-[#646a7a] text-[10px] md:text-[13px] my-1"><?= $userItem['email']?></p>
                            </div>
                            <div class = "">
                                <p class = " text-[10px] md:text-[13px] font-medium my-2">Created Date</p>
                                <p class = "text-[#646a7a] text-[10px] md:text-[13px] my-1"><?= $userItem['created_at']?></p>
                            </div>
                        </div>
                        <div class = "w-full h-[10%] px-5">
                            <p class = " text-[10px] md:text-[13px] font-medium my-2">Verify </p>
                        </div>
                        <hr>
                        <div class = "w-full h-[25%] flex justify-between items-center py-1 px-5">
                            <div class = "">
                                <p class = " text-[10px] md:text-[13px] font-medium my-2">Status</p>
                                <p class = "text-[#646a7a] text-[10px] md:text-[13px] my-1"><?= $userItem['status'] == 1 ? 'active' : 'underfine' ?></p>
                            </div>
                            <div class = "">
                                <p class = " text-[10px] md:text-[13px] font-medium my-2">Email Verify</p>
                                <p class = "text-[#646a7a] text-[10px] md:text-[13px] my-1"><?= $userItem['created_at']?></p>
                            </div>
                        </div>
                        <hr>
                        <div class = "w-full h-[25%] flex justify-start gap-5 items-center py-1 px-5">
                            <div class = "">
                            <span class = "px-2"><i class="fa-regular fa-pen-to-square  text-[10px] md:text-[12px]"></i></span> <span><a href = "changeinfor.php?id=<?= $userItem['id']?>" class = " text-[10px] md:text-[12px]">Chanage Password</a></span>
                            </div>
                            <div class = "">
                            <span class = "px-2"><i class="fa-regular fa-pen-to-square  text-[10px] md:text-[12px]"></i></span> <span><a href = "createadmin.php?id=<?= $userItem['id']?>" class = " text-[10px] md:text-[12px]">Create Admin</a></span>
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
            <thead class = "bg-[#f6f8fa]"> 
                <tr>
                    <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Username</th>
                    <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">EMAIL</th>
                    <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Status</th>
                    <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Created at</th>
                    <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $userAll = getAdmin("users");
                 if(mysqli_num_rows($userAll) > 0){
                    foreach($userAll as $userItem){
                        ?>
                        <tr id = "user-<?= $userItem['id']?>">
                            <td class = " text-[10px] md:text-[12px] py-2 border border-gray-200"><?= $userItem['name'] ?></td>
                            <td class = " text-[10px] md:text-[12px] py-2 border border-gray-200 break-words"><?= $userItem['email'] ?></td>
                            <td class = " text-[10px] md:text-[12px] py-2 border border-gray-200"><?= $userItem['status'] == 1 ? 'Active' : 'Disabled' ?></td>
                            <td class = " text-[10px] md:text-[12px] py-2 border border-gray-200"><?= $userItem['created_at'] ?></td>
                            <td class = " text-[10px] md:text-[12px] py-2 border border-gray-200">
                                <?php
                                    if($user_name == $userItem['name']){
                                        ?>
                                        <p class = "text-green-500">Login Account</p>
                                        <?php
                                    }else{
                                        ?>
                                         <button class = "text-red-500 border-[1px]  border-red-500 rounded-md px-1 mx-1" id = "delete_user" data-id = "<?= $userItem['id'] ?>">Delete</button>
                                         <?php
                                         if($userItem['status'] == 0){
                                            ?>
                                            <a href = "" class = "text-red-500 border-[1px]  border-red-500 rounded-md px-1 mx-1" id = "open_active" data-id = "<?= $userItem['id'] ?>"  >Disabled</a>
                                            <?php
                                         }else{
                                            ?>
                                            <a href = "" class = "text-green-500 border b-[1px] border-green-500 rounded-md px-1 mx-1" id = "close_active" data-id = "<?= $userItem['id'] ?>"  >Active</button>
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
  
<?php include('includes/footer.php')?>