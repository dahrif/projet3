
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script type="text/javascript">
      function delete(){
         document.getElementById('cache').value = 1;
         document.getElementById('form').submit();
      }
      
</script>
<?php
   if(isset($_POST['cache']) AND $_POST['cache'] == 1)
       session_destroy();
?>


</body>
</html>