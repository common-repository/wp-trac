<table width="100%" id="pm-milestones">
<?php 
	$script = "";
	foreach($tasks as $task) {
		if(date("Y-m-d") == $task->end) {
			$img = "today.png";
		} else if(date("Y-m-d") > $task->end) {
			$img = "overdue.png";
		} else {
			$img = "later.png";
		}
?>

	<tr id="pm-task-<?php echo $task->id ?>">
		<td>
			<img src="<?php echo WP_PLUGIN_URL ?>/propel/images/<?php echo $img ?>" />
		</td>
		<td width="100%">
			<p><?php echo $task->title ?></p>
			<div id="progress-<?php echo $task->id; ?>" class="progressbar"></div>
			<div id="description-<?php echo $task->id; ?>">
				<p><?php echo $task->description; ?></p>
			</div>
			<?php 
				$script .= '
            		$("#pm-task-' . $task->id . '").mouseover(function() {
            			$("#progress-'.$task->id.'").show();
            			$("#description-'.$task->id.'").show();
            		});
            		
             		$("#pm-task-' . $task->id . '").mouseout(function() {
            			$("#progress-'.$task->id.'").hide();
            			$("#description-'.$task->id.'").hide();
            		});
            		
            		$("#description-'.$task->id.'").hide();
            		$("#progress-'.$task->id.'").hide();
					$("#progress-'.$task->id.'").progressbar({value: '.$task->complete.'});';	
			?>
		</td>
		<td>
			<div class="row-actions">
				<div class="pm-row-action">
					<a onclick="pm_complete(<?php echo $task->id ?>, <?php echo $completed ?>)">Complete</a>
				</div>
				<div class="pm-row-action">
					<a onclick="pm_delete(<?php echo $task->id ?>)">Delete</a>
				</div>
			</div>
		</td>
	</tr>
	
<?php 	
    }
?>
</table>

<script>
	<?php echo $script; ?>
</script>