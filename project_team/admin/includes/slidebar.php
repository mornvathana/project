<?php

    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/") + 1);
    
    $id = null;
    $permission = null;

    if (isset($_SESSION['auth_user'])) {
        $id = $_SESSION['auth_user']['user_id'] ?? null;
    }

    if($id !== null){
        $permission = permission($id);
    }

    include("lang.php");
    
?>
<div class = "hidden w-full shadow-sm h-full lg:block " id = "slide-bar">
            <div class = "fixed flex items-center justify-between px-5 w-full h-[50px] bg-white shadow-sm border-b ">    
                <img src="assets/img/download.png" class = 'object-cover w-10' alt="">
                <i class="cursor-pointer fa-solid fa-arrow-left"></i>
            </div>
            <!-- end title siide-left -->
            <div class = "fixed flex h-full w-[150px] px-5 bg-white shadow-sm w-100 top-10 z-10">
                <ul>
                    <?php if(!empty($permission['dashboard']) == 1): ?>
                    <li class = "p-2 my-1 <?= $page == 'index.php' ? 'bg-gray-200' : ''; ?> text-[12px] font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="index.php" class = "flex items-center"> 
                        <span class = "mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                        </span>
                        <span><?php echo $text['dashboard'] ?></span>
                    </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['total_product']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'product1.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="product1.php" class = "flex items-center">
                            <span class = "mr-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>
                            </span>
                            <span>
                                <?php echo $text['totalProduct']?>
                            </span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['web_info']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'webinfo.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="webinfo.php" class = "flex items-center">
                        <span class = "mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                            </svg>
                        </span>    
                         <span><?php echo $text['webinfo']?></a></span>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['product']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'menu.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'menuedit.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'createmenu.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="menu.php" class = "flex items-center">
                        <span class = "mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
                            </svg>
                        </span> 
                        <?php echo $text['product']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['brands']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'branddisplay.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'brand.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'brandedit.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="branddisplay.php" class = "flex items-center">
                        <span class = "mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-2.25-1.313M21 7.5v2.25m0-2.25-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3 2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75 2.25-1.313M12 21.75V19.5m0 2.25-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25" />
                            </svg>
                        </span>
                        <span>
                        <?php echo $text['brand']?>
                        </span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['category']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'category1.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'categoryEdit.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'category.php' ? 'bg-gray-200' : ''; ?>  font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="category1.php" class = "flex items-center">
                        <span class = "mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                        </span>
                        <span> <?php echo $text['category']?></span>
                        </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['orders']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'customerorder.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="customerorder.php" class = "flex">
                        <span class = "mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        </span>
                        <span><?php echo $text['orders']?></span>
                    </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['promotionCode']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'discount.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="discount.php" class = "flex">
                        <span class = "mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class = "w-[15px] h-[15px]" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M11.99 2.243a4.49 4.49 0 0 0-3.398 1.55 4.49 4.49 0 0 0-3.497 1.306 4.491 4.491 0 0 0-1.307 3.498 4.491 4.491 0 0 0-1.548 3.397c0 1.357.6 2.573 1.548 3.397a4.491 4.491 0 0 0 1.307 3.498 4.49 4.49 0 0 0 3.498 1.307 4.49 4.49 0 0 0 3.397 1.549 4.49 4.49 0 0 0 3.397-1.549 4.49 4.49 0 0 0 3.497-1.307 4.491 4.491 0 0 0 1.306-3.497 4.491 4.491 0 0 0 1.55-3.398c0-1.357-.601-2.573-1.549-3.397a4.491 4.491 0 0 0-1.307-3.498 4.49 4.49 0 0 0-3.498-1.307 4.49 4.49 0 0 0-3.396-1.549Zm3.53 7.28a.75.75 0 0 0-1.06-1.06l-6 6a.75.75 0 1 0 1.06 1.06l6-6Zm-5.78-.905a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Zm4.5 4.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd" />
                        </svg>
                        </span>
                        <span><?php echo $text['promotionCode']?></span>
                    </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['user']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'userprofile.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'userclient.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="userclient.php" class = "flex items-center ">
                        <span class = "mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                        </span>
                        <span><?php echo $text['user']?></span>
                    </a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['inventory']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'inventory.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="inventory.php" class = "flex items-center">
                        <span class = "mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-[15px] h-[15px]" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                        </svg>
                        </span>
                        <span><?php echo $text['inventory']?></span>
                    </a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>