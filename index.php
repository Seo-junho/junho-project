<html>
	<head>
		<meta charset="utf-8">
		<script src="//code.jquery.com/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/member.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	</head>
	<body>
	<div class="container">
		<div class="login_form">
			<form>
				<label>로그인</label>
				<input type="text" placeholder="아이디">
				<input type="password" placeholder="비밀번호">
				<input type="submit" value="로그인" class="btn btn-success">
			</form>
			<form class="register_form">
				<label>회원가입</label>
				<input type="text"  placeholder="이름" id="name">
				<input type="text"  placeholder="아이디" id="id">
				<input type="password" placeholder="비밀번호" id="pw">
				<input type="text" placeholder="aaa@naver.com" id="email">
				<input type="submit" value="회원가입" class="btn btn-info">
			</form>
		</div>
	</div>
	</body>
</html>
<script>
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
</script>