function initServerData(serverIp, serverPort) {
    function fetchData() {
        fetch('https://mcapi.us/server/query?ip=' + serverIp + '&port=' + serverPort)
            .then(response => response.json())
            .then(data => handleServerStatus(data))
            .catch(error => console.error('Error:', error));
    }

    function handleServerStatus(data) {
        const playerCounter = document.getElementById("player-count");
        if (data.status === 'error') {
            console.log(data.error);
            playerCounter.innerHTML = "offline";
        } else {
            playerCounter.innerHTML = data.players.now + " online";
        }
    }

    fetchData();
    setInterval(fetchData, 10000);
}

// tester
initServerData("play.nethergames.org", "19132");