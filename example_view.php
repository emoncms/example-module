<?php 
    global $path; 
    $version = 1;
?>

<link rel="stylesheet" href="<?php echo $path; ?>Lib/misc/sidebar.css?v=<?php echo $version; ?>">

<div id="wrapper">
  <div class="sidenav">
    <div class="sidenav-inner">
      
      <ul class="sidenav-menu">
          <li><a href="<?php echo $path; ?>example/view/1">Menu Item 1</a></li>
          <li><a href="<?php echo $path; ?>example/view/2">Menu Item 2</a></li>
          <li><a href="<?php echo $path; ?>example/view/3">Menu Item 3</a></li>
          <li><a href="<?php echo $path; ?>example/view/new"><i class="icon-plus icon-white"></i> New</a></li>
      </ul>
      
    </div>
  </div>

  <div style="height:10px"></div>

  <div style="padding:20px">

    <h2>Example Module</h2>
    <p>A basic example of an emoncms module with sidebar.</p>

    <div id="available-apps"></div>

  </div>
</div>

<script type="text/javascript" src="<?php echo $path; ?>Lib/misc/sidebar.js?v=<?php echo $version; ?>"></script>

<script>
init_sidebar({menu_element:"#example_menu"});
var path = "<?php echo $path; ?>";
</script>
