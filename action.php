<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<!--    <meta name="viewport" content="width=750, target-densitydpi=device-dpi, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta content="telephone=no" name="format-detection"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>幸福之路</title>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <!--百度地图-->
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.fullPage.min.js"></script>
	<script>
	$(function(){
		$('#dowebok').fullpage({
			afterLoad: function(anchorLink, index){
				$(".sec").eq(index-1).addClass("active");
			},
			onLeave: function(index, direction){
				$(".sec").eq(index-1).removeClass("active");
			}
		});
	});
	window.onload = function(){
		//加载动画
		var iNow = 0;
		var loadNum = document.getElementById('page_load_num');
		var timer = setInterval(function(){
			if(iNow==100){
				clearInterval(timer);
				$(".page_smArea").addClass("showBox");
			}else{
				iNow += 2;
				progressFn(iNow);
			}
		},60);
		function progressFn(cent){
			loadNum.innerHTML = cent + '<em>%</em>';
		}
		
		var startBtn = document.getElementById("startBtn");
		var yyAudio = document.getElementById("yyMusic");
		startBtn.onclick = function(){
			$(".page_smArea").addClass("hover");
			yyAudio.play();
			var smTimer = null;
			smTimer = setTimeout(function(){
				$(".page_guide").stop().fadeOut(400);
				$(".sec1").addClass("active");
			},46000);
		}
		
		var skipBtn = document.getElementById("skipBtn");
		skipBtn.onclick = function(){
			yyAudio.pause();
			$(".page_guide").stop().fadeOut(400);
			$(".sec1").addClass("active");
		}
	}
	</script>
    <!--音符-->
    <script src="js/easeljs-0.7.1.min.js.下载"></script>
    <script src="js/tweenjs-0.5.1.min.js.下载"></script>
    <script src="js/movieclip-0.7.1.min.js.下载"></script>
    <script src="js/voice.js.下载"></script>
	
<body>
	<!--<div class="page_guide">
        <div class="page_load">
            <div class="page_load_info">
                <img src="images/page_load_info.png" width="100%">
                <div class="page_load_num" id="page_load_num">0%</div>
            </div>
        </div>
        <div class="page_smArea">
            <div class="tg_btn" id="skipBtn"><img src="images/page_sm_tg.png" width="100%"></div>
            <div class="tx"><img src="images/page_sm_tx.png" width="100%"></div>
            <div class="start" id="startBtn"><img src="images/page_sm_start.png" width="100%"></div>
            <div class="start_wri"><img src="images/page_sm_start_wri.png" width="100%"></div>
            <audio id="yyMusic" src="vocal.mp3" preload="auto"></audio>
            <div class="wri wri01"><img src="images/page_sm_wri01.png" width="100%"></div>
            <div class="wri wri02"><img src="images/page_sm_wri02.png" width="100%"></div>
            <div class="wri wri03"><img src="images/page_sm_wri03.png" width="100%"></div>
            <div class="wri wri04"><img src="images/page_sm_wri04.png" width="100%"></div>
            <div class="wri wri05"><img src="images/page_sm_wri05.png" width="100%"></div>
            <div class="wri wri06"><img src="images/page_sm_wri06.png" width="100%"></div>
            <div class="wri wri07"><img src="images/page_sm_wri07.png" width="100%"></div>
            <div class="wri wri08"><img src="images/page_sm_wri08.png" width="100%"></div>
            <div class="wri wri09"><img src="images/page_sm_wri09.png" width="100%"></div>
            <div class="wri wri10"><img src="images/page_sm_wri10.png" width="100%"></div>
            <div class="wri wri11"><img src="images/page_sm_wri11.png" width="100%"></div>
            <div id="voice" style="display: block;">
                <canvas id="canvas_voice" width="750" height="100"></canvas>
            </div>
			<script>
                var canvas1, stage1, exportRoot1;
                init();
                function init() {
                    canvas1 = document.getElementById("canvas_voice");
                    exportRoot1 = new lib3.voice();
            
                    stage1 = new createjs.Stage(canvas1);
                    stage1.addChild(exportRoot1);
                    stage1.update();
            
                    createjs.Ticker.setFPS(lib3.properties.fps);
                    createjs.Ticker.addEventListener("tick", stage1);
                }
            
            </script>
        </div>
    </div>-->
    <div id="dowebok">
        <div class="section">
        	<div class="sec sec1">
