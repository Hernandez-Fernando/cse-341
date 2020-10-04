$(document).ready(function(){
    
   $(".product-cart-button").click(function(event){
        event.preventDefault();

        var product = $(this);
        var productId = product.attr("id");
        var action = "add";
        
        $.ajax({
                url:'controller.php',
                method:"POST",
                data:{
                    action:action,
                    productId:productId
                },
                success:function(response){
                    $("#items-in-cart").addClass("user-nav-notification");
                    $("#items-in-cart").html(response);
                }
        });

        product.html('&#x2713; In Cart');
        product.removeClass('btn-warning');
        product.addClass('btn-success');
        product.attr("disabled", "disabled");
    })

    $(".remove-item-button").click(function(event){
        event.preventDefault();

        var product = $(this);
        var productId = product.attr("id");
        var action = "remove";
        
        $.ajax({
                url:'controller.php',
                method:"POST",
                data:{
                    action:action,
                    productId:productId
                },
                success:function(response){
                    $("#cart-list").html(response);
                }
        });
    })

});