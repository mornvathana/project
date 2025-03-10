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
            <button class="search-box w-[450px] flex items-center space-x-2 border rounded-full p-2 text-lg font-medium"
                style="border: 2px solid #144194;">
                <input type="text" placeholder="Search for product..." class="w-full h-fit outline-none">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <button class="shopping-cart text-[#144194] text-xl relative">
                <a href="checkoutCart.php"><i class="fa-solid fa-bag-shopping">
                    <div class="cart-number bg-red-500 w-[20px] h-[20px] rounded-full absolute top-[-3px] left-3 text-white text-[15px] flex justify-center items-center p-2">1</div>
                </i>
                </a>
            </button>
            <button class="cus-account text-[#144194] text-xl">
                <a href="login.php"><i class="fa-solid fa-user"></i></a>
            </button>
        </div>

        <div class="right-responsive flex lg:hidden items-center space-x-5 text-[20px] sm:text-[25px] md:text-2xl lg:text-2xl xl:text-5xl 2xl:text-2xl font-mono">
            <button class="shopping-cart text-[#144194] relative">
                <a href="cart.html">
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
        <ul
            class="menu font-[Montserrat,hanuman,Sans-serif] font-bold text-sm text-gray-800 hidden lg:flex justify-center items-center space-x-8 xl:space-x-10 relative z-10">
            <li class="text-[#144194]"><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
            <?php
            $navItem = getAll("product_database");
            if(mysqli_num_rows($navItem) > 0){
                foreach( $navItem as $item){
                    ?>
                <li id="btnSubMenu3"><a href="#"><?= $item['product_name']?></a> <i class="fa-solid fa-angle-down"></i>
                <?php
                    $navSub = whereProduct("category_db","product_id",$item['product_name']);
                    if(mysqli_num_rows($navSub) > 0){
                        foreach($navSub as $itemSub){
                            ?>
                            <ul class="sub-menu hidden absolute grid-cols-1 bg-gray-200 gap-3 text-gray-800 p-3 grid text-sm"
                            id="sub-menu2">
                            <li><a href="products.php?Id=<?= $item['product_name']?>"><?= $itemSub['name']?></a></li>
                            </ul>
                            <?php
                        }
                    }
                ?>
                </li>
                    <?php
                }
            }
            ?>
        </ul>
    </nav>