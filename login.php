<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>PHP플릭스 대한민국 - 인터넷으로 세계를 해킹하자</title>
</head>

<body>
    <div id="main">
        <a href="./index.php"><img src="./assets/bannerLogo.png" alt=""></a>
        <div id="LoginForm">
            <h1>로그인</h1>
            <form action="#" method="post">
                <input type="text" placeholder="이메일 주소 또는 전화번호"><br>
                <input type="password" placeholder="비밀번호"><br>
                <input type="submit" value="로그인" id="submit">
            </form>
            <label><input type="checkbox" name="saveLoginInfo" id="saveLoginInfo"> 로그인 정보 저장</label>
            <a href="#">도움이 필요하신가요?</a>
            <p>PHPFlix 회원이 아닌가요? <a href="#">지금 가입하세요</a>.</p>
            <p>이 페이지는 SELF reCAPTCHA의 보호를 받지 않아</p>
            <p>사용자가 로봇이 아님을 확인합니다. <a href="#">자세히 알아보기.</a></p>
        </div>
    </div>
</body>
</html>