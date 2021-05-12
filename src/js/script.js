"use strict";

const gameLabelContainer = document.querySelector(".gameLabelContainer");


gameLabelContainer.addEventListener("click", function (e){


    var contentID;
    const selected = e.target.closest(".gameLabel");
    
    const content = document.querySelectorAll(".inventoryBar");
    for (let i = 0; i < content.length; i++) {  
        content[i].className = content[i].className.replace(" activeTab", ""); //remove active tabs over the .inventoryBars
    }

    
    document.querySelector(`.inventoryBar--${selected.dataset.tab}`).classList.add("activeTab");
}) 