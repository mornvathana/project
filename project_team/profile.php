<?php 
    ob_start();
    include('includes/header.php');
    include('authication.php');
    if(isset($_SESSION['auth_user'])){
        $id = $_SESSION['auth_user']['user_id'];
    }   
?>
<div class="profile-block w-[90%] mx-auto mt-10 flex my-2 flex-col md:flex-row justify-between relative">
    <!-- menu -->
    <div class="menu w-[100%] md:w-[30%] h-fit sticky top-[4rem] bg-[#fff] z-10 overflow-hidden"
        style="border: 1px solid #d2d3d4; border-radius: 10px;">
        <ul class="space-y-3 font-medium text-[15px] p-5 font-[Poppins,hanuman,Sans-serif] text-gray-800"
            id="righ_button">
            <li class="active"><a href="#" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" /></svg> <span>Profile</span></a></li>
            <li class=""><a href="#" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" /></svg> <span>Change Password</span></a></li>
            <li class=""><a href="#" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" /></svg> <span>My Orders</span></a></li>
            <li class=""><a href="#" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" /><path d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" /><path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" /></svg> <span>Order Tracking</span></a></li>
            <li class=""><a href="#" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" /></svg> <span>My Favorites</span></a></li>
            <li class=""><a href="#" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>
            <span>My Rewards</span></a></li>
            <li class=""><a href="logout.php" class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm10.72 4.72a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 1 1-1.06-1.06l1.72-1.72H9a.75.75 0 0 1 0-1.5h10.94l-1.72-1.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" /></svg> <span>Logout</span></a></li>
        </ul>
    </div>

    <?php
        $data = getMenuwithID("users",$id);
        if($data->num_rows > 0){
            foreach($data as $user){
            ?>
        <div class="all-page w-[100%] md:w-[68%]">
        <!-- profile-page -->
        <div class="page w-[100%] h-fit mt-5 md:mt-0 overflow-hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;" name="profile">
            <div class="w-full mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-semibold text-blue-800 mb-6">Personal Information</h2>

        <!-- Avatar -->
        <div class="flex space-x-4 mb-6 rounded-lg bg-gray-100 p-2">
        <img src="https://th.bing.com/th/id/R.b3cf4fdb4aa23910a48d8efa69c8b447?rik=tlXIaDQ20rnx2Q&riu=http%3a%2f%2fcdn.collider.com%2fwp-content%2fuploads%2f2016%2f03%2fsuperman-returns.jpg&ehk=V8oY2akdo8%2fHFZ0XXdU%2beMwvSyLlDUtmm8k9rIrk%2fK8%3d&risl=&pid=ImgRaw&r=0" alt="Avatar" class="w-20 h-20 rounded-full object-cover" />
        <div>
        <!-- Modal toggle -->
        <button data-modal-target="static-modal" data-modal-toggle="static-modal" class="block text-blue-800 font-semibold" type="button">
        Change Profile
        </button>
            <p class="text-sm text-gray-500">Upload JPG, PNG image required.</p>
        </div>

        <!-- Main modal -->
        <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <form method="post" action="" class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">    
                <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>
                <input id="dropzone-file" type="file" class="hidden" />
                </label>
                </div> 

                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="static-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
                    <button data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                </div>
            </form>
        </div>
        </div>
        </div>

        <!-- Form Fields with Right-Aligned Icons -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">

        <!-- Full Name -->
        <div class="relative">
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" name = "name" id = "name" value = "<?= $user['name']?>"
            class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
            <input type = "hidden" name = "id" id = "dataid" value = "<?= $id ?>"/>
            <span class="absolute right-3 top-9 text-gray-400">
            <!-- User Icon -->
            <i class="fa-solid fa-user"></i>
            </span>
        </div>

        <!-- Birthday -->
        <div class="relative">
            <label class="block text-sm font-medium text-gray-700 mb-1">Created at</label>
            <input type="text" readonly name = "createdAt" id = "createdAt" value = "<?= $user['created_at']?>"
            class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
            <span class="absolute right-3 top-9 text-gray-400">
            <!-- User Icon -->
            <i class="fa-solid fa-user"></i>
            </span>
        </div>

        <!-- Email -->
        <div class="relative">
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name = "email" id = "email" value = "<?= $user['email']?>"
            class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
            <input type="hidden" id = "email" value = <?= $user['email']?>>
            <span class="absolute right-3 top-9 text-gray-400">
            <!-- Mail Icon -->
            <i class="fa-solid fa-envelope"></i>
            </span>
        </div>

        <!-- Phone -->
        <div class="relative">
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" name = "phonenumber" id = "phonenumber" value = "<?= $user['phonenumber']?>" placeholder="Enter your phone number"
            class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" />
            <span class="absolute right-3 top-9 text-gray-400">
            <!-- Phone Icon -->
            <i class="fa-solid fa-phone"></i>
            </span>
        </div>

        <!-- Address -->
        <div class="relative md:col-span-2">
            <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
            <textarea placeholder="Enter your address" name = "address" id = "address" rows="2"
            class="w-full pr-10 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300"><?= $user['address']?></textarea>
            <span class="absolute right-3 top-11 text-gray-400">
            <!-- Location Icon -->
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM12 22s8-4.5 8-10A8 8 0 104 12c0 5.5 8 10 8 10z" />
            </svg>
            </span>
        </div>
        </div>

        <!-- Update Button -->
        <div class="flex justify-end items-center">
        <button class="button text-white font-semibold rounded"  id = "loading">
            
       </button>
        <button class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-6 py-2 rounded" id = "updateProfile">Update</button>
        </div>
        </div>
        </div>
            <?php
            }
        }
    ?>

    <!-- change password -->
    <div class="page w-[100%] h-fit mt-5 md:mt-0 overflow-hidden hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="password">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-semibold text-blue-800 mb-6">Change Password</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
      <!-- Current Password -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
        <input type="password" id="oldPass" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required />
        <span onclick="togglePassword('oldPass', 'iconCurrent')" id="iconCurrent" class="absolute right-3 top-[30px] cursor-pointer select-none">👁️</span>
      </div>

      <!-- New Password -->
      <div class="relative">
        <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
        <input type="password" id="newPass" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required />
        <input type="hidden" id = "id" value = "<?= $id ?>">
        <span onclick="togglePassword('newPass', 'iconNew')" id="iconNew" class="absolute right-3 top-[30px] cursor-pointer select-none">👁️</span>
      </div>

      <!-- Re-enter New Password -->
      <div class="relative md:col-span-2">
        <label class="block text-sm font-medium text-gray-700 mb-1">Re-enter your password</label>
        <input type="password" id="conPass" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-300" required />
        <span onclick="togglePassword('conPass', 'iconRe')" id="iconRe" class="absolute right-3 top-[30px] cursor-pointer select-none">👁️</span>
      </div>
    </div>

    <!-- Update Button -->
    <div class="flex justify-end items-center">
        <button class="button text-white font-semibold rounded"  id = "loading1">
            
       </button>
      <button class="bg-blue-800 hover:bg-blue-900 text-white font-semibold px-6 py-2 rounded" type = "submit" id = "updatePassword">Update</button>
    </div>
    </div>
    </div>

        <!-- orders-page -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="orders">
            <div class="">
                <h2 class="text-2xl font-semibold text-blue-800 mb-6">My Orders</h2>

                <!-- order-box-noresponsive -->
                <div class="order-box w-[100%] h-fit hidden md:block">
                    <div class="box">
                        <!-- form of cart-box -->
                        <form action="" method="POST"
                            class="w-full font-[Poppins,hanuman,Sans-serif] text-gray-700 mt-5">

                            <!-- table of product-cart -->
                            <table class="">
                                <thead class="">
                                    <tr class="font-normal text-md">
                                        <td class="invisible"></td>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>A4 Receipt</th>
                                        <th>Small Receipt</th>
                                    </tr>
                                </thead>
                                <tbody class="font-normal">
                                    <?php
                                    $cart = getOrders($id);
                                    if($cart->num_rows > 0){
                                        foreach($cart as $item){
                                        ?>
                                    <tr class="border-b-2">
                                        <td><a href="#"><img
                                                    src="uploads/category/<?= $item['product_image']?>"
                                                    alt="Product Image"></a></td>
                                        <td>
                                            <?= $item['product_name']?>
                                        </td>
                                        <td>
                                            <?= $item['product_price']?>
                                        </td>
                                        <td><input type="number" readonly id="inputValue"
                                                value="<?= $item['product_qty']?>" min="0" step="1"
                                                class="w-[70px] text-center border border-gray-300 rounded-lg" disabled>
                                        </td>
                                        <td>
                                            <?php
                                                    $idorder = 0;
                                                    $price = getPrice($item['id'],$id);
                                                    if($price->num_rows > 0){
                                                        foreach($price as $num){
                                                        $idorder = $num['id'];
                                                        ?>
                                            <?= $num['total_price']?>
                                            <?php
                                                        }
                                                    }
                                                ?>
                                        </td>
                                        <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1"><a
                                                href="action/invoice.php?cartId=<?= $item['id']?>&orderid=<?= $idorder?>&userid=<?= $item['user_id']?>"
                                                target="_blank"><i
                                                    class="fas fa-download text-green-500 rounded-sm p-2 cursor-pointer bg-green-100"></i></a>
                                        </td>
                                        <td class="text-[11px] shadow-style bg-[#ffffff] md:text-[13px] py-1"><a
                                                href="action/smallinvoice.php?cartId=<?= $item['id']?>&orderid=<?= $idorder?>&userid=<?= $item['user_id']?>"
                                                target="_blank"><i
                                                    class="fas fa-download text-green-500 rounded-sm p-2 cursor-pointer bg-green-100"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>

                <!-- order-box-responsive -->
                <div class="cart-box w-[100%] h-fit mt-3 block md:hidden">
                    <div class="box">
                        <!-- form of cart-box -->
                        <form action="" method="POST"
                            class="w-full font-semibold font-[Poppins,hanuman,Sans-serif] text-gray-700">
                            <!-- cart -->
                            <div class="cart w-full space-y-5 border-b-2 pb-3 text-sm">

                                <div class="flex justify-between w-full">
                                    <label for="product-image" class="invisible">Image:</label>
                                    <div><img
                                            src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16.plus_.green_-300x300.png"
                                            alt="Product Image" class="w-[100px]"></div>
                                </div>

                                <div class="flex justify-between w-full">
                                    <label for="product-name">Product:</label>
                                    <div class="text-right"><a href="#">iPhone 16 Plus – Non active</a></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="price">Price:</label>
                                    <div>$15.00</div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="qty">Quantity:</label>
                                    <div><input type="number" id="inputValue" value="0" min="0" step="1"
                                            class="w-[70px] text-center border border-gray-300 rounded-lg"></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="sub-total">Sub Total:</label>
                                    <div>$15.00</div>
                                </div>

                            </div>

                            <!-- cart -->
                            <div class="cart w-full space-y-5 border-b-2 pb-3 text-sm mt-3">

                                <div class="flex justify-between w-full">
                                    <label for="product-image" class="invisible">Image:</label>
                                    <div><img
                                            src="https://shunliphone.com/wp-content/uploads/2024/09/iphone16pro.max_.gold_-300x300.png"
                                            alt="Product Image" class="w-[100px]"></div>
                                </div>

                                <div class="flex justify-between w-full">
                                    <label for="product-name">Product:</label>
                                    <div class="text-right"><a href="#">iPhone 16 Plus – Non active</a></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="price">Price:</label>
                                    <div>$15.00</div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="qty">Quantity:</label>
                                    <div><input type="number" id="inputValue" value="0" min="0" step="1"
                                            class="w-[70px] text-center border border-gray-300 rounded-lg"></div>
                                </div>

                                <div class="flex justify-between">
                                    <label for="sub-total">Sub Total:</label>
                                    <div>$15.00</div>
                                </div>

                            </div>

                            <button class="mt-5 bg-blue-500 text-white rounded-lg p-2 text-sm"><a href="#"> <i
                                        class="fa-regular fa-pen-to-square"></i> Update</a></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <!-- orders-tracking -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="tracking">
            <div class="">
                <h2 class="text-2xl font-semibold text-blue-800 mb-6">Order Tracking</h2>

                <div class="container mx-auto max-w-4xl">

                    <!-- Order Summary -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-8">
                        <div class="flex flex-col md:flex-row justify-between items-center">
                            <div class="mb-4 md:mb-0 text-center md:text-left">
                                <h2 class="text-xl font-semibold text-gray-800">Hea Oun Cambodia</h2>
                                <p class="text-gray-600">Items : (
                                <?php
                                    $data = countCart("cart",$id);
                                    ?>
                                    <?= $data ?>
                                    <?php
                                ?>    
                                )</p>
                            </div>
                            <div class="text-center md:text-right">
                                <p class="text-gray-600">Total Amount</p>
                                <p class="text-2xl font-bold text-gray-800 flex items-center justify-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                                    </svg>

                                    $
                                    <?php
                                    $price = getPriceCart($item['id'],$id);
                                    if($price->num_rows > 0){
                                        foreach($price as $num){
                                        $idorder = $num['id'];
                                            $shipping = getMenuwithID("shipping",$num['shipping_id']);
                                            $total = 0;
                                            if($shipping->num_rows > 0){
                                            foreach($shipping as $value){
                                            $total = $value['shipping_price'] + $num['product_price'];
                                            ?>
                                            <?= $total ?> 
                                            <?php
                                            }
                                            }
                                        }
                                        }
                                        ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Progress Tracking -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true" 
                    class="hidden displayareapopup transform overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        
                    </div>

                    <!-- Order Items Table -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-8 border border-gray-100 overflow-x-auto">
                        <h2 class="text-xl font-semibold text-gray-800 mb-6">Order Items</h2>

                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Product</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Total Price</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Quantity</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Shipping Detail</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- Item 1 -->
                                        <?php
                                        $cart = getOrders($id);
                                        if($cart->num_rows > 0){
                                            foreach($cart as $item){
                                            ?>
                                            <tr>
                                             <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-16 w-16">
                                                    <img class="h-16 w-16 rounded-md object-cover"
                                                        src="uploads/category/<?= $item['product_image']?>"
                                                        alt="">
                                                </div>
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900"><?= $item['product_name']?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                $
                                            <?php
                                            $idorder = 0;
                                            $price = getPriceCart($item['id'],$id);
                                            if($price->num_rows > 0){
                                                foreach($price as $num){
                                                $idorder = $num['id'];
                                                 $shipping = getMenuwithID("shipping",$num['shipping_id']);
                                                 $total = 0;
                                                 if($shipping->num_rows > 0){
                                                    foreach($shipping as $value){
                                                    $total = $value['shipping_price'] + $num['product_price'];
                                                    ?>
                                                    <?= $total ?> 
                                                    <?php
                                                    }
                                                 }
                                                }
                                                }
                                                ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?= $item['product_qty']?>
                                            </td>
                                            
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                <button class="text-blue-600 hover:text-blue-900" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-id = "<?= $item['id']?>" id = "viewdetail" type = "button">View Details</button>
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

                    <!-- Order Details -->

                </div>

            </div>
        </div>

        <!-- favorites -->
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="favorites">
            <div class="">
                <h1 class="text-green-900 font-[Montserrat,hanuman,Sans-serif] text-[20px] font-bold">My Favorites
                </h1>
                <div class="line w-[30%] bg-gray-500 h-[2px] rounded-md mt-1"></div>

                <!-- product-box -->
            <div
                class="product-box w-full grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-4 gap-3 mt-5">
                <!-- box -->
                <?php
                 $data = favorite("favorite","user_id",$id);
                 if($data->num_rows > 0){

                    foreach($data as $name){
                    ?>
                    <div class="box w-full overflow-hidden rounded-md p-3 sm:p-5 box-shadow-custom sm:shadow-lg" id = "data-<?= $name['id']?>">
                    <a href="#" class="flex flex-col items-center space-y-2 w-full">
                        <div class="pro-img w-full overflow-hidden rounded-md">
                            <img src="uploads/category/<?= $name['image']?>" alt=""
                                class="w-full">
                        </div>
                        <div
                            class="price flex items-center space-x-3 text-[#144194] font-[Roboto,hanuman,Sans-serif] text-lg font-semibold">
                            <del class="dis-price opacity-50">$<?= $name['original_price']?></del>
                            <div class="full-price text-[#f34770!important]">$<?= $name['sell_price']?></div>
                            <input type="hidden" id = "favoriteid" value = "<?= $name['id']?>">
                             <input type="hidden" id = "favoriteuser" value = "<?= $id?>">
                        </div>
                        <div
                            class="pro-name text-center text-[13px] md:text-[14px] text-gray-700 font-bold leading-6 font-[Roboto,hanuman,Sans-serif] h-[75px] overflow-hidden" >
                            <?= $name['name']?></div>
                        <button
                            class="text-[#144194] font-[Roboto,hanuman,Sans-serif] text-sm font-semibold opacity-85 border rounded-full p-2 border-[#144194]" id = "removefavorite"><i class="fa-solid fa-heart"></i>
                            Remove</button>
                        <div class="line"></div>
                    </a>
                    </div>
                    <?php
                    }

                 }
                ?>
               

            </div>
            <!-- end of product-box -->

            </div>
        </div>
        
        <div class="page w-[100%] h-fit p-5 mt-5 md:mt-0 hidden" style="border: 1px solid #d2d3d4; border-radius: 10px;"
            name="rewards">
        <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-blue-800 flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>
            <span> Your Rewards</span></h1>
            <p class="text-gray-600">Redeem your savings points for discounts</p>
        </header>

        <!-- Points Summary -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <h2 class="text-xl font-semibold text-gray-700 font-[Roboto,hanuman,Sans-serif]">Available Points</h2>
                    <p id="points-counter" class="text-4xl font-bold points-pulse text-green-500">1,250 <span class="text-lg">pts</span></p>
                </div>
                <div class="text-center md:text-right font-[Roboto,hanuman,Sans-serif]">
                    <p class="text-gray-600 mb-2">Points expiring soon: <span class="font-semibold">250 pts</span> (Jun 30, 2025)</p>
                    <p class="text-sm text-gray-500">Earn more points with every purchase!</p>
                </div>
            </div>
        </div>

        <!-- Redeem Options -->
        <section class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Redeem Your Points</h2>
                <button id="history-btn" onclick="showGiftHistory()" class="history-btn bg-blue-800 hover:bg-blue-900 text-white font-medium py-2 px-4 rounded-md transition-all flex items-center shadow-lg hover:shadow-xl transform hover:scale-105">
                    <i class="fas fa-gift mr-2"></i>
                    View Gift History
                    <span class="ml-2 bg-white text-blue-800 text-xs font-bold px-2 py-1 rounded-full animate-pulse">3</span>
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Option 1 -->
                <div class="reward-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:border-indigo-300 transition-all relative font-[Roboto,hanuman,Sans-serif]">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">$5 Discount</h3>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">500 pts</span>
                        </div>
                        <p class="text-gray-600 mb-4 flex items-center space-x-2"><span>5$ Discount</span> <i class="fas fa-tag text-amber-500 mr-2"></i></p>
                        <button onclick="redeemPoints(500, '$5 Discount')" class="w-full bg-blue-800 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            Redeem Now
                        </button>
                    </div>
                </div>

                <!-- Option 2 -->
                <div class="reward-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:border-indigo-300 transition-all relative font-[Roboto,hanuman,Sans-serif]">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">$10 Discount</h3>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">1,000 pts</span>
                        </div>
                        <p class="text-gray-600 mb-4 flex items-center space-x-2"><span>$10 Discount</span> <i class="fas fa-tag text-green-500 mr-2"></i></p>
                        <button onclick="redeemPoints(1000, '$10 Discount')" class="w-full bg-blue-800 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            Redeem Now
                        </button>
                    </div>
                </div>

                <!-- Option 3 -->
                <div class="reward-card bg-white rounded-lg shadow-md overflow-hidden border border-gray-200 hover:border-indigo-300 transition-all relative font-[Roboto,hanuman,Sans-serif]">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Free Shipping</h3>
                            <span class="bg-indigo-100 text-indigo-800 text-xs font-medium px-2.5 py-0.5 rounded">750 pts</span>
                        </div>
                        <p class="text-gray-600 mb-4 flex items-center space-x-2"><span>Get free shipping</span> <i class="fas fa-shipping-fast text-blue-500 mr-2"></i></p>
                        <button onclick="redeemPoints(750, 'Free Shipping')" class="w-full bg-blue-800 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            Redeem Now
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Activity -->
        <section>
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Points</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            </tr>
                        </thead>
                        <tbody id="activity-body" class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jun 15, 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Order #12345</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+150 pts</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Completed</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jun 10, 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$10 Discount</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-1,000 pts</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Redeemed</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jun 5, 2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Order #12344</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">+200 pts</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Completed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        
        <!-- Success Modal (hidden by default) -->
        <div id="success-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="bg-white rounded-lg shadow-xl p-6 max-w-sm mx-auto relative z-10 transform transition-all duration-300 scale-95 opacity-0" id="modal-content">
                <div class="text-center">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-4">
                        <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 id="success-title" class="text-lg leading-6 font-medium text-gray-900">Success!</h3>
                    <div class="mt-2">
                        <p id="success-message" class="text-sm text-gray-500">Your points have been redeemed successfully.</p>
                    </div>
                    <div class="mt-4">
                        <button onclick="closeModal()" type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-indigo-900 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-indigo-500">
                            Got it!
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gift History Modal (hidden by default) -->
        <div id="gift-history-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="bg-white rounded-lg shadow-xl p-6 max-w-md w-full mx-4 mx-auto relative z-10 transform transition-all duration-300 scale-95 opacity-0" id="gift-history-content">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 flex items-center">
                        <i class="fas fa-gift text-blue-800 mr-2"></i>
                        Your Gift History
                    </h3>
                    <button onclick="closeGiftHistory()" class="text-gray-500 hover:text-gray-700 transition-transform hover:rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-4 max-h-96 overflow-y-auto pr-2">
                    <div class="gift-history-item border-b pb-4 border-gray-200">
                        <div class="flex justify-between items-center">
                            <h4 class="font-medium text-gray-800 flex items-center">
                                <i class="fas fa-tag text-green-500 mr-2"></i>
                                $10 Discount
                            </h4>
                            <span class="text-sm text-gray-500">Jun 10, 2023</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 ml-6">Redeemed with 1,000 points</p>
                        <div class="flex justify-between items-center mt-2 ml-6">
                            <span class="inline-block px-2 py-1 text-xs font-medium bg-green-100 text-green-800 rounded-full">Used</span>
                            <button class="text-xs text-blue-600 hover:text-blue-800 font-medium" onclick="showVoucherDetails('$10 Discount', 'Jun 10, 2023', 'Used', 'DISCOUNT10-2023')">
                                View Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                    <div class="gift-history-item border-b pb-4 border-gray-200">
                        <div class="flex justify-between items-center">
                            <h4 class="font-medium text-gray-800 flex items-center">
                                <i class="fas fa-shipping-fast text-blue-500 mr-2"></i>
                                Free Shipping
                            </h4>
                            <span class="text-sm text-gray-500">May 28, 2023</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 ml-6">Redeemed with 750 points</p>
                        <div class="flex justify-between items-center mt-2 ml-6">
                            <span class="inline-block px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">Active</span>
                            <button class="text-xs text-blue-600 hover:text-blue-800 font-medium" onclick="showVoucherDetails('Free Shipping', 'May 28, 2023', 'Active', 'FREESHIP-2023')">
                                View Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                    <div class="gift-history-item border-b pb-4 border-gray-200">
                        <div class="flex justify-between items-center">
                            <h4 class="font-medium text-gray-800 flex items-center">
                                <i class="fas fa-tag text-amber-500 mr-2"></i>
                                $5 Discount
                            </h4>
                            <span class="text-sm text-gray-500">Apr 15, 2023</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-1 ml-6">Redeemed with 500 points</p>
                        <div class="flex justify-between items-center mt-2 ml-6">
                            <span class="inline-block px-2 py-1 text-xs font-medium bg-gray-100 text-gray-800 rounded-full">Expired</span>
                            <button class="text-xs text-blue-600 hover:text-blue-800 font-medium" onclick="showVoucherDetails('$5 Discount', 'Apr 15, 2023', 'Expired', 'DISCOUNT5-2023')">
                                View Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Voucher Details Modal -->
        <div id="voucher-details-modal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="bg-white rounded-lg shadow-xl p-6 max-w-md w-full mx-4 mx-auto relative z-10">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Voucher Details</h3>
                    <button onclick="closeVoucherDetails()" class="text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-4">
                    <div>
                        <h4 id="voucher-name" class="font-medium text-gray-800 text-lg"></h4>
                        <p id="voucher-date" class="text-sm text-gray-600"></p>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Voucher Code:</span>
                            <span id="voucher-code" class="font-mono font-bold text-blue-800"></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-600">Status:</span>
                            <span id="voucher-status" class="font-medium"></span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Redeemed On:</span>
                            <span id="voucher-redeemed" class="text-gray-800"></span>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button onclick="closeVoucherDetails()" class="bg-blue-800 hover:bg-blue-900 text-white font-medium py-2 px-6 rounded-md transition-colors">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </div>
</div>
<script>
    $(document).ready(function(){
        $(document).on("click","#removefavorite",function(){
            let favoriteid = $("#favoriteid").val();
            let favoriteuser = $("#favoriteuser").val();

            $.ajax({
                method: "POST",
                url: "function/code.php",
                data: {
                    "favoriteid" : favoriteid,
                    "favoriteuser" : favoriteuser,
                    "scrope" : "deletefavorite",
                },
                success: function (data) {
                    if(data == 202){
                         Swal.fire({
                        icon: 'success',
                        title: '<span class="text-gray-800 font-semibold text-lg">Password updated!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        }).then(() =>{
                            $(`#data-${favoriteid}`).remove();
                        });
                    }else if(data == 101){
                         Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">Something went wrong!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                    }
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(document).on("click","#updatePassword",function(){
        const loading1 = $("#loading1");
        let oldPass = $("#oldPass").val();
        let newPass = $("#newPass").val();
        let conPass = $("#conPass").val();
        let email = $("#email").val(); 
        let id = $("#id").val();

        $.ajax({
            method: "POST",
            url: "function/code.php",
            data: {
                "id" : id,
                "email" : email,
                "oldPass" : oldPass,
                "newPass" : newPass,
                "conPass" : conPass,
                "scrope" : "updatePass",
            },
            beforeSend: function(){
                 loading1.html(`<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#2196f3" stroke-dasharray="50.2655 50.2655" fill="none" stroke-linecap="round">
                                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"/>
                                </circle>
                                </svg>`);
            },
            success: function (data) {
                if(data == 101){
                     Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">Password is not matching!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                        loading1.html("");
                }else if(data == 102){
                     Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">old password is not correct!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                        loading1.html("");
                }else if(data == 202){
                     loading1.html(`<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                                    <path fill="#c8e6c9" d="M36,42H12c-3.314,0-6-2.686-6-6V12c0-3.314,2.686-6,6-6h24c3.314,0,6,2.686,6,6v24C42,39.314,39.314,42,36,42z"></path><path fill="#4caf50" d="M34.585 14.586L21.014 28.172 15.413 22.584 12.587 25.416 21.019 33.828 37.415 17.414z"></path>
                                    </svg>`);
                      Swal.fire({
                        icon: 'success',
                        title: '<span class="text-gray-800 font-semibold text-lg">Password updated!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                        $("#oldPass").val('');
                        $("#newPass").val('');
                        $("#conPass").val('');

                }else{
                    Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">Something went wrong!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                        loading1.html("");
                }
            }
        });
        });
        
    });
</script>

<script>
    $(document).ready(function(){
        $(document).on("click","#updateProfile",function(){

            const loading = $("#loading");
    
            let id = $("#dataid").val();
            let name = $("#name").val();
            let email = $("#email").val();
            let phonenumber = $("#phonenumber").val();
            let address = $("#address").val();

            $.ajax({
                method: "POST",
                url: "function/code.php",
                data: {
                    "id" : id, 
                    "name" : name,
                    "email" : email,
                    "phonenumber" : phonenumber,
                    "address" : address,
                    "scrope" : "updateProfile",
                },
                dataType: "json",
                beforeSend: function(){
                    loading.html(`<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <circle cx="50" cy="50" r="32" stroke-width="8" stroke="#2196f3" stroke-dasharray="50.2655 50.2655" fill="none" stroke-linecap="round">
                                    <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"/>
                                </circle>
                                </svg>`);
                },
                success: function (data) {
                    if(data == 100){
                        Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">Please new another email!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                    }else if(data == 202){
                        loading.html(`<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
                                    <path fill="#c8e6c9" d="M36,42H12c-3.314,0-6-2.686-6-6V12c0-3.314,2.686-6,6-6h24c3.314,0,6,2.686,6,6v24C42,39.314,39.314,42,36,42z"></path><path fill="#4caf50" d="M34.585 14.586L21.014 28.172 15.413 22.584 12.587 25.416 21.019 33.828 37.415 17.414z"></path>
                                    </svg>`);
                    }else{
                        Swal.fire({
                        icon: 'warning',
                        title: '<span class="text-gray-800 font-semibold text-lg">Something went wrong!</span>',
                        showCancelButton: false, 
                        showConfirmButton: false, 
                        timer: 3000,  
                        background: '#fff',
                        focusCancel: true,
                        buttonsStyling: false,
                        customClass: {
                            popup: 'rounded-xl shadow-md p-6',
                        },
                        didOpen: () => {
                            document.querySelector('.swal2-popup').style.width = '400px';
                        }
                        });
                    }


                }
            });
            
        });
    });
</script>
<!--  -->
<script>
    $(document).ready(function(){
        $(document).on("click","#closeBtn",function(){
             $('.displayareapopup').addClass('hidden'); 
        });

        $(document).on("click","#viewdetail",function(){
            let id = $(this).data("id");
            const display = $("#authentication-modal");
            $.ajax({
                method: "POST",
                url: "action/detailshipping.php",
                data: {
                    "id" : id,
                },
                dataType: "json",
                success: function (data) {
                    if(data.length > 0){
                        let txt = "";
                        let box1 = "";
                        let color1 = "";
                        let box2 = "";
                        let color2 = "";
                        let box3 = "";
                        let color3 = "";
                        for(i in data){
                            let item = data[i];
                            if(item.status == 1){
                                box1 = "bg-green-500";
                                box2 = "bg-red-500";
                                box3 = "bg-red-500";
                                color1 = "text-green-500";
                                color2 = "text-red-500";
                                color3 = "text-red-500";
                            }else if(item.status == 2){
                                box1 = "bg-green-500";
                                box2 = "bg-green-500";
                                box3 = "bg-red-500";
                                color1 = "text-green-500";
                                color2 = "text-green-500";
                                color3 = "text-red-500";
                            }
                            else if(item.status == 3){
                                box1 = "bg-green-500";
                                box2 = "bg-green-500";
                                box3 = "bg-green-500";
                                color1 = "text-green-500";
                                color2 = "text-green-500";
                                color3 = "text-green-500";
                            }else{
                                box1 = "";
                                box2 = "";
                                box3 = "";

                                color1 = "";
                                color2 = "";
                                color3 = "";
                            }
                            txt += `<div class="relative p-4 w-full max-w-3xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                        </svg>

                                        <span class="pl-2">Shipping Report</span>
                                    </h3>
                                    
                                </div>

                                <!-- Modal body -->
                                <div class="p-4 md:p-5 grid grid-cols-2 gap-5">
                                    <form class="space-y-4" action="#">
                                        <div class="bg-white rounded-xl shadow-md p-6">
                                            <div class="flex flex-col md:flex-row items-center">
                                                <!-- Status Steps -->
                                                <div class="flex-1">
                                                <div class="space-y-6">
                                                    <!-- Step 1 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div
                                                                class="w-4 h-4 rounded-full mt-1 mx-1 ${box1} border-4 mt-1">
                                                            </div>
                                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color1}">Pedding</h3>
                                                            <p class="text-sm text-gray-600 mt-1">We've received your order</p>
                                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                                <i class="far fa-clock mr-1.5"></i>
                                                                June 15, 11:30 AM
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <!-- Step 2 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div
                                                                class="w-4 h-4 rounded-full mt-1 mx-1 ${box2} border-4 mt-1">
                                                            </div>
                                                            <div class="w-0.5 h-12 bg-gray-200"></div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color2}">Processing</h3>
                                                            <p class="text-sm text-gray-600 mt-1">Items packaged and ready for shipment</p>
                                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                                <i class="far fa-clock mr-1.5"></i>
                                                                June 16, 2:15 PM
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- Step 4 -->
                                                    <div class="flex items-start">
                                                        <div class="mr-4 flex flex-col items-center">
                                                            <div class="w-4 h-4 rounded-full mt-1 mx-1 ${box3} border-4 border-gray-100 mt-1">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <h3 class="font-medium ${color3}">Delivered</h3>
                                                            <p class="text-sm text-gray-600 mt-1">Estimated delivery date</p>
                                                            <p class="text-xs text-gray-500 mt-1 flex items-center">
                                                                <i class="far fa-clock mr-1.5"></i>
                                                                June 20, by end of day
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div><!-- .space-y-6 -->
                                                </div><!-- .flex-1 -->
                                            </div><!-- .flex -->
                                        </div><!-- .p-6 -->
                                    </form>
                                <div class="bg-white rounded-xl shadow-md p-6">
                                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                                        <i class="fas fa-truck text-gray-500 mr-2"></i>
                                        Shipping Details
                                    </h2>
                                    <div class="text-gray-600">
                                        <p class="font-medium flex my-2">
                                        <span class = "mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        </span>
                                         ${item.username}
                                        </p>
                                        <p class = "flex my-2">
                                        <span class = "mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                                        </svg>
                                        </span>
                                         ${item.city}, ${item.province}</p>
                                        <p class = "flex my-2">
                                        <span class = "mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                                        </svg>
                                        </span>
                                         ${item.shippingMethod}</p>
                                        <p class="mt-2">
                                            <i class="fas fa-phone-alt mr-2"></i> ${item.phonenumber}
                                        </p>
                                    </div>
                                </div>
                                </div><!-- .p-4 -->
                            </div><!-- .modal content -->
                        </div>`;
                        }
                        display.html(txt);
                    }
                }
            });
        });
    });
</script>

<!-- Toggle Password Visibility -->
<script>
    function togglePassword(id, iconId) {
      const input = document.getElementById(id);
      const icon = document.getElementById(iconId);
      if (input.type === "password") {
        input.type = "text";
        icon.innerText = "🙈";
      } else {
        input.type = "password";
        icon.innerText = "👁️";
      }
    }
  </script>

  <!-- displayareapopup modal animation -->
  <script>
  document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll("[data-modal-target]");
  
  buttons.forEach(button => {
    button.addEventListener("click", function () {
      const modalId = this.getAttribute("data-modal-target");
      const modal = document.getElementById(modalId);
      
      if (modal) {
        modal.classList.remove("hidden");
        modal.classList.add("flex", "show"); // Add show class for animation
      }
    });
  });
  });

  function closeModal() {
  const modal = document.getElementById("authentication-modal");
  modal.classList.remove("flex", "show");
  modal.classList.add("hidden");
  }
  </script>

  <!-- rewards page animation -->
   <script>
        let currentPoints = 1250;
        
        function redeemPoints(points, rewardName) {
            if (currentPoints < points) {
                showModal('Not Enough Points', `You need ${points - currentPoints} more points to redeem this reward.`);
                return;
            }
            
            // Create confetti effect
            createConfetti();
            
            // Update points
            currentPoints -= points;
            updatePointsCounter();
            
            // Add to activity
            addActivity(rewardName, points);
            
            // Show success message
            showModal('Reward Redeemed!', `You've successfully redeemed ${points} points for ${rewardName}.`);
        }
        
        function updatePointsCounter() {
            const counter = document.getElementById('points-counter');
            counter.classList.add('points-pulse');
            
            // Animate the points change
            let start = parseInt(counter.textContent.replace(',', ''));
            let end = currentPoints;
            let duration = 1000; // 1 second
            let startTime = null;
            
            function animatePoints(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const value = Math.floor(start + (end - start) * progress);
                counter.textContent = value.toLocaleString() + ' pts';
                
                if (progress < 1) {
                    requestAnimationFrame(animatePoints);
                } else {
                    setTimeout(() => {
                        counter.classList.remove('points-pulse');
                    }, 500);
                }
            }
            
            requestAnimationFrame(animatePoints);
        }
        
        function addActivity(rewardName, points) {
            const activityBody = document.getElementById('activity-body');
            const now = new Date();
            const dateStr = now.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
            
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">${dateStr}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">${rewardName}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">-${points} pts</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Redeemed</td>
            `;
            
            // Add animation class
            newRow.classList.add('redeem-success');
            
            // Insert at the top of the table
            activityBody.insertBefore(newRow, activityBody.firstChild);
            
            // Remove the animation class after the animation completes
            setTimeout(() => {
                newRow.classList.remove('redeem-success');
            }, 1500);
        }
        
        function showModal(title, message) {
            const modal = document.getElementById('success-modal');
            const modalContent = document.getElementById('modal-content');
            document.getElementById('success-title').textContent = title;
            document.getElementById('success-message').textContent = message;
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }
        
        function closeModal() {
            const modal = document.getElementById('success-modal');
            const modalContent = document.getElementById('modal-content');
            
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        
        function createConfetti() {
            const colors = ['#6366f1', '#ec4899', '#f59e0b', '#10b981'];
            
            for (let i = 0; i < 50; i++) {
                const confetti = document.createElement('div');
                confetti.style.position = 'fixed';
                confetti.style.width = '10px';
                confetti.style.height = '10px';
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.borderRadius = '50%';
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.top = '-10px';
                confetti.style.zIndex = '100';
                confetti.style.transform = 'rotate(' + Math.random() * 360 + 'deg)';
                
                document.body.appendChild(confetti);
                
                const animation = confetti.animate([
                    { top: '-10px', opacity: 1 },
                    { top: '100vh', opacity: 0 }
                ], {
                    duration: 1000 + Math.random() * 2000,
                    easing: 'cubic-bezier(0.1, 0.8, 0.3, 1)'
                });
                
                animation.onfinish = () => {
                    confetti.remove();
                };
            }
        }
        
        function showGiftHistory() {
            const modal = document.getElementById('gift-history-modal');
            const modalContent = document.getElementById('gift-history-content');
            
            // Animate the history button
            const historyBtn = document.getElementById('history-btn');
            historyBtn.classList.add('animate-pulse');
            setTimeout(() => {
                historyBtn.classList.remove('animate-pulse');
            }, 500);
            
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95', 'opacity-0');
                modalContent.classList.add('scale-100', 'opacity-100');
            }, 10);
        }
        
        function closeGiftHistory() {
            const modal = document.getElementById('gift-history-modal');
            const modalContent = document.getElementById('gift-history-content');
            
            modalContent.classList.remove('scale-100', 'opacity-100');
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        
        function showVoucherDetails(name, date, status, code) {
            document.getElementById('voucher-name').textContent = name;
            document.getElementById('voucher-date').textContent = date;
            document.getElementById('voucher-status').textContent = status;
            document.getElementById('voucher-code').textContent = code;
            document.getElementById('voucher-redeemed').textContent = date;
            
            // Set status color
            const statusElement = document.getElementById('voucher-status');
            statusElement.className = 'font-medium ';
            if (status === 'Used') {
                statusElement.classList.add('text-green-600');
            } else if (status === 'Active') {
                statusElement.classList.add('text-blue-600');
            } else {
                statusElement.classList.add('text-gray-600');
            }
            
            const modal = document.getElementById('voucher-details-modal');
            modal.classList.remove('hidden');
        }
        
        function closeVoucherDetails() {
            const modal = document.getElementById('voucher-details-modal');
            modal.classList.add('hidden');
        }
    </script>


<?php include('includes/footer.php')?>