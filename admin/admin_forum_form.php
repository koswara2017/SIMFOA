<?php
include "inc/header.php";
?>
    	<div class="row">
		  <div class="col-md-2">
<?php
include "inc/sidebar.php";
?>
		  </div>
		<div class="page-content">
			<div class="col-md-10">
	  			<div class="row">
	  				<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title "><span class="section">Create Post In</span> Public Forum</div>
						</div>
							<style type="text/css">
							#subForm {
								font-size: .8em;
							}
							#subForm .label {
								float: left;
								width: 230px;
								margin-right: 10px;
								text-align: right;
								font-weight: bold;
								clear: left;
							}

							#post {
								margin-left: 240px;
								background-color: #CBD893;
								font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
							}

							#refer {
								font-family: "Century Gothic", "Gill Sans", Arial, sans-serif;
							}

							#name, #roll, #ppost,#prof,#title {
								background-color: #FBEF99;
								font-family:"Lucida Console", Monaco, monospace;
								font-size: .9em;
								width: 300px;
								margin-top: -2px;
							}

							#name:focus,
							#username:focus,
							#ppost:focus,
							#prof:focus
							{
								background-color: #FDD041;
							}

							</style>
						<div class="content-box-large box-with-header">
							<form action="inc/admin_public_forum_action.php" id="subForm" name="subForm" method="post" >
								<p><label for="name" class="label"><font size=3 color="black">Nama</font></label>
								  <input type="text" name="name" id="name" /></p>
							<p><label for="roll" class="label"><font size=3 color="black">Nama Panggilan</font></label>
								  <input type="text" name="roll" id="roll" /></p>
								  <p><label for="prof" class="label"><font size=3 color="black">Pekerjaan</font></label>
								  <input type="text" name="prof" id="prof" /></p>

							 <p><label for="title" class="label"><font size=3 color="black">Judul Postingan</font></label>
								  <input type="text" name="title" id="title" /></p>


								  <p>
									<span class="label"><font size=3 color="black">Dapat dilihat Oleh</font></span>
									<label>
									<input name="aud" type="radio" value="1" />Anybody</label>
									<label>
									<input name="aud" type="radio" value="2" />For Institute</label>
									<label>
									<input name="aud" type="radio" value="3" />For Students</label>
								  </p>
								  <p>
									<label for="refer" class="label"><font size=3 color="black">Tema Postingan</font></label>
									<select name="refer" id="refer">
									  <option value="null">Select One</option>
									  <option value="1">Academics</option>
									  <option value="2">Professional Opportunities</option>
									  <option value="3">Institute Experience/Events</option>
									  <option value="4">General</option>
									</select>
								  </p>
								  <p>
									<label for="ppost" class="label"><font size=3 color="black">Isi Postingan </font></label>
									<textarea name="ppost" cols="35" rows="4" id="ppost"></textarea>
								  </p>
								  <p>
									<input type="submit" name="Submit" id="post" value="Forward" />
								  </p>
								</form>
								<br class="clear" />
						</div>
			  		</div>
	  			</div>
	  	<!--  Page content -->
			</div>
		</div>
    </div>
<?php
include "inc/footer.php";
?>