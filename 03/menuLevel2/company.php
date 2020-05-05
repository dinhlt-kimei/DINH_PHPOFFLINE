<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <title>Index Menu Level 2</title>
      <link rel="stylesheet" href="./css/styles.css" />
   </head>
   <body>
   <?php require_once("html/menuleve1.php"); ?> 
      <?php require_once("html/menuleve2.php"); ?>
      <?php require_once("html/breadcrumlevel2.php");?>
     
      <div class="menuBackground">
         <div class="center">
            <ul class="dropDownMenu">
                  <?php echo $xhtmlMenuOne ; ?>
                  <ul>
                     <?php echo $xhtmlMenuTwo; ?>
                  </ul>
               
            </ul>
         </div>
      </div>

      <h3>Company</h3>
   </body>
</html>