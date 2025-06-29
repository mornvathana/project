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

            <button class="max-w-sm mx-auto mr-3" type = "button" id="user-menu-button1"
            aria-expanded="false"
            data-dropdown-toggle="user-dropdown"
            data-dropdown-placement="bottom" >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
            </svg>
            </button>

            <!-- start message area -->
             <div class="z-50 hidden my-4 text-base w-[370px] bg-[#f0f2f5] list-none bg-[#f3f5f7] divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600"
                id="user-dropdown">
                <!-- chat area -->

                <div id = "chatarea" class = "hidden">
                    <div class = "w-full h-[35px] px-2 gap-2 grid grid-cols-[25px_1fr] bg-[#ffffff] flex justify-start items-center">
                        <div class = "btnClose">
                        <svg xmlns="http://www.w3.org/2000/svg" class = "w-[20px] h-[20px] btnClose" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M11.03 3.97a.75.75 0 0 1 0 1.06l-6.22 6.22H21a.75.75 0 0 1 0 1.5H4.81l6.22 6.22a.75.75 0 1 1-1.06 1.06l-7.5-7.5a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
                        </svg>
                        </div>
                        <div class = "flex gap-2 justify-start items-center">
                            <img src="data:image/png;base64,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" class = "w-[25px] h-[25px] rounded-full" alt="" />
                            <span class = "font-blod text-sm">Morn sovathana</span>
                        </div>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                    <li>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                        <div class = "w-full h-[200px] relative">
                            <div class = "flex justify-start items-center gap-3 absolute left-0 bottom-0">
                            <img src="data:image/png;base64,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" class = "w-[20px] h-[20px] rounded-full" alt="" />
                            <span>Hello</span>
                            </div>
                        </div>
                        </a>
                    </li>
                    </ul>
                    
                <form>
                    <label for="chat" class="sr-only">Your message</label>
                    <div class="flex items-center px-3 py-2 rounded-lg bg-gray-50 dark:bg-gray-700">
                        <button type="button" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                                <path fill="currentColor" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 1H2a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM7.565 7.423 4.5 14h11.518l-2.516-3.71L11 13 7.565 7.423Z"/>
                            </svg>
                            <span class="sr-only">Upload image</span>
                        </button>
                        <button type="button" class="p-2 text-gray-500 rounded-lg cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.408 7.5h.01m-6.876 0h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM4.6 11a5.5 5.5 0 0 0 10.81 0H4.6Z"/>
                            </svg>
                            <span class="sr-only">Add emoji</span>
                        </button>
                        <textarea id="chat" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                            <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4l16 8-16 8v-6l10-2-10-2V4z" />
                            </svg>
                            <span class="sr-only">Send message</span>
                        </button>
                    </div>
                </form>
                </div>

                <!-- end chat area -->
               <div id = "messagearea" class = "">
                <ul class="py-2" aria-labelledby="user-menu-button1">
                <li>
                    <a class="block grid gap-5 grid-cols-[50px_1fr] px-4 py-2 bg-[#ffffff] text-sm text-gray-700 shadow-lg" id = "chatMessage">
                    <div>
                        <img src="data:image/png;base64,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" class = "w-[50px] h-[50px]" alt="" />
                    </div>
                    <div class = "flex justify-center items-start flex-col">    
                        <div class = "flex justify-between items-center font-medium gap-2 w-full">
                        Morn sovathana
                        <span class = "w-[10px] h-[10px] rounded-full bg-red-500"></span>
                        </div>
                        <div class = "w-full flex justify-between items-center text-gray-500 "><p>You: Hello I know...</p> <p>12:00 AM</p></div>
                    </div>
                    </a>

                    <a href="#" class="block grid gap-5 grid-cols-[50px_1fr] px-4 py-2 bg-[#ffffff] text-sm text-gray-700 shadow-lg">
                    <div>
                        <img src="data:image/png;base64,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" class = "w-[50px] h-[50px]" alt="" />
                    </div>
                    <div class = "flex justify-center items-start flex-col">    
                        <div class = "flex justify-between items-center font-medium gap-2 w-full">
                        Morn sovathana
                        <span class = "w-[10px] h-[10px] rounded-full bg-red-500"></span>
                        </div>
                         <div class = "w-full flex justify-between items-center text-gray-500 "><p>You: Hello I know...</p> <p>12:00 AM</p></div>
                    </div>
                    </a>
                    
                </li>
                </ul>
               </div>
            </div>
            <!-- end message area -->
            
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
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown3" data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="
                    <?php
                        if(!empty($data['image'])){
                            echo "../uploads/admin/" . $data['image'];
                        }else{
                            echo "../uploads/default/default.png";
                        }
                    ?>
                    " alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown3">
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