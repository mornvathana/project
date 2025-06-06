<?php
    if(isset($_SESSION['auth_user'])){
        $id = $_SESSION['auth_user']['user_id'];
    }
    include("lang.php");
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
            
            <form class="max-w-sm mx-auto mr-3" method = "GET">
            <select onchange="this.form.submit()" name = "lang" id="countries" class=" outline-none border-b text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected><?php echo  $text['chooseLanguage']?></option>
                <option value="eng"><?php echo $text['usa']?></option>
                <option value="kh"><?php echo $text['kh']?></option>
            </select>
            </form>

            <?php
               if(!empty($id)){
                 $user = getById("users",$id);
                if($user->num_rows > 0){
                    foreach($user as $data){
                    ?>
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="
                    <?php
                        if(!empty($data['image'])){
                            echo "../uploads/admin/" . $data['image'];
                        }else{
                            echo "../uploads/default/default.jpg";
                        }
                    ?>
                    " alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                    <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white"><?= $data['name']?></span>
                    <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"><?= $data['email']?></span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="useradmin.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><?php echo $text['profile']?></a>
                    </li>
                    <li>
                        <a href="logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><?php echo $text['signout']?></a>
                    </li>
                    </ul>
                    </div>
                    <?php
                    }
                }
               }
            ?>
        </div>
    </div>
    </div>