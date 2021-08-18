<?php
$poker = array(); //需告一個陣列 這句其實可以省略 但寫了比較方便閱讀
for ($i = 0; $i < 52; $i++) { //第一步 透過for建立一個迴圈 52張撲克牌
    $temp = rand(0, 51); // 第二步 建立變數範圍 從0~51亂數

    // 第四步 建立一個檢查機制  (我覺得這是最難的地方)
    //任何一個東西產生後都要進行檢查 所以這邊使用for

    $isRepeat = false; //設立一個變數布零值  命名為 有重複嗎？  平常沒有重複就保持flase  有的話就true
    for ($j = 0; $j < $i; $j++) {
        if ($poker[$j] == $temp) { //假如裡面的東西是一樣的話
            // 哇, 重複了 那就要break跳出 假設重複了就不要繼續檢查了
            $isRepeat = true;
            break;
        } //假如沒有一樣的話 就繼續直到$j ＝ $i
    }

    if (!$isRepeat) { //最後一步 判斷句放了一個布零值  沒重複的話 就印出來
        $poker[] = $temp;  //第三步 宣告一個陣列 = 將這些亂數輸入進去 但只做到這裡 有很大的機會會重複
        echo $temp . '<br />';
    } else {
        $i--; //重複的話 就--繼續回去迴圈
    }
}
echo '---';
?>
<!-- 老師說 第一個版本、第二個版本、第三個版本都是 專門寫給非資訊科系的人 -->
<!-- 會這樣說，是因為 這種寫法是使用迴圈 一直叫電腦進行判斷 比較冗長 但還是要有一個觀念 對初學者而言能用就好  -->
<!-- 這兩隻程式沒有什麼參考價值 -->
<!-- 商業化的版本 注重開發上的效能 請直接看第三個版本 -->



<!-- 基本上程式語言都可以用人類很自然的去理解 -->
<!-- $poker[]=1 -->
<!-- $poker[]=2 -->
<!-- $poker[]=3 -->
<!-- 這樣寫的話 也可以宣告這三個值是一個陣列 序號0值1  序號1值2  序號2值3 -->