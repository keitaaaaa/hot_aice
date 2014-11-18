<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />  
<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>  
<script src="js/lightbox.js" type="text/javascript"></script>

<h1>Photos</h1>
<?php foreach($photos as $photo): ?>

<a href="img/<?php echo $photo['Photo']['file_name']; ?>" rel="lightbox">
<img src="img/<?php echo $photo['Photo']['file_name']; ?>" height="130"/></a>

<?php endforeach; ?>