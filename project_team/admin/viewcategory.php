<?php include('includes/header.php')?>
<div class = "h-full px-2 py-2 bg-blue-50">
    <div class = "box-circle">
        <div class = "header-circle">
            <p>View Category</p>
            <p class = 'h-5 px-1 text-center text-white bg-blue-500 rounded-md cursor-pointer'>Back <i class="fa-solid fa-arrow-right-to-bracket"></i></p>
        </div>
        <div class = "body-circle">
            <table class = "text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Brand</th>
                        <th>Ram</th>
                        <th>Sell Price</th>
                        <th>Original Price</th>
                        <th>Warranty</th>
                        <th>Color</th>
                        <th>More Information</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $category_db = getAll("category_db");
                        if(mysqli_num_rows($category_db) > 0){
                            foreach($category_db as $category){
                                ?>
                                <tr>
                                <td><?= $category['id']?> </td>
                                <td><?= $category['name']?></td>
                                <td><?= $category['sell_price']?></td>
                                <td><?= $category['original_price']?></td>
                                <td><?= $category['warranty']?></td>
                                <td><?= $category['color']?></td>
                                <td>1</td>
                                <td>
                            <button class = "bg-blue-500 btn_more">More</button>
                        </td>
                        <td>
                            <button class = "bg-blue-500 btn_more">Delete</button>
                            <button class = "bg-blue-500 btn_more">Edit</button>
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
</div>
<?php include('includes/footer.php')?>