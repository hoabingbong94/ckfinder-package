<?php
$url = config('ckfinder.urlPrefix');
?>
<script type="text/javascript" src="<?php echo $url . '/js/ckfinder/ckfinder.js' ?>"></script>
<script>CKFinder.config( { connectorPath: <?php echo json_encode(route('ckfinder_connector')) ?> } );</script>
