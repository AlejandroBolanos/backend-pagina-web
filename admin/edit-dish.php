<?php 
    /***
     * 0. include database connection file
     * 1. receive form values from post and insert them into the table (match table field with values from name atributte)
     * 2. for the destination_image insert the value "destination-placeholder.webp"
     * 3. redirect to destinations-list. php after complete the insert into
     */

     require_once '../database.php';

     // Reference: https://medoo.in/api/select
     $item = $database->select("tb_information_dishes","*");

    // Reference: https://medoo.in/api/select
     $category = $database->select("tb_category_dishes","*");

     // Reference: https://medoo.in/api/select
     $people = $database->select("tb_people_categories","*");

     $message = "";

     if($_GET){
        $item = $database->select("tb_information_dishes","*",[
            "dish_id" => $_GET["id"],
        ]);
     }

     if($_POST){

        $data = $database->select("tb_information_dishes","*",[
            "dish_id"=>$_POST["id"]
        ]);

        if(isset($_FILES["dish_image"]) && $_FILES["dish_image"]["name"] != ""){

            $errors = [];
            $file_name = $_FILES["dish_image"]["name"];
            $file_size = $_FILES["dish_image"]["size"];
            $file_tmp = $_FILES["dish_image"]["tmp_name"];
            $file_type = $_FILES["dish_image"]["type"];
            $file_ext_arr = explode(".", $_FILES["dish_image"]["name"]);

            $file_ext = end($file_ext_arr);
            $img_ext = ["jpeg", "png", "jpg", "webp"];

            if(!in_array($file_ext, $img_ext)){
                $errors[] = "File type is not valid";
                $message = "File type is not valid";
            }

            if(empty($errors)){
                $filename = strtolower($_POST["dish_name"]);
                $filename = str_replace(',', '', $filename);
                $filename = str_replace('.', '', $filename);
                $filename = str_replace(' ', '-', $filename);
                $img = "location-".$filename.".".$file_ext;
                move_uploaded_file($file_tmp, "../imgs/".$img);
            }
        }else{
            $img = $data[0]["dish_image"];
        }

        $database->update("tb_information_dishes",[
            "dish_name"=> $_POST["dish_name"],
            "dish_name_fr"=>$_POST["dish_name_fr"],
            "dish_description"=>$_POST["dish_description"],
            "dish_description_fr"=>$_POST["dish_description_fr"],
            "category_id"=>$_POST["category_id"],
            "dish_featured"=>$_POST["dish_featured"],
            "people_category_id"=>$_POST["people_category_id"],
            "dish_image"=> $img,
            "price"=>$_POST["price"]
        ],[
            "dish_id" => $_POST["id"]
        ]);

        header("location: list-dish.php");
        
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Destination</title>
    <link rel="stylesheet" href="../css/main.css" />
</head>
<body>
    <div class="cont-edit">
    <h2 class="title-admin">Edit Dishe</h2>
        <?php 
            echo $message;
        ?>
        <form method="post" action="edit-dish.php" enctype="multipart/form-data">
            <div class="form-items">
                <label for="dish_name">Dish Name</label>
                <input id="dish_name" class="textfield" name="dish_name" type="text" value="<?php echo $item[0]["dish_name"] ?>">
            </div>
            <div class="form-items">
                <label for="dish_name_fr">Dish Name French</label>
                <input id="dish_name_fr" class="textfield" name="dish_name_fr" type="text" value="<?php echo $item[0]["dish_name_fr"] ?>">
            </div>
            <div class="form-items">
                <label for="dish_description">Description</label>
                <textarea id="dish_description" name="dish_description" id="" cols="30" rows="10"><?php echo $item[0]["dish_description"]; ?></textarea>
            </div>
            <div class="form-items">
                <label for="dish_description_fr">Description French</label>
                <textarea id="dish_description_fr" name="dish_description_fr" id="" cols="30" rows="10"><?php echo $item[0]["dish_description_fr"]; ?></textarea>
            </div>
            <div class="form-items">
                <label for="category_id">Categories </label>
                <select name="category_id" id="category_id">
                <?php 
                        foreach($category as $categories){
                            echo "<option value='".$categories["category_id"]."' selected>".$categories["category_name"]."</option>";
                            
                        }
                    ?>
                </select>
            </div>
            <div class="form-items">
                <label for="people_category_id">People Category</label>
                <select name="people_category_id" id="people_category_id">
                <?php 
                        foreach($people as $peoples){
                                echo "<option value='".$peoples["people_category_id"]."' selected>".$peoples["people_category_name"]."</option>";
                            
                        }
                    ?>
                </select>
            </div>
            
            <div class="form-items">
                <label for="dish_image">Image</label>
                <img id="preview" src="../imgs/<?php echo $item[0]["dish_image"]; ?>" alt="Preview">
                <input id="dish_image" type="file" name="dish_image" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="dish_featured">Recomend</label>
                <select id="dish_featured" class="boxSelect" name="dish_featured">
                    <option value="1" <?php echo $item[0]["dish_featured"] ? 'selected' : ''; ?>>Yes</option>
                    <option value="0" <?php echo !$item[0]["dish_featured"] ? 'selected' : ''; ?>>No</option>
                </select>
            </div>
            <div class="form-items">
                <label for="price">Price</label>
                <input id="price" class="textfield" name="price" type="text" value="<?php echo $item[0]["price"] ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $item[0]["dish_id"]; ?>">
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Update Destination">
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