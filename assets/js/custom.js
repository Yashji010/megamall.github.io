$(document).ready(function (){
  

   $('.increment-btn').click(function (e) {
   	e.preventDefault();


   	var qty = $(this).closest('.product_data').find('.input-qty').val();

   	var value = parseInt(qty, 10);
   	value = isNaN(value) ? 0 : value;
   	if (value < 10)
   	{
   		value++;
   	    $(this).closest('.product_data').find('.input-qty').val(value);
   	}
   });

   $('.decrement-btn').click(function (e) {
   	e.preventDefault();

   	var qty = $(this).closest('.product_data').find('.input-qty').val();

   	var value = parseInt(qty, 10);
   	value = isNaN(value) ? 0 : value;
   	if (value > 1)
   	{
   		value--;
   		$(this).closest('.product_data').find('.input-qty').val(value);
   	}
   });

   $('.addToCartBtn').click(function(e) {
     e.preventDefault();

     var qty = $(this).closest('.product_data').find('.input-qty').val();
     var prod_id = $(this).val();


     $.ajax({
        method: "POST",
        url: "function/handlecart.php",
        data: {
        	"prod_id": prod_id,
        	"prod_qty": qty,
        	"scope": "add"
        },
    
        success: function (response) {
          
          if (response == 201) {
          	alertify.success("Product added to cart");
          }
          else if (response == 401) {
          	alertify.success("Login to continue");
          }
          else if (response == "existing") {
          	alertify.success("Product already in cart");
          }
          if (response == 500) {
          	alertify.success("Something went wrong");
          }
        }
     });    
   });

   $(document).on('click','.updateQty', function() {

      var qty = $(this).closest('.product_data').find('.input-qty').val();
      var prod_id = $(this).closest('.product_data').find('.prodID').val();

      $.ajax({
         method: "POST",
         url: "function/handlecart.php",
         data: {
            "prod_id": prod_id,
            "prod_qty": qty,
            "scope": "update"
         },
         success: function(response){
          // alert(response);
         }
      });
     
   });


   $(document).on('click','.deleteItem', function() {

      var cart_id = $(this).val();


      $.ajax({
         method: "POST",
         url: "function/handlecart.php",
         data: {
            "cart_id": cart_id,
            "scope": "delete"
         },
         success: function(response){
          if (response == 200) {
            alertify.success("Item deleted successfully");
            $('#mycart').load(location.href + "#mycart");
          }
          else
          {
            alertify.success(response);
          }
         }
      });
     
   });

   $("#search").typeahead({
      source: function(query, result){
   
         $.ajax({
            url: "search.php",
            method: "POST",
            data: {query:query},
            dataType: "json",
            success: function(data)
            {
               result($.map(data, function(item){
                  return item;
               }));
            }
         })
      }
   });

   
});

