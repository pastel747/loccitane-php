

<?php
    $title = 'LOCCITANE';
    include('inc/header3.php');
?>

    <section class="joinArea">
        <h2>회원가입</h2>
        <div>
            <form action="inc/join.inc.php" method="post">
                <div class="joinForm">
                    <div>
                        <h3>
                            <label for="pUserID">아이디</label>
                            <span>*</span>
                        </h3>
                        <span>
                            <input type="text" maxlength="15" value name="pUserID" id="pUserID" title="아이디 입력">
                            <span>	
                                영문 대소문자,숫자를 포함한 4~15자를 작성하시오
                            </span>
                        </span>
                    </div>
                    <div>
                        <h3>
                            <label for="pUserPW">비밀번호</label>
                            <span>*</span>
                        </h3>
                        <span>
                            <input type="text" maxlength="15" value name="pUserPW" id="pUserPW" title="비밀번호 입력">
                            <span>	
                                영문 대소문자,숫자를 포함한 4~15자를 작성하시오
                            </span>
                    </div>
                    <div>
                        <h3>
                            <label for="pUserPWC">비밀번호 확인</label>
                            <span>*</span>
                        </h3>
                        <span>
                            <input type="text" maxlength="15" value name="pUserPWC" id="pUserPWC" title="비밀번호 확인">
                            <span>	
                                비밀번호를 정확히 입력하십시오
                            </span>
                        </span>
                    </div>
                </div>
                <div class="joinForm">
                    <div class="userName">
                        <h3>
                            <label for="pUserName">이름</label>
                            <span>*</span>
                        </h3>
                        <span>
                            <input type="text" value name="pUserName" id="pUserN" title="이름 입력">
                        </span>
                        <span></span>
                    </div>
                    <!-- <div class="userAddress">
                        <h3>
                            <label for="pUserAddress1">주소</label>
                            <span>*</span>
                        </h3>
                        <span>
                            <input type="text" id="pUserAddress1" name="pUserAddress1" placeholder="ex)서울특별시 은평구 285" readonly>
                            <button type="button" onclick="addressSearch()" class="userAddressSearch">주소 찾기</button>
                        </span>

                        <h3>
                            <label for="pUserAddress2">상세 주소</label>
                            <span>*</span>
                        </h3>
                        <span>
                            <input type="text" id="pUserAddress2" name="pUserAddress2" placeholder="ex)1동 902호">
                        </span>
                    </div>
                    <div class="userBirth">
                        <h3>
                            <label for="pUserBirth">생년월일</label>
                        </h3>
                        <div>
                            <span>
                                <input type="text" id="birth_yy" placeholder="년(4자리)">
                            </span>
                            <span>
                                <select name="birthMonth" id="mm">
                                    <option value>월</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </span>
                            <span>
                                <input type="text" id="birth_dd" placeholder="일">
                            </span>
                        </div>
                        <span></span>
                    </div> -->
                    <div class="userEmail">
                        <h3>
                            <label for="pUserEmail">이메일</label>
                            <span>*</span>
                        </h3>
                        <div>
                            <span>
                                <input type="text" id="pUserEmail" name="pUserEmail" placeholder="선택 입력">
                            </span>
                            <span>
                                <select name="emailAdress" id="emailAdress">
                                    <option value="직접입력">직접 입력</option>
                                    <option value="naver.com"> @naver.com</option>
                                    <option value="hanmail.net"> @hanmail.net</option>
                                    <option value="gmail.com"> @gmail.com</option>
                                </select>
                            </span>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="conform">
                    <div>
                        <span class="chk_input">
                            <input type="checkbox" id="all_chk" name="all_chk">
                            <label for="all_chk">
                                <p>이용약관, 개인정보 수집 및 이용, 프로모션 정보 수신(선택)에 모두 동의합니다.</p>
                            </label>
                        </span>
                    </div>
                    <ul>
                        <li>
                            <span class="chk_input">
                                <input type="checkbox" id="term_chk" name="term_chk">
                                <label for="term_chk">
                                    <p>록시땅 이용약관 동의 (필수)</p>
                                </label>
                            </span>
                            <div class="articleBox">
                                <div class="article">
                                    <h3>여러분을 환영합니다.</h3>
                                    <p>
                                        록시땅 서비스 및 제품(이하 ‘서비스’)을 이용해 주셔서 감사합니다.
                                        본 약관은 다양한 록시땅 서비스의 이용과 관련하여 록시땅 서비스를 제공하는 록시땅 주식회사(이하 록시땅)와
                                        이를 이용하는 록시땅 서비스 회원(이하 ‘회원’)과의 관계를 설명하며,
                                        아울러 여러분의 록시땅 서비스 이용에 도움이 될 수 있는 유익한 정보를 포함하고 있습니다.
                                    </p>
                                    <p>
                                        네이버 서비스를 이용하시거나 네이버 서비스 회원으로 가입하실 경우 여러분은 본 약관 및 관련 운영 정책을 확인하거나 동의하게 되므로,
                                        잠시 시간을 내시어 주의 깊게 살펴봐 주시기 바랍니다.
                                    </p>
                                </div>
                                <div class="article">
                                    <h3>다양한 네이버 서비스를 즐겨보세요.</h3>
                                    <p>
                                        록시땅 도메인의 웹사이트 및 응용프로그램(어플리케이션, 앱)을 통해 정보 검색, 콘텐츠 제공, 상품 쇼핑 등 여러분의 생활에 편리함을 더할 수 있는 다양한 서비스를 제공하고 있습니다.
                                        여러분은 PC, 휴대폰 등 인터넷 이용이 가능한 각종 단말기를 통해 각양각색의 록시땅 서비스를 자유롭게 이용하실 수 있으며, 개별 서비스들의 구체적인 내용은 각 서비스 상의 안내, 공지사항, 록시땅 웹고객센터(이하 ‘고객센터’) 도움말 등에서 쉽게 확인하실 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="chk_input">
                                <input type="checkbox" id="privacy_chk" name="privacy_chk">
                                <label for="privacy_chk">
                                    <p>이용약관, 개인정보 수집 및 이용, 프로모션 정보 수신(선택)에 모두 동의합니다.</p>
                                </label>
                            </span>
                            <div class="articleBox">
                                <div class="article">
                                    <p class="article_summary">개인정보보호법에 따라 네이버에 회원가입 신청하시는 분께 수집하는 개인정보의 항목, 개인정보의 수집 및 이용목적, 개인정보의 보유 및 이용기간, 동의 거부권 및 동의 거부 시 불이익에 관한 사항을 안내 드리오니 자세히 읽은 후 동의하여 주시기 바랍니다.</p>
                                    <h3>1. 수집하는 개인정보</h3>
                                    <p>이용자는 회원가입을 하지 않아도 정보 검색, 뉴스 보기 등 대부분의 네이버 서비스를 회원과 동일하게 이용할 수 있습니다. 이용자가 메일, 캘린더, 카페, 블로그 등과 같이 개인화 혹은 회원제 서비스를 이용하기 위해 회원가입을 할 경우, 네이버는 서비스 이용을 위해 필요한 최소한의 개인정보를 수집합니다.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="chk_input">
                                <input type="checkbox" id="promotion_chk" name="promotion_chk">
                                <label for="promotion_chk">
                                    <p>록시땅 프로모션 정보 수신 동의 (선택)</p>
                                </label>
                            </span>
                            <div>
                                록시땅에서 제공하는 이벤트/혜택 등 다양한 정보를 휴대전화(록시땅 알림 또는 문자), 이메일로 받아보실 수 있습니다. 일부 서비스(별도 회원 체계로 운영하거나 록시땅 가입 이후 추가 가입하여 이용하는 서비스 등)의 경우, 개별 서비스에 대해 별도 수신 동의를 받을 수 있으며, 이때에도 수신 동의에 대해 별도로 안내하고 동의를 받습니다.
                            </div>
                        </li>
                    </ul>
                    
                </div>
                <div class="joinformSubmit">
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
        </div>
    </section>

<?php
    include('inc/footer.php');
?>