<!--                <div class="posDiv logo"><img src="images/logo.png" width="100%"></div>-->
                <div class="posDiv theme"><img src="img/font.png" width="80%"></div>
                <div class="posDiv wri01"><img src="img/man.png" width="90%" alt="man"></div>
                <!--<div class="posDiv wri02">
                    <p>保定辖区国债承销机构</p>
                    <p>国债兑付提示</p>
                    <p>凭证式储蓄国债更名提示</p>
                </div>
                <div class="posDiv wri03"><img src="images/page01_wri03.png" width="100%"></div>
                <div class="posDiv wri04"><img src="images/page01_wri04.png" width="100%"></div>-->
                <div class="btnBox"><img src="images/page_btn.png" width="100%"></div>
            </div>
        </div>
        <!--<div class="section">
            <div class="sec sec2">
                <div class="posDiv line"><img src="images/page02_line.png" width="100%"></div>
                <div class="posDiv tit"><img src="images/page02_tit.png" width="100%"></div>
                <div class="posDiv r01"><img src="images/page02_r01.png" width="100%"></div>
                <div class="posDiv wri wri01"><img src="images/page02_wri01.png" width="100%"></div>
                <div class="posDiv wri wri02"><img src="images/page02_wri02.png" width="100%"></div>
                <div class="posDiv wri wri03"><img src="images/page02_wri03.png" width="100%"></div>
                <div class="posDiv wri wri04"><img src="images/page02_wri04.png" width="100%"></div>
                <div class="posDiv r02"><img src="images/page02_r02.png" width="100%"></div>
                <div class="posDiv wri wri05"><img src="images/page02_wri05.png" width="100%"></div>
                <div class="posDiv wri wri06"><img src="images/page02_wri06.png" width="100%"></div>
                <div class="posDiv wri wri07"><img src="images/page02_wri07.png" width="100%"></div>
                <div class="posDiv r03"><img src="images/page02_r03.png" width="100%"></div>
                <div class="posDiv wri wri08"><img src="images/page02_wri08.png" width="100%"></div>
                <div class="posDiv wri wri09"><img src="images/page02_wri09.png" width="100%"></div>
                <div class="posDiv wri wri10"><img src="images/page02_wri10.png" width="100%"></div>
                <div class="btnBox"><img src="images/page_btn02.png" width="100%"></div>
            </div>
        </div>-->
        <div class="section">
            <div class="sec sec3">
                <div class="posDiv r01"><img src="img/woman2.png" width="100%"></div>
                <div class="posDiv wri wri01">
                    <img src="img/message1.png" width="100%">
                    <p>想买点国债，去哪能购买呢</p>
                </div>
                <div class="posDiv r02"><img src="img/man2.png" width="100%"></div>
                <div class="posDiv wri wri04">
                    <img src="img/message2.png" width="100%">
                    <p>这事难不住我</p>
                </div>
                <div class="btnBox"><img src="images/page_btn.png" width="100%"></div>
            </div>
        </div>
        <div class="section">
            <div class="sec sec3 pg5">
                <div class="posDiv r01"><img src="img/man1.png" width="100%"></div>
                <div class="posDiv wri wri01">
                    <img src="img/message5.png" width="100%">
                    <p>人民银行和财政部每年都会进行提示，我这有最新2017到期国债表
                    </p>
                </div>
                <div class="posDiv r02"><img src="img/woman1.png" width="100%"></div>
                <div class="posDiv wri wri04">
                    <img src="img/message6.png" width="100%">
                    <p>买了国债，什么时候能兑付啊
                    </p>
                </div>
                <div class="btnBox"><img src="images/page_btn.png" width="100%"></div>
            </div>
        </div>
        <div class="section">
        	<div class="sec sec3">
            	<div class="posDiv line"><img src="images/page03_line.png" width="100%"></div>
				<div class="posDiv tit"><img src="images/page03_tit.png" width="100%"></div>
				<div class="posDiv r01"><img src="images/page03_r01.png" width="100%"></div>
				<div class="posDiv wri wri01"><img src="images/page03_wri01.png" width="100%"></div>
				<div class="posDiv wri wri02"><img src="images/page03_wri02.png" width="100%"></div>
				<div class="posDiv wri wri03"><img src="images/page03_wri03.png" width="100%"></div>
				<div class="posDiv r02"><img src="images/page03_r02.png" width="100%"></div>
				<div class="posDiv wri wri04"><img src="images/page03_wri04.png" width="100%"></div>
				<div class="posDiv wri wri05"><img src="images/page03_wri05.png" width="100%"></div>
				<div class="posDiv wri wri06"><img src="images/page03_wri06.png" width="100%"></div>
            </div>
        </div>
        <div class="section">
        	<div class="sec sec4">
            	<div class="posDiv line"><img src="images/page04_line.png" width="100%"></div>
				<div class="posDiv tit"><img src="images/page04_tit.png" width="100%"></div>
				<div class="posDiv r01"><img src="images/page04_r01.png" width="100%"></div>
				<div class="posDiv wri wri01"><img src="images/page04_wri01.png" width="100%"></div>
				<div class="posDiv wri wri02"><img src="images/page04_wri02.png" width="100%"></div>
				<div class="posDiv wri wri03"><img src="images/page04_wri03.png" width="100%"></div>
				<div class="posDiv r02"><img src="images/page04_r02.png" width="100%"></div>
				<div class="posDiv wri wri04"><img src="images/page04_wri04.png" width="100%"></div>
				<div class="posDiv wri wri05"><img src="images/page04_wri05.png" width="100%"></div>
				<div class="posDiv wri wri06"><img src="images/page04_wri06.png" width="100%"></div>
                <div class="btnBox"><img src="images/page_btn.png" width="100%"></div>
            </div>
        </div>
        <div class="section">
        	<div class="sec sec5">
            	<div class="posDiv line"><img src="images/page05_line.png" width="100%"></div>
				<div class="posDiv tit"><img src="images/page05_tit.png" width="100%"></div>
				<div class="posDiv r01"><img src="images/page05_r01.png" width="100%"></div>
				<div class="posDiv wri wri01"><img src="images/page05_wri01.png" width="100%"></div>
				<div class="posDiv wri wri02"><img src="images/page05_wri02.png" width="100%"></div>
				<div class="posDiv wri wri03"><img src="images/page05_wri03.png" width="100%"></div>
				<div class="posDiv r02"><img src="images/page05_r02.png" width="100%"></div>
				<div class="posDiv wri wri04"><img src="images/page05_wri04.png" width="100%"></div>
				<div class="posDiv wri wri05"><img src="images/page05_wri05.png" width="100%"></div>
				<div class="posDiv wri wri06"><img src="images/page05_wri06.png" width="100%"></div>
                <div class="btnBox"><img src="images/page_btn.png" width="100%"></div>
            </div>
        </div>
        <div class="section">
        	<div class="sec sec6">
				<div class="posDiv map">
                    <a href="http://api.map.baidu.com/geocoder?location=31.163301%2C121.362912&output=html&src=lbscomponents|lbscomponents">
                        <img src="images/page06_map.png" width="100%">
                    </a>
                </div>
				<div class="posDiv map_d">
                	<a href="tel:021-53299999"></a>
                    <img src="images/page06_d.png" width="100%">
                </div>
                <div class="btnBox"><img src="images/page_btn02.png" width="100%"></div>
            </div>
        </div>
        <div class="section">
        	<div class="sec sec7">
				<div class="posDiv tit"><img src="images/page07_tit.png" width="100%"></div>
				<div class="posDiv wri wri01"><img src="images/page07_wri01.png" width="100%"></div>
				<div class="posDiv tel tel01"><a href="tel:15810852440"><img src="images/page07_tel01.png" width="100%"></a></div>
				<div class="posDiv wri wri02"><img src="images/page07_wri02.png" width="100%"></div>
				<div class="posDiv tel tel02"><a href="tel:15001304480"><img src="images/page07_tel02.png" width="100%"></a></div>
				<div class="posDiv wri wri03"><img src="images/page07_wri03.png" width="100%"></div>
				<div class="posDiv tel tel03"><a href="tel:13311150380"><img src="images/page07_tel03.png" width="100%"></a></div>
				<div class="posDiv tel tel04"><a href="tel:13910791814"><img src="images/page07_tel04.png" width="100%"></a></div>
            </div>
        </div>
    </div>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
	  var DOMAIN="http://zl.obeibei.com/xfzl"; 
	  var URL = location.href.split('#')[0];
          URL = encodeURIComponent(URL);
	  var shareConfig = {
        timestamp: Math.round(new Date() / 1000), 
        nonceStr: Math.round(new Date() / 1000) + Math.random(), 
        url:URL,
        shop_name:"",
        shop_id:"",
        share_url:""
      };
	  
	  
      $.get(DOMAIN+"/WeixinModel.class.php?act=jsSign&noncestr="+shareConfig.nonceStr+"&timestamp="+shareConfig.timestamp+"&url="+URL+"&refresh=", function(data, status){
        if(status == "success"){
          var data = JSON.parse(data);
          if(status == "success"){
              //微信分享
            wx.config({
              debug: false, 
              appId: data.appid, 
              timestamp: data.timestamp, 
              nonceStr: data.noncestr, 
              signature: data.sign,
              jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage'] 
            });
            wx.error(function(res){
                console.log(res);
            });
            
          }else{
             alert("微信签名失败，刷新页面重试！");
          }
        }
      }); 
	  
	   wx.ready(function(){
			wx.error(function(res){
				console.log(res);
			});
			//朋友圈
			wx.onMenuShareTimeline({
				title:"行圆公司发布会", 			// 分享标题
				link: DOMAIN+"/", 					// 分享链接
				imgUrl: DOMAIN+"/html/share.jpg",	// 分享图标
				success: function () {
				  	//用户分享成功后执行的回调函数
				},
				cancel: function () {
					// 用户取消分享后执行的回调函数  
				}
			});
	
			//分享给朋友
			wx.onMenuShareAppMessage({
				title: "幸福之路", // 分享标题
				desc: "行圆公司发布会", // 分享描述
				link: DOMAIN+"/", // 分享链接
				imgUrl: DOMAIN+"/html/share.jpg", // 分享图标
				type: '', // 分享类型,music、video或link，不填默认为link
				dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
				success: function () {
					//用户分享成功后执行的回调函数
				},
				cancel: function () {
					// 用户取消分享后执行的回调函数
					 
				}
			});
	 
		});
    </script>  
</body>
</html>