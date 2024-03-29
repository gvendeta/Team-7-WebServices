<style>
    @import url("https://fonts.googleapis.com/css?family=Nunito&display=swap");

body {
  margin: 0;
  background-image: url();
}

* {
  box-sizing: border-box;
  transition: 0.4s ease all;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
}
ul {
  padding: 0;
  margin: 0;
}
.navbar {
  background: #080808;
  color: #fff;
  padding: 15px;
  width: 100%;
  height: 65px;
  display: flex;
  align-items: center;
}

.navbar .logo {
  cursor: pointer;
  font-family: "Lacquer";
}
.navbar ul.links {
  font-family: "Nunito";
  margin-left: auto;
  margin-right: 50px;
  list-style: none;
  display: flex;
  align-items: center;
  transition: 0.4s ease all, 0s ease background;
}
.navbar ul.links li {
  text-transform: uppercase;
  padding: 0 15px;
  height: 35px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.4s ease all, 0s ease margin;
}
.navbar ul.links li a {
  text-decoration: none;
  color: #fff;
}
.navbar ul.links li:hover {
  background: #7d2ae8;
  cursor: pointer;
}
.navbar ul.links li:hover a {
  color: #080808;
}
button {
  background: #7d2ae8;
  outline: none;
  font-weight: bold;
  padding: 10px 18px;
  border-radius: 25px;
  border: 1px solid #7d2ae8;
  letter-spacing: 1px;
}
button:hover {
  cursor: pointer;
  transform: scale(1.1);
  color: white;
  background: #222;
  border-color: #000;
}
.content {
  background-size: cover;
  height: calc(100vh - 65px);
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #fff;
}
.content h2 {
  color: #ffc600;
}
.navbar.sticky {
  position: fixed;
  z-index: 40;
}
.navbar.sticky ~ main {
  position: relative;
  z-index: 20;
  top: 65px;
}
section {
  background: #000;
  color: #ffc600;
  padding: 20px;
  font-family: "Lacquer";
  font-weight: bold;
  letter-spacing: 0.5px;
}
@media screen and (max-width: 850px) {
  .navbar .right {
    height: 0;
    overflow: hidden;
  }
  .toggle {
    position: absolute;
    top: 32.5px;
    right: 20px;
    z-index: 99;
    transform: translateY(-50%);
    cursor: pointer;
    width: 40px;
    height: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
  .toggle > * {
    width: 80%;
    height: 2px;
    background: #fff;
    margin: 3px 0;
  }
  .navbar.collapsed .toggle .line1 {
    transform: rotate(-45deg) translate(-4px, 5px);
  }
  .navbar.collapsed .toggle .line2 {
    opacity: 0;
  }
  .navbar.collapsed .toggle .line3 {
    transform: rotate(45deg) translate(-5px, -6px);
  }
  .navbar.collapsed .logo {
    position: absolute;
    z-index: 44;
  }
  .navbar .links {
    position: fixed;
    background: #080808;
    font-family: "Nunito";
    z-index: 40;
    top: 0;
    left: -100%;
    flex-direction: column;
    width: 45vw;
    height: 100vh;
  }
  .navbar .links li:first-child {
    margin-top: 80px;
  }
  .navbar.collapsed .links {
    left: 0;
  }
  .navbar.collapsed .links a {
    color: #fff;
  }
  .navbar.collapsed .links li {
    width: 100%;
  }
  .navbar.collapsed .links li:hover a {
    color: #080808;
  }
  .navbar.collapsed .right {
    position: fixed;
    font-family: "Nunito";
    width: 45vw;
    text-align: center;
    height: auto;
    bottom: 40px;
    left: 22.5vw;
    transform: translateX(-50%);
    z-index: 45;
  }
  .navbar.collapsed ~ main {
    filter: blur(1px);
    opacity: 0.8;
  }
  .navbar.sticky {
    position: fixed;
    z-index: 40;
  }
}
</style>
<script>
    const navbar = document.querySelector(".navbar");
        navbar.querySelector(".toggle").addEventListener("click", () => {
        navbar.classList.toggle("collapsed");
    });
    window.addEventListener("scroll", (e) => {
        let windowY = window.pageYOffset;
        let navbarHeight = document.querySelector(".navbar").offsetHeight;
        if (windowY > navbarHeight) navbar.classList.add("sticky");
        else navbar.classList.remove("sticky");
        });
</script>

<div id="nav-bar">
<div class="navbar">
  <div class="logo">
    <h2>GamerMatch</h2>
  </div>
  <ul class="links">
    <li><a href="../home.php">Home</a></li>
    <li><a href="../conversation/conversation.php">Messages</a></li>
    <li><a href="../PlayerMatch.php">Find Users</a></li>
    <li><a href="../settings.php">Profile</a></li>
  </ul>
  <div class="right">
   <form action="../logout.php">
    <button>Logout</button>
   </form>
  </div>
  <div class="toggle">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
</div>
    </div>

    
    