(function() {
  window.addEventListener("DOMContentLoaded", function() {
    // *-------------------------------------------------------------------------------
    // 		  PAGE LOADED
    // -------------------------------------------------------------------------------*/
    Init();
  });

  // Debounce function - taken from https://gist.github.com/nmsdvid/8807205
  const debounceEvent = (callback, time = 20, interval) => (...args) =>
    clearTimeout(interval, (interval = setTimeout(callback, time, ...args)));

  function Init() {
    document.body.classList.add("loaded");
    const isHomePage = document.body.classList.contains("home");

    window.addEventListener("scroll", headerScroll);
    drawers();
    modal();
    smoothScrollPolyfill();
    inViewElements();
    ScrollToLink();
  }

  function inViewElements() {
    inView(".wp-block-column").on("enter", function(el) {
      el.classList.add("utl-Fade_In");
    });
  }

  function ScrollToLink() {
    const els = {
      header: document.querySelector(".header"),
      links: [].slice.call(document.querySelectorAll('a[href^="#"]'))
    };

    els.links.forEach(function(link) {
      const linkHref = link.getAttribute("href").slice(1);

      if (linkHref !== "") {
        link.addEventListener("click", function(e) {
          const linkEl = document.getElementById(linkHref);
          const linkElOffsetTop = offset(linkEl);

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
    const rect = el.getBoundingClientRect(),
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    return rect.top + scrollTop;
  }

  function drawers() {
    const els = {
      body: document.querySelector("body"),
      drawer: document.querySelector("[data-drawer]"),
      menuToggle: document.querySelector("[data-drawer-menu-toggle]"),
      closeButton: document.querySelector("[data-drawer-menu-close]"),
      overlay: document.querySelector("[data-drawers-overlay]")
    };

    els.menuToggle.addEventListener("click", function() {
      els.drawer.classList.add("drw-Drawer-active");
      els.body.classList.add("utl-DrawerActive");
    });

    els.closeButton.addEventListener("click", function() {
      els.drawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    });

    els.overlay.addEventListener("click", function() {
      els.drawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    });
  }

  const headerScroll = debounceEvent(function() {
    const header = document.querySelector(".hd-Header");

    let headerHeight = header.offsetHeight;

    if (
      document.body.scrollTop > headerHeight ||
      document.documentElement.scrollTop > headerHeight
    ) {
      if (!document.body.classList.contains("utl-HeaderScrolled")) {
        document.body.classList.add("utl-HeaderScrolled");
      }
    } else {
      if (document.body.classList.contains("utl-HeaderScrolled")) {
        document.body.classList.remove("utl-HeaderScrolled");
      }
    }
  });

  const modal = () => {
    const els = {
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

    els.modals.forEach(function(modal) {
      const modalName = modal.dataset.modal;
      const modalEls = {
        modalTriggers: [].slice.call(
          document.querySelectorAll("." + modalName + "-modal-trigger a")
        ),
        closeButton: modal.querySelector("[data-modal-close]")
      };

      modalEls.modalTriggers.forEach(function(modalTrigger) {
        modalTrigger.addEventListener("click", function() {
          modal.classList.add("mod-Modal-active");
          els.body.classList.add("utl-DrawerActive");
        });
      });

      modalEls.closeButton.addEventListener("click", function() {
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
