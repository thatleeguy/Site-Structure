
</div><!-- /content -->

<div id="footer">
	<div id="render">
	<?
	//record the ending time
	$end=microtime();
	$end=explode(" ",$end);
	$end=$end[1]+$end[0];

	printf("Page was generated in %f seconds",$end-$start);

	?>
	</div><!-- /render -->
</div><!-- /footer -->

</div><!-- /wrapper -->

</body>
</html>


