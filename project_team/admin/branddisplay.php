<?php include('includes/header.php')?>
        <!-- end header -->
        <div class = "h-full px-2 py-2 bg-blue-50">
            <div class = "w-full bg-[#ffffff] h-[100vh] rounded-md p-5">
                <div class = "w-full h-[10%] flex justify-between items-center">
                    <div>
                        <h1 class = "font-medium">Brand List</h1>
                    </div>
                    <div>
                        <a href = "brand.php" class = "bg-blue-500 text-[12px] text-white px-2 py-1 font-medium rounded-md">Create Brand<i class="fa-solid fa-plus pl-1"></i></a>
                    </div>
                </div>
                <div class="w-full h-[70%] mt-5 overflow-x-auto">
                <table class = "text-center w-full table-auto">
                    <thead>
                        <tr>
                            <th width = "30" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">ID</th>
                            <th width = "100" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Name</th>
                            <th width = "100" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Image</th>
                            <th width = "60" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Status</th>
                            <th width = "60" class = "py-2 text-[11px] md:text-[13px] border border-gray-200 font-medium">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         $brand_title = getAll("brands");
                         if(mysqli_num_rows($brand_title)){
                            foreach($brand_title as $brand){
                                ?>
                            <tr id = "brand-<?= $brand['id']?>">
                            <td class = "text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['id']?></td>
                            <td id = "brandName" class = "text-[11px] md:text-[13px] py-2 border border-gray-200"><?= $brand['name']?></td>
                            <td class = "flex justify-center items-center">
                                <img src = "
                                <?php
                                    if(!empty($brand['image'])){
                                        echo '../uploads/brand/' . $brand['image'];
                                    }else{
                                        echo '../uploads/default/default.jpg';
                                    }
                                ?>
                                " class = "w-[60px] h-[60px]" alt = "image"/>
                            </td>
                            <td class = "border border-gray-200 text-[11px] md:text-[13px] py-2">
                                <?php
                                    if($brand['status'] == 1){
                                    ?>
                                    <form action = "code.php" method = "post" enctype = "multipart/form-data">
                                        <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                        <button type = "submit" name = "btn_active" class = "bg-green-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md">Active</button>
                                    </form>
                                    <?php
                                    }else{
                                    ?>
                                    <form action = "code.php" method = "post" enctype = "multipart/form-data">
                                        <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                        <button type = "submit" name = "btn_disable" class = "bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md">Disable</button>
                                    </form>
                                    <?php
                                    }
                                ?>
                            </td>
                            <td class = "border border-gray-200 text-[11px] md:text-[13px] py-2 flex justify-center items-center gap-5">
                                <form action = "brandedit.php?id=<?= $brand['id'] ?>" method = "post" enctype = "multipart/form-data">
                                    <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                    <button type = "submit" name = "btn_delete" class = "bg-blue-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md"><i class="fas fa-edit"></i></button>
                                </form>
                                <form action = "code.php" method = "post" enctype = "multipart/form-data">
                                    <input type="hidden" name="brand_id" value = "<?= $brand['id']?>">
                                    <input type="hidden" name="image" value = "<?= $brand['image']?>">
                                    <button type = "submit" name = "btn_delete" class = "bg-red-500 text-white px-2 py-[1px] text-[11px] md:text-[13px]  rounded-md"><i class="fas fa-trash"></i></button>
                                </form>
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