<!DOCTYPE html>
<html>
  <head>

    <title>Online Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     --><script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <script>
        function deleletconfig(){
        var del=confirm("Are you sure you want to delete this record?");
        if (del==true){
           alert ("record deleted")
        }
        return del;
        }
    </script>
    <script>
    $(function()
    {
      $("form[name='registration']").validate({  
        rules: {
          shoname:"required",
          sad:"required",
          sph:"required",
          spin:"required",
          sct:"required",
          strname:"required",
        },    
        messages: {
          shoname:"Please enter Shop Name",
          sad:"Please enter shop Address",
          sph:"Please enter Phone Number",
          spin:"Please enter Pin Code",
          sct:"Please enter City", 
          strname:"Please enter Store Name", 
        },  
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
    </script>
    <style type="text/css">
       footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    </style>
 </head>
</html>