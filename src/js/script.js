

const gameLabelContainer = document.querySelector(".gameLabelContainer");


gameLabelContainer.addEventListener("click", function (e){


    var i, content, contentID;
    const selected = e.target.closest(".gameLabel");


    content = document.getElementsByClassName("inventoryBar");
    for (i = 0; i < content.length; i++) {
      content[i].className = content[i].className.replace(" activeTab", ""); //remove active tabs over the .inventoryBars
    }

    document.querySelector(
        `.inventoryBar--${selected.dataset.tab}`
        ).className += " activeTab";
})