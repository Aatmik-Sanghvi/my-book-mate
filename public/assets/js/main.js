// (function () {
//   "use strict";

//   // ==== Preloader
//   window.onload = function () {
//     window.setTimeout(fadeout, 500);
//   };

//   function fadeout() {
//     document.querySelector(".preloader").style.opacity = "0";
//     document.querySelector(".preloader").style.display = "none";
//   }

//   // ======= Sticky
//   window.onscroll = function () {
//     const header_navbar = document.querySelector(".navbar-area");
//     const sticky = header_navbar.offsetTop;
//     const logo = document.querySelector(".navbar-brand img");

//     if (window.pageYOffset > sticky) {
//       header_navbar.classList.add("sticky");
//       logo.removeAttribute('hidden');
//       logo.src = "assets/images/logo/logo.png";
//       document.querySelector(".navbar-brand p").setAttribute('hidden');
//     } else {
//       header_navbar.classList.remove("sticky");
//       logo.removeAttribute('hidden');
//       logo.src = "assets/images/logo/logo.png";
//       document.querySelector(".navbar-brand p").setAttribute('hidden');
//     }

//     // show or hide the back-top-top button
//     const backToTop = document.querySelector(".back-to-top");
//     if (
//       document.body.scrollTop > 50 ||
//       document.documentElement.scrollTop > 50
//     ) {
//       backToTop.style.display = "flex";
//     } else {
//       backToTop.style.display = "none";
//     }
//   };

//   // ==== for menu scroll
//   const pageLink = document.querySelectorAll(".page-scroll");

//   pageLink.forEach((elem) => {
//     elem.addEventListener("click", (e) => {
//       e.preventDefault();
//       document.querySelector(elem.getAttribute("href")).scrollIntoView({
//         behavior: "smooth",
//         offsetTop: 1 - 60,
//       });
//     });
//   });

//   // section menu active
//   function onScroll(event) {
//     const sections = document.querySelectorAll(".page-scroll");
//     const scrollPos =
//       window.pageYOffset ||
//       document.documentElement.scrollTop ||
//       document.body.scrollTop;

//     for (let i = 0; i < sections.length; i++) {
//       const currLink = sections[i];
//       const val = currLink.getAttribute("href");
//       const refElement = document.querySelector(val);
//       const scrollTopMinus = scrollPos + 73;
//       if (
//         refElement.offsetTop <= scrollTopMinus &&
//         refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
//       ) {
//         document.querySelector(".page-scroll").classList.remove("active");
//         currLink.classList.add("active");
//       } else {
//         currLink.classList.remove("active");
//       }
//     }
//   }

//   window.document.addEventListener("scroll", onScroll);

//   //===== close navbar-collapse when a  clicked
//   let navbarToggler = document.querySelector(".navbar-toggler");
//   const navbarCollapse = document.querySelector(".navbar-collapse");

//   document.querySelectorAll(".page-scroll").forEach((e) =>
//     e.addEventListener("click", () => {
//       navbarToggler.classList.remove("active");
//       navbarCollapse.classList.remove("show");
//     })
//   );
//   navbarToggler.addEventListener("click", function () {
//     navbarToggler.classList.toggle("active");
//   });

//   // ========= glightbox
//   const myGallery = GLightbox({
//     href: "https://www.youtube.com/watch?v=r44RKWyfcFw",
//     type: "video",
//     source: "youtube", //vimeo, youtube or local
//     width: 900,
//     autoplayVideos: true,
//   });

//   //====== counter up
//   const cu = new counterUp({
//     start: 0,
//     duration: 2000,
//     intvalues: true,
//     interval: 100,
//     append: "k",
//   });
//   cu.start();

//   //=====  WOW active
//   new WOW().init();

