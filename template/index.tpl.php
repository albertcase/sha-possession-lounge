<!DOCTYPE HTML>
<html>
<head>
    <title>POSSESSION LOUNGE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="format-detection" content="telephone=no">
    <!--禁用手机号码链接(for iPhone)-->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimum-scale=1.0,maximum-scale=1.0,minimal-ui" />
    <!--自适应设备宽度-->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!--控制全屏时顶部状态栏的外，默认白色-->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="Keywords" content="">
    <meta name="Description" content="...">

    <link rel="stylesheet" type="text/css" href="/vstyle/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="/vstyle/css/style.css" />
    <script type="text/javascript" src="/vstyle/js/jquery.js"></script>

</head>
<body>

<div class="pupBox" id="pupTnc">
    <div class="con">
        <h2>活动条款及条件</h2>

        <div class="tncCon">
            <h3>活动须知：</h3>
            <p>1. 本次活动由位于瑞士 Chemin du Champ-des-Filles 37, CH-1228 Plan-les-Ouates GE 历峰国际（Richemont International SA）旗下公司的伯爵品牌主办（以下简称“伯爵”）。</p>
            <p>2. 本次活动不要求参与者购买任何产品或支付额外费用。 </p>
            <p>3. 活动参与者在扫描并关注伯爵官方微信后，需上传个人信息，方可参与此次活动。伯爵将致力确保个人信息安全。有关伯爵的隐私政策，请参阅[<a href="www.piaget. cn">www.piaget. cn</a>]
                最终大奖获奖者，需同意与伯爵保持联络，以确保奖项妥善发出。若获奖者因任何原因无法在指定合理时间内领奖，其奖项将被取消。若发生不包含于奖项内的额外费用，需由获奖者自行支付。</p>
            <p>5. 奖项不得在领取之前转让于他人或兑换现金。奖项完全由伯爵提供，参与者的不当行为将可能导致剥夺奖项的后果。</p>
            <p>6. 对于参与者因参加活动而遭遇的任何损害或损失，伯爵均不承担责任。同时，伯爵亦不负责因其他原因(如网络，电话，计算机，服务器等设备故障)而导致的无法参与、无法链接或无法查找到资料（无论是否与比赛有关）等后果的责任。</p>
            <p>7. 此次活动的最终解释权由伯爵所有。</p>
            <h3>奖项设置：</h3>
            <p>1. 所有参与活动的客人均有机会获得伯爵提供的Possession系列手链一条。</p>
            <p>2 所有参与活动，并在活动期间有购买的客人均有机会获得伯爵提供的Possession系列手镯一个。</p>
            <p>3. 抽奖方式由伯爵在第三方公证下通过系统随机抽取，中奖名单将于活动结束后三天内通过伯爵官方微博公布。</p>
            <p>4. 获奖者将由伯爵专员联络并安排奖品领取事宜，具体领奖时间，地点与方式将由伯爵官方通知。</p>
            <p>5. 若受货源或者其他不可抗力影响，领奖时间可能会相应推后，伯爵将会根据实际情况相应通知中奖者。</p>
        </div>

        <a href="javascript:;" class="close">
            <img src="/vstyle/img/close.png" width="100%" />
        </a>
    </div>
</div>




<div id="dreambox">
    <div class="section">
        <div class="success">
            <img src="/vstyle/img/successBg.jpg" width="100%" />
        </div>

        <a href="javascript:;" class="logo">
            <img src="/vstyle/img/logo.png" width="100%" />
        </a>

        <div class="formContext">
            <div class="con">
                <ul class="formli">
                    <li class="select">
                            <span class="placeholder">城市 / City</span>
                            <select name="city">
                                <option>城市 / City</option>
                                <option>上海</option>
                                <option>杭州</option>
                                <option>成都</option>
                                <option>郑州</option>
                                <option>南宁</option>
                                <option>青岛</option>
                                <option>天津</option>
                            </select>
                    </li>
                    <li class="select">
                            <span class="placeholder">称谓 / Title</span>
                            <select name="gender">
                                <option>称谓 / Title</option>
                                <option>女士</option>
                                <option>先生</option>
                            </select>
                    </li>
                    <li>
                        <input type="text" placeholder="姓 / Last Name" name="lastName">
                    </li>
                    <li>
                        <input type="text" placeholder="名 / First Name" name="firstName">
                    </li>
                    <li>
                        <input type="tel" placeholder="手机号 / Mobile" name="tel">
                    </li>
                    <li>
                        <input type="text" placeholder="邮箱 / E-mail（可选）" name="email">
                    </li>
                </ul>

                <div class="clause">
                    <label><span class="checkboxStyle"></span><input type="checkbox" name="news" checked></label>
                    <label><span class="checkboxStyle"></span><input type="checkbox" name="tnc" checked></label>
                    <a href="javascript:;" class="tncLink"></a>
                </div>

                <a href="javascript:;" class="submitBtn"></a>

            </div>
            <img src="/vstyle/img/formContext.png" width="100%" />
        </div>

    </div>
    <img src="/vstyle/img/formBg.jpg" width="100%" />
</div>

<script type="text/javascript">
    $(".tncLink").on("click", function(){
        $("#pupTnc").show();
    })

    $(".close").on("click", function(){
        $("#pupTnc").hide();
    })

    function isPhoneNum(value){
      return /^0|^((\+?86 )|(\(\+86 \)))?(13[0-9]|15[012356789]|18[012356789]|14[57])[0-9]{8}$/.test(value);
    };

    function isEmailNum(value){
        return /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(value);
    }

    var _city,_gender,_lastName,_firstName,_tel,_email,_news = true,_tnc;

    function formInterface(city,gender,lname,fname,tel,email,news){
        $.ajax({
            type: "POST",
            url: "/datasubmit",
            data: {
                "city": city,
                "title": gender,
                "lastname": lname,
                "firstname": fname,
                "mobile": tel,
                "email": email,
                "getmsg": Number(news)
            },
            dataType:"json"
        }).done(function(data){

            if(data.code == "10"){
                $(".success").show();
                //window.location.href = "/submitsuccess";
            }else{
                formErrorTips(data.msg);
            }
            
            $(".submitBtn").removeClass("disabled");
        })
    }



    function orderForm(){
        _city = $("select[name='city']").val();
        _gender = $("select[name='gender']").val();
        _lastName = $("input[name='lastName']").val();
        _firstName = $("input[name='firstName']").val();
        _tel = $("input[name='tel']").val();
        _email = $("input[name='email']").val();
        _news = $("input[name='news']").is(':checked');
        _tnc = $("input[name='tnc']").is(':checked');

        if(_city == "城市 / City"){
            formErrorTips("请选择城市 / City！");
            $(".submitBtn").removeClass("disabled");
        }else if(_gender == "称谓 / Title"){
            formErrorTips("请选择称谓 / Title！");
            $(".submitBtn").removeClass("disabled");
        }else if(_lastName == ""){
            formErrorTips("姓 / Last Name 不能为空！");
            $(".submitBtn").removeClass("disabled");
        }else if(_firstName == ""){
            formErrorTips("名 / First Name 不能为空！");
            $(".submitBtn").removeClass("disabled");
        }else if(!isPhoneNum(_tel)){
            formErrorTips("手机号 / Mobile 有误！");
            $(".submitBtn").removeClass("disabled");
        }else if(_email!="" && !isEmailNum(_email)){
            formErrorTips("邮箱 / E-mail 有误！");
            $(".submitBtn").removeClass("disabled");
        }else if(!_tnc){
            formErrorTips("请阅读并接受本活动相关条款与细则！");
            $(".submitBtn").removeClass("disabled");
        }else{

            formInterface(_city, _gender, _lastName, _firstName, _tel, _email, _news);

        }

    }


    $(".submitBtn").click(function(){
        if(!$(this).hasClass("disabled")){
            $(this).addClass("disabled");
            orderForm();
        }
    })


    $("select").on("change", function(){
        var _this = $(this);
        if(_this.val() == "城市 / City" || _this.val() == "称谓 / Title"){
            _this.siblings("span").addClass("placeholder");
        }else{
            _this.siblings("span").removeClass("placeholder");
        }
        _this.siblings("span").html(_this.val()) 
    })

    $("input[type='checkbox']").change(function(){
        var _this = $(this);
        if(_this.is(':checked')){
            _this.siblings(".checkboxStyle").removeClass("notselect");
        }else{
            _this.siblings(".checkboxStyle").addClass("notselect");
        }
    })


    var alertInt;
    function formErrorTips(alertNodeContext){
        clearTimeout(alertInt);
        if($(".alertNode").length > 0){
            $(".alertNode").html(alertNodeContext);
        }else{
            var alertNode = document.createElement("div");
                alertNode.setAttribute("class","alertNode");
                alertNode.innerHTML = alertNodeContext;
                document.body.appendChild(alertNode);

        }
        alertInt = setTimeout(function(){
            $(".alertNode").remove();
        },3000);
    }



</script>

<!-- 横屏代码 -->
<div id="orientLayer" class="mod-orient-layer">
    <div class="mod-orient-layer__content">
        <i class="icon mod-orient-layer__icon-orient"></i>
        <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
    </div>
</div>

</body>
</html>
