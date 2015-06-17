<?php
$remoteIPAddress = $_SERVER['REMOTE_ADDR'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet"
	href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script type="text/javascript"
	src="//code.jquery.com/jquery-2.1.1.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script
	src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
body {
	font-size: 14px;
}

.login-type-tabs li.active {
	padding: 0;
	outline: none;
	background-color: none;
	background-image: none;
}

.login-type-tabs .nav-tabs>li.active>a,.nav-tabs>li.active>a:hover,.nav-tabs>li.active>a:focus
	{
	border-radius: 0;
}

.login-type-tabs li>a {
	border-radius: 0;
}

.tab-content {
	border-left: 1px solid #ddd;
	border-right: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	padding-top: 1px;
}

@media screen and (max-width:768px) {
	.modal-form {
		padding: 0 10px
	}
}

.form-signin {
	max-width: 330px;
	padding: 15px;
	margin: 0 auto;
}

.form-signin .form-control {
	position: relative;
	height: auto;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 10px;
	font-size: 16px;
}

.form-signin .checkbox {
	font-weight: normal;
}

.form-signin .form-signin-heading,.form-signin .btn {
	margin-top: 10px;
}

</style>
</head>
<body>

	<div class="container">
		<div class="row-fluid" id="demo-1">
			<div class="span10 offset1">
				<h1>インタセクト マルチ認証</h1>
				<div class="login-type-tabs">
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a href="#panel1" data-toggle="tab"
							class="active "><i class="glyphicon glyphicon-user"></i>&nbsp;<span>ID
									| パスワード</span></a></li>
						<li class=""><a href="#panel2" data-toggle="tab"><i
								class="glyphicon glyphicon-home"></i>&nbsp;<span>ID | パスワード |
									IPアドレス</span></a></li>
						<li><a href="#panel3" data-toggle="tab"><i class="icon-key"></i>&nbsp;<span>ID
									| パスワード | IPアドレス | 証明書</span></a></li>
						<li><a href="#panel4" data-toggle="tab"><i
								class="icon-envelope-alt"></i>&nbsp;<span>Contact Us</span></a></li>
					</ul>
					<div class="tab-content ">
						<div class="tab-pane active" id="panel1">
							
								<form class="form-horizontal form-signin" role="form" action="/login/login.php" method="post">
									<input type="text" class="form-control" name="userId"
										placeholder="ユーザーID" required autofocus> 
									<input
										type="password" name="password" class="form-control" placeholder="パスワード"
										required>
									<input
										type="hidden" class="form-control" name="authType" value="UID_PWD">

									<button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
								</form>
						</div>
						<div class="tab-pane" id="panel2">
							<form class="form-horizontal form-signin" role="form">
									<input type="text" class="form-control" disabled value=<?php echo $remoteIPAddress; ?>>
									<input type="text" class="form-control" name="userId"
										placeholder="ユーザーID" required autofocus> 
									<input
										type="password" name="password" class="form-control" placeholder="パスワード"
										required>
									<input
										type="hidden" class="form-control" name="authType" value="UID_PWD_IP">
									<button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
								</form>
						</div>

						<div class="tab-pane" id="panel3">
							<form class="form-horizontal form-signin" role="form">
									<input type="text" class="form-control" name="userId"
										placeholder="ユーザーID" required autofocus> 
									<input
										type="password" name="password" class="form-control" placeholder="パスワード"
										required>
									<input
										type="hidden" class="form-control" name="authType" value="UID_PWD_IP_CER">

									<button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
								</form>


						</div>
						<div id="panel4" class="tab-pane">
							<div class="row-fluid">
								<div class="span5">
									<h4>
										<i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us
									</h4>
									<label>Name</label> <input type="text" value="" id=""
										class="input-block-level"> <label>Email</label> <input
										type="text" value="" id="Text1" class="input-block-level"> <label>Mobile
										No</label> <input type="text" value="" id="Text2"
										class="input-block-level"> <label>Message</label>
									<textarea class="input-block-level" rows="5"></textarea>
									<a href="#" class=" btn ">Send Message&nbsp;&nbsp;&nbsp;<i
										class="icon-chevron-sign-right"></i></a> <br
										class="visible-phone"> <br class="visible-phone">
								</div>
								<div class="span7">
									<div class="row-fluid">
										<div class="span12">
											<h4>
												<i class="icon-location-arrow"></i>&nbsp;&nbsp;Locate Us
											</h4>

											<div class="map"></div>

										</div>
									</div>
									<div class="row-fluid">
										<div class="span6">
											<h4>
												<i class="icon-envelope-alt"></i>&nbsp;&nbsp;Contact Us
											</h4>
											<address>
												<strong>Full Name</strong><br> <a href="mailto:#">first.last@example.com</a>
											</address>
										</div>
										<div class="span6">
											<h4>
												<i class="icon-location-arrow"></i>&nbsp;&nbsp;Our Address
											</h4>

											<address>
												<strong>Twitter, Inc.</strong><br> 795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br> <abbr title="Phone">P:</abbr>
												(123) 456-7890
											</address>
										</div>

									</div>

								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

	</div>
</body>
</html>