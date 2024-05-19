
function initServerData(serverIp,serverPort){
    fetch('https://mcapi.us/server/status?ip='+serverIp+'&port='+serverPort)
    .then(response => response.json())
    .then(data => handleServerStatus(data));

    function handleServerStatus(data){
        if(data.status=='error'){
            console.log(data.error);
        const playerCounter = document.getElementById("player-count");
        playerCounter.innerHTML = "offline";
            return false;
        }
        const playerCounter = document.getElementById("player-count");
        playerCounter.innerHTML = data.players.now + " online";
    } 
}
// tester
initServerData("org.cosmosmc.org","19132");