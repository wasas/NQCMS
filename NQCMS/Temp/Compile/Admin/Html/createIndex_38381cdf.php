<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html>
<head>
<meta charset="utf8">
<title>CMS官网</title>
<meta name="keywords" content="蛋糕柜，便利店冷柜，超市冷柜，风幕柜，蔬菜水果保鲜柜，冷藏柜，陈列柜，展示柜，保鲜柜"/>
<meta name="description" content="想了解蛋糕柜、超市冷柜、蔬菜水果柜、风幕柜等相关制冷设备的价格|尺寸|图片|公司|厂家的信息吗？尽在合肥宝尼尔电器官网查询。这有更详细的保鲜柜、冷藏展示柜的资料，欢迎您来电咨询、洽谈。也希望得到您的指点与建议，望我们服务更周全。"/>
<link href="http://localhost/11/1101/Template/default/css/main.css" rel="stylesheet" type="text/css">
<script src="http://localhost/11/1101/Template/default/js/jquery.min.1.8.2.js"></script>
<script type="text/javascript" src="http://localhost/11/1101/Template/default/js/ping.js"></script>
<script type="text/javascript">
  if(typeof(pgvMain) == 'function')
  pgvMain("", {senseParam: "p"});
</script>
<script type="text/javascript" src="http://localhost/11/1101/Template/default/js/microajax.js"></script>
<script type="text/javascript">function cdcAjax(url, callbackFunction){return microAjax(url, callbackFunction);}</script>
<script type="text/javascript" src="http://localhost/11/1101/Template/default/js/album.js"></script>
<!--[if IE 6]>
<script src="http://localhost/11/1101/Template/default/js/DD_belatedPNG_0.0.8a.js"></script>
<script type="text/javascript">DD_belatedPNG.fix('*');</script>
<![endif]-->
<script>
//Tabs结合jquery的标签切换，showTabs(标签id名称前缀, 切换内容id前缀, 切换组id, 总切换标题数, 当前标签id);当前标签className为cur
function showTabs(prefixTitle, prefixContent, id, total, curid){
	for(var i=1;i<=total;i++){
		$('#'+prefixContent+'_'+id+'_'+i).css('display', 'none');
		$('#'+prefixTitle+'_'+id+'_'+i).removeClass('cur');	
	}
	$('#'+prefixContent+'_'+id+'_'+curid).css('display', 'block');
	$('#'+prefixTitle+'_'+id+'_'+curid).addClass('cur');
}
</script>
</head>
<body class="bg_index">



<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><div id="top">
	<div class="warp clearfix">
		<div class="logo"><a href="http://www.cssmoban.com"><img src="http://localhost/11/1101/Template/default/images/logo.png"></a></div>
		<ul class="nav clearfix">
		    <li class="shouye">
				<a href="<?php echo U('Index/index');?>" title="首页"><span>首页</span></a>
			</li>
			<li onMouseOver="$('.nav .bg1 span').addClass('cur');" onMouseOut="$('.nav .bg1 span').removeClass('cur');">
			<a href="<?php echo U('about',array('aid'=>'24','cid'=>'3'));?>" title="公司简介" class="bg1" ><span>公司简介</span></a>
			</li>
			<li onMouseOver="$('.nav .bg3 span').addClass('cur');" onMouseOut="$('.nav .bg3 span').removeClass('cur');">
			<a href="<?php echo U('category',array('cid'=>'2'));?>" title="新闻资讯" class="bg3" ><span>新闻资讯</span></a>
			</li>
			<li onMouseOver="$('.nav .bg6 span').addClass('cur');" onMouseOut="$('.nav .bg6 span').removeClass('cur');">
			<a href="<?php echo U('content',array('aid'=>25,'cid'=>8));?>" title="联系我们" class="bg6" ><span>联系我们</span></a>
			</li>
		</ul>
	</div>
	<div class="subnav">
	</div>
</div>;

<div id="container">
<!--跑马banner-->
  	<div id="glume">
		<ul class="Limg">
			<li class="bg_1"><a href="javascript:;" target="_blank">&nbsp;</a></li>
			<li class="bg_2"><a href="javascript:;" target="_blank">&nbsp;</a></li>
			<li class="bg_3"><a href="javascript:;" target="_blank">&nbsp;</a></li>
	    </ul>
	    <cite class="Nubbt">
			<span class="on">1</span>
			<span >2</span>
			<span >3</span>
	    </cite>
  	</div>
<script language=javascript type="text/javascript">
(function(){
    if(!Function.prototype.bind){
        Function.prototype.bind = function(obj){
            var owner = this,args = Array.prototype.slice.call(arguments),callobj = Array.prototype.shift.call(args);
            return function(e){e=e||top.window.event||window.event;owner.apply(callobj,args.concat([e]));};
        };
    }
})();
var glume = function(id){
    this.ctn = document.getElementById(id);
    this.adLis = null;
    this.btns = null;
    this.animStep = 0.1;//动画速度0.1～0.9
    this.switchSpeed = 3;//自动播放间隔(s)
    this.defOpacity = 1;
    this.tmpOpacity = 1;
    this.crtIndex = 0;
    this.crtLi = null;
    this.adLength = 0;
    this.timerAnim = null;
    this.timerSwitch = null;
    this.init();
};
glume.prototype = {
    fnAnim:function(toIndex){
        if(this.timerAnim){window.clearTimeout(this.timerAnim);}
        if(this.tmpOpacity <= 0){
            this.crtLi.style.opacity = this.tmpOpacity = this.defOpacity;
            this.crtLi.style.filter = 'Alpha(Opacity=' + this.defOpacity*100 + ')';
            this.crtLi.style.zIndex = 0;
            this.crtIndex = toIndex;
            return;
        }
        this.crtLi.style.opacity = this.tmpOpacity = this.tmpOpacity - this.animStep;
        this.crtLi.style.filter = 'Alpha(Opacity=' + this.tmpOpacity*100 + ')';
        this.timerAnim = window.setTimeout(this.fnAnim.bind(this,toIndex),50);
    },
    fnNextIndex:function(){
        return (this.crtIndex >= this.adLength-1)?0:this.crtIndex+1;
    },
    fnSwitch:function(toIndex){
        if(this.crtIndex==toIndex){return;}
        this.crtLi = this.adLis[this.crtIndex];
        for(var i=0;i<this.adLength;i++){
            this.adLis[i].style.zIndex = 0;
        }
        this.crtLi.style.zIndex = 2;
        this.adLis[toIndex].style.zIndex = 1;
        for(var i=0;i<this.adLength;i++){
            this.btns[i].className = '';
        }
        this.btns[toIndex].className = 'on'
        this.fnAnim(toIndex);
    },
    fnAutoPlay:function(){
        this.fnSwitch(this.fnNextIndex());
    },
    fnPlay:function(){
        this.timerSwitch = window.setInterval(this.fnAutoPlay.bind(this),this.switchSpeed*1000);
    },
    fnStopPlay:function(){
        window.clearTimeout(this.timerSwitch);
    },
    init:function(){
        this.adLis = this.ctn.getElementsByTagName('li');
        this.btns = this.ctn.getElementsByTagName('cite')[0].getElementsByTagName('span');
        this.adLength = this.adLis.length;
        for(var i=0,l=this.btns.length;i<l;i++){
            with({i:i}){
                this.btns[i].index = i;
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
                this.btns[i].onclick = this.fnSwitch.bind(this,i);
            }
        }
        this.adLis[this.crtIndex].style.zIndex = 2;
        this.fnPlay();
        this.ctn.onmouseover = this.fnStopPlay.bind(this);
        this.ctn.onmouseout = this.fnPlay.bind(this);
    }
};
var player1 = new glume('glume');
</script>
<!--跑马banner End-->
</div>

<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
<div class="warp clearfix">
	<div class="c_index_l">
	<p align=center><embed height=163 type=application/x-shockwave-flash align=middle width=218 src="http://player.youku.com/player.php/sid/XMjYwNjQxNzAw/v.swf" allowScriptAccess="sameDomain" quality="high"></p>
	</div>
	<div class="c_index_c">
		<ul class="title">
			<li id="tabT_1_1" onClick="showTabs('tabT', 'tabC', 1, 2, 1);" class="cur">行业资讯</li>
			<li id="tabT_1_2" onClick="showTabs('tabT', 'tabC', 1, 2, 2);">新闻动态</li>
		</ul>
		<ul id="tabC_1_1" class="list">
			<!-- <li><span>2013-04-02</span><a href="">sdfasf·超市冷柜直冷式和风冷式独具一格</a></li> -->
							<?php
					$cid=7;
					$row=5;
					$titlelen=20;
					//获得所有相同的cid文章
					$data=K('Content')->where("cc.cid in (".$cid.")")->order("addtime desc")->limit($row)->all();
					foreach ($data as  $field):
						$field['url']=getContentUrl($field);
						$field['title']=mb_substr($field['title'],0,$titlelen,'utf-8');
				?>
			<li>
				<span><?php echo date('Y-m-d',$field['addtime']);?></span>
				<a href="<?php echo $field['url'];?>"><?php echo $field['title'];?></a>
			</li>
		<?php endforeach;?>
		</ul>
		<ul id="tabC_1_2" class="list" style="display:none;">
						<?php
					$cid=6;
					$row=5;
					$titlelen=20;
					//获得所有相同的cid文章
					$data=K('Content')->where("cc.cid in (".$cid.")")->order("addtime desc")->limit($row)->all();
					foreach ($data as  $field):
						$field['url']=getContentUrl($field);
						$field['title']=mb_substr($field['title'],0,$titlelen,'utf-8');
				?>
			<li>
				<span><?php echo date('Y-m-d',$field['addtime']);?></span>
				<a href="<?php echo $field['url'];?>"><?php echo $field['title'];?></a>
			</li>
		<?php endforeach;?>

		</ul>	
	</div>
	<div class="c_index_r">
		<p style="height:131px;"><img src="http://localhost/11/1101/Template/default/images/pic_index_contact.jpg"></p>
		<p style="height:34px;"><img src="http://localhost/11/1101/Template/default/images/pic_index_jobs.jpg"></p>
	</div>
</div>
<div class="warp bg_index_about clearfix">
	<dl class="clearfix">
		<dt><img src="http://localhost/11/1101/Template/default/images/pic_index_about.jpg"></dt>
		<dd>
			<p>    合肥宝尼尔电器有限公司是专业从事超市冷柜、保鲜柜、冷藏柜、风幕柜、蔬菜水果柜、蛋糕展示柜、熟食柜、鲜肉柜、厨房冷柜、饮料展示柜等冷藏冷冻设备的研究、设计、开 发、销售和服务的现代化冷链企业，公司拥有国际顶尖的技术力量、专业化的设计、先进的生产设备、成熟的生产工艺和完善的质量保证体系以及 完善的售后服务团队，为国内外客户提供优质的产品和满意的服务。</p>
			<p>    主要产品有：超市冷柜、保鲜柜、冷藏柜、展示柜、蔬菜水果柜、蛋糕展示柜、熟食柜、鲜肉柜、厨房冷柜、饮料展示柜等一系列保鲜冷藏展示设备。本公司与国内 外众多贸易经销商、代理商、超市卖场、便利店、企事业单位等建立良好的客户关系，一直以来以优质的产品和热情周到的服务赢得了国内外客户的信赖和一致好评。<a href="<?php echo U('Index/Index/content',array('aid'=>24));?>">[详细...]</a></p>
		</dd>
	</dl>
</div>
<div class="flink">
	<div class="warp clearfix">
		<p class="title"><img src="http://localhost/11/1101/Template/default/images/title_index_link.jpg"></p>
		<ul class="links">
		   				<?php
					$row=5;
					$db=M('link');
					//获得
					$data=$db->limit($row)->all();
						foreach ($data as  $field):
				?>
				<li><a href='<?php echo $field['url'];?>' target='_blank'><?php echo $field['name'];?></a> </li>    	
			<?php endforeach;?>   
		</ul>
	</div>
</div>
<div id="footer">
	<div class="warp">
		<p>合肥宝尼尔电器有限公司：专业的<a href="http://www.cssmoban.com">保鲜柜</a>、<a href="http://www.cssmoban.com">展示柜</a>、<a href="http://www.cssmoban.com">超市陈列柜</a>等产品供应商。&nbsp;&nbsp;&nbsp;&nbsp;</p>
		<p>业务一部：0592-123456789 / 0592-123456789&nbsp;&nbsp;&nbsp;&nbsp;	业务二部：0592-123456789 / 0592-123456789  </p>
		<p>业务三部：0592-123456789 / 0592-123456789&nbsp;&nbsp;&nbsp;&nbsp;	业务四部：0592-123456789 / 0592-123456789  </p>
	</div>
</div>

</body>
</html>