//   //=====  particles
//   if (document.getElementById("particles-1"))
//     particlesJS("particles-1", {
//       particles: {
//         number: {
//           value: 40,
//           density: {
//             enable: !0,
//             value_area: 4000,
//           },
//         },
//         color: {
//           value: ["#FFFFFF", "#FFFFFF", "#FFFFFF"],
//         },
//         shape: {
//           type: "circle",
//           stroke: {
//             width: 0,
//             color: "#fff",
//           },
//           polygon: {
//             nb_sides: 5,
//           },
//           image: {
//             src: "img/github.svg",
//             width: 33,
//             height: 33,
//           },
//         },
//         opacity: {
//           value: 0.15,
//           random: !0,
//           anim: {
//             enable: !0,
//             speed: 0.2,
//             opacity_min: 0.15,
//             sync: !1,
//           },
//         },
//         size: {
//           value: 50,
//           random: !0,
//           anim: {
//             enable: !0,
//             speed: 2,
//             size_min: 5,
//             sync: !1,
//           },
//         },
//         line_linked: {
//           enable: !1,
//           distance: 150,
//           color: "#ffffff",
//           opacity: 0.4,
//           width: 1,
//         },
//         move: {
//           enable: !0,
//           speed: 1,
//           direction: "top",
//           random: !0,
//           straight: !1,
//           out_mode: "out",
//           bounce: !1,
//           attract: {
//             enable: !1,
//             rotateX: 600,
//             rotateY: 600,
//           },
//         },
//       },
//       interactivity: {
//         detect_on: "canvas",
//         events: {
//           onhover: {
//             enable: !1,
//             mode: "bubble",
//           },
//           onclick: {
//             enable: !1,
//             mode: "repulse",
//           },
//           resize: !0,
//         },
//         modes: {
//           grab: {
//             distance: 400,
//             line_linked: {
//               opacity: 1,
//             },
//           },
//           bubble: {
//             distance: 250,
//             size: 0,
//             duration: 2,
//             opacity: 0,
//             speed: 3,
//           },
//           repulse: {
//             distance: 400,
//             duration: 0.4,
//           },
//           push: {
//             particles_nb: 4,
//           },
//           remove: {
//             particles_nb: 2,
//           },
//         },
//       },
//       retina_detect: !0,
//     });

//   if (document.getElementById("particles-2"))
//     particlesJS("particles-2", {
//       particles: {
//         number: {
//           value: 40,
//           density: {
//             enable: !0,
//             value_area: 4000,
//           },
//         },
//         color: {
//           value: ["#FFFFFF", "#FFFFFF", "#FFFFFF"],
//         },
//         shape: {
//           type: "circle",
//           stroke: {
//             width: 0,
//             color: "#fff",
//           },
//           polygon: {
//             nb_sides: 5,
//           },
//           image: {
//             src: "img/github.svg",
//             width: 33,
//             height: 33,
//           },
//         },
//         opacity: {
//           value: 0.15,
//           random: !0,
//           anim: {
//             enable: !0,
//             speed: 0.2,
//             opacity_min: 0.15,
//             sync: !1,
//           },
//         },
//         size: {
//           value: 50,
//           random: !0,
//           anim: {
//             enable: !0,
//             speed: 2,
//             size_min: 5,
//             sync: !1,
//           },
//         },
//         line_linked: {
//           enable: !1,
//           distance: 150,
//           color: "#ffffff",
//           opacity: 0.4,
//           width: 1,
//         },
//         move: {
//           enable: !0,
//           speed: 1,
//           direction: "top",
//           random: !0,
//           straight: !1,
//           out_mode: "out",
//           bounce: !1,
//           attract: {
//             enable: !1,
//             rotateX: 600,
//             rotateY: 600,
//           },
//         },
//       },
//       interactivity: {
//         detect_on: "canvas",
//         events: {
//           onhover: {
//             enable: !1,
//             mode: "bubble",
//           },
//           onclick: {
//             enable: !1,
//             mode: "repulse",
//           },
//           resize: !0,
//         },
//         modes: {
//           grab: {
//             distance: 400,
//             line_linked: {
//               opacity: 1,
//             },
//           },
//           bubble: {
//             distance: 250,
//             size: 0,
//             duration: 2,
//             opacity: 0,
//             speed: 3,
//           },
//           repulse: {
//             distance: 400,
//             duration: 0.4,
//           },
//           push: {
//             particles_nb: 4,
//           },
//           remove: {
//             particles_nb: 2,
//           },
//         },
//       },
//       retina_detect: !0,
//     });

// })();

(() => {
  "use strict";

  // ==== Preloader
  window.addEventListener("load", () => setTimeout(fadeout, 500));

  const fadeout = () => {
    const preloader = document.querySelector(".preloader");
    preloader.style.opacity = "0";
    preloader.style.display = "none";
  };

  // ======= Sticky Navbar
  window.addEventListener("scroll", () => {
    const headerNavbar = document.querySelector(".navbar-area");
    const sticky = headerNavbar.offsetTop;
    const logo = document.querySelector(".navbar-brand img");
    const logoText = document.querySelector(".navbar-brand p");

    if (window.pageYOffset > sticky) {
      headerNavbar.classList.add("sticky");
      logo.removeAttribute("hidden");
      logo.src = "assets/images/logo/logo.png";
      logoText.setAttribute("hidden", true);
    } else {
      headerNavbar.classList.remove("sticky");
      // logo.src = "assets/images/logo/logo.png";
      logo.setAttribute("hidden",true);
      logoText.removeAttribute("hidden");
    }

    // show or hide the back-to-top button
    const backToTop = document.querySelector(".back-to-top");
    backToTop.style.display =
      document.body.scrollTop > 50 || document.documentElement.scrollTop > 50
        ? "flex"
        : "none";
  });

  // ==== Smooth Scroll for Menu
  document.querySelectorAll(".page-scroll").forEach((elem) => {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      const targetElement = document.querySelector(elem.getAttribute("href"));
      targetElement.scrollIntoView({
        behavior: "smooth",
        block: "start",
        inline: "nearest",
      });
    });
  });

  // Section menu active on scroll
  const onScroll = () => {
    const sections = document.querySelectorAll(".page-scroll");
    const scrollPos =
      window.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop;

    sections.forEach((currLink) => {
      const refElement = document.querySelector(currLink.getAttribute("href"));
      const scrollTopMinus = scrollPos + 73;
      if (
        refElement.offsetTop <= scrollTopMinus &&
        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      ) {
        document.querySelector(".page-scroll.active")?.classList.remove("active");
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    });
  };
  document.addEventListener("scroll", onScroll);

  // Close navbar-collapse when a link is clicked
  const navbarToggler = document.querySelector(".navbar-toggler");
  const navbarCollapse = document.querySelector(".navbar-collapse");

  document.querySelectorAll(".page-scroll").forEach((e) =>
    e.addEventListener("click", () => {
      navbarToggler.classList.remove("active");
      navbarCollapse.classList.remove("show");
    })
  );
  navbarToggler.addEventListener("click", () => {
    navbarToggler.classList.toggle("active");
  });

  // ========= GLightbox Video
  const myGallery = GLightbox({
    href: "https://www.youtube.com/watch?v=r44RKWyfcFw",
    type: "video",
    source: "youtube", // Vimeo, YouTube, or local
    width: 900,
    autoplayVideos: true,
  });

  // ====== CounterUp Initialization
  const cu = new counterUp({
    start: 0,
    duration: 2000,
    intvalues: true,
    interval: 100,
    append: "k",
  });
  cu.start();

  // ===== WOW.js for animations
  new WOW().init();

  // ====== Particles Initialization
  const initParticles = (id, particleOptions) => {
    if (document.getElementById(id)) particlesJS(id, particleOptions);
  };

  const particleSettings = {
    particles: {
      number: { value: 40, density: { enable: true, value_area: 4000 } },
      color: { value: ["#FFFFFF", "#FFFFFF", "#FFFFFF"] },
      shape: {
        type: "circle",
        stroke: { width: 0, color: "#fff" },
        polygon: { nb_sides: 5 },
      },
      opacity: {
        value: 0.15,
        random: true,
        anim: { enable: true, speed: 0.2, opacity_min: 0.15, sync: false },
      },
      size: {
        value: 50,
        random: true,
        anim: { enable: true, speed: 2, size_min: 5, sync: false },
      },
      line_linked: {
        enable: false,
        distance: 150,
        color: "#ffffff",
        opacity: 0.4,
        width: 1,
      },
      move: {
        enable: true,
        speed: 1,
        direction: "top",
        random: true,
        straight: false,
        out_mode: "out",
        bounce: false,
        attract: { enable: false, rotateX: 600, rotateY: 600 },
      },
    },
    interactivity: {
      detect_on: "canvas",
      events: {
        onhover: { enable: false, mode: "bubble" },
        onclick: { enable: false, mode: "repulse" },
        resize: true,
      },
      modes: {
        grab: { distance: 400, line_linked: { opacity: 1 } },
        bubble: { distance: 250, size: 0, duration: 2, opacity: 0, speed: 3 },
        repulse: { distance: 400, duration: 0.4 },
        push: { particles_nb: 4 },
        remove: { particles_nb: 2 },
      },
    },
    retina_detect: true,
  };

  initParticles("particles-1", particleSettings);
  initParticles("particles-2", particleSettings);
})();
