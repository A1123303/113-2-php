<html>
    <head>
        <title>活動行程與報名表</title>
        <meta charset="utf-8">
    </head>

    <body bgcolor="#F5FFE8">
        <h2>活動行程</h2>
        <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
            overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
            font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
            .tg .tg-ddi4{background-color:#dae8fc;border-color:inherit;color:#333333;font-size:20px;font-weight:bold;text-align:center;
            vertical-align:top}
            .tg .tg-p8sp{border-color:inherit;font-size:20px;text-align:center;vertical-align:top}
            .tg .tg-eqm3{border-color:inherit;font-size:20px;text-align:left;vertical-align:top}
            </style>
            <table class="tg"><thead>
                <tr>
                    <th class="tg-ddi4">時間</th>
                    <th class="tg-ddi4">活動內容</th>
                    <th class="tg-ddi4">地點</th>
                    <th class="tg-ddi4">備註：</th>
                </tr></thead>
                <tbody>
                <tr>
                    <td class="tg-p8sp">10:00 - 10:30</td>
                    <td class="tg-eqm3">新生報到與分組</td>
                    <td class="tg-eqm3">蚵仔寮集合地點</td>
                    <td class="tg-eqm3">請攜帶學生證</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">10:30 - 11:30</td>
                    <td class="tg-eqm3">系上介紹</td>
                    <td class="tg-eqm3">活動會場</td>
                    <td class="tg-eqm3">由教授與學長姐講解系上資源與發展方向</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">11:30 - 12:30</td>
                    <td class="tg-eqm3">學長姐分享</td>
                    <td class="tg-eqm3">活動會場</td>
                    <td class="tg-eqm3">學長姐經驗分享，解答新生疑問</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">12:30 - 13:30</td>
                    <td class="tg-eqm3">午餐與交流</td>
                    <td class="tg-eqm3">休息區</td>
                    <td class="tg-eqm3">提供簡單餐點，自由交流時間</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">13:30 - 15:00</td>
                    <td class="tg-eqm3">團隊破冰遊戲</td>
                    <td class="tg-eqm3">戶外活動區</td>
                    <td class="tg-eqm3">透過遊戲認識彼此，培養團隊精神</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">15:00 - 17:30</td>
                    <td class="tg-eqm3">自由探索與拍照</td>
                    <td class="tg-eqm3">蚵仔寮漁港</td>
                    <td class="tg-eqm3">參觀當地特色景點，自由活動時間</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">17:30 - 18:30</td>
                    <td class="tg-eqm3">蚵仔寮夜市巡禮</td>
                    <td class="tg-eqm3">蚵仔寮夜市</td>
                    <td class="tg-eqm3">體驗當地美食與文化</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">18:30 - 21:00</td>
                    <td class="tg-eqm3">迎新晚會</td>
                    <td class="tg-eqm3">活動會場</td>
                    <td class="tg-eqm3">表演、互動遊戲、才藝展示</td>
                </tr>
                <tr>
                    <td class="tg-p8sp">21:00 - 21:30</td>
                    <td class="tg-eqm3">活動收尾與合照</td>
                    <td class="tg-eqm3">活動會場</td>
                    <td class="tg-eqm3">全體大合照、感言分享、結束活動</td>
                </tr>
                </tbody>
            </table>
        <HR/>

        <h2>報名表</h2>
        <form action="報名資料.php" method="POST">
            姓名：<input type="text" name="uName" required><br/>
            學號：<input type="text" name="uID" required><br/>
            手機號碼：<input type="text" name="uPhone" required><br/>
            電子郵件：<input type="email" name="uEmail" required><br/>
            性別：<input type="radio" name="uGender" value="男">男 <input type="radio" name="uGender" value="女">女<br/>
            生日：<input type="date" name="uBirth" required><br/>
            年齡：<input type="number" name="uAge" min="15" max="30" required><br/>
            積極參與度：<input type="range" name="uLike" required><br/>
            興趣：
            <input type="checkbox" name="uInterests[]" value="學習">學習
            <input type="checkbox" name="uInterests[]" value="睡覺">睡覺
            <input type="checkbox" name="uInterests[]" value="打遊戲">打遊戲
            <input type="checkbox" name="uInterests[]" value="運動">運動
            <input type="checkbox" name="uInterests[]" value="藝術">藝術
            <br/>
            家鄉：
            <select name="uCity" required>
                <option value="台北">台北</option>
                <option value="新北">新北</option>
                <option value="桃園">桃園</option>
                <option value="台中">台中</option>
                <option value="台南">台南</option>
                <option value="高雄">高雄</option>
                <option value="新竹">新竹</option>
                <option value="苗栗">苗栗</option>
                <option value="彰化">彰化</option>
                <option value="南投">南投</option>
                <option value="雲林">雲林</option>
                <option value="嘉義">嘉義</option>
                <option value="屏東">屏東</option>
                <option value="宜蘭">宜蘭</option>
                <option value="花蓮">花蓮</option>
                <option value="台東">台東</option>
                <option value="澎湖">澎湖</option>
                <option value="金門">金門</option>
                <option value="連江">連江</option>
                <option value="其他">其他</option>
            </select>
            <br/>
            備註：<textarea cols="25" rows="1" name="uComment"></textarea><br/>
            <input type="submit"><input type="reset">
            <input type="hidden" name="uSecret" value="高大資管祝您玩得開心！">
        </form> 
        <center><a href="迎新活動.html"target="new">回首頁</a></center>
    </body>

</html>