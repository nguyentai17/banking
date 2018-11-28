<!-- <%@page import="com.green.bank.model.AccountModel"%>
<%@page import="javax.servlet.http.HttpSession"%>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="css/header_css.css">
</head>
<div class="container-fullwidth">
	<div class="row hidden-xs topper">
		<div class="col-xs-7 col-sm-7">
			<a href="index.php"><img am-TopLogo alt="SECUREVIEW"
				src="image/greenbank.png" class="img-responsive"></a>
		</div>
	</div>
	<!-- End Topper -->
	<!-- Navigation -->
	<div class="row">
		<nav class="navbar navbar-inverse" role="navigation"
			style="margin-bottom: 0px;">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img
					src="/images/logo-dark-inset.png" class="img-responsive" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav js-nav-add-active-class">
					<li><a href="index.php">Trang chủ</a></li>
					<li><a href="info_account.php">Thông tin tài khoản</a></li>
					<li><a href="history_pay.php">Lịch sử giao dịch</a></li>
					<li><a href="withdraw.php">Rút tiền</a></li>					
				</ul>
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<a type="button" class="navbar-btn btn btn-primary"
						am-latosans="bold" href="login.php">Đăng xuất</a>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		</nav>
	</div>
</div>
</html>