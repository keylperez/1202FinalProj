"use strict";

function tabShow(tabID){
    var i, content;
  
    content = document.getElementsByClassName("inventoryBar");
    for (i = 0; i < content.length; i++) {
      content[i].className = content[i].className.replace(" activeTab", "");
    }
    document.getElementById(tabID).className+=" activeTab";
}
