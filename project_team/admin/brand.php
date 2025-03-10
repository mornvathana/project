<?php include('includes/header.php')?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "w-full bg-[#ffffff] rounded-md p-5">
                <div class = "w-full h-[30%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Create Brand</h1>
                    </div>
                    <div>
                        <button class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md">Back</button>
                    </div>
                </div>
                <div class="w-full h-[70%] mt-5">
                    <form action="" class = "">
                        <div class = "w-full flex ">
                        <div class = "w-[50%]">
                            <label for="name" class = "block py-1 text-[15px]">Name</label>
                            <input type="text" class = "border border-gray-300 py-2 pl-1 text-[14px] outline-none w-full rounded-md" placeholder = "Enter your name">
                        </div>
                        <div class = "w-[50%] h-[180px] flex">
                           <div class = "w-[60%] flex justify-center items-center">
                                <div class="w-[50%] border border-[1px] border-blue-900 h-[100%] rounded-md">

                                </div>
                           </div> 
                           <div class = "w-[50%] flex justify-center items-center relative">
                                <div class="w-[80%] border border-[1px] border-blue-900 h-[100%] rounded-md">
                                    <input type="file" id = "inputfile" class = "w-full h-full hidden">
                                </div>
                                <label for="inputfile" class = "absolute text-sm ">Select Image</label>
                           </div> 
                        </div>
                        </div>
                        <div class="w-full mt-3 flex justify-end items-center pr-5">
                        <button type = "submit" class = "bg-blue-500 text-white px-2 py-1 font-medium rounded-md">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class = "box-circle">  
                <div class = "header-circle">
                    <p>Create Brands</p>
                    <p class = 'bg-blue-500 text-white px-1 h-7 text-center cursor-pointer rounded-md'><a href="category1.php">Back</a> <i class="fa-solid fa-arrow-right-to-bracket"></i></p>
                </div>
                <form action="code.php" method = "post" class = "body-circle" enctype = "multipart/form-data">
                    <div class = "frm">
                        <label for="">Name</label>
                        <input type="text" name = "cate_name" placeholder="Enter your name...">
                    </div>
                    <div class = "frm">
                        <label for="">Image</label>
                        <input type="file" name = "cate_image" >
                    </div>
                    <input type="submit" value = "save" name = "category_save" class = "bg-blue-500 font-bold px-5 text-white rounded-md">
                </form>
            </div> -->
        </div>
    <!--  -->
<?php include('includes/footer.php')?>