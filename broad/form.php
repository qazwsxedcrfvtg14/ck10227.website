<Script Language="JavaScript">
 <!--
        
          
  function checkvalue(obj)
    {
        
        if ( obj.cd.value=="" && obj.cdcontent.value=="" )
           {
               alert("請至少輸入一項查詢條件!!");
               return false;               
           }
        else       
           {
               obj.submit();
           }
    }
 //-->
</Script> 

<SCRIPT LANGUAGE="JavaScript">
<!--
 function moveOver() 
   {
		var boxLength = document.add.choiceBox.length;
		var selectedItem = document.add.available.selectedIndex;
		var selectedText = document.add.available.options[selectedItem].text;
		var selectedValue = document.add.available.options[selectedItem].value;
		var i;
		var isNew = true;
			if (boxLength != 0)
			 {
					for (i = 0; i < boxLength; i++)
					 {
								thisitem = document.add.choiceBox.options[i].text;
								if (thisitem == selectedText)
								 {
											isNew = false;
											break;
									}
					}
				} 
			if (isNew)
			 {
newoption = new Option(selectedText, selectedValue, false, false);
document.add.choiceBox.options[boxLength] = newoption;
}
document.add.available.selectedIndex=-1;
}
function removeMe() {
var boxLength = document.add.choiceBox.length;
arrSelected = new Array();
var count = 0;
for (i = 0; i < boxLength; i++) {
if (document.add.choiceBox.options[i].selected) {
arrSelected[count] = document.add.choiceBox.options[i].value;
}
count++;
}
var x;
for (i = 0; i < boxLength; i++) {
for (x = 0; x < arrSelected.length; x++) {
if (document.add.choiceBox.options[i].value == arrSelected[x]) {
document.add.choiceBox.options[i] = null;
}
}
boxLength = document.add.choiceBox.length;
}
}
function saveMe() {
var strValues = "";
var boxLength = document.add.choiceBox.length;
var count = 0;
if (boxLength != 0) {
for (i = 0; i < boxLength; i++) {
if (count == 0) {
strValues = document.add.choiceBox.options[i].value;
}
else {
strValues = strValues + "," + document.add.choiceBox.options[i].value;
}
count++;
}
}
if (strValues.length == 0) {
	alert("★ 依區別條件，必需要輸入");
	return false;
}
else {
	document.add.town_code.value =  strValues;
	document.add.submit();
}
}

// -->
</Script> 



<Script language="javascript">                          
<!--                         
//----------------------                      
// 判斷民國日期是否合法              
//----------------------                      
//(date_value,field_cname)              
//(時間資料,顯示的資料名稱)              
function chk_date(yy,mm,dd){  
  //alert(yy +mm +dd);           
	var date_err=false;  //預設為沒有錯誤
	var txt_date_err;
	if(isNaN(yy)||isNaN(mm)||isNaN(dd)){              
		date_err=true;              
	}
	if(yy == '' || mm=='' || dd==''){
		date_err=true;
	}
	if (mm<=0 || mm>12){              
		date_err=true;              
	}              
	else{              
		if (mm==1||mm==3||mm==5||mm==7||mm==8||mm==10||mm==12){              
			if (dd > 31){              
				date_err=true;              
			}              
		}              
		if (mm==4||mm==6||mm==9||mm==11){              
			if (dd > 30){              
				date_err=true;              
			}              
		}              
		if (mm==2){              
			if ((eval(yy)+1911)%4==0){              
				if (dd > 29){              
					date_err=true;              
				}              
			}              
			else if (((eval(yy)+1911)%4)!=0){              
				if (dd > 28){              
					date_err=true;              
					//txt_date_err = txt_date_err + "請注意閏年的問題\n"              
				}              
			}	              
		}              
	}              
	if (dd<=0 || date_err==true){              
		date_err=true;              
		//alert(txt_date_err);  //顯示錯誤訊息,看形情選則要不要用              
		return false;              
	}              
	return true;   		              
}     
//-->         
</Script>



