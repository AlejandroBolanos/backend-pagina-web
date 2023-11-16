<?php 
    /***
     * 0. include database connection file
     * 1. receive form values from post and insert them into the table (match table field with values from name atributte)
     * 2. for the destination_image insert the value "destination-placeholder.webp"
     * 3. redirect to destinations-list. php after complete the insert into
     */

     require_once '../database.php';

     // Reference: https://medoo.in/api/select
     $category = $database->select("tb_category_dishes","*");

     $item = $database->select("tb_information_dishes","*");

     // Reference: https://medoo.in/api/select
     $people = $database->select("tb_people_categories","*");

     if($_POST){
        // Reference: https://medoo.in/api/insert
        $database->insert("tb_information_dishes",[
            "category_id"=> $_POST["category_id"],
            "dish_name"=>$_POST["dish_name"],
            "dish_description"=>$_POST["dish_description"],
            "dish_image"=> "destination-placeholder.webp",
            "people_category_id"=>$_POST["people_category_id"],
            "dish_featured"=>$_POST["dish_featured"],
            "dish_featured"=>$_POST["dish_featured"],
            "price"=>$_POST["price"]
        ]);
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Dish</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Add New Dish</h2>
        <form method="post" action="add-dish.php">
        
            <div class="form-items">
                 <label for="category_id">Category Dish</label>
                <select name="category_id" id="category_id">
                <?php 
                    foreach($category as $categoryName){
                    echo "<option value='".$categoryName["category_id"]."'>".$categoryName["category_name"]."</option>";
                    }
                 ?>
                </select>
            </div>

            <div class="form-items">
                <label for="dish_name">Dish Name</label>
                <input id="dish_name" class="textfield" name="dish_name" type="text">
            </div>
            <div class="form-items">
                <label for="dish_description">Dish Description</label>
                <textarea id="dish_description" name="dish_description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="form-items">
                <label for="dish_image">Dish Image</label>
                <img id="preview" src="../imgs/destination-placeholder.webp" alt="Preview">
                <input id="dish_image" type="file" name="dish_image" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="people_category_id">People Category</label>
                <select name="people_category_id" id="people_category_id">
                    <?php 
                        foreach($people as $peoples){
                            echo "<option value='".$peoples["people_category_id"]."'>".$peoples["people_category_name"]."</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="dish_featured">Recomend</label>
                <select id="dish_featured" class="boxSelect" name="dish_featured">
                    <option value="1" <?php echo $item[0]["dish_featured"] ? 'selected' : ''; ?>>Yes</option>
                    <option value="0" <?php echo !$item[0]["dish_featured"] ? 'selected' : ''; ?>>No</option>
                </select>
            </div>
            <div class="form-items">
                <label for="price">Dish Price</label>
                <input id="price" class="textfield" name="price" type="text">
            </div>
            
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Add New Destination">
            </div>
        </form>
    </div>

    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    </script>
    
</body>
</html>