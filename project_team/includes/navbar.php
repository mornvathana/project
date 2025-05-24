<!-- header -->
<header class="header">
        <div
            class="top-header w-[100%] bg-[#144194] hidden sm:flex justify-between px-5 py-2 font-[Hanuman,Sans-serif] text-[#fff] sticky top-0 text-[13px]">
            <div class="flex space-x-5 items-center">
                <div class="phone-contact flex items-center space-x-2">
                    <i class="fa-solid fa-phone"></i>
                    <p>0963904112</p>
                </div>

                <div class="email-contact flex items-center space-x-2">
                    <i class="fa-solid fa-envelope"></i>
                    <p>mrounit83@gmail.com</p>
                </div>
            </div>
            <div class="">
                <a href="" class="flex items-center space-x-2">
                <i class="fa-brands fa-telegram"></i>
                <p>Chat On Telegram</p>
                </a>
            </div>
        </div>
        <!-- end of top header -->
    </header>

    <div class="bottom-header flex justify-between items-center px-5 py-1 sticky top-0 lg:static bg-[#fff] z-40 shadow-sm">
        <div class="left">
            <div class="logo w-[150px]">
                <a href="#"><img src="https://soklyphone.com/storage/image-2022-07-02-164325-1656755040dyQxA.jpg"
                        alt=""></a>
            </div>
        </div>

        <div class="right hidden lg:flex items-center space-x-5">
            
            <!-- Search Box -->
            <div class="w-[450px] mx-auto">
            <div class="relative">
            <!-- Search Input -->
            <input 
                type="text" 
                placeholder="Search products..." 
                id="search"
                class="searchInput w-full p-2 pl-4 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:border-transparent shadow-sm text-[17px]"
                autocomplete="off"
                style="border: 2px solid #144194;">
            <!-- Search Icon -->
            <div class="absolute right-3 top-[15px] text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            
            <!-- Autocomplete Dropdown with Images -->
            <div id="autocompleteResults" class="autocompleteResults absolute z-[150] mt-1 w-full bg-white rounded-lg shadow-lg border border-gray-200 max-h-96 overflow-y-auto">
                
            </div>
            </div>
            </div>

            <button class="shopping-cart text-[#144194] text-xl relative">
                <a href="checkoutCart.php"><i class="fa-solid fa-bag-shopping">
                    <div class="cart-number bg-red-500 w-[20px] h-[20px] rounded-full absolute top-[-3px] left-3 text-white text-[15px] flex justify-center items-center p-2">1</div>
                </i>
                </a>
            </button>
            <button class="cus-account text-[#144194] text-xl">
                <a href="
                <?php
                    if(isset($_SESSION['auth'])){
                        if($_SESSION['role_as'] == 1){
                            echo "../project_team/admin/index.php";
                        }else{
                            echo "profile.php";
                        }
                    }else{
                        echo "login.php";
                    }
                ?>
                "><i class="fa-solid fa-user"></i></a>
            </button>
        </div>

        <div class="right-responsive flex lg:hidden items-center space-x-5 text-[20px] sm:text-[25px] md:text-2xl lg:text-2xl xl:text-5xl 2xl:text-2xl font-mono">
            <button class="shopping-cart text-[#144194] relative">
                <a href="checkoutCart.php">
                    <i class="fa-solid fa-bag-shopping">
                      <div class="cart-number bg-red-500 w-[20px] h-[20px] rounded-full absolute top-[-3px] left-3 text-white text-[15px] flex justify-center items-center p-2">1</div>
                    </i>
                </a>
            </button>
            <button class="cus-account text-[#144194]">
                <a href="account.html"><i class="fa-solid fa-user"></i></a>
            </button>
            <button class="search text-[#144194]" onclick="toggleSearchBox()">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="menu-bar text-[#144194]">
                <i class="fa-solid fa-bars" id="btnMenu"></i>
                <i class="fa-solid fa-xmark hidden" id="btnclose"></i>
            </button>
        </div>
    </div>
    <!-- end of bottom header -->
<nav class="px-5 py-0 lg:py-3 sticky top-0 bg-[#fff] z-40 shadow-sm">
    <!-- menu -->
    <ul class="menu font-[Montserrat,hanuman,Sans-serif] font-bold text-sm text-gray-800 hidden lg:flex justify-center items-center space-x-8 xl:space-x-10 relative z-10">
        <li class="text-[#144194]"><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
        <?php
            $menu = getAll("product");
            if(mysqli_num_rows($menu) > 0){
                foreach($menu as $item){
                    ?>
                    <li>
                        <a href="#"><?= $item['name'] ?> <i class="fa-solid fa-angle-down"></i></a>

                        <?php
                        $subMenu = menu($item['id']);
                        if(mysqli_num_rows($subMenu) > 0){
                            ?>
                            <ul class="sub-menu absolute grid-cols-1 gap-5 bg-gray-200 p-5 shadow-lg hidden text-gray-800 font-medium rounded-md">
                                <?php
                                foreach($subMenu as $subItem){
                                    ?>
                                    <li><a href="products.php?id=<?= $subItem['id'] ?>"><?= $subItem['name']?></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                            <?php
                        }
                        ?>
                    </li>
                    <?php
                }
            }
            ?>
    </ul>
</nav>
