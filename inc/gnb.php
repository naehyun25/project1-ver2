<?php
    require_once('inc/function.php');
    $isAuth=user_is_auth();
   
?>
<div id ="all_layer">
      <div class="all_menu_layer">
        <div class="all_menu_con">
          <div>전체메뉴</div>
          <ul>
            <li>
              <dl>
                <dt>관람정보</dt>
                <dd><a href="#">관람안내</a></dd>
                <dd><a href="#">비대면 관람안내</a></dd>
                <dd><a href="#">오시는길</a></dd>
                <dd><a href="#">관람·편의시설</a></dd>
                <dd><a href="#">오늘의 일정</a></dd>
                <dd><a href="#">관람코스 짜기</a></dd>
                <dd><a href="#">예약/신청</a></dd>
                <dd><a href="#">전시해설</a></dd>
                <dd><a href="#">국군 휴가 보상 안내</a></dd>
                <dd><a href="#">문화상품관</a></dd>
                <dd><a href="#">주변관광지</a></dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>전시</dt>
                <dd><a href="#">상설전시</a></dd>
                <dd><a href="#">특별전시</a></dd>
                <dd><a href="#">국외교류전시</a></dd>
                <dd><a href="#">이달의 독립운동가</a></dd>
                <dd><a href="#">시·어록비</a></dd>
                <dd><a href="#">순회전시물 대여</a></dd>
              </dl>
              <dl>
                <dt>교육·행사</dt>
                <dd><a href="#">문화행사 안내</a></dd>
                <dd><a href="#">교육프로그램 신청</a></dd>
                <dd><a href="#">공모전</a></dd>
                <dd><a href="#">교육교재</a></dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>참여</dt>
                <dd><a href="index_board.php">고객의 소리</a></dd>
                <dd><a href="#">국민소통</a></dd>
                <dd><a href="#">이벤트</a></dd>
                <dd><a href="#">자주 묻는 질문</a></dd>
              </dl>
              <dl>
                <dt>소장자료</dt>
                <dd><a href="#">자료검색</a></dd>
                <dd><a href="#">소장자료 현황</a></dd>
                <dd><a href="#">자료기증 안내</a></dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>학술</dt>
                <dd><a href="#">이달의 역사</a></dd>
                <dd><a href="#">신흥무관학교 웹툰</a></dd>
                <dd><a href="#">대한민국임시정부 웹툰</a></dd>
                <dd><a href="#">국내사적지</a></dd>
                <dd><a href="#">국외사적지</a></dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>소식</dt>
                <dd><a href="#">기념관소식</a></dd>
                <dd><a href="#">언론보도</a></dd>
                <dd><a href="#">사진/영상</a></dd>
                <dd><a href="#">월간 독립기념관</a></dd>
                <dd><a href="#">입찰정보</a></dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>소개</dt>
                <dd><a href="#">환영인사</a></dd>
                <dd><a href="#">독립기념관의 역사</a></dd>
                <dd><a href="#">미션&비전</a></dd>
                <dd><a href="#">인재상</a></dd>
                <dd><a href="#">조직 구성</a></dd>
                <dd><a href="#">주요 사업</a></dd>
                <dd><a href="#">기부금 기탁안내</a></dd>
                <dd><a href="#">캐릭터/CI소개</a></dd>
                <dd><a href="#">관련사이트</a></dd>
              </dl>
            </li>
            <li>
              <dl>
                <dt>정보공개</dt>
                <dd><a href="#">정보공개</a></dd>
                <dd><a href="#">사업실명제</a></dd>
                <dd><a href="#">공공데이터개방</a></dd>
                <dd><a href="#">사회적 가치 실현</a></dd>
                <dd><a href="#">안전관리</a></dd>
                <dd><a href="#">기업성장응답센터</a></dd>
                <dd><a href="#">인권경영</a></dd>
                <dd><a href="#">윤리경영</a></dd>
                <dd><a href="#">경영공시</a></dd>
              </dl>
            </li>
          </ul>
        </div>
        <button><img src="images/btn-layer-close.png" alt="전체메뉴닫기"></button>
      </div>
    </div>
    <header id="header" class="cover">
        <div id="header_top">
          <div class="top inner1700">
            <ul>
              <li><a href="#">수어 콘텐츠</a></li>
             
              <?php 
              if($isAuth>0){ 
                ?>
              <li><a href="logout.php">로그아웃</a></li>
              <?php } else{
                ?>
              <li><a href="login.php">로그인</a></li>
              <?php } 
              ?>

              <li><a href="#">회원가입</a></li>
              <li>
                <input type="checkbox" id="lang">
                <label for="lang"><img src="images/ico-lang.png" alt="언어선택">Language</label>
                <div class="lang_opt pa">
                  <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">中國語</a></li>
                    <li><a href="#">日本語</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- header bottom -->
        <div id="header_bottom" class="pa">
          <div class="bottom inner1700">
            <div class="bottom_logo pa">
              <h1>
                <a href="index.php"><img src="./images/logo.png" alt="독립기념관로고"></a>
              </h1>
            </div>
            <nav class="gnb">
              <ul>
                <li><a href="#">관람정보</a></li>
                <li><a href="#">전시</a></li>
                <li><a href="#">교육행사</a></li>
                <li><a href="#">참여</a></li>
                <li><a href="#">소장자료</a></li>
                <li><a href="#">학술</a></li>
                <li><a href="#">소식</a></li>
                <li><a href="#">소개</a></li>
                <li><a href="#">정보공개</a></li>
              </ul>
              <div class="gnb_menu">
                <ul>
                  <li>
                    <dl>
                      <dt>관람정보</dt>
                      <dd><a href="#">관람안내</a></dd>
                      <dd><a href="#">비대면 관람안내</a></dd>
                      <dd><a href="#">오시는길</a></dd>
                      <dd><a href="#">관람·편의시설</a></dd>
                      <dd><a href="#">오늘의 일정</a></dd>
                      <dd><a href="#">관람코스 짜기</a></dd>
                      <dd><a href="#">예약/신청</a></dd>
                      <dd><a href="#">전시해설</a></dd>
                      <dd><a href="#">국군 휴가 보상 안내</a></dd>
                      <dd><a href="#">문화상품관</a></dd>
                      <dd><a href="#">주변관광지</a></dd>
                    </dl>
                  </li>
                  <li>
                    <dl>
                      <dt>전시</dt>
                      <dd><a href="#">상설전시</a></dd>
                      <dd><a href="#">특별전시</a></dd>
                      <dd><a href="#">국외교류전시</a></dd>
                      <dd><a href="#">이달의 독립운동가</a></dd>
                      <dd><a href="#">시·어록비</a></dd>
                      <dd><a href="#">순회전시물 대여</a></dd>
                    </dl>
                    <dl>
                      <dt>교육·행사</dt>
                      <dd><a href="#">문화행사 안내</a></dd>
                      <dd><a href="#">교육프로그램 신청</a></dd>
                      <dd><a href="#">공모전</a></dd>
                      <dd><a href="#">교육교재</a></dd>
                    </dl>
                  </li>
                  <li>
                    <dl>
                      <dt>참여</dt>
                      <dd><a href="index_board.php">고객의 소리</a></dd>
                      <dd><a href="#">국민소통</a></dd>
                      <dd><a href="#">이벤트</a></dd>
                      <dd><a href="#">자주 묻는 질문</a></dd>
                    </dl>
                    <dl>
                      <dt>소장자료</dt>
                      <dd><a href="#">자료검색</a></dd>
                      <dd><a href="#">소장자료 현황</a></dd>
                      <dd><a href="#">자료기증 안내</a></dd>
                    </dl>
                  </li>
                  <li>
                    <dl>
                      <dt>학술</dt>
                      <dd><a href="#">이달의 역사</a></dd>
                      <dd><a href="#">신흥무관학교 웹툰</a></dd>
                      <dd><a href="#">대한민국임시정부 웹툰</a></dd>
                      <dd><a href="#">국내사적지</a></dd>
                      <dd><a href="#">국외사적지</a></dd>
                    </dl>
                  </li>
                  <li>
                    <dl>
                      <dt>소식</dt>
                      <dd><a href="#">기념관소식</a></dd>
                      <dd><a href="#">언론보도</a></dd>
                      <dd><a href="#">사진/영상</a></dd>
                      <dd><a href="#">월간 독립기념관</a></dd>
                      <dd><a href="#">입찰정보</a></dd>
                    </dl>
                  </li>
                  <li>
                    <dl>
                      <dt>소개</dt>
                      <dd><a href="#">환영인사</a></dd>
                      <dd><a href="#">독립기념관의 역사</a></dd>
                      <dd><a href="#">미션&비전</a></dd>
                      <dd><a href="#">인재상</a></dd>
                      <dd><a href="#">조직 구성</a></dd>
                      <dd><a href="#">주요 사업</a></dd>
                      <dd><a href="#">기부금 기탁안내</a></dd>
                      <dd><a href="#">캐릭터/CI소개</a></dd>
                      <dd><a href="#">관련사이트</a></dd>
                    </dl>
                  </li>
                  <li>
                    <dl>
                      <dt>정보공개</dt>
                      <dd><a href="#">정보공개</a></dd>
                      <dd><a href="#">사업실명제</a></dd>
                      <dd><a href="#">공공데이터개방</a></dd>
                      <dd><a href="#">사회적 가치 실현</a></dd>
                      <dd><a href="#">안전관리</a></dd>
                      <dd><a href="#">기업성장응답센터</a></dd>
                      <dd><a href="#">인권경영</a></dd>
                      <dd><a href="#">윤리경영</a></dd>
                      <dd><a href="#">경영공시</a></dd>
                    </dl>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="all_menu pa">
              <button><img src="images/ico-menu.png" class="ir_pm" alt="전체메뉴보기"></button>
            </div>
          </div>
        </div>
      </header>