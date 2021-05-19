
const gameLabelContainer = document.querySelector(".gameLabelContainer");
const body = document.body;

function disableLoginContainer(tabnum){
    document.getElementById("overlay").style.display = "none";
}

gameLabelContainer.addEventListener("click", function (e){ /*for the displaying of the game items*/

    const selected = e.target.closest(".gameLabel");
    if (!selected) return;
    const dataNum = selected.dataset.tab;
    
    const content = document.querySelectorAll(".inventoryBar");
    content.forEach((el) => el.classList.remove("activeTab"));

    
    document.querySelector(`.inventoryBar--${dataNum}`).className += " activeTab";
    switch(dataNum){
        case "1":
            body.style.backgroundImage = "url('../../../2/src/img/bg/warframe-min.png')";
            console.log("success bg");
            break;
        case "2":
            body.style.backgroundImage = "url('../../../2/src/img/bg/honkai-min.png')";
            console.log("success bg");
            break;
        case "3":
            body.style.backgroundImage = "url('../../../2/src/img/bg/dota-min.png')";
            console.log("success bg");
            break;
        case "4":
            body.style.backgroundImage = "url('../../../2/src/img/bg/csgo-min.jpg')";
            console.log("success bg");
            break;
        case "5":
            body.style.backgroundImage = "url('../../../2/src/img/bg/genshin-min.png')";
            console.log("success bg");
            break;
        case "6":
            body.style.backgroundImage = "url('../../../2/src/img/bg/rocketLeague-min.png')";
            console.log("success bg");
            break;
        case "7":
            body.style.backgroundImage = "url('../../../2/src/img/bg/valorant-min.png')";
            console.log("success bg");
            break;
        case "8":
            body.style.backgroundImage = "url('../../../2/src/img/bg/apex-min.jpg')";
            console.log("success bg");
            break;
        case "9":
            body.style.backgroundImage = "url('../../../2/src/img/bg/tf2-min.jpg')";
            console.log("success bg");
            break;
        case "10":
            body.style.backgroundImage = "url('../../../2/src/img/bg/pubg-min.jpg')";
            console.log("success bg");
            break;
        default:
            console.log("error bg");
            break;
    }
});