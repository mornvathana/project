<?php 
    include('includes/header.php');
    include('../middleware/adminAccess.php');
    include('middleware/users.php');
    include("lang.php");
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
                                        <h1 class = "text-md font-medium"><?php echo $text['userprofile']?></h1>
                                    </div>
                                    <div>
                                        <a href = "userclient.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md"><i class="fa-solid fa-arrow-left pr-1"></i><?php echo $text['back']?></a>
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
                                                    ?>" class = "rounded-full w-[130px] h-[100px]" alt="">
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
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['firstName']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['lastName']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">Morn</li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['created']?></li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['created_at']?></li>
                                                    </ul>
                                                </div>
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['email']?></li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['email']?></li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['emailverify']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                if(!empty($userItem['email_verify'])){
                                                                    echo "Yes";
                                                                }else{
                                                                    echo "Not yet";
                                                                }
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['userrole']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">Admin</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class = " bg-[#ffffff] px-5 ">
                                            <div class = "w-full h-[30%]  flex justify-between items-center">  
                                            <div>
                                                <h1 class = "text-sm md:text-md font-medium flex"><span class = "hidden md:block pr-1"><?php echo $text['userdetail']?></span></h1>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class = "w-full h-[70%] flex justify-start items-center">
                                            <div class = "w-full lg:w-[100%] h-full">
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['finish']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                $number = countStatusUser("orders","3",$id);
                                                                ?>
                                                                <?= $number?>
                                                                <?php
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['processing']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                $number = countStatusUser("orders","2",$id);
                                                                ?>
                                                                <?= $number?>
                                                                <?php
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['pedding']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                $number = countStatusUser("orders","1",$id);
                                                                ?>
                                                                <?= $number?>
                                                                <?php
                                                            ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class = "w-full h-[50%] grid grid-cols-3">
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['totalprice']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                $price = sumPrice("orders",$id);
                                                                ?>
                                                                <?= $price['total']?>
                                                                <?php
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['score']?></li>
                                                        <li class = "text-[10px] md:text-[12px]">
                                                            <?php
                                                                $price = sumScore("score_customer",$id);
                                                                ?>
                                                                <?= $price['total']?>
                                                                <?php
                                                            ?>
                                                        </li>
                                                    </ul>
                                                    <ul>
                                                        <li class = "text-[10px] md:text-[13px] text-[#646a7a]"><?php echo $text['userrole']?></li>
                                                        <li class = "text-[10px] md:text-[12px]"><?= $userItem['role_as'] == 0 ? 'User'  : 'Admin'?></li>
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
            <input type="hidden" name="userId" id="uservalueid" value = "<?= $id?>">
            <div class = "h-[5%] flex justify-center items-center">
                <div class = "w-[95%] h-full flex justify-between items-center">
                <div>
                    <h1 class = "text-md font-medium"><?php echo $text['report']?></h1>
                </div>
                <div>
                    <!--  -->
                    <div class="flex items-start md:justify-end">
                    <form class="max-w-sm">
                        <select id="page_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 h-7 px-2">
                            <option value = "1" selected><?php echo $text['status']?></option>
                            <option value="1"><?php echo $text['pedding']?></option>
                            <option value="2"><?php echo $text['processing']?></option>
                            <option value="3"><?php echo $text['finish']?></option>
                        </select>
                    </form>
                </div>
                <!--  -->
                </div>
                </div>
            </div>

            <div class = "h-[25%] w-full  flex justify-center items-start">
                <div class = "w-[95%] h-full items-center bg-[#ffffff] rounded-md shadow-sm">
                    <table class = "text-center w-full table-auto">
                        <thead class = "bg-[#f6f8fa]"> 
                            <tr>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['id']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['name']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['product']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['total']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['created']?></th>
                                <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['bigreceipt']?></th>
                                 <th class = "py-1 text-[11px] md:text-[13px] text-[#646a7a] shadow-b border-gray-900 font-medium"><?php echo $text['smallreceipt']?></th>
                            </tr>
                        </thead>
                        <tbody id = "displayData">
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <div class = "w-full h-[10px] flex justify-end items-center">
                <div class = "flex">
                    <a href="#" class="flex items-center justify-center px-2 h-7 me-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="back_btn">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                        </svg>
                        <?php echo $text['previous']?>
                    </a>

                    <a href="#" class="flex items-center justify-center px-3 h-8 me-3 text-sm font-medium text-gray-500 rounded-lg">
                        <span id="startPage">1</span> / <span id="totalPage">10</span>
                    </a>

                    <a href="#" class="flex items-center justify-center px-2 h-7 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700" id="next_btn">
                        <?php echo $text['back']?>
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!--  -->
  <script src = "assets/js/userreport.js"></script>
<?php include('includes/footer.php')?>