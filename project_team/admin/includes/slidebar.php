<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/") + 1);
    if($_SESSION['auth_user']){
        $id = $_SESSION['auth_user']['user_id'];
    }
    $permission = permission($id);
?>
<div class = "hidden w-full shadow-sm h-full lg:block " id = "slide-bar">
            <div class = "fixed flex items-center justify-between px-5 w-full h-[50px] bg-white shadow-sm border-b ">    
                <img src="assets/img/download.png" class = 'object-cover w-10' alt="">
                <i class="cursor-pointer fa-solid fa-arrow-left"></i>
            </div>
            <!-- end title siide-left -->
            <div class = "fixed flex h-full px-5 bg-white shadow-sm w-100 top-10">
                <ul>
                    <?php if($permission['dashboard'] == 1): ?>
                    <li class = "p-2 my-1 <?= $page == 'index.php' ? 'bg-gray-200' : ''; ?> text-[12px] font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="index.php"><i class="fa-solid fa-table-cells-large"></i> Dashboard</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['total_product'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'product1.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="product1.php"><i class="fa-solid fa-box-open"></i> Total Product</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['product'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'product1.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="menu.php"><i class="fa-solid fa-box-open"></i> Product</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['brands'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'branddisplay.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="branddisplay.php"><i class="fa-solid fa-box-open"></i> Brands</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['category'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'category1.php' ? 'bg-gray-200' : ''; ?>  font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="category1.php"><i class="fa-solid fa-boxes-stacked"></i> Category</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['orders'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'customerorder.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="customerorder.php"><i class="fa-solid fa-cart-shopping"></i> Orders</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['user'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'useradmin.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="useradmin.php"><i class="fa-solid fa-user"></i> User</a>
                    </li>
                    <?php endif;?>
                    <?php if($permission['inventory'] == 1): ?>
                    <li class = "p-2 my-1 text-[12px] <?= $page == 'inventory.php' ? 'bg-gray-200' : ''; ?> font-medium rounded-md hover:text-white hover:bg-blue-500">
                        <a href="inventory.php"><i class="fas fa-warehouse"></i> Inventory</a>
                    </li>
                    <?php endif;?>
                    <li class = "p-2 my-1 text-[12px] bg-red-500 text-white font-medium rounded-md hover:text-white">
                        <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>