<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<!--    <meta name="viewport" content="width=750, target-densitydpi=device-dpi, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta content="telephone=no" name="format-detection"/>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<title>国债二三事</title>
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
//				$(".page_smArea").addClass("showBox");
//				startBtn.dispatchEvent('click');
				$("#startBtn").trigger('click');
				$(".page_guide").stop().fadeOut(400);
				$(".sec1").addClass("active");
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
		startBtn.onclick = function(e){
			if(this.classList.contains('v-begin')){
				yyAudio.play();
				this.classList.remove('v-begin');
				this.classList.add('v-pause');
			}else{
				yyAudio.pause();
				this.classList.remove('v-pause');
				this.classList.add('v-begin');
			}
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
	<div class="start v-begin" id="startBtn"></div>
	<audio id="yyMusic" src="kn.mp3" preload="auto" loop></audio>

	<div class="page_guide">
        <div class="page_load">
            <div class="page_load_info">

                <div class="page_load_num" >
					<div>
						<img src="img/load.jpg">
					</div>
					<div id="page_load_num">0%</div>
				</div>
            </div>
        </div>
    </div>
    <div id="dowebok">
        <div class="section">
        	<div class="sec sec1">
                <div class="posDiv theme"><img src="img/font.png" width="80%"></div>
                <div class="posDiv wri01"><img src="img/man.png" width="90%" alt="man"></div>
                <div class="btnBox"></div>
            </div>
        </div>
        <div class="section">
            <div class="sec sec3">
                <div class="posDiv r01"><img src="img/woman2.png" width="100%"></div>
                <div class="posDiv wri wri01">
                    <img src="img/message1n.png" width="100%">
<!--                    <p>想买点国债，去哪能购买呢</p>-->
                </div>
                <div class="posDiv r02"><img src="img/man2.png" width="100%"></div>
                <div class="posDiv wri wri04">
                    <img src="img/message2n.png" width="100%">
<!--                    <p>这事难不住我</p>-->
                </div>
                <div class="btnBox"></div>
            </div>
        </div>
		<div class="section">
			<div class="sec sec3 pg3">
				<div class="posDiv wri wri01">
					<img src="img/note7.png" width="100%">
				</div>
				<div class="posDiv r02"><img src="img/man5.png" width="100%"></div>
				<div class="posDiv wri wri04">
					<img src="img/message3f.png" width="100%">
				</div>
				<div class="btnBox"></div>
			</div>
		</div>
		<div class="section">
			<div class="sec sec3 pg4">
				<div class="posDiv r01"><img src="img/man6.png" width="100%"></div>
				<div class="posDiv wri wri01">
					<img src="img/note8.png" width="100%">
				</div>
				<div class="posDiv wri wri04">
					<img src="img/message4f.png" width="100%">
				</div>
				<div class="btnBox"></div>
			</div>
		</div>
        <div class="section">
            <div class="sec sec3 pg5">
                <div class="posDiv r01"><img src="img/man1.png" width="100%"></div>
                <div class="posDiv wri wri01">
                    <img src="img/message5n.png" width="100%">
<!--                    <p>人民银行和财政部每年都会进行提示，我这有最新2017到期国债表</p>-->
                </div>
                <div class="posDiv r02"><img src="img/woman1.png" width="100%"></div>
                <div class="posDiv wri wri04">
                    <img src="img/message6n.png" width="100%">
<!--                    <p>买了国债，什么时候能兑付啊</p>-->
                </div>
                <div class="btnBox"></div>
            </div>
        </div>
		<div class="section">
			<div class="sec sec3 pg6">

				<div class="posDiv wri wri01">
					<table class="pg-table">
						<tr>
							<td>国债名称</td>
							<td>还本付息日</td>
							<td>期限</td>
							<td>到期年利率</td>
						</tr>
						<tr>
							<td>2012年第二期储蓄国债（电子式)</td>
							<td>3月10日</td>
							<td>5年</td>
							<td>6.15%</td>
						</tr>
						<tr>
							<td>2014年第一期储蓄国债（电子式)</td>
							<td>4月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年第四期储蓄国债（电子式)</td>
							<td>5月10日</td>
							<td>5年</td>
							<td>6.15%</td>
						</tr>
						<tr>
							<td>2014年第三期储蓄国债（电子式)</td>
							<td>6月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2014年第五期储蓄国债（电子式)</td>
							<td>7月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年第十期储蓄国债（电子式)</td>
							<td>7月20日</td>
							<td>5年</td>
							<td>5.32%</td>
						</tr>
						<tr>
							<td>2014年第七期储蓄国债（电子式)</td>
							<td>8月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年第十二期储蓄国债（电子式)</td>
							<td>9月10日</td>
							<td>5年</td>
							<td>5.32%</td>
						</tr>
						<tr>
							<td>2014年第九期储蓄国债（电子式)</td>
							<td>10月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年第十四期储蓄国债（电子式)</td>
							<td>11月10日</td>
							<td>5年</td>
							<td>5.32%</td>
						</tr>
					</table>
				</div>
				<div class="posDiv wri wri04">
					<img src="img/message7f.png" width="100%">
				</div>
				<div class="posDiv r01"><img src="img/man6.png" width="100%"></div>
				<div class="btnBox"></div>
			</div>
		</div>
		<div class="section">
			<div class="sec sec3 pg7">
				<div class="posDiv wri wri01">
					<table class="pg-table" style="font-size: .9rem">
						<tr>
							<td>国债名称</td>
							<td>兑付期开始日</td>
							<td>期限</td>
							<td>到期年利率</td>
						</tr>
						<tr>
							<td>2014年凭证式(一期)国债</td>
							<td>3月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年凭证式(一期)国债</td>
							<td>4月10日</td>
							<td>5年</td>
							<td>6.15%</td>
						</tr>
						<tr>
							<td>2014年凭证式(二期)国债</td>
							<td>5月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年凭证式(二期)国债</td>
							<td>8月10日</td>
							<td>5年</td>
							<td>5.32%</td>
						</tr>
						<tr>
							<td>2014年凭证式(三期)国债</td>
							<td>9月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
						<tr>
							<td>2012年凭证式(三期)国债</td>
							<td>10月10日</td>
							<td>5年</td>
							<td>5.32%</td>
						</tr>
						<tr>
							<td>2014年凭证式(四期)国债</td>
							<td>11月10日</td>
							<td>3年</td>
							<td>5.00%</td>
						</tr>
					</table>
				</div>
				<div class="posDiv wri wri04">
					<img src="img/message8f.png" width="100%">
				</div>
				<div class="posDiv r02"><img src="img/man3.png" width="100%"></div>
				<div class="btnBox"></div>
			</div>
		</div>
		<div class="section">
			<div class="sec sec3 pg8">
				<div class="posDiv r01"><img src="img/woman1.png" width="100%"></div>
				<div class="posDiv wri wri01">
					<img src="img/message11.png" width="100%">
					<p>凭证式国债名字不一样啊</p>
				</div>
				<div class="posDiv r02"><img src="img/man4.png" width="100%"></div>
				<div class="posDiv wri wri04">
					<img src="img/message10.png" width="100%">
					<p>凭证式国债改名啦
					</p>
				</div>
				<div class="btnBox"></div>
			</div>
		</div>
		<div class="section">
			<div class="sec sec1 pg9">
				<div class="posDiv wri01"><img src="img/note5.png" width="100%" alt="man"></div>
				<div class="btnBox"></div>
			</div>
		</div>
		<div class="section">
			<div class="sec sec3 pg10">
				<div class="posDiv r01"><img src="img/man6.png" width="100%"></div>
				<div class="posDiv wri wri01">
					<img src="img/note4n.png" width="100%">
					<!--<div class="hb-container">
						<h1>
							购买国债 <br>
							利国利民
						</h1>
					</div>-->
					
				</div>

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