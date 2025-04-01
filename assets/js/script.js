document.addEventListener('DOMContentLoaded', function () {
  const server = {
    address: 'mc.hallux-survival.my.id',
    port: 25654,
  };

  const address = document.getElementById('address');
  const port = document.getElementById('port');
  address.innerText = server.address;
  port.innerText = server.port;

  initServerData(server.address, server.port);
});

function initServerData(ip, port) {
  function fetchData() {
    fetch('https://api.mcstatus.io/v2/status/bedrock/' + ip + ':' + port)
    .then(response => response.json())
    .then(data => handleServerStatus(data))
    .catch(error => console.error('Error', error));
  }

  function handleServerStatus(data) {
    const serverStatus = document.getElementById('status');
    const serverOnline = document.getElementById('online');

    if(data.online == false) {
      serverOnline.innerHTML = '-';
      serverStatus.innerHTML = '<div class="offline">Offline</div>';
    } else {
      serverStatus.innerHTML = '<div class="online">Online</div>';
      serverOnline.innerHTML = data.players.online + "";
    }
  }

  fetchData();
  setInterval(fetchData, 10000);
}

const menuIcon = document.getElementById('menu-icon');
const menuList = document.getElementById('menu-list');

menuIcon.addEventListener('click', function () {
  menuList.classList.toggle('hidden');
});