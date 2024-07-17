<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>

   <form action="price-save.php" method="POST">

    <label for="">Package Title</label>
    <input type="text" name="title" value=""> </br>

    <label for="">Package Price</label>
    <input type="text" name="price" value=""> </br>

    <label for="">Package Plane</label>
    <input type="text" name="plane" value=""> </br>

   <div class="field_wrapper">
    <div>
        <label for="">Add Feature</label>
        <input type="text" name="feature_list[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="images/add-icon.webp" width="15" height="15"/></a>
    </div>
</div>
<button  type="submit">Save</button>
    
   </form> 

<script>
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="feature_list[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="images/remove-icon.webp" width="15" height="15"/></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });
});
</script>
</body>
</html>