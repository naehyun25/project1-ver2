<?php
session_start();
$title='메인페이지';
include_once('inc/header.php');
include_once('inc/config.php');
require_once('inc/function.php');
?>
  <body>
    <a href="#place" class="skip_menu">본문바로가기</a>
    <a href="#exhibit" class="skip_menu">전시장바로가기</a>
    <a href="#education" class="skip_menu">교육안내바로가기</a>
    <a href="#event" class="skip_menu">문화행사바로가기</a>
    <a href="#research" class="skip_menu">학술연구바로가기</a>
    <div id="layer">
      <p>해당 사이트는 학습용으로 제작되었으며 독립기념관과 무관합니다.</p>
      <p>구직용 포트폴리오로 상업적 목적이 없음을 알립니다.</p>
      <input type="checkbox" id="popup">
        <label for="popup">오늘하루 그만보기</label>
      <button>닫기</button>
    </div>
<?php
include_once('inc/quick.php');
?>
    <div id="wrap">
    <div id="quick">
      <!-- header -->
      <?php
      include_once('inc/gnb.php');
      ?>
      <!-- sec1 -->
      <main id="container">
        <section id="intro" class="cover pr">
        <div class="intro_color1 pa"><img class="pa" src="images/info-bg.png" alt=""></div>  
          <div class="intro inner1700 pr df">
            <div class="intro_text pr">
              <div>
                <div>
                  <h2><span>불가능에 도전하여 가능을 창조한 독립정신</span><br>대한민국 독립기념관</h2>
                  <p>독립기념관은 위대한 대한민국을 함께 만들어 가고자 합니다.</p>
                </div>
                <div class="pr">
                  <div class="progress_bar">
                    <div class="bar"></div>
                  </div>
                  <p class="ctrlB">play</p>
                  <ul class="info_control pr">
                    <li class="mbtn on"></li>
                    <li class="mbtn"></li>
                    <li class="mbtn"></li>
                    <li class="mbtn"></li>
                  </ul>
                </div>
              </div>
              <div class="info_text">
                <dl class="pr">
                  <dt>관람시간</dt>
                  <dd>3월~10월 | 09:30~18:00</dd>
                  <dd>11월~2월 | 09:30~17:00</dd>
                </dl>
                <dl class="pr">
                  <dt>휴관일</dt>
                  <dd class="pa">월요일 휴관(공휴일인 경우 정상운영)</dd>
                </dl>
              </div>
              <div class="info_list pr">
                <ul class ="df">
                  <li>
                    <a href="#">관람안내<img src="images/ico-tour.png" alt="관람안내"></a>
                  </li>
                  <li>
                    <a href="#">시설안내<img src="images/ico-facility.png" alt="시설안내"></a>
                  </li>
                  <li>
                    <a href="#">예약신청<img src="images/ico-reservation.png" alt="예약신청"></a>
                  </li>
                  <li>
                    <a href="#">오시는길<img src="images/ico-locate.png" alt="오시는길"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="intro_banner pa">
              <div class="swipper pa">
                <a href="#" class="prev">
                  <img src="images/ico-prev_swipper_left.png" alt="이전사진보기">
                </a>
                <a href="#" class="next">
                  <img src="images/ico-prev_swipper_right.png" alt="다음사진보기">
                </a>
              </div>
              <div class="banner pr">
                <ul class="banner_img pr">
                  <li class = "b-img1"><img src="images/visual1.png"  alt="독립기념관전경"></li>
                  <li class = "b-img2"><img src="images/visual2.png" alt="노을지는독립기념관"></li>
                  <li class = "b-img3"><img src="images/visual3.png" alt="독립기념관을산책하는가족"></li>
                  <li class = "b-img4"><img src="images/visual4.png" alt="오후의독립기념관모습"></li>
                </ul>
              </div>
              <div class="banner_list pa df">
                <!-- api -->
                <div class="api df">
                  <div id="dust" class="df">
                    <div class="dust-result">
                      <p>미세먼지</p>
                      <div class="dust-color">
                        <p class="dust-text" style="font-size: 1.4em;"></p>
                      </div>
                      <p><a href="www.keco.or.kr" style="font-size:12px">출처:한국환경공단</a></p>
                    </div>
                  </div>
                  <div id="weather" class="df pr">
                  </div>
                </div>
                
                <ul>
                  <li>
                    <div class="imgbox1"><a href="#" id="place">장소대관</a></div>
                  </li>
                  <li>
                    <div class="imgbox2"><a href="#">캠핑장</a></div>
                  </li>
                  <li>
                    <div class="imgbox3"><a href="#">함께하는<br>독립운동 체험관</a></div>
                  </li>
                  <li>
                    <div class="imgbox4"><a href="#">교육신청</a></div>
                  </li>
                  <li>
                    <div class="imgbox5"><a href="#">전시해설</a></div>
                  </li>
                  <li>
                    <div class="imgbox6"><a href="#">통일염원의 동산 <br>벽돌조적</a></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!-- //section1- main-intro영역끝 -->
        <section id="notice" class="cover pr">
          <div class="color2 pa"><img class="pa" src="images/text-bg1.png" alt=""></div>
          <div class="notice_board inner">
            <div class="board_banner cf pr">
              <h3>독립기념관은 지금 .</h3>
              <p class="ctrlN">play</p>
              <ul class="board_btn pa df">
                <li class="bon">btn1</li>
                <li>btn2</li>
              </ul>
              <div class="board_imgbox fl pr">
                <ul class="board_imgs df">
                  <li><a href="#"><img src="images/nowimg01.png" alt="재개관소식"></a></li>
                  <li><a href="#"><img src="images/nowimg02.png" alt="신년사"></a></li>
                </ul>
              </div>
              <div class="board_table fr">
                <div class="plus pa"><a href="#"></a></div>
                <ul class="pr cf">
                  <li class="fl">
                    <a href="#b1"><span>전시/행사</span></a>
                    <ul class="pa" id="b1">
                      <li>
                        <a href="#" class="df"><span>[전시] 독립기념관 제6관 ‘새로운나라’ 2022년 9월 17일 재개관 안내 </span><span>2022. 09.15</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[행사] 독립기념관 ‘내가 찍은 가을’ 사진공모전 입상작 발표 </span><span>2022. 12.02</span></a>
                      </li>
                      <li>
                        <a href="#" class="df">
                          <span>[행사] [당첨자발표] 챗봇 ‘독립이’가 알려주는 알쏭달쏭 퀴즈 이벤트 </span>
                          <span>2022. 11.30</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[행사] 2022년 독립기념관 챗봇 서비스 만족도 조사 실시 </span><span>2022. 11.29</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[행사] 2022년 독립기념관 SNS 채널 만족도 조사 실시 </span><span>2022. 11.29</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[행사] [당첨자발표] 독립기념관·한국철도공사 SNS 공동 퀴즈 이벤트 </span><span>2022. 11.28</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="fl">
                    <a href="#b2"><span>교육/학술</span></a>
                    <ul class="pa" id="b2">
                      <li>
                        <a href="#" class="df"><span>[학술] 2022년도 한·일국제학술교류(제389회 월례발표회) 개최안내</span><span>2022. 12.14</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[교육] 제50기 독립기념관 교원직무연수 참가자 모집 안내문</span><span>2022. 12.06</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[학술] 제388회 월례연구발표회 개최 안내</span><span>2022. 11.24</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[교육] 독립기념관 독도학교 체험 교구재 신청 안내</span><span>2022. 10.11</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[교육] 임시정부 체험교육 온라인 가족프로그램 11월 참가자 모집 안내</span><span>2022. 10.05</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>[학술] 2022년 시민교양강좌 ‘국외한인사회와 여성독립운동가’ 개최 안내</span><span>2022. 09.30</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="fl">
                    <a href="#b3"><span>공지</span></a>
                    <ul class="pa" id="b3">
                      <li>
                        <a href="#" class="df"><span>2022년 하반기 독립기념관 직원 채용 필기전형 합격자</span><span>2022. 12.13</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>2022년 하반기 독립기념관 직원 채용 서류전형 합격자</span><span>2022. 12.05</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>독립기념관 제7관 전시내용 교체 제안서 평가위원(후보자) 모집 공고 </span><span>2022. 11.30</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>2022년도 실종아동등 조기발견 현장 대응훈련 안내</span><span>2022. 11.24</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>2022년 하반기 독립기념관 직원 채용 공고</span><span>2022. 11.11</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>2022년 국민취업지원제도 일경험 인턴 채용 서류전형 합격자 공고 및 면접전형 안내</span><span>2022. 11.08</span></a>
                      </li>
                    </ul>
                  </li>
                  <li class="fl">
                    <a href="#b4"><span>언론보도</span></a>
                    <ul class="pa" id="b4">
                      <li>
                        <a href="#" class="df"><span>독립기념관, 방문이 어려운 원거리 지역학교 대상 ‘찾아가는 독립기념관’교육프로그램 실시</span><span>2022. 11.22</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>독립기념관, 장애 학생 대상 특수교육 콘텐츠 ‘우리의 태극기’ 보급</span><span>2022. 11.19</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>독립기념관·한국철도공사 공동기획전 역무원 이봉창의 독립운동 이야기 개최</span><span>2022. 11.17</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>독립기념관, 2022년 제9회 전시콘퍼런스 개최</span><span>2022. 11.16</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>독립기념관, 2023년 2월의 독립운동가 전시회 개최</span><span>2022. 10.31</span></a>
                      </li>
                      <li>
                        <a href="#" class="df"><span>독립기념관, 2022 단풍나무숲길 힐링축제 개최(10월 29~30일)</span><span>2022. 10.27</span></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="memorial_board inner df pr">
            <div class="memorial_box">
              <div class="m_list">
                <ul class = "pr" id="exhibit">
                  <li><a href="#m1">상설전시<span>●</span></a></li>
                  <li><a href="#m2">특별전시<span>●</span></a></li>
                  <li><a href="#m3">시.어록비<span>●</span></a></li>
                  <li><a href="#m4">사이버전시관<span>●</span></a></li>
                </ul>
              </div>
              <div class="m_texts pr">
                <div id="m1" class="m_text">
                  <h3>독립기념관 <span class="bold">상설전시</span></h3>
                  <p>겨레의집 뒤로 보이는 7개의 상설 전시관에는 우리 민족의 역사가 고스란히 담겨 있습니다. 최첨단 전시로 독립운동사에 대한 체험적이고 입체적인 관람이 가능합니다.</p>
                  <div><a href="#">자세히보기</a></div>
                </div>
                <div id="m2" class="m_text">
                  <h3>독립기념관 <span class="bold">특별전시</span></h3>
                  <p>매년 다양한 주제와 특별한 구성으로 기획된 전시를 개최하고 있습니다. 특별 기획 전시는 제7전시관에서 만나볼 수 있습니다.</p>
                  <div><a href="#">자세히보기</a></div>
                </div>
                <div id="m3" class="m_text">
                  <h3>독립기념관 <span class="bold">시ㆍ어록비</span></h3>
                  <p>독립기념관 내 곳곳에 세워진 103기의 비석으로, 위인들의 독립과 나라사랑에 대한 말씀이 담겨 있습니다.</p>
                  <div><a href="#">자세히보기</a></div>
                </div>
                <div id="m4" class="m_text">
                  <h3>독립기념관 <span class="bold">사이버전시관</span></h3>
                  <p>독립기념관의 모든 전시관과 야외 전시의 모습을 온라인으로 실감나게 관람할 수 있습니다.</p>
                  <div><a href="#">자세히보기</a></div>
                </div>
              </div>
              <div class="m_control pr">
                <p class="bar pa"></p>
                <p class="ctrlM">play</p>
                <ul>
                  <li>btn1</li>
                  <li>btn2</li>
                </ul>
              </div>
            </div>
            <ul class="memorial_img pr df">
              <li><img src="images/banner1.png" class="mimg1" alt="#"></li>
              <li><img src="images/banner2.png" class="mimg2" alt="#"></li>
            </ul>
          </div>
        </section>
        <!-- //section2- main-notice영역끝 -->
        <section id="info" class="cover pr">
          <div class="inner pr">
            <div class="pa" id="education">
              <h3>교육프로그램<span class="pa">2022.12</span></h3>
              <div class="plusimg pa"><img src="images/ico-plus-white.png" alt="교육프로그램더보기"></div>
            </div>
            <article class="info_edu inner pr df dfitem">
              <div class="edu_board w50">
                <ul>
                  <li>
                    <div>
                      <span>어린이.청소년(개인)</span>
                      <span>선착순</span>
                      <span>인터넷</span>
                    </div>
                    <div>
                      <h4><a href="#">웹접근성 테스트교육</a></h4>
                    </div>
                    <div class="cf"><span class="pr fl">교육기간 : 2022-11-30 ~2022-12-02</span> <a href="#" class="fr">교육종료</a></div>
                  </li>
                  <li>
                    <div>
                      <span>어린이.청소년(단체)</span>
                      <span>선착순</span>
                      <span>이메일</span>
                    </div>
                    <div>
                      <h4><a href="#">독립운동가들은 어떤 나라를 세우려고 했을까요? (비대면)</a></h4>
                    </div>
                    <div class="cf"><span class="pr fl">교육기간 : 2022-09-01 ~2022-12-07</span><a href="#" class="fr">교육종료</a></div>
                  </li>
                </ul>
              </div>
              <div class="edu_imgbox w50"><img src="images/img-education.png" alt="독립기념관앞에서웃고있는아이"></div>
            </article>
            <!-- //article.info_edu 끝  -->
            <article class="info_event inner pr df dfitem">
              <div class="event_imgbox w50"><img src="images/img-culture.png" alt="독립기념행사의퍼포먼스를보여주고있는사람"></div>
              <div class="event_board w50">
                <div class="text_area" id="event">
                  <h4>문화행사 안내</h4>
                  <div>
                    <p>독립기념관은 다채로운 문화행사를 정기적으로 개최하고 있습니다.</p>
                    <p>보다 친근하게 우리 역사와 문화를 만날 수 있도록 구성된 체험 중심의 문화예술 행사를 즐겨보세요!</p>
                  </div>
                  <ul>
                    <li><a href="#">삼일절 기념 문화행사</a></li>
                    <li><a href="#">어린이날 행사</a></li>
                    <li><a href="#">광복절 경축행사</a></li>
                    <li><a href="#">단풍나무숲길 힐링축제</a></li>
                  </ul>
                </div>
              </div>
            </article>
            <article class="info_data inner pr df dfitem">
              <div class="data_board w50">
                <div class="text_area" id="research">
                  <h4>학술연구</h4>
                  <div>
                    <p>독립기념관은 독립운동이 남겨준 소중한 자산을 연구합니다.</p>
                    <p>보다 친근하게 우리 역사와 문화를 만날 수 있도록 다양한 자료를 통해 소개해드리겠습니다.</p>
                  </div>
                  <ul>
                    <li><a href="#">소장자료 찾아보기</a></li>
                    <li><a href="#">국외 독립운동사적지</a></li>
                    <li><a href="#">국내 독립운동사적지</a></li>
                    <li><a href="#">한국 독립운동사 연구</a></li>
                  </ul>
                </div>
              </div>
              <div class="data_imgbox w50"><img src="images/img-scholarship.png" alt="독립투사의메시지가적혀있는태극기"></div>
            </article>
          </div>
        </section>
        <!--// section3- main-info영역끝 -->
        <section id="service" class="cover pr">
          <article class="service_booking inner pr">
            <div class="booking_text">
              <h5>독립기념관 예약·신청</h5>
              <p>장소대관, 교육 및 행사 프로그램신청, 캠핑장 예약까지</p>
              <p>독립기념관의 모든서비스를 누려보세요!</p>
            </div>
            <ul class="booking_imgbox df">
              <li class="df pr">
                <div><img src="images/ico-place-bottom.png" alt="장소대관"></div>
                <a href="#">장소 대관</a>
              </li>
              <li class="df pr">
                <div><img src="images/ico-campground-bottom.png" alt="캠핑장"></div>
                <a href="#">캠핑장</a>
              </li>
              <li class="df pr">
                <div><img src="images/ico-together-bottom.png" alt="함께하는독립운동체험관"></div>
                <a href="#">함께하는<br>독립운동 체험관</a>
              </li>
              <li class="df pr">
                <div><img src="images/ico-education-bottom.png" alt="교육신청"></div>
                <a href="#">교육 신청</a>
              </li>
              <li class="df pr">
                <div><img src="images/ico-commentary-bottom.png" alt="전시해설"></div>
                <a href="#">전시 해설</a>
              </li>
              <li class="df pr">
                <div><img src="images/ico-unification-bottom.png" alt="통일염원의 동산 벽돌조적"></div>
                <a href="#">통일염원의 동산 벽돌조적</a>
              </li>
            </ul>
          </article>
          <div class="bg pa"><!--text없이 배경처리--></div>
          <div class="service_event inner pr df">
            <div class="event_left df">
              <div class="left_top">
                <div class="textbox">
                  <p class="bold">독립기념관 이벤트</p>
                  <p class="nrm">매월 진행되는 온라인 이벤트에 참여해보세요!</p>
                </div>
                <div class="service_imgbox">
                  <ul class="df">
                    <li class="df">
                      <div class="whitebox"><img src="images/s4-ico-quiz.png" alt=""></div>
                      <div class="text"><a href="#">릴레이 역사퀴즈</a></div>
                    </li>
                    <li class="df">
                      <div class="whitebox"><img src="images/s4-ico-special.png" alt=""></div>
                      <div class="text"><a href="#">특별이벤트</a></div>
                    </li>
                    <li class="df">
                      <div class="whitebox"><img src="images/s4-ico-attendance.png" alt=""></div>
                      <div class="text"><a href="#">출석체크 이벤트</a></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="left_bottom df">
                <div class="textbox">
                  <p class="bold">월간 독립기념관</p>
                  <p class="nrm">2023년 2월</p>
                  <p class="nrm">독립기념관 운영에 대한 홍보 및 애국선열들의 독립정신과 역사정보를 제공합니다.</p>
                </div>
                <div class="service_imgbox"><img src="images/s4-cf202212.png" alt=""></div>
              </div>
            </div>
            <div class="event_center df">
              <div class="center_top">
                <p class="bold">독립기념관은 지금</p>
                <div class="service_imgbox service_slide pr">
                  <div class="service_img1">
                    <img src="images/s4-getBoardMainImage1.jfif" alt="">
                    <p class="small">2022 단풍나무숲길 힐링축제 개최</p>
                  </div>
                  <div class="service_img2">
                    <img src="images/s4-getBoardMainImage2.jfif" alt="">
                    <p class="small">제10회 현충시설 체험 박람회 ‘우리, 다시, 함께’ 개최</p>
                  </div>
                  <div class="service_img3">
                    <img src="images/s4-getBoardMainImage3.jfif" alt="">
                    <p class="small">해설이 있는 독립군가 음악회 개최</p>
                  </div>
                </div>
                <ul class="center_ctrbox pr">
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
              <div class="center_bottom">
                <p class="bold">알림</p>
                <div class="service_imgbox pr">
                  <ul>
                    <li class="service_b_img1"><img src="images/s4-kr_recommend_1.png" class="ir_pm" alt="독립기념관 온라인 평생교육 바로가기"></li>
                    <li  class="service_b_img2"><img src="images/s4-kr_recommend_2.png" class="ir_pm" alt="정보공개포털바로가기"></li>
                    <li  class="service_b_img3"><img src="images/s4-kr_recommend_3.png" class="ir_pm" alt="농수산물, 농수산가공품 선물을 20만원까지 제공할 수 있는 기간은 12.29(목)~1.27(금)입니다"></li>
                  </ul>
                  <div class="center_b_ctrbox df pr">
                    <p></p>
                    <p></p>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="event_right">
              <div class="textbox pr">
                <h5>이달의<span>독립운동가</span></h5>
                <div class="plusbtn pa">2</div>
                <p>김상태, 신태식, 김동신 선생</p>
                <div class="ctrbox pa"></div>
              </div>
              <div class="service_imgbox"><img src="images/s4-main202212.png" alt=""></div>
              <div class="ctrbox pa"></div>
            </div>
          </div>
        </section>
      </main>
      <!-- //section4_div1영역 끝 -->
      <aside class="bottom">
        <div class="bottom_link inner">
          <ul class="df">
            <li><a href="#">국내 독립운동 사적지</a></li>
            <li><a href="#">국외 독립운동 사적지</a></li>
            <li><a href="#">한국독립운동정보시스템</a></li>
            <li><a href="#">독립기념관 교육정보서비스</a></li>
            <li><a href="#">온라인 논문투고시스템</a></li>
            <li><a href="#">호남 호국기념관</a></li>
          </ul>
        </div>
      </aside>
      <!-- //asidebar 영역끝 -->
      <?php
      include_once('inc/footer.php');
      ?>
      <!-- //footer 영역끝 -->
    </div>
   <?php
    include_once('inc/script.php');
   ?>
  </body>
</html>