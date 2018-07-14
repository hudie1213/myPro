var Data;
$.ajax({
    url: "d.php",
    async: false,
    dataType: "json",
    success: function (data) {
        Data = data;
    },
    fail: function () {
        alert("失败啦!")
    }
});

var n = Data.length/2 + 1;

function f() {
    for (i = 1; i < n; i++) {
        var input = "<span class='imgNum'>第" + i + "张轮播图</span><input type='text' class='imgUrl' name='imgUrl" + i +
            "' id='imgUrl" + i + "'><input type='text' class='imgNav' name='imgNav" + i + "' id='imgNav" + i +
            "'><span class='sc'>清空</span>"
        $(".inp").append("<p>" + input + "</p>")
        $("#imgUrl" + i).val(Data[2 * i - 2]);
        $("#imgNav" + i).val(Data[2 * i - 1]);
    }
    n = i
}

window.onload = f();

function d() {
    if (n < 7) {
        var input = "<span class='imgNum'>第" + n + "张轮播图</span><input type='text' class='imgUrl' name='imgUrl" + n +
            "' id='imgUrl" + n + "'><input type='text' class='imgNav' name='imgNav" + n + "' id='imgNav" + n +
            "'><span class='sc'>清空</span>"
        $(".inp").append("<p>" + input + "</p>");
        n++;
    } else {
        alert("最多添加六张");
    }

}

function s() {
    if (n > 2) {
        $(".inp p").last().remove();
        n--;
    } else {
        alert("至少有一张轮播图");
    }
}

$(".inp p").find("span").click(function () {
	var index=$(this).parent().index()
    $(".inp p").eq(index).find("input").val("");
})
