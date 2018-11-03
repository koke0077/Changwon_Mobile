<?php
  $menu1 = 0;
  $menu2 = 0;
  if(isset($_GET['menu'])) $menu1 = $_GET['menu'];
  if(isset($_GET['submenu'])) $menu2 = $_GET['submenu'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The ArtCulture main page">
    <meta name="author" content="kkk@k.net">
    <title>ArtCulture</title>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endid]-->
  </head>
  <script type="text/javascript">
			function changeTrColor(trObj, oldColor, newColor) {
				trObj.style.backgroundColor = newColor;

				trObj.onmouseout = function(){
					trObj.style.backgroundColor = oldColor;
				}
			}
  </script>
  <style>
  body{
    height: 800px;
    width: 1097px;
  }

  .top{
    width: 100%;
    height: 80px;
    background-color: #FFE5C7;
  }
  .top_bottom{
    width: 100%;
  }
  #topMenu {
          height: 30px;  /* 메인 메뉴의 높이 */
          width: 100%;  /* 메인 메뉴의 넓이 */
          background-color: #2d2d2d;
  }
  #topMenu ul {           /* 메인 메뉴 안의 ul을 설정함: 상위메뉴의 ul+하위 메뉴의 ul */
      list-style-type: none;  /* 메인 메뉴 안의 ul 내부의 목록 표시를 없애줌 */
      margin: 0px;            /* 메인 메뉴 안의 ul의 margin을 없앰 */
      padding: 0px;           /* 메인 메뉴 안의 ul의 padding을 없앰 */
  }
  #topMenu ul li {            /* 메인 메뉴 안에 ul 태그 안에 있는 li 태그의 스타일 적용(상위/하위메뉴 모두) */
      color: white;               /* 글씨 색을 흰색으로 설정 */
      background-color: #2d2d2d;  /* 배경 색을 RGB(2D2D2D)로 설정 */
      float: left;                /* 왼쪽으로 나열되도록 설정 */
      line-height: 30px;          /* 텍스트 한 줄의 높이를 30px로 설정 */
      vertical-align: middle;     /* 세로 정렬을 가운데로 설정 */
      text-align: center;         /* 텍스트를 가운데로 정렬 */
      position: relative;         /* 해당 li 태그 내부의 top/left 포지션 초기화 */
  }
  #sideMenu{
      display: block;
    	margin-left: 0px;
    	width: 150px;
    	position:relative;
    	float:left;
    	margin-top:5px;
    	/*padding: 10px;*/
    	height: 95%;
      background-color: #B5FFDA;
  }
  .middle_table{
    width: 790px;
    height: 95%;
    background-color: #FFD0FA;
    display: inline-block;
    margin-left: 5px;
    margin-top: 5px;
  }
  .right_Menu{
    width: 147px;
    height: 95%;
    background-color: #FFF1AA;
    display: inline-block;
    margin-left: 5px;
    margin-top: 5px;
    float: right;
  }
  #sideMenu ul {           /* 메인 메뉴 안의 ul을 설정함: 상위메뉴의 ul+하위 메뉴의 ul */
      list-style-type: none;  /* 메인 메뉴 안의 ul 내부의 목록 표시를 없애줌 */
      margin: 30px;            /* 메인 메뉴 안의 ul의 margin을 없앰 */
      padding: 0px;           /* 메인 메뉴 안의 ul의 padding을 없앰 */
  }
  #sideMenu li {
    margin-top: 20px;
    /*text-decoration:none;               /* a 태그의 꾸밈 효과 제거 */
    /*display: block;                     /* a 태그의 클릭 범위를 넓힘 */
  }

  .menuLink {           /* 상위 메뉴와 하위 메뉴의 a 태그에 공통으로 설정할 스타일 */
      text-decoration:none;               /* a 태그의 꾸밈 효과 제거 */
      display: block;                     /* a 태그의 클릭 범위를 넓힘 */
      width: 152.8px;                       /* 기본 넓이를 150px로 설정 */
      font-size: 12px;                    /* 폰트 사이즈를 12px로 설정 */
      font-weight: bold;                  /* 폰트를 굵게 설정 */
      font-family: "Trebuchet MS", Dotum; /* 기본 폰트를 영어/한글 순서대로 설정 */
  }
  .submenuLink {           /* 상위 메뉴와 하위 메뉴의 a 태그에 공통으로 설정할 스타일 */
      text-decoration:none;               /* a 태그의 꾸밈 효과 제거 */
      display: block;                     /* a 태그의 클릭 범위를 넓힘 */
      width: 150px;                       /* 기본 넓이를 150px로 설정 */
      font-size: 12px;                    /* 폰트 사이즈를 12px로 설정 */
      font-weight: bold;                  /* 폰트를 굵게 설정 */
      font-family: "Trebuchet MS", Dotum; /* 기본 폰트를 영어/한글 순서대로 설정 */
  }

  .menuLink {     /* 상위 메뉴의 글씨색을 흰색으로 설정 */
      color: white;
  }
  .topMenuLi:hover .menuLink {    /* 상위 메뉴의 li에 마우스오버 되었을 때 스타일 설정 */
      color: red;                 /* 글씨 색 빨간색 */
      background-color: #4d4d4d;  /* 배경색을 밝은 회색으로 설정 */
  }
  .submenuLink {          /* 하위 메뉴의 a 태그 스타일 설정 */
      color: #2d2d2d;             /* 글씨 색을 RGB(2D2D2D)로 설정 */
      background-color: white;    /* 배경색을 흰색으로 설정 */
      border: solid 1px black;    /* 테두리를 설정 */
      margin-top: -1px;           /* 위 칸의 하단 테두리와 아래칸의 상단 테두리가 겹쳐지도록 설덩 */
  }
  .longLink {     /* 좀 더 긴 메뉴 스타일 설정 */
      width: 150px;   /* 넓이는 190px로 설정 */
  }
  .submenu {              /* 하위 메뉴 스타일 설정 */
      position: absolute;     /* html의 flow에 영향을 미치지 않게 absolute 설정 */
      height: 0px;            /* 초기 높이는 0px로 설정 */
      overflow: hidden;       /* 실 내용이 높이보다 커지면 해당 내용 감춤 */
      transition: height .2s; /* height를 변화 시켰을 때 0.2초간 변화 되도록 설정(기본) */
      -webkit-transition: height .2s; /* height를 변화 시켰을 때 0.2초간 변화 되도록 설정(구버전 크롬/사파라ㅣ) */
      -moz-transition: height .2s; /* height를 변화 시켰을 때 0.2초간 변화 되도록 설정(구버전 파폭) */
      -o-transition: height .2s; /* height를 변화 시켰을 때 0.2초간 변화 되도록 설정(구버전 오페라) */
  }

  .topMenuLi:hover .submenu { /* 상위 메뉴에 마우스 모버한 경우 그 안의 하위 메뉴 스타일 설정 */
      height: 190px;           /* 높이를 93px로 설정 */
  }
  .submenuLink:hover {        /* 하위 메뉴의 a 태그의 마우스 오버 스타일 설정 */
      color: red;                 /* 글씨색을 빨간색으로 설정 */
      background-color: #dddddd;  /* 배경을 RGB(DDDDDD)로 설정 */
  }

  .sideMenu ul#navi {
        width: 150px;         /*너비 설정 */
        text-indent: 10px;    /*들여쓰기 설정*/
}
    .sideMenu ul#navi, .sideMenu ul#navi ul {
        margin:0;
        padding:0;
        list-style:none;
}
    .sideMenu li.group {
        margin-bottom: 3px;
}
    .sideMenu li.group div.title {
        height: 35px;
        line-height: 35px;
        background:#9ab92e;
        cursor:pointer;         /*마우스 커서 변경 설정 */
}
    .sideMenu ul.sub li {
        margin-bottom: 2px;
        height:35px;
        line-height:35px;
        background:#f4f4f4;
        cursor:pointer;
}
    .sideMenu ul.sub li a {
        display: block;
        width: 100%;
        height:100%;
        text-decoration:none;     /*a 태그 밑줄 없애기.. 그런데 왜 않없어지지??;; */
        color:#000;
}
    .sideMenu ul.sub li:hover {
        background:#cf0;
}

    table.side_menu_table th{
      	width: 180px;
      	height: 48px;
      	background-color: #F5F6CE;
      	font-size: 20px;
}
    table.side_menu_table td{
    	width: 180px;
    	height: 30px;
    	text-align: center;
    	/*background-color: #D8F6CE;*/
    	border-bottom: 2px gray solid;
}
  .banner_1, .banner_2, .banner_3{
    width: 770px;
    height: 150px;
    margin-top: 10px;
    margin-left: 10px;
    background-color: #A3FF9F;
    display: block;
  }
  .login{
    width: 140px;
    height: 140px;
    margin: 5px;
    border: 1 px solid yellow;
    background-color: white;
    font-size: 12px;
    padding-top: 1px;
  }
  .id{
    width: 130px;
    height: 30px;
    margin-left: 5px;
    margin-right: 5px;
    margin-top: 5px;
  }
  .id input{
    width: 125px;
  }
  .password{
    width: 130px
    height: 30px;
    margin-left: 5px;
    margin-right: 5px;
    margin-top: 20px;
  }
  .password input{
    width: 125px;
  }
  #submit{
    margin-top: 10px;
    width: 100%;
    height: 30px;
    background: #6167FF;
    color: white;
  }
  .content_table{
	display: block;
	/*margin-left: 185px;*/
	width: 100%;
	/*height: 100%;*/
	border-bottom: 2px solid gray;
  }
  .content_table tr{
  	height: 40px;
  }
  .content_table td{
  	text-align: center;
  	border-bottom: 1px dotted gray;
  }
  .content_table th{
  	border-bottom: 2px solid gray;
  	border-top: 2px solid gray;
  	background-color: #FBEFFB;
    font-family: "Trebuchet MS", Dotum; /* 기본 폰트를 영어/한글 순서대로 설정 */
  }
  .content_table #td1{
  	width: 50px;
  }
  .content_table #td2{
  	width: 500px;
  }
  .content_table #td3{
  	width: 300px;
  }
  .content_table #td4{
  	width: 300px;
  }
  .content_table .td_1{
  	border-right: 1px dashed gray;
  }
  .numbering{
  	margin-left: 185px;
  	border-bottom: 2px solid gray;
  	text-align: center;
  	padding: 5px;
  	height: 20px;
  }
  </style>
  <body>
    <div class="top">
      top
    </div>
    <div class="top_bottom">
      <nav id="topMenu">
        <ul>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php">HOME</a>
          </li>
          <li>|</li>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php?menu=1">메뉴1</a>
              <ul class="submenu">
                <li> <a href="main.php?menu=1&submenu=1" class="submenuLink longLink"> 메뉴1_1</a> </li>
                <li> <a href="main.php?menu=1&submenu=3" class="submenuLink longLink"> 메뉴1_2</a> </li>
                <li> <a href="main.php?menu=1&submenu=3" class="submenuLink longLink"> 메뉴1_3</a> </li>
              </ul>
          </li>
          <li>|</li>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php?menu=2">메뉴2</a>
              <ul class="submenu">
                <li> <a href="main.php?menu=2&submenu=1" class="submenuLink"> 메뉴2_1</a> </li>
                <li> <a href="main.php?menu=2&submenu=2" class="submenuLink"> 메뉴2_2</a> </li>
              </ul>
          </li>
          <li>|</li>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php?menu=3">메뉴3</a>
              <ul class="submenu">
                <li> <a href="main.php?menu=3&submenu=1" class="submenuLink"> 메뉴3_1</a> </li>
                <li> <a href="main.php?menu=3&submenu=2" class="submenuLink"> 메뉴3_2</a> </li>
                <li> <a href="main.php?menu=3&submenu=3" class="submenuLink"> 메뉴3_3</a> </li>
              </ul>
          </li>
          <li>|</li>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php?menu=4">메뉴4</a>
              <ul class="submenu">
                <li> <a href="main.php?menu=4&submenu=1" class="submenuLink"> 메뉴4_1</a> </li>
                <li> <a href="main.php?menu=4&submenu=2" class="submenuLink"> 메뉴4_2</a> </li>
                <li> <a href="main.php?menu=4&submenu=3" class="submenuLink"> 메뉴4_3</a> </li>
                <li> <a href="main.php?menu=4&submenu=4" class="submenuLink"> 메뉴4_4</a> </li>
              </ul>
          </li>
          <li>|</li>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php?menu=5">메뉴5</a>
              <ul class="submenu">
                <li> <a href="main.php?menu=5&submenu=1" class="submenuLink"> 메뉴5_1</a> </li>
                <li> <a href="main.php?menu=5&submenu=2" class="submenuLink"> 메뉴5_2</a> </li>
                <li> <a href="main.php?menu=5&submenu=3" class="submenuLink"> 메뉴5_3</a> </li>
                <li> <a href="main.php?menu=5&submenu=4" class="submenuLink"> 메뉴5_4</a> </li>
                <li> <a href="main.php?menu=5&submenu=5" class="submenuLink"> 메뉴5_5</a> </li>
              </ul>
          </li>
          <li>|</li>
          <li class="topMenuLi">
            <a class="menuLink" href="main.php?menu=6">메뉴6</a>
              <ul class="submenu">
                <li> <a href="main.php?menu=6&submenu=1" class="submenuLink"> 메뉴6_1</a> </li>
                <li> <a href="main.php?menu=6&submenu=2" class="submenuLink"> 메뉴6_2</a> </li>
                <li> <a href="main.php?menu=6&submenu=3" class="submenuLink"> 메뉴6_3</a> </li>
                <li> <a href="main.php?menu=6&submenu=4" class="submenuLink"> 메뉴6_4</a> </li>
                <li> <a href="main.php?menu=6&submenu=5" class="submenuLink"> 메뉴6_5</a> </li>
                <li> <a href="main.php?menu=6&submenu=6" class="submenuLink"> 메뉴6_6</a> </li>
              </ul>
          </li>
        </ul>
      </nav>
    </div>
    <nav id="sideMenu">
      <!--ul id="navi">
        <li class="group">
            <div class="title">title 1</div>
            <ul class="sub">
                <li><a href="#">sub1</a></li>
                <li><a href="#">sub1</a></li>
                <li><a href="#">sub1</a></li>
            </ul>
        </li>
        <li class="group">
            <div class="title">title 2</div>
            <ul class="sub">
                <li><a href="#">sub2</a></li>
            </ul>
        </li>
        <li class="group">
            <div class="title">title 3</div>
            <ul class="sub">
                <li><a href="#">sub3</a></li>
                <li><a href="#">sub3</a></li>
            </ul>
        </li>
    </ul-->
    <div class="login">
      <form class="Log_in" action="" method="post">
        <div class="id">
          아이디 <input type="text" name="id" value="" placeholder="id">
        </div>
        <div class="password">
          비밀번호 <input type="password" name="password" value="" placeholder="password" id="password">
        </div>
        <input type="submit" name="" value="확인" id="submit">
      </form>
    </div>
    <table class="side_menu_table" >
					<th id="title_list">💻 목록 💻</th>
          <?php if($menu1 != 0){
            if($menu1 == 1) $j = 3;
            if($menu1 == 2) $j = 2;
            if($menu1 == 3) $j = 3;
            if($menu1 == 4) $j = 4;
            if($menu1 == 5) $j = 5;
            if($menu1 == 6) $j = 6;
              $i = 1;
            for($i = 1 ; $i <= $j ; $i++){ ?>
              <tr bgcolor="#FFFFFF" id="" value="kkk" onclick="clickTrEvent(this)"
                onmouseover="javascript:changeTrColor(this, '#FFFFFF', '#F4FFFD')"
                style="cursor:pointer">
              <td>메뉴<?php echo $menu1; ?>_<?php echo $i; ?></td>
            </tr >
          <?php }
        } ?>
              <!--tr bgcolor="#FFFFFF" id="" value="kkk" onclick="clickTrEvent(this)"
                onmouseover="javascript:changeTrColor(this, '#FFFFFF', '#F4FFFD')"
                style="cursor:pointer">
              <td>bbb</td>
            </tr >
            <tr bgcolor="#FFFFFF" id="" value="kkk" onclick="clickTrEvent(this)"
              onmouseover="javascript:changeTrColor(this, '#FFFFFF', '#F4FFFD')"
              style="cursor:pointer">
            <td>ccc</td>
          </tr-->
				</table>

    </nav>
      <div class="middle_table">
        <?php
          if($menu1 == 0 && $menu2 == 0){ ?>
              <div class="banner_1">
                banner1
              </div>
              <div class="banner_2">
                배너2
              </div>
              <div class="banner_3">
                배너3
              </div>
            <?php }else if($menu1 == 1 && $menu2 == 0){ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
  					      <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php }else if($menu1 == 2 && $menu2 == 0){ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
  					      <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php }else if($menu1 == 3 && $menu2 == 0){ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
  					      <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php }else if($menu1 == 4 && $menu2 == 0){ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
  					      <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php }else if($menu1 == 5 && $menu2 == 0){ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
  					      <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php }else if($menu1 == 6 && $menu2 == 0){ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
                  <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php }else{ ?>
              <div class="table_title">
                <table class="content_table">
                  <th width="50px" height="30" align="center" class="td_1" id="td1" bgcolor="#FFFFFF">순</th>
  					      <th width="450px" height="30" align="center" class="td_1" id="td2" bgcolor="#FFFFFF">제목</th>
                  <th width="100px" height="30" align="center" class="td_1" id="td3" bgcolor="#FFFFFF">글쓴이</th>
                  <th width="150px" height="30" align="center" id="td4" bgcolor="#FFFFFF">날짜</th>
                  <th width="80px" height="30" align="center" id="count" bgcolor="#FFFFFF">조회수</th>
                </table>
              </div>
            <?php } ?>
          </div>

    <div class="right_Menu">
      여기엔 뭘 넣을까???
    </div>
  </body>
</html>