<html>
  <head>
    <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>學區查詢</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
    <link rel="stylesheet" type="text/css" href="../BS.css" />
	<style type="text/css">
	</style>
    
  </head>
  <body>
    <center>
      <form method="post" action="run.php" name="add">
      <table id="left_tb2">
        <tr style="display:none">
          <td id="td_text_align_left">步驟１．請先選取查詢方式</td>
        </tr>
        <tr style="display:none">
          <td>
            <select size="1" name="ttrstyle">
              <option value="1">門牌變動(單筆新舊門牌對照)</option>
              <option value="2" selected="selected">查詢現戶門牌區里鄰</option>
              <option value="3">新舊門牌對照(以起迄日期查多筆)</option>
            </select>
          </td>
        </tr>
      </table>
        <?php
        $curl = curl_init("http://www.houseno.tcg.gov.tw/ASP_FRONT_END/left_.asp");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $gov = curl_exec($curl);
        curl_close($curl);
		$st=stripos($gov,"<input type=hidden");
        $ed=stripos($gov,">",$st);
        $ed=stripos($gov,">",$ed+1);
        $ed=stripos($gov,">",$ed+1);
		echo substr($gov,$st,$ed-$st+1);
        ?>
      <input type="hidden" name="s_yy" value="" /> 
      <input type="hidden" name="s_mm" value="" /> 
      <input type="hidden" name="s_dd" value="" /> 
      <input type="hidden" name="e_yy" value="" /> 
      <input type="hidden" name="e_mm" value="" /> 
      <input type="hidden" name="e_dd" value="" />
      <table id="left_tb3">
        <tr>
          <td id="td_text_align_left">輸入查詢條件 
          <b>
            <font color="red">(為提高查詢效率,請勿只輸入街/路/大道)</font>
          </b></td>
        </tr>
        <tr>
          <td>
              <select size="1" name="ttrarea">
                <option value="" selected="selected">選取查詢地區</option>
                <option value="010">松山區</option>
                <option value="020">信義區</option>
                <option value="030">大安區</option>
                <option value="040">中山區</option>
                <option value="050">中正區</option>
                <option value="060">大同區</option>
                <option value="070">萬華區</option>
                <option value="080">文山區</option>
                <option value="090">南港區</option>
                <option value="100">內湖區</option>
                <option value="110">士林區</option>
                <option value="120">北投區</option>
              </select>
          </td>
        </tr>
        <tr>
          <td id="td_text_align_left">請輸入街路名稱,如:中山北路:</td>
        </tr>
        <tr>
          <td id="td_text_align_left"><input type="text" name="ttrstreet" size="12" class="txt" value="" /> </td>
        </tr>
        <tr>
          <td id="td_text_align_left">
          <select name="ttrsection" size="1">
            <option value="">請選擇</option>
            <option value="">無</option>
            <option value="一">一</option>
            <option value="二">二</option>
            <option value="三">三</option>
            <option value="四">四</option>
            <option value="五">五</option>
            <option value="六">六</option>
            <option value="七">七</option>
            <option value="八">八</option>
            <option value="九">九</option>
            <option value="十">十</option>
          </select>段 
          <input type="text" name="ttrshi" size="4" class="txt" />巷 
          <input type="text" name="ttrlo" size="4" class="txt" /> 弄
          <!--</td>
        </tr>
        <tr>
          <td id="td_text_align_left">
          <select name="ttrtemp" size="1">
            <option value="">請選擇</option>
            <option value="">無</option>
            <option value="臨">臨</option>
          </select> -->
          <input type="text" name="ttrnum" size="4" class="txt" value="" />號</td>
        </tr>
        <tr>
          <td id="td_text_align_left">
          <select name="ttrfloor" size="1">
            <option value="">請選擇</option>
            <option value="">無</option>
            <option value="地下">地下</option>
            <option value="地下一層">地下一層</option>
            <option value="地下二層">地下二層</option>
            <option value="地下三層">地下三層</option>
            <option value="地下四層">地下四層</option>
            <option value="地下五層">地下五層</option>
            <option value="">一</option>
            <option value="二">二</option>
            <option value="三">三</option>
            <option value="四">四</option>
            <option value="五">五</option>
            <option value="六">六</option>
            <option value="七">七</option>
            <option value="八">八</option>
            <option value="九">九</option>
            <option value="十">十</option>
            <option value="十一">十一</option>
            <option value="十二">十二</option>
            <option value="十三">十三</option>
            <option value="十四">十四</option>
            <option value="十五">十五</option>
            <option value="十六">十六</option>
            <option value="十七">十七</option>
            <option value="十八">十八</option>
            <option value="十九">十九</option>
            <option value="二十">二十</option>
            <option value="二十一">二十一</option>
            <option value="二十二">二十二</option>
            <option value="二十三">二十三</option>
            <option value="二十四">二十四</option>
            <option value="二十五">二十五</option>
            <option value="二十六">二十六</option>
            <option value="二十七">二十七</option>
            <option value="二十八">二十八</option>
            <option value="二十九">二十九</option>
            <option value="三十">三十</option>
            <option value="三十一">三十一</option>
            <option value="三十二">三十二</option>
            <option value="三十三">三十三</option>
            <option value="三十四">三十四</option>
            <option value="三十五">三十五</option>
            <option value="三十六">三十六</option>
            <option value="三十七">三十七</option>
            <option value="三十八">三十八</option>
            <option value="三十九">三十九</option>
            <option value="四十">四十</option>
            <option value="四十一">四十一</option>
            <option value="四十二">四十二</option>
            <option value="四十三">四十三</option>
            <option value="四十四">四十四</option>
            <option value="四十五">四十五</option>
            <option value="四十六">四十六</option>
            <option value="四十七">四十七</option>
            <option value="四十八">四十八</option>
            <option value="四十九">四十九</option>
            <option value="五十">五十</option>
            <option value="五十一">五十一</option>
            <option value="五十二">五十二</option>
            <option value="五十三">五十三</option>
            <option value="五十四">五十四</option>
            <option value="五十五">五十五</option>
            <option value="五十六">五十六</option>
            <option value="五十七">五十七</option>
            <option value="五十八">五十八</option>
            <option value="五十九">五十九</option>
            <option value="六十">六十</option>
            <option value="六十一">六十一</option>
            <option value="六十二">六十二</option>
            <option value="六十三">六十三</option>
            <option value="六十四">六十四</option>
            <option value="六十五">六十五</option>
            <option value="六十六">六十六</option>
            <option value="六十七">六十七</option>
            <option value="六十八">六十八</option>
            <option value="六十九">六十九</option>
            <option value="七十">七十</option>
            <option value="七十一">七十一</option>
            <option value="七十二">七十二</option>
            <option value="七十三">七十三</option>
            <option value="七十四">七十四</option>
            <option value="七十五">七十五</option>
            <option value="七十六">七十六</option>
            <option value="七十七">七十七</option>
            <option value="七十八">七十八</option>
            <option value="七十九">七十九</option>
            <option value="八十">八十</option>
            <option value="八十一">八十一</option>
            <option value="八十二">八十二</option>
            <option value="八十三">八十三</option>
            <option value="八十四">八十四</option>
            <option value="八十五">八十五</option>
            <option value="八十六">八十六</option>
            <option value="八十七">八十七</option>
            <option value="八十八">八十八</option>
            <option value="八十九">八十九</option>
            <option value="九十">九十</option>
            <option value="九十一">九十一</option>
            <option value="九十二">九十二</option>
            <option value="九十三">九十三</option>
            <option value="九十四">九十四</option>
            <option value="九十五">九十五</option>
            <option value="九十六">九十六</option>
            <option value="九十七">九十七</option>
            <option value="九十八">九十八</option>
            <option value="九十九">九十九</option>
            <option value="一００">一００</option>
            <option value="一０一">一０一</option>
          </select>樓/地下層 之
          <input type="text" name="ttrg" size="4" class="txt" /></td>
        </tr>
      </table>
      <table id="left_tb4">
        <tr>
          <td align="center">
            <input type=SUBMIT value="立即檢索"/>
            <input type="reset" value="重新設定"/>
          </td>
        </tr>
      </table>
	  </form>
    </center>
  </body>
</html>
