<?php
    $title = 'LOCCITANE';
    include('inc/header4.php');
?>

    <section class="loginArea">
        <h2>로그인</h2>
        <div>
            <form action="inc/login.inc.php" method="post">
                <div class="loginForm">
                    <input type="text" value name="pUserID" id="pUserID" placeholder="아이디">
                    <input type="text" value name="pUserPW" id="pUserPW" placeholder="비밀번호">
                </div>
                <div class="loginformSubmit">
                    <input type="submit" value="로그인">
                </div>
                <div class="loginService">
                    <a href="">아이디/비밀번호 찾기</a>
                    <a href="join.php">회원가입</a>
                </div>
            </form>
        </div>
    </section>

<?php
    include('inc/footer.php');
?>