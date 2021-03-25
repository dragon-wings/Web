<?php 
    session_start();
    $ce = @$_SESSION["user"];
    if ($ce==NULL){
        $ac = "../php/warning.php";
        $cc = "../php/warning.php";
    }else{
        $ac = "../php/upload.php";
        $cc = "../php/border.php";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>首页</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_2220966_9mw5xozc087.css">
    <script src="../js/events.js"></script> 
    <script src="../js/add.js"></script> 
</head>
<body onload="countTime()">
    <main>

    <img class="yishuzi" src="../img/word.PNG" alt="">
    
    <audio autoplay loop controls> 
        <source src="../source/back.mp3" type="audio/mpeg">
        Your browser does not support this audio format.
    </audio>
    <!-- 上栏 -->
    <div class="nav">
        <nav class="top">
            <div class="search-box">
                <input class="search-txt" type="text" name="" placeholder="Type to search">
                <a class="search-btn" href="#">
                    <i class="iconfont iconsearch"></i>
                </a>
            </div>

            <?php
                if($ce!==NULL){
                    echo "<div class='exit'><p>欢迎用户 ".$ce." <a href='../php/logout.php'>退出登陆</a></p></div>";
                }else{
                    echo "<div class='login'><a href='login.php'><i class='iconfont iconuser-filling'></i></a></div>";
                }
            ?>
        </nav>
    </div>
    <!-- 导航栏 -->
    <input type="checkbox" id="check">
    <label for="check" >
        <i class="iconfont iconall" id="btn"></i>
        <i id="cancel" class="fas fa-times"></i>
    </label>
    <div class="sidebar" id="sidebar">
        <header>抗美援朝战争</header>
        <ul>
            <li id="1st"><a><i class="iconfont iconwork"></i>纪念活动</a></li>
            <li id="2nd"><a><i class="iconfont iconmenu"></i>英雄事迹</a></li>
            <li id="3rd"><a><i class="iconfont icontraining"></i>艺术作品</a></li>
            <li id="4th"><a><i class="iconfont iconlink"></i>大事记载</a></li>
            <li id="5th"><a><i class="iconfont iconupload"></i>文件上传</a></li>
            <li id="6th"><a><i class="iconfont icondiscount"></i>联系我们</a></li>
        </ul>
    </div>
    <!-- 轮播图 -->
    <div class="container" id="container">
        <div class="image">
            <!--轮播图-->
            <ul class="picture">
                <li><a href="#"><img src="../img/pic1.jpeg" alt=""></a></li>
                <li><a href="#"><img src="../img/pic2.jpeg" alt=""></a></li>
                <li><a href="#"><img src="../img//pic3.jpeg" alt=""></a></li>
                <li><a href="#"><img src="../img/pic1.png" alt=""></a></li>
                <li><a href="#"><img src="../img/pic4.jpg" alt=""></a></li>
            </ul>
            <ol class="bar"></ol>
            <!--按钮-->
            <div id="pointer">
                <span id="left">
                    <
                </span>
                <span id="right">
                    >
                </span>
            </div>
        </div>
    </div>
    <!-- 纪念活动 -->
    <div id="one">
        <div class="title">
            <p><strong>纪念活动</strong></p>
        </div>
        <div class="jiniancontent">
            <div class="jinianleft">
                <ul>
                    <li><img src="../img/jinian0.jpg" alt=""></li>
                    <li><img src="../img/jinian2.jpg" alt=""></li>
                    <li><img src="../img/jinian1.jpg" alt=""></li>
                </ul>
                <ol>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
            
            <article class="jinianright">
                <p class="center"><a href="speech.html"><b>习近平同志在纪念抗美援朝70周年大会上发表重要讲话</b></a></p><br>
                <p class="no">同志们，朋友们：</p><br>

                <p>今天，我们在这里隆重集会，纪念中国人民志愿军抗美援朝出国作战70周年。</p><br>
                    
                <p>70年前，由中华优秀儿女组成的中国人民志愿军，肩负着人民的重托、民族的期望，高举保卫和平、反抗侵略的正义旗帜，雄赳赳、气昂昂，跨过鸭绿江，发扬伟大的爱国主义精神和革命英雄主义精神，同朝鲜人民和军队一道，历经两年零9个月艰苦卓绝的浴血奋战，赢得了抗美援朝战争伟大胜利。</p><br>
                    
                <p>伟大的抗美援朝战争，抵御了帝国主义侵略扩张，捍卫了新中国安全，保卫了中国人民和平生活，稳定了朝鲜半岛局势，维护了亚洲和世界和平。</p><br>
                    
                <p>抗美援朝战争伟大胜利，将永远铭刻在中华民族的史册上！永远铭刻在人类和平、发展、进步的史册上！</p>    
            </article>
        </div>
    </div>

    <!-- 英雄事迹 -->
    <div class="heros" id="two">
        <div class="title">
            <p><b>英雄事迹</b></p>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="../img/huang.jpeg" alt="">
            </div>
            <div class="imgcontent">
                <h2><mark>黄继光</mark></h2>
                <p>
                    黄继光在中国人民志愿军的进攻部队受到机枪连火力压制的时候，他用身体挡住了敌人的地堡枪眼，使得后续部队能够攻下597.9高地。
                </p>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="../img/qiu.jpg" alt="">
            </div>
            <div class="imgcontent">
                <h2><mark>邱少云</mark></h2>
                <p>
                    在一次战斗中，美军燃烧弹发落在邱少云潜伏点附近，火势蔓延全身，为避免暴露，放弃自救壮烈牺牲，年仅26岁。
                </p>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="../img/wangshuchang.jpeg" alt="">
            </div>
            <div class="imgcontent">
                <h2><mark>王树昌</mark></h2>
                <p>
                    王树昌，志愿军战斗英雄，电影《英雄儿女》中王成原型之一，系志愿军某部某团的通信步话兵。
                </p>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="../img/lijiafa.jpeg" alt="">
            </div>
            <div class="imgcontent">
                <h2><mark>李家发</mark></h2>
                <p>
                    李家发，在攻占主峰的战斗中，为了给受阻的部队扫清前进障碍，他用自己的胸膛堵住了敌人的地堡机枪眼，壮烈牺牲，年仅19岁。
                </p>
            </div>
        </div>
    </div>

    <!-- 艺术作品 -->
    <div class="" id="three">
        <div class="title">
            <p><strong>艺术作品</strong></p>
        </div>
        <div class="work">
            <div class="culture">
                <img src="../img/music.jpg" alt="">
                <span><h1><a href="music.html">音乐</a></h1></span>
            </div>
            <div class="culture">
                <img src="../img/movie.jpg" alt="">
                <span><h1><a href="movie.html">影视</a></h1></span>
            </div>
            <div class="culture">
                <img src="../img/documentary.jpg" alt="">
                <span><h1><a href="documentary.html">纪录片</a></h1></span>
            </div>
        </div>
    </div>

    <div class="" id="four">
        <div class="title">
            <p><strong>大事记载</strong></p>
        </div>
        <div class="time">
            <span>距离<bdi>抗美援朝战争胜利</bdi>已经过去：</span>
            <time>
            <span id="_d">00</span>  
            <span id="_h">00</span>  
            <span id="_m">00</span>  
            <span id="_s">00</span>  
            </time>
            <a href="timeline.html"><button>点击了解更多</button></a>
        </div>
        <div class="centertable">
            <table class="eventsTable">
            <caption>抗美援朝大事表</caption>
                <tr class="green">
                    <th>发生时间</th>
                    <th>主要事件</th>
                </tr>
                <tr class="green">
                    <td>1950年10月2日</td>
                    <td>中共中央政治局会议作出最后的出兵决定。</td>
                </tr>
                <tr>
                    <td>1950年10月25日－31日</td>
                    <td>志愿军发动第一次战役。</td>
                </tr>
                <tr class="green">
                    <td>1950年10月31日－11月2日</td>
                    <td> 志愿军发动第二次战役。</td>
                </tr>
                <tr>
                    <td>1950年12月31日－1951年1月5日</td>
                    <td>志愿军发动第三次战役。</td>
                </tr>
                <tr class="green">
                    <td>1951年1月4日</td>
                    <td>志愿军攻占汉城</td>
                </tr>
                <tr>
                    <td>1951年1月25日至4月21日</td>
                    <td>志愿军发动第四次战役。</td>
                </tr>
                <tr class="green">
                    <td>1951年3月14日</td>
                    <td>中朝军队撤出汉城。</td>
                </tr>
                
                <tr>
                    <td>1951年4月22日－6月10日</td>
                    <td>志愿军发动第五次战役。</td>
                </tr>
                <tr class="green">
                    <td>1951年9月29日－10月22日</td>
                    <td>“联合国军”发动秋季攻势。</td>
                </tr>
                <tr>
                    <td>1951年10月25日</td>
                    <td>停战谈判恢复。</td>
                </tr>
                <tr class="green">
                    <td>1952年5月7日</td>
                    <td>巨济岛战俘营事件。</td>
                </tr>
                
                <tr class="green">
                    <td>10月14日－11月25日</td>
                    <td>上甘岭战役。</td>
                </tr>
                
                <tr>
                    <td>1953年7月27日</td>
                    <td>停火协定签字，抗美援朝结束。</td>
                </tr>
                <tr class="green">
                    <td>1958年10月26日</td>
                    <td>志愿军总部公报：志愿军已全部撤离朝鲜。</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="white"></div>

    <!-- 文档上传 -->
    <div class="" id="five">
        <div class="title">
            <p><b>文档上传</b></p>
        </div>
        
        <div class="upload">
            <form action=<?php echo "$ac";?> method="post" enctype="multipart/form-data">
                <label for="file">请选择您想要上传的文件：</label><br>
                <input type="file" name="file" id="file"><br>
                <input type="submit" name="submit" value="提交">
            </form>
        </div> 
    </div>

    <div class="" id="six">
        <div class="title">
            <p><b>联系我们</b></p>
        </div>
        
        <div class="">
            <div class="contact-right">
                <form action=<?php echo "$cc";?> method="post">
                    <div class="subject-box">
                        <textarea name="liuyan" placeholder="请输入..."></textarea>
                    </div>
                    <input type="submit" value="发送" />
                </form>
            </div>
        </div> 
    </div>

    <div class="white"></div>

    <footer class="footer">
        <div>
            <p>20185734孟世龙web课设大作业，服务邮箱：15666957709@163.com，如需联系作者，请联系QQ：963580061</p>
            <address><sub>天津市西青区</sub><sup>天津理工大学</sup></address>
            <button id="btn1">点我</button>
            <p id="add">更多功能敬请期待...</p>
            <hr>
        </div>
    </footer>
    <script src="../js/nav-pic-change.js"></script>
    </main>
</body>
</html>