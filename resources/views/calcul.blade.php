<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <label>Qty:</label>
<input name="qty" id="qty" type="text" />
<input name="price" id="price" type="hidden" value="30" /><br />

<label>Total:</label>
<input name="total" id="total" type="text" />
<SCript>
    $(document).ready(function(){
    var qty=$("#qty");
    qty.keyup(function(){
        var total=isNaN(parseInt(qty.val()* $("#price").val())) ? 0 :(qty.val()* $("#price").val())
        $("#total").val(total);
    });
});
</SCript>
</body>
</html>