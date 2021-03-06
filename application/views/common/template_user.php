<!DOCTYPE html>
<html>
<head>
<title>Ten</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/matstepper/mstepper.min.css"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"> 
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
  <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/slick/slick.css"/>
<script type="text/javascript">
	window.onetoten = {};
	window.onetoten.base_url = '<?php echo base_url(); ?>';
</script>
</head>
<body  ng-app="videoplayer">
<div ng-controller="HomeController">
<!-- Content -->
<?php $this->load->view($content);?>
<!-- Content -->
</div>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-animate.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-aria.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-ui-router.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-resource.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular/angular-sanitize.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url();?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/angular-dragndrop/angular-dragdrop.js"></script>
<script src="<?php echo base_url();?>assets/js/matstepper/mstepper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/slick/slick.js"></script>
<script src="<?php echo base_url();?>assets/src/videoplayer.js"></script>
<script src="<?php echo base_url();?>assets/src/directives/common_directive.js"></script>
<script src="<?php echo base_url();?>assets/src/services/data_factory.js"></script>
<script src="<?php echo base_url();?>assets/src/controllers/common_controllers.js"></script>
</body>

</html>