
<style>
    :root {
  --primaryColor: #7b68ee;
  --secondaryColor: #ff2770;
  --primaryTextColor: #dcf4ff;
  --secondaryTextColor: #c3b8ff;
  --bg: #292c30;
  --nav: #2e3440;
  --darkNavBg: #27292d;
}
::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
::-webkit-scrollbar-track {
  border-radius: 10px;
  background: linear-gradient(#212121, #323232);
  box-shadow: inset 0 0 0px 1px var(--primaryColor);
  width: 2px;
}
::-webkit-scrollbar-thumb {
  border-radius: 10px;
  background: var(--primaryColor);
  box-shadow: inset 0 0 1px 1px var(--secondaryTextColor);
}
::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(
    -45deg,
    var(--primaryColor),
    var(--secondaryColor)
  );
}
::-webkit-scrollbar-thumb:active {
  background: linear-gradient(
    45deg,
    var(--secondaryColor),
    var(--primaryColor)
  );
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scrollbar-width: thin;
  scroll-behavior: smooth;
  scrollbar-color: var(--primaryColor) var(--nav);
}

body {
  width: 100%;
  height: 100vh;
  background-color: var(--bg);
  color: var(--primaryTextColor);
  /* overflow: hidden; */
  font-family: "Poppins", sans-serif;
  height: 100vh;
  -webkit-font-smoothing: antialiased;
}

.nav-bar {
  width: 100%;
  height: 35px;
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--nav);
  padding: 2px 25px;
  display: flex;
  align-items: center;
  box-shadow: inset 0 1px 0px #444b57, 0 2px 0 #7b68ee,
    0 3px 12px rgba(0, 0, 0, 0.4);
  z-index: 99;
}

.nav-bar .toggle-menu {
  width: 26px;
  height: 26px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  border-radius: 3px;
}
.toggle-menu.active {
  background-color: var(--secondaryColor);
  box-shadow: inset 0 0 0 2px #ff528c;
}
.nav-bar .toggle-menu.active:hover {
  background-color: var(--secondaryColor);
  box-shadow: inset 0 0 0 2px #ff528c;
}
.nav-bar .toggle-menu:hover {
  background-color: var(--primaryColor);
  box-shadow: inset 0 0 0 2px #8d79ff;
}
.toggle-menu span {
  width: 18px;
  height: 2px;
  background-color: var(--primaryTextColor);
  margin: 2px;
}
.anim-bar {
  animation: animBar 0.5s ease;
}
@keyframes animBar {
  0% {
    width: 18px;
  }
  15% {
    width: 12px;
  }
  30% {
    width: 25px;
  }
  45% {
    width: 15px;
  }
  60% {
    width: 20px;
  }
  75% {
    width: 16px;
  }
  100% {
    width: 18px;
  }
}
.main {
  width: 100%;
  height: calc(100% - 35px);
  background-color: var(--darkNavBg);
  position: fixed;
  bottom: 0;
  overflow: auto;
}
.side-menu {
  width: 0;
  height: calc(100% - 33px);
  background-color: var(--primaryColor);
  border-right: 0px solid transparent;
  overflow: hidden;
  top: 40px;
  left: 0;
  padding-top: 15px;
  position: fixed;
  display: flex;
  flex-direction: column;
  overscroll-behavior: contain;
  overflow-y: auto;
  padding-bottom: 20px;
  top: 35px;
  transition: left 0.4s ease, border-radius 0.3s ease,
    clip-path 0.5s cubic-bezier(0.81, 0.51, 0.09, 1.05);
  -webkit-clip-path: circle(0% at 0 0);
  clip-path: circle(0% at 0 0);
}
.side-menu.resize {
  width: 250px;
  border-right: 2px solid var(--primaryColor);
  background-color: var(--darkNavBg);
  -webkit-clip-path: circle(141.4% at 0 0);
  clip-path: circle(141.4% at 0 0);
  transition: background-color 0.5s ease, border-radius 0.3s ease,
    clip-path 0.5s cubic-bezier(0.81, 0.51, 0.09, 1.05);
}
.side-menu .menu-items {
  padding: 0px 15px;
}
.side-menu a {
  position: relative;
  text-decoration: none;
  color: var(--secondaryTextColor);
  width: 100%;
  height: 35px;
  margin-top: 2px;
  padding: 10px 20px;
  border-radius: 35px;
  display: flex;
  align-items: center;
  font-size: 16px;
  font-weight: 600;
  -webkit-user-select: none;
  user-select: none;
  overflow: hidden;
  transition: color 0.2s ease;
}
.side-menu a:hover {
  color: var(--primaryTextColor);
}
.side-menu a.active {
  color: var(--primaryTextColor);
}

.side-menu a::after {
  content: "";
  position: absolute;
  left: 10px;
  bottom: 10px;
  width: 0%;
  height: 0px;
  background-color: var(--secondaryColor);
  border-radius: 35px;
  transition: width 0.2s ease, height 0.3s ease, border-radius 0.3s ease,
    transform 0.2s ease, background-color 0.3s ease-in;
  z-index: -1;
}
.side-menu a:hover::after {
  width: 70%;
  height: 10px;
  border-radius: 0;
  transform: skewX(-45deg);
  background-color: var(--primaryColor);
}
.side-menu a.active::after {
  background: linear-gradient(
    45deg,
    var(--secondaryColor),
    var(--primaryColor)
  );
  width: 100%;
  height: 100%;
  bottom: 0px;
  border-radius: 35px;
  left: 0;
  transform: skewX(0);
  animation: active 0.2s ease;
}

@keyframes active {
  0% {
    height: 6px;
    width: 70%;
    border-radius: 0;
  }
  70% {
    height: 6px;
    width: 100%;
    border-radius: 35px;
  }
  75%,
  100% {
    height: 100%;
  }
}

.content {
  width: 100%;
  padding: 15px;
  background-color: var(--bg);
  margin-bottom: 15px;
  overscroll-behavior: contain;
  padding-bottom: 20px;
  position: relative;
}
.content.resize {
  width: calc(100% - 252px);
  float: right;
}

.content h1 {
  color: var(--primaryColor);
  padding: 10px;
  padding-bottom: 25px;
  line-height: 1.3;
}

.content h2 {
  color: var(--primaryColor);
  padding: 10px 0px;
  line-height: 1.3;
}

.content p {
  color: var(--primaryTextColor);
  padding: 15px;
  padding-top: 0;
  text-indent: 40px;
  line-height: 1.3;
  text-align: justify;
  text-rendering: optimizeLegibility;
}
h1,
h2 {
  transition: color 0.2s ease-in-out;
}
h1:hover,
h2:hover {
  color: var(--secondaryColor);
}

.mobile-search {
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 25px;
  margin-bottom: 15px;
  border-bottom: 1px solid #444b57;
}
.mobile-search .search-form {
  width: auto;
  height: 34px;
  background-color: transparent;
  overflow: hidden;
  display: flex;
  justify-content: space-between;
  border: 0;
  border-radius: 6px;
  padding: 2px;
  display: flex;
  justify-content: center;
}
.search-form:hover .search-action {
  background-color: var(--secondaryColor);
}
.search-form:hover .search-input {
  border: 1px solid var(--secondaryColor);
}
.mobile-search .search-input {
  width: 75%;
  background-color: transparent;
  font-family: inherit;
  font-size: 14px;
  color: var(--secondaryTextColor);
  font-weight: 400;
  padding: 0 10px;
  outline: 0;
  border-radius: 5px 0px 0px 5px;
  border: 2px solid var(--primaryColor);
  transition: width 0.2s ease-in-out;
}
.search-input:focus {
  border: 1px solid var(--primaryColor);
  box-shadow: inset 0 0 5px #8773fc3b;
  width: 95%;
}
.search-input:focus:hover {
  border: 1px solid var(--primaryColor);
  box-shadow: inset 0 0 5px #8773fc3b;
}
.search-input:focus ~ .search-action {
  background-color: var(--primaryColor);
}
.mobile-search .search-action {
  background-color: var(--primaryColor);
  cursor: pointer;
  padding: 0 10px;
  border: 0;
  border-radius: 0px 5px 5px 0px;
}
.search-action:hover {
  background: var(--secondaryColor) !important;
}
.mobile-search .search-action::before {
  display: block;
  content: "";
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath d='M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.8675 18 18 14.8675 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18ZM19.4853 18.0711L22.3137 20.8995L20.8995 22.3137L18.0711 19.4853L19.4853 18.0711Z' fill='rgba(255,255,255,1)'%3E%3C/path%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-size: cover;
  width: 18px;
  height: 18px;
}
button,
input,
select,
textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
  border-radius: 0;
}

@media (max-width: 768px) {
  .side-menu.resize {
    width: 250px;
    left: 0;
    border-right: 2px solid var(--primaryColor);
    background-color: var(--darkNavBg);
    -webkit-clip-path: circle(141.4% at 0 0);
    clip-path: circle(141.4% at 0 0);
  }
  .side-menu {
    position: fixed;
    left: -250px;
    width: 0;
    z-index: 99;
  }

  .content.resize {
    width: 100%;
    float: none;
  }
}

/* ************************* */
.fllow {
  position: absolute;
  right: 20px;
  bottom: 30px;
  width: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.youtube-button,
.external-link-button {
  padding: 8px 8px;
  border-radius: 5px;
  background-color: #f2f2f2;
  color: #333;
  font-size: 20px;
  margin: 2px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}
.youtube-button:hover {
  background-color: #ca3333;
  color: #f2f2f2;
}
.external-link-button:hover {
  background-color: #0b63b6;
  color: #f2f2f2;
}

</style>
    <section class="admin_page">
    <div class="nav-bar">
  <div id="menuToggle" class="toggle-menu active">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
</div>

<div class="main">
  <div id="sideMenu" class="side-menu">
    <div class="mobile-search">
      <form class="search-form">
        <input autocomplete="off" class="search-input" placeholder="Search" type="search">
        <button class="search-action" type="submit" value=""></button>
      </form>
    </div>

    <div class="menu-items">
      <a href="index.php" class="item">Home</a>
      <a href="#" class="item">Dashboard</a>
      <a href="#" class="item">Porject</a>
      <a href="#" class="item">Earning</a>
      <a href="#" class="item">Report</a>
      <a href="#" class="item">Services</a>
      <a href="#" class="item active">About</a>
      <a href="#" class="item">Help</a>
      <a href="#" class="item">contact</a>
    </div>
  </div>

  <div class="content">
    <h1> Side Menu with CSS New new Unic Design</h1>
    <p>
      Welcome to our all-in-one business management platform that simplifies the way you run your operations.
      With a user-friendly interface and powerful features, you can streamline tasks, boost productivity, and
      focus on what matters most - growing your business. From project management to financial insights, we've
      got you covered. Our platform is designed to be intuitive and efficient, ensuring that you and your team
      can adapt quickly and make the most out of every opportunity. Say goodbye to juggling multiple tools and
      embrace a seamless experience that empowers you to take charge of your business with confidence.
    </p>

    <h2>Dashboard - Monitor Your Progress</h2>
    <p>
      Welcome to our user-friendly dashboard! Our platform provides you with a comprehensive overview of your projects,
      earnings, and services all in one place. With our intuitive design, you can easily track your progress and stay on top
      of your goals. Whether you're a freelancer, entrepreneur, or small business owner, this dashboard will be your go-to
      tool for efficient management and growth. Access real-time data, visualize trends, and make informed decisions to take
      your endeavors to the next level.
    </p>
    <h2>Project Management - Stay Organized and Productive</h2>
    <p>
      Manage your projects effortlessly using our powerful project management system. Create, assign, and track tasks with
      ease. Collaborate with team members and clients, ensuring everyone stays on the same page. From planning to execution,
      our platform streamlines the entire project lifecycle, making sure you deliver high-quality results on time. Take
      advantage of progress tracking, deadlines, and milestone achievements. Embrace the project management revolution and
      witness a new level of organization and productivity.
    </p>
    <h2>Earning and Service Insights - Boost Your Success</h2>
    <p>
      Your earnings and services are the heart of your business. With our detailed insights, you can analyze your income
      streams, identify trends, and uncover lucrative opportunities. Understanding your earning patterns will empower you to
      optimize your pricing, focus on high-demand services, and grow your revenue. Moreover, our platform offers valuable
      assistance in highlighting your key strengths, suggesting improvements, and guiding you on the path to success. Let our
      earning and service analytics become your most valuable allies on your journey towards prosperity.
    </p>
    <h2>Comprehensive Reports - Data at Your Fingertips</h2>
    <p>
      Accessing and understanding your performance is now easier than ever with our comprehensive reports. Generate detailed
      reports that provide in-depth analyses of your earnings, project milestones, and service utilization. These reports
      offer visual representations of your data, allowing you to quickly grasp your business's health and identify areas for
      improvement. Whether you need a monthly overview or a specific time frame, our reports can be customized to fit your
      needs. Stay informed, make data-driven decisions, and take charge of your business's growth with our powerful reporting
      feature.
    </p>
    <h2>Help and Support - We've Got Your Back</h2>
    <p>
      We understand that sometimes you might need a helping hand or have questions. That's why our dedicated support team is
      always ready to assist you. Whether you need technical guidance, have billing inquiries, or simply need advice on using
      our platform effectively, we're here to help. You can reach out to us through various channels, including live chat,
      email, or phone, and we'll promptly address your concerns. Your satisfaction and success are our top priorities, and our
      support team is committed to ensuring you have a seamless and productive experience with our platform.
    </p>
  </div>
</div>

<!-- ***************************** 
        Fllow
     *****************************-->
<div class="fllow">
  <a href="#" class="youtube-button" title="Watch on Youtube">
    <i class="ri-youtube-fill"></i>
  </a>
  <a href="#" class="external-link-button" title="See More">
    <i class="ri-external-link-fill"></i>
  </a>
</div>
    </section>
    <script>
        const toggleMenu = document.getElementById("menuToggle");
const sideMenu = document.getElementById("sideMenu");
const content = document.querySelector(".content");
const bars = document.querySelectorAll(".bar");
const menuItems = document.querySelectorAll(".menu-items .item");

toggleMenu.addEventListener("click", () => {
  sideMenu.classList.toggle("resize");
  content.classList.toggle("resize");
  toggleMenu.classList.toggle("active");

  bars.forEach((bar) => {
    bar.classList.add("anim-bar");
    setTimeout(() => {
      bar.classList.remove("anim-bar");
    }, 1000);
  });
});
setTimeout(() => {
  sideMenu.classList.add("resize");
  content.classList.add("resize");
  toggleMenu.classList.add("active");
  bar.classList.add("anim-bar");
}, 1000);

menuItems.forEach(function (item) {
  item.addEventListener("click", function (event) {
    event.preventDefault(); // Prevent the default link behavior

    menuItems.forEach(function (item) {
      item.classList.remove("active");
    });

    this.classList.add("active");
  });
});

    </script>