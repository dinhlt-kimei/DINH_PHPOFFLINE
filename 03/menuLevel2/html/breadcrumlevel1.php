<?php
    require_once("data.php");
    $xhtmlBreadCrumLevelOne = '';
    if($menuCurrent == 'index')
    {
        $xhtmlBreadCrumLevelOne = '<span>Home</span>';
    }
    else
    {
      $xhtmlBreadCrumLevelOne = ' <a href="index.php">Home</a>
                          <span>></span>
                          <span> '.$currentBreadCrum[0].' </span> ' ;

    }

?>

<div class="breadcrumb">
         <?php echo $xhtmlBreadCrumLevelOne?>
</div>