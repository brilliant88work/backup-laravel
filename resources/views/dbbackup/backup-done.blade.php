<div style="text-align: center;">
	<label>You're Backup Is Completed</label>
	<div class="links">
	<?php  
	$files_path = storage_path().'\db_backup';
	$download_path = URL::to('/')."/storage/db_backup/";
	$filesInFolder = \File::files($files_path); 
	$i=1;    
	foreach($filesInFolder as $path) { 
		$file = pathinfo($path);
		$path = $download_path.$file['basename'];
		$paths = str_replace('\\', '/', $path);
	?>
		<a href="{{ $paths }}"><?php echo $i."."; echo $file['basename']; ?></a><br />
	<?php 
		$i++;
	} ?> 
	</div>
</div>

