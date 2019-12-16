"use strict";

(function () {
  window.addEventListener("DOMContentLoaded", function () {
    // *-------------------------------------------------------------------------------
    // 		  PAGE LOADED
    // -------------------------------------------------------------------------------*/
    Init();
  });

  // Debounce function - taken from https://gist.github.com/nmsdvid/8807205
  var debounceEvent = function debounceEvent(callback) {
    var time = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 50;
    var interval = arguments[2];
    return function () {
      for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
        args[_key] = arguments[_key];
      }

      return clearTimeout(interval, interval = setTimeout.apply(undefined, [callback, time].concat(args)));
    };
  };

  function Init() {
    document.body.classList.add("loaded");
    var isHomePage = document.body.classList.contains("home");

    window.addEventListener("scroll", headerScroll);
    drawers();
    modal();
    smoothScrollPolyfill();
    inViewElements();
    ScrollToLink();
  }

  function inViewElements() {
    inView(".wp-block-column").on("enter", function (el) {
      el.classList.add("utl-Fade_In");
    });
  }

  function ScrollToLink() {
    var els = {
      header: document.querySelector(".header"),
      links: [].slice.call(document.querySelectorAll('a[href^="#"]'))
    };

    els.links.forEach(function (link) {
      var linkHref = link.getAttribute("href").slice(1);

      if (linkHref !== "") {
        link.addEventListener("click", function (e) {
          var linkEl = document.getElementById(linkHref);
          var linkElOffsetTop = offset(linkEl);

          e.preventDefault();

          ScrollTo(linkElOffsetTop - 115);
        });
      }
    });
  }

  function ScrollTo(offsetTop) {
    window.scroll({
      behavior: "smooth",
      left: 0,
      top: offsetTop
    });
  }

  function offset(el) {
    var rect = el.getBoundingClientRect(),
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return rect.top + scrollTop;
  }

  function drawers() {
    var els = {
      body: document.querySelector("body"),
      drawer: document.querySelector("[data-drawer]"),
      menuToggle: document.querySelector("[data-drawer-menu-toggle]"),
      closeButton: document.querySelector("[data-drawer-menu-close]"),
      overlay: document.querySelector("[data-drawers-overlay]")
    };

    els.menuToggle.addEventListener("click", function () {
      els.drawer.classList.add("drw-Drawer-active");
      els.body.classList.add("utl-DrawerActive");
    });

    els.closeButton.addEventListener("click", function () {
      els.drawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    });

    els.overlay.addEventListener("click", function () {
      els.drawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    });
  }

  var headerScroll = debounceEvent(function () {
    var header = document.querySelector(".hd-Header");

    var headerHeight = header.offsetHeight;

    if (document.body.scrollTop > headerHeight || document.documentElement.scrollTop > headerHeight) {
      if (!document.body.classList.contains("utl-HeaderScrolled")) {
        document.body.classList.add("utl-HeaderScrolled");
      }
    } else {
      if (document.body.classList.contains("utl-HeaderScrolled")) {
        document.body.classList.remove("utl-HeaderScrolled");
      }
    }
  });

  var modal = function modal() {
    var els = {
      body: document.body,
      modals: [].slice.call(document.querySelectorAll("[data-modal]"))
      // modal: document.querySelector("[data-modal]"),
      // modalTriggers: [].slice.call(
      //   document.querySelectorAll(".modal-trigger a")
      // ),
      // modalClose: document.querySelector("[data-modal-close]")
    };

    // els.modalTriggers.forEach(trigger => {
    //   trigger.addEventListener("click", e => {
    //     e.preventDefault();
    //     els.modal.classList.add("mod-Modal-active");
    //     document.body.classList.add("utl-DrawerActive");
    //   });
    // });

    els.modals.forEach(function (modal) {
      var modalName = modal.dataset.modal;
      var modalEls = {
        modalTriggers: [].slice.call(document.querySelectorAll("." + modalName + "-modal-trigger a")),
        closeButton: modal.querySelector("[data-modal-close]")
      };

      modalEls.modalTriggers.forEach(function (modalTrigger) {
        modalTrigger.addEventListener("click", function () {
          modal.classList.add("mod-Modal-active");
          els.body.classList.add("utl-DrawerActive");
        });
      });

      modalEls.closeButton.addEventListener("click", function () {
        modal.classList.remove("mod-Modal-active");
        els.body.classList.remove("utl-DrawerActive");
      });
    });

    // els.modalClose.addEventListener("click", e => {
    //   els.modal.classList.remove("mod-Modal-active");
    //   document.body.classList.remove("utl-DrawerActive");
    // });
  };
})();
