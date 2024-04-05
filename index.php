<!DOCTYPE html>
<html lang="en">

<head>
    <title>User - Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2 class="name"> CruZ </h2>
        <div class="navi">
            <a href="#">Home</a>
            <a href="#">Contact</a>
            <a href="#">Services</a>
            <a href="#">About</a>
        </div>
        <div class="sign-in-up">
            <button class="btn1" onclick="showModal()">Login</button>
            <button class="btn2" onclick="showModale()">Register</button>
        </div>
    </div>
    <div class="oberlay" onclick="closeModal()"></div>
    <div class="loginform">
        <span class="cross" onclick="closeModal()">&times</span>
        <form action="">
            <div>
                <label for="">E-mail</label>
                <input class="inpt" type="email" />
            </div>
            <div>
                <label for="">Password</label>
                <input class="inpt" type="password" />
            </div>
            <button class="logbtn1">LOGIN</button>
        </form>
    </div>
    <div class="overlay" onclick="removeModale()"></div>
    <div class="registerform">
        <span class="crosses" onclick="removeModale()">&times</span>
        <form action="" class="formrad">
            <div>
                <label for="">Full Name</label>
                <input class="inpt" type="text" />
            </div>
            <div>
                <label for="">Username</label>
                <input class="inpt" type="Username" />
            </div>
            <div>
                <label for="">E-mail</label>
                <input class="inpt" type="E-mail" />
            </div>
            <div>
                <label for="">Password</label>
                <input class="inpt" type="password" />
            </div>
            <button class="logbtn2">LOGIN</button>
        </form>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
<script>
    function showModal() {
        document.querySelector('.oberlay').classList.add('showoberlay');
        document.querySelector('.loginform').classList.add('showloginform');
    }
    function closeModal() {
        document.querySelector('.oberlay').classList.remove('showoberlay');
        document.querySelector('.loginform').classList.remove('showloginform');
    }

</script>
<script>
    function showModale() {
        document.querySelector('.overlay').classList.add('showoverlay');
        document.querySelector('.registerform').classList.add('showregisterform');
    }
    function removeModale() {
        document.querySelector('.overlay').classList.remove('showoverlay');
        document.querySelector('.registerform').classList.remove('showregisterform');
    }

</script>

</html>