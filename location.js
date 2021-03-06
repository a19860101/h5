/*
                                Triple Combo Script Credit
                                By Philip M: http://www.codingforums.com/member.php?u=186
                                Visit http://javascriptkit.com for this and over 400+ other scripts
                                */

var categories = [];
categories["startList"] = ["上海", "山东", "广东", "北京", "四川", "吉林", "江苏", "河北", "河南", "青海", "重庆", "浙江", "湖南", "黑龙江",
    "福建", "贵州", "辽宁"
];
categories["上海"] = ["上海市"];
categories["山东"] = ["龙口", "潍坊", "济南", "青岛", "淄博", "临沂", "威海", "烟台", "日照"];
categories["广东"] = ["广州", "茂名", "揭阳", "汕头", "潮州"];
categories["北京"] = ["北京"];
categories["四川"] = ["成都", "达州"];
categories["吉林"] = ["长春"];
categories["江苏"] = ["常州", "南通", "昆山", "上周", "丹阳", "南京", "南通"];
categories["河北"] = ["唐山", "承德", "保定"];
categories["河南"] = ["郑州"];
categories["青海"] = ["西宁"];
categories["重庆"] = ["重庆"];
categories["浙江"] = ["杭州", "绍兴", "义乌", "台州", "温州", "台州", "嘉兴"];
categories["湖南"] = ["长沙"];
categories["黑龙江"] = ["哈尔滨"];
categories["福建"] = ["泉州", "福州", "福清"];
categories["贵州"] = ["贵阳"];
categories["辽宁"] = ["大连", "沈阳", "营口"];
categories["上海市"] = ["奉贤区娅珑湾家居中心店", "上海宜山路店", "普陀光复西路店"];
categories["龙口"] = ["山东龙口港城大道店_山东省龙口市东城区港城大道492号"];
categories["潍坊"] = ["奎文区玉清街居然之家店_山东潍坊奎文区玉清街鸢飞路居然之家店内(12341234"];
categories["淄博"] = ["淄博商厦店_山东省淄博市张店区金晶大道淄博商厦。四楼松下精品专柜(2342345",
    "淄博新玛特购物广场店_山东省淄博市张店开发区中润大道大商新马特购物广场。四楼松下精品专柜(98798798"
];


var nLists = 3; // number of select lists in the set

function fillSelect(currCat, currList) {
    var step = Number(currList.name.replace(/\D/g, ""));
    for (i = step; i < nLists + 1; i++) {
        document.forms['tripleplay']['List' + i].length = 1;
        document.forms['tripleplay']['List' + i].selectedIndex = 0;
    }
    var nCat = categories[currCat];
    for (each in nCat) {
        var nOption = document.createElement('option');
        var nData = document.createTextNode(nCat[each]);
        nOption.setAttribute('value', nCat[each]);
        nOption.appendChild(nData);
        currList.appendChild(nOption);
        $("select").click(function(){
            $("#output").empty();
        })
        if (step == 3) {
            // $("#output").empty();
            let t = nData.textContent;
            let a = t.indexOf("_");
            let b = t.indexOf("(");
            let shop = t.substr(0, a);
            let phone = t.substr(b + 1);
            let addr = t.slice(a + 1, b);
            let content = `
                <div class='shop'><i class="fas fa-map-marker-alt fa-2x"></i>${shop}</div>
                <div class='phone'>${phone}</div>
                <div class='addr'>${addr}</div>
                `;
            $("#output").append(content);

        }
    }
}

function getValue(L3, L2, L1) {
    // alert("Your selection was:- \n" + L1 + "\n" + L2 + "\n" + L3);
    // document.getElementById("output").textContent = L3;
    let a = L3.indexOf("_");
    let b = L3.indexOf("(");
    console.log(b);
    // console.log(L3.slice(0,a));
    let shop = L3.substr(0, a);
    document.getElementById("shop").textContent = shop;
    let phone = L3.substr(b + 1);
    document.getElementById("phone").textContent = phone;

    let addr = L3.slice(a + 1, b);
    document.getElementById("addr").textContent = addr;

    // console.log(L3);
}

function init() {
    fillSelect('startList', document.forms['tripleplay']['List1'])
}

navigator.appName == "Microsoft Internet Explorer" ? attachEvent('onload', init, false) : addEventListener(
    'load', init, false);