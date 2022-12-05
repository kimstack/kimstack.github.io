<!Doctype html>
<html lang="ko">
<?php
	require_once("include.php");
	require_once("header.php");
?>
<body>
<div class="container sections-wrapper">
	<div class="row">
		<div class="primary col-md-8 col-sm-12 col-xs-12">
<?php
	require_once("introduce-section.php");
	require_once("portfolio.php");
?>
		</div><!--//primary-->
		<div class="secondary col-md-4 col-sm-12 col-xs-12">
<?php
	require_once("aside-info.php");
	require_once("aside-skills.php");
	require_once("aside-license.php");
	require_once("aside-education.php");
	require_once("aside-bitcoin_wallet.php");
?>
		</div>
	</div><!--//row-->
</div><!--//masonry-->
<?php
	require_once("footer.php");
	require_once("jsinclude.php");
?>
</body>
</html>