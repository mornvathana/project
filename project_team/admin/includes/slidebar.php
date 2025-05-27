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
                        <a href="index.php"><i class="fa-solid fa-table-cells-large"></i> <?php echo $text['dashboard'] ?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['total_product']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'product1.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="product1.php"><i class="fa-solid fa-box-archive"></i> <?php echo $text['totalProduct']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['web_info']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'webinfo.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="webinfo.php"><i class="fa-solid fa-box-open"></i> <?php echo $text['webinfo']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['product']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'menu.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="menu.php"><i class="fa-solid fa-box-open"></i> <?php echo $text['product']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['brands']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'branddisplay.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="branddisplay.php"><i class="fa-solid fa-square-plus"></i> <?php echo $text['brand']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['category']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'category1.php' ? 'bg-gray-200' : ''; ?>  font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="category1.php"><i class="fa-solid fa-boxes-stacked"></i> <?php echo $text['category']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['orders']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'customerorder.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="customerorder.php"><i class="fa-solid fa-cart-shopping"></i> <?php echo $text['orders']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['user']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'userprofile.php' ? 'bg-gray-200' : ''; ?> <?= $page == 'userclient.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="userclient.php"><i class="fa-solid fa-user"></i> <?php echo $text['user']?></a>
                    </li>
                    <?php endif;?>
                    <?php if(!empty($permission['inventory']) == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'inventory.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="inventory.php"><i class="fas fa-warehouse"></i> <?php echo $text['inventory']?></a>
                    </li>
                    <?php endif;?>
                </ul>
            </div>
        </div>