
// 11. 畫面準備好以後才開始執行
$(function () {
    btnGet.onclick = function () {

        // 20. 取得 姓名欄位 (使用 JavaScript 的方式)
        var js = document.getElementById('userName').value;
        var jq = $('#userName').prop('value');
        var jq2 = $('#userName').val();
        console.log(js);
        console.log(jq);
        console.log(jq2);
        // 21. 取得 姓名欄位 (使用 jQuery 的方式)


        // 30. 取得 地址欄位 (使用 JavaScript 的方式)

        // 31. 取得 地址欄位 (使用 jQuery 的方式)
        var js = document.getElementById('address').value;
        var jq = $('#address').prop('value');
        var jq2 = $('#address').val();
        console.log(js);
        console.log(jq);
        console.log(jq2);


        // 40. 取得 年紀欄位 (使用 JavaScript 的方式)
        // var tempjs = document.getElementsByName('age');
        // for (var i = 0; i < tempjs.length; i++){
        //     if(tempjs[i].checked == true){
        //         console.log(tempjs[i].value);
        //     }
        // }

        //     console.log(tempjs);
        // javascript v2
        var tempjs = document.querySelector('input[name="age"]:checked').value;
        console.log(tempjs);
        // 41. 取得 年紀欄位 (使用 jQuery 的方式)
        var temp = $('input[name="age"]:checked').val();
        console.log(temp);
    }
})



