<?php
    if($_SESSION['auth_user']){
        $id = $_SESSION['auth_user']['user_id'];
    }
?>
<div class = "w-full h-full">
            <div class = "header w-full sticky top-0 z-10 bg-white h-[50px] px-5 py-5 shadow-sm flex items-center justify-between">
                <div class = "bar lg:hidden" id = "menu-small">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class = "relative hidden lg:block input">
                   
                </div>
                <div class = "flex items-center justify-center gap-5 cursor-pointer setting">
                    <div class = "flex items-center justify-center gap-2">
                        <?php
                          $user = getById("users",$id);
                          if($user->num_rows > 0){
                            foreach($user as $item){
                            ?>
                            <div class = "img">
                            <img src="
                                <?php
                                if($item['image']){
                                    echo "../uploads/admin/". $item['image'];
                                }else{
                                    echo "assets/img/default.jpg";
                                }
                                ?>
                            " class = 'object-cover w-8 h-8 rounded-full' alt="">
                            </div>
                            <div class = 'flex flex-col title'>
                                <p class = "text-sm font-bold">Admin</p>
                                <p class = "text-sm"><?= $item['name']?></p>
                            </div>
                            <?php
                            }
                          }
                        ?>
                    </div>
                </div>
            </div>