<?php if(isset($_POST['submit_name'])){ ?>
<div class="row">
	<div id="download_archiving" class="text-left col-lg-12 offset-3">
		<h4><b>Download, Filing and Archiving</b></h4>
		<form action="" method="post">

			<div class="form-group">
				<ul>
					<li><input type="checkbox" name="new_folder"> Create new folder in Z:\Q\YouTube_videos\... </li>
					<li><input type="checkbox" name="download_save"> Download and save video to created folder </li>
					<li><input type="checkbox" name="check_upload_folder"> Check if video was completely uploaded to the folder (file size matches with the downloaded file) </li>
					<li><input type="checkbox" name="save_metadata"> Save meta data (Upload PDF) to created folder </li>
					<li><input type="checkbox" name="check_older_version"> Check if older version of the video was submitted in the past (e.g. rejected version) </li>
					<li><input type="checkbox" name="if_old_version"> If yes: Rename old folder and move it to the newly created folder </li>
					<li><input type="checkbox" name="older_version_yt"> If older version was already public on YouTube: Contact Video Owner to ask if old version 
						can be set to private </li>
					</ul>
				</div>
				<div class="info-box-update pull-right">
					<input type="submit" name="submit_download_archiving" value="Submit" class="btn">
				</div>  
			</form>
		</div>
	</div>
	<?php }?>