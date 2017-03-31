<?php include("includes/header.php"); ?>

<body>

	<?php include("includes/navigation.php"); ?>
	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-6">
				<div id="main" class="text-left col-lg-12 offset-3">
					<h1>YouTube Support Checklist</h1> <br>
					<?php 
						include "includes/basic-information.php";

						if(isset($_POST['submit_name'])){
							include "includes/download_and_archiving.php";
						}
					?>
				</div>
			</div>
		</div>

<!-- 
		<div class="row">
			<div id="metadata_check" class="text-left col-lg-12 offset-3">
				<h4><b>Meta Data Check</b></h4>
				<form action="" method="post">
					<input type="checkbox" name="check_metadata"> Check if all necessary meta data were submitted (meta-data, rights, contact persons, etc.)    
					and if the video <u>has been approved by the Division/Country Coordinator</u>. <br>
					<input type="checkbox" name="check_details"> Check title, description and tags for typos and notify video owner in case a typo exists. <b>Never just change it by yourself!</b> <br>
					<input type="checkbox" name="yt_list"> Fill out YouTube List <br>	
				</form>
			</div>
		</div>

		<div class="row">
			<div id="upload_process" class="text-left col-lg-12 offset-3">
				<h4><b>Upload Process</b></h4>
				<form action="" method="post">
					<input type="checkbox" name="check_consult_client"> Check if there is any other option to consult the client before proceeding (e.g. German and English version have the same title/description) <br>
					<input type="checkbox" name="upload_yt"> Upload video on YouTube -> Video must be in the state “Unlisted”!  <br>
					<input type="checkbox" name="add_metadata"> Add and/or check meta data (title/description/keywords) <br>	
					<input type="checkbox" name="link_description"> Check if link(s) in description start(s) with http:// or https:// to ensure it is clickable. If not, open URL in browser and add http:// or https:// <br>
					<input type="checkbox" name="check_link"> Click on the link(s) to ensure that they lead to the correct page <br>
					<input type="checkbox" name="add_annotations"> Add annotations on Closing (at least a spotlight annotation on URL, further also on subscription button etc. if available) <br>
					<input type="checkbox" name="additional_annotations"> Add additional annotations if requested by the video owner <br>
					<input type="checkbox" name="add_cards"> Add additional cards if requested by the video owner <br>
					<input type="checkbox" name="custom_thumbnail"> Add custom thumbnail if requested by the video owner <br>
					<input type="checkbox" name="check_everything"> Check video on YouTube (is everything inserted and displayed correctly?) <br>
					<input type="checkbox" name="check_annotations"> Click all annotations and cards to ensure that they work correctly <br>
					<input type="checkbox" name="fill_yt_list"> Fill out YouTube List. In case the video is not AV compliant, please insert the issues in the list for documentation reasons <br>
					<input type="checkbox" name="approval_email"> Send out approval e-mail with unlisted links and playlists to video owner, video sender and coordinator <br>
				</form>
			</div>
		</div>


		<div class="row">
			<div id="publication_process" class="text-left col-lg-12 offset-3">
				<h4><b>Publication Process</b></h4>
				<form action="" method="post">
					<input type="checkbox" name="publish_video"> Publish video if video owner’s approval is received <br>
					<input type="checkbox" name="playlists"> Add video to defined playlist(s)  <br>
					<input type="checkbox" name="check_again"> Check video again on YouTube (is everything working correctly?) <br>	
					<input type="checkbox" name="approval_email"> Send out public e-mail to video owner, video sender and coordinator <br>
					<input type="checkbox" name="update_list"> Update YouTube List <br>
				</form>
			</div>
		</div>

		<div class="row">
			<div id="dam_process" class="text-left col-lg-12 offset-3">
				<h4><b>Siemens DAM | Video Upload Process</b></h4>
				See separate How-To: <span style="color:gray;">Q:\cc_clients_shared\S\siemens_ag\YouTube Kanal Betrieb und Weiterentwicklung FY 2016\11_youtube_support\06_dam\how_to_upload_video_to_the_dam.docx </span> <br><br>

				<form action="" method="post">
					<input type="checkbox" name="check_dam_upload"> Check if video sender has activated the checkbox for uploading the video in the DAM in the Upload PDF. <br>
					If not: Don’t upload the video in the DAM<br>
					If yes: proceed as follows: <br>
					<input type="checkbox" name="legal_documents"> Check if legal documents are delivered. If not, get in touch with video owner. <br>
					<input type="checkbox" name="update_yt_list"> Fill out necessary fields in the YouTube List <br> <br>
					<b>Is this video on DAM? </b> <br>
					<input type="checkbox" name="yes_dam"> Yes <br>
					<input type="checkbox" name="no_dam"> No <br>
					<u>Note: this effort needs to be tracked on a separate sub project.</u> 
					Proceed as follows for the video upload in the DAM <br>
				</form>
			</div>
		</div>

		<div class="row">
			<div id="dam_upload_legal_documents" class="text-left col-lg-12 offset-3">
				<h4><b>First step: UPLOAD LEGAL DOCUMENTS ON AEM</b></h4>
				<form action="" method="post">
					<input type="checkbox" name="pdf"> Create one single PDF file with all the legal documents. Save the file in the video folder.<br>
					If yes: proceed as follows: <br>
					<input type="checkbox" name="legal_documents"> Upload and publish the legal documents here: <a href="https://author.siemens.com/assets.html/content/dam/mam/tag-siemens-com/youtube-upload/legal-documents" target="_blank">Author Siemens - Legal Documents</a>
				</form>
			</div>
		</div>

		<div class="row">
			<div id="dam_upload_metadata" class="text-left col-lg-12 offset-3">
				<h4><b>Second step: ADD METADATA TO VIDEO</b></h4>

				<h5>First tab: BASIC</h5>
				<form action="" method="post">
					<input type="checkbox" name="title">  Add the Title<br>
					<input type="checkbox" name="filetypes"> Add “Filetypes: Multimedia” and “Filetypes: Multimedia/Video”  <br>
					<input type="checkbox" name="tag_division"> Add the tag for the Division/Corporate Structure <br>
					<input type="checkbox" name="language">  Add language <br>
					<br>
					<h5>Second Tab: DOCUMENTATION</h5>
					<input type="checkbox" name="description">  Add description<br>
					<input type="checkbox" name="keywords"> Add keywords <br>
					<input type="checkbox" name="id_keywords"> Add YouTube ID to keywords <br>
					<input type="checkbox" name="video_owner"> Add a contact@siemens (= Video Owner E-Mail address) <br>
					<input type="checkbox" name="content_owner"> Add the “Content owner” <br>
					<input type="checkbox" name="create_date"> Add the upload date as the “created date” <br><br>

					<h5>Third Tab: RIGHTS</h5>
					<input type="checkbox" name="agency_information"> Add the agency information in the Creator fields <br>
					<input type="checkbox" name="credit_line"> Insert “Siemens AG” in the field Credit Line <br>
					<input type="checkbox" name="legal_document_link"> Link video to the legal document (click on corresponding document and copy URL path  
					beginning with “/content”. If pasted to field Legal document, it will automatically be selected) <br>
					<input type="checkbox" name="rights_unlimited"> Check if the rights are unlimited
					<input type="checkbox" name="restrictions"> Add “unlimited” tag to the field Restrictions <br>
					<input type="checkbox" name="external_use"> Set usage to external use <br>
					<input type="checkbox" name="social_release"> Click on “Yes” in the “social release” <br>
					<input type="checkbox" name="free_to_use"> Choose the option “free to use” <br> <br>

					<h5>Fourth tab: SOCIAL</h5>
					<input type="checkbox" name="title_description"> Add the title and description again <br>
					<input type="checkbox" name="playlist_id"> Add the playlist IDs <br>
					<input type="checkbox" name="publish_video_dam"> Publish video in DAM <br>
					<input type="checkbox" name="ids_dam_list"> Add IDs in Upload List
				</form>
			</div>
		</div> -->

	</div>
	<!-- /.container -->

	<?php include "includes/scripts.php"; ?>

</body>

</html>
