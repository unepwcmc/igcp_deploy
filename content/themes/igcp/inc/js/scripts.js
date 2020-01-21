(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = caseStudyNav;

function caseStudyNav() {
  var els = {
    navlist: document.querySelector('.cst-Nav_Items'),
    headings: Array.prototype.slice.call(document.querySelectorAll("h4[id]"))
  };
  els.headings.forEach(function (heading) {
    var title = heading.textContent;
    var listItem = document.createElement('li');
    listItem.classList.add('cst-Nav_Item');
    var listItemLink = document.createElement('a');
    listItem.append(listItemLink);
    listItemLink.textContent = heading.textContent;
    listItemLink.classList.add('cst-Nav_Link');
    listItemLink.setAttribute('href', "#".concat(heading.id));
    els.navlist.append(listItem);
  });
}

},{}],2:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = drawers;

function drawers() {
  var els = {
    body: document.querySelector("body"),
    drawers: [].slice.call(document.querySelectorAll("[data-drawer]")),
    overlay: document.querySelector('.drw-Drawers_Overlay'),
    hasChildren: Array.prototype.slice.call(document.querySelectorAll("[data-drawer] .menu-item-has-children"))
  };
  els.overlay.addEventListener('click', function (e) {
    var activeDrawer = document.querySelector('.drw-Drawer-active');

    if (activeDrawer) {
      activeDrawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    }
  });
  els.drawers.forEach(function (drawer) {
    var drawerName = drawer.dataset.drawer;
    var drawerEls = {
      menuToggle: document.querySelector("[data-drawer-toggle=\"".concat(drawerName, "\"]")),
      closeButton: drawer.querySelector("[data-drawer-menu-close]")
    };

    if (drawerEls.menuToggle) {
      drawerEls.menuToggle.addEventListener("click", function () {
        drawer.classList.add("drw-Drawer-active");
        els.body.classList.add("utl-DrawerActive");
      });
      drawerEls.closeButton.addEventListener("click", function () {
        drawer.classList.remove("drw-Drawer-active");
        els.body.classList.remove("utl-DrawerActive");
      });

      if (drawerName == 'filter') {
        drawer.querySelector('.drw-Drawer_Submit').addEventListener('click', function (e) {
          e.preventDefault();
          drawer.querySelector('form.searchandfilter').submit();
        });
      }
    }
  });
  els.hasChildren.forEach(function (item) {
    item.addEventListener('click', function (e) {
      // Grab blocks
      var openItem = document.querySelector('[data-drawer] .menu-item-has-children.open');
      var currentItem = e.target; // Check if openitem exists
      // Remove from open item if exists

      if (openItem) {
        // If open item is clicked item
        if (openItem == currentItem) {
          // Add remove open class
          currentItem.classList.remove('open');
        } else {
          // Remove open class from open item
          openItem.classList.remove('open'); // Add open class to clicked item

          currentItem.classList.add('open');
        }
      } else {
        // Add open class to current item
        currentItem.classList.add('open');
      }
    });
    Array.prototype.slice.call(item.querySelectorAll("a")).forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.stopPropagation();
      });
    });
  });
}

},{}],3:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = modal;

function modal() {
  var els = {
    body: document.body,
    modals: [].slice.call(document.querySelectorAll("[data-modal]")) // modal: document.querySelector("[data-modal]"),
    // modalTriggers: [].slice.call(
    //   document.querySelectorAll(".modal-trigger a")
    // ),
    // modalClose: document.querySelector("[data-modal-close]")

  }; // els.modalTriggers.forEach(trigger => {
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
      closeButtons: Array.prototype.slice.call(modal.querySelectorAll("[data-modal-close]")),
      modalName: modal.querySelector('[data-modal-name]'),
      modalJobTitle: modal.querySelector('[data-modal-jobtitle]'),
      modalBio: modal.querySelector('[data-modal-bio]'),
      modalEmail: modal.querySelector('[data-modal-email]'),
      modalEmailText: modal.querySelector('[data-modal-email] span'),
      modalLocation: modal.querySelector('[data-modal-location]'),
      modalLocationText: modal.querySelector('[data-modal-location] span'),
      modalImage: modal.querySelector('[data-modal-image]')
    };
    modalEls.modalTriggers.forEach(function (modalTrigger) {
      modalTrigger.addEventListener("click", function (e) {
        e.preventDefault();
        modal.classList.add("mod-Modal-active"); // els.body.classList.add("utl-DrawerActive");
        // When the modal is shown, we want a fixed body

        console.log("Modal showing: ", "-".concat(window.scrollY, "px"));
        document.body.style.top = "-".concat(window.scrollY, "px");
        document.body.style.position = 'fixed';
        console.log("Modal shown: ", "-".concat(window.scrollY, "px"));
        var card = this.parentElement;

        if (modalName == 'team') {
          var memberData = {
            name: card.querySelector('[data-member-name]').textContent,
            jobtitle: card.querySelector('[data-member-jobtitle]').textContent,
            bio: card.querySelector('[data-member-bio]').innerHTML,
            email: card.querySelector('[data-member-email]').textContent,
            location: card.querySelector('[data-member-location]').textContent,
            image: card.querySelector('[data-member-image] img').getAttribute('src')
          };
          modalEls.modalName.textContent = memberData.name;
          modalEls.modalJobTitle.textContent = memberData.jobtitle;
          modalEls.modalBio.innerHTML = memberData.bio;

          if (memberData.email != '') {
            modalEls.modalEmail.classList.add('show');
            modalEls.modalEmailText.textContent = memberData.email;
          } else {
            modalEls.modalEmail.classList.remove('show');
            modalEls.modalEmailText.textContent = '';
          }

          if (memberData.location != '') {
            modalEls.modalLocation.classList.add('show');
            modalEls.modalLocationText.textContent = memberData.location;
          } else {
            modalEls.modalLocation.classList.remove('show');
            modalEls.modalLocationText.textContent = '';
          }

          modalEls.modalImage.setAttribute('src', memberData.image);
        }
      });
    });
    modalEls.closeButtons.forEach(function (closeButton) {
      closeButton.addEventListener("click", function () {
        modal.classList.remove("mod-Modal-active"); // els.body.classList.remove("utl-DrawerActive");
        // When the modal is hidden...

        var scrollY = document.body.style.top;
        document.body.style.position = '';
        document.body.style.top = '';
        window.scrollTo(0, parseInt(scrollY || '0') * -1);
        console.log("Modal hidden: ", parseInt(scrollY || '0') * -1);
      });
    });
  }); // els.modalClose.addEventListener("click", e => {
  //   els.modal.classList.remove("mod-Modal-active");
  //   document.body.classList.remove("utl-DrawerActive");
  // });
}

},{}],4:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = searchbar;

function searchbar() {
  var els = {
    searchBar: document.querySelector(".hd-Header [data-searchbar]"),
    searchBarToggle: document.querySelector(".hd-Header [data-searchbar-toggle]"),
    searchForm: document.getElementById('searchform')
  };
  els.searchBarToggle.addEventListener('click', function (e) {
    els.searchBar.classList.toggle('hd-Search_Bar-active');

    if (els.searchBar.classList.contains('hd-Search_Bar-active')) {
      els.searchBar.querySelector('.hd-Search_Input').focus();
    }
  });
  els.searchBar.addEventListener('keydown', function (e) {
    if (event.which == 13 || event.keyCode == 13) {
      els.searcForm.submit();
    }
  });
}

},{}],5:[function(require,module,exports){
"use strict";

var _objectFitImages = _interopRequireDefault(require("object-fit-images"));

require("./vendor");

var _utilities = require("./utilities");

var _smoothscrollPolyfill = _interopRequireDefault(require("./utilities/smoothscroll-polyfill"));

var _caseStudyNav = _interopRequireDefault(require("./modules/caseStudyNav"));

var _drawers = _interopRequireDefault(require("./modules/drawers"));

var _modal = _interopRequireDefault(require("./modules/modal"));

var _searchbar = _interopRequireDefault(require("./modules/searchbar"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

(function () {
  window.addEventListener("DOMContentLoaded", function () {
    Init();
  }); // Debounce function - taken from https://gist.github.com/nmsdvid/8807205

  var debounceEvent = function debounceEvent(callback) {
    var time = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 20;
    var interval = arguments.length > 2 ? arguments[2] : undefined;
    return function () {
      for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
        args[_key] = arguments[_key];
      }

      return clearTimeout(interval, interval = setTimeout.apply(void 0, [callback, time].concat(args)));
    };
  };

  function Init() {
    document.body.classList.add("loaded");
    var isHomePage = document.body.classList.contains("home");
    var isCaseStudy = document.body.classList.contains("page-template-page-casestudy");

    if (isCaseStudy) {
      (0, _caseStudyNav.default)();
      caseStudyNavScroll();
      window.addEventListener("scroll", caseStudyNavScroll);
    }

    headerScroll();
    window.addEventListener("scroll", headerScroll);
    (0, _drawers.default)();
    (0, _modal.default)();
    (0, _searchbar.default)();
    (0, _smoothscrollPolyfill.default)();
    (0, _utilities.scrollToLink)();
    (0, _objectFitImages.default)();
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
  }); // For navigation under hero on Case Study pages

  var caseStudyNavScroll = debounceEvent(function () {
    var header = document.querySelector(".hd-Header");
    var hero = document.querySelector(".cst-Hero");
    var nav = document.querySelector(".cst-Hero_Nav");
    var headerHeight = header.offsetHeight;
    var heroHeight = hero.offsetHeight;
    var heroOffsetTop = hero.offsetTop + heroHeight - headerHeight;

    if (document.body.scrollTop > heroOffsetTop || document.documentElement.scrollTop > heroOffsetTop) {
      nav.classList.add("cst-Hero_Nav-fixed");
    } else {
      nav.classList.remove("cst-Hero_Nav-fixed");
    }
  });
})();

},{"./modules/caseStudyNav":1,"./modules/drawers":2,"./modules/modal":3,"./modules/searchbar":4,"./utilities":6,"./utilities/smoothscroll-polyfill":7,"./vendor":9,"object-fit-images":11}],6:[function(require,module,exports){
"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.offset = offset;
exports.scrollTo = scrollTo;
exports.scrollToLink = scrollToLink;

function offset(el) {
  var rect = el.getBoundingClientRect(),
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return rect.top + scrollTop;
}

function scrollTo(offsetTop) {
  window.scroll({
    behavior: "smooth",
    left: 0,
    top: offsetTop
  });
}

function scrollToLink() {
  var els = {
    links: [].slice.call(document.querySelectorAll('a[href^="#"]'))
  }; // If using case study page template, then need to equate for case study nav bar

  var isCaseStudy = document.body.classList.contains("page-template-page-casestudy");
  var headerHeight = document.querySelector('.hd-Header').offsetHeight;
  els.links.forEach(function (link) {
    var linkHref = link.getAttribute("href").slice(1);

    if (linkHref !== "") {
      link.addEventListener("click", function (e) {
        var linkEl = document.getElementById(linkHref);
        var linkElOffsetTop = offset(linkEl);
        var adminBar = document.body.classList.contains('admin-bar');
        e.preventDefault();

        if (isCaseStudy) {
          var navHeight = document.querySelector('.cst-Nav').offsetHeight;

          if (adminBar) {
            scrollTo(linkElOffsetTop - headerHeight - navHeight - 20);
          } else {
            scrollTo(linkElOffsetTop - headerHeight - navHeight + 10);
          }
        } else {
          scrollTo(linkElOffsetTop - headerHeight);
        }
      });
    } else {
      link.addEventListener("click", function (e) {
        e.preventDefault();
        scrollTo(0);
      });
    }
  });
}

},{}],7:[function(require,module,exports){
'use strict'; // polyfill

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = smoothScrollPolyfill;

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function smoothScrollPolyfill() {
  // aliases
  var w = window;
  var d = document; // return if scroll behavior is supported and polyfill is not forced

  if ('scrollBehavior' in d.documentElement.style && w.__forceSmoothScrollPolyfill__ !== true) {
    return;
  } // globals


  var Element = w.HTMLElement || w.Element;
  var SCROLL_TIME = 468; // object gathering original scroll methods

  var original = {
    scroll: w.scroll || w.scrollTo,
    scrollBy: w.scrollBy,
    elementScroll: Element.prototype.scroll || scrollElement,
    scrollIntoView: Element.prototype.scrollIntoView
  }; // define timing method

  var now = w.performance && w.performance.now ? w.performance.now.bind(w.performance) : Date.now;
  /**
   * indicates if a the current browser is made by Microsoft
   * @method isMicrosoftBrowser
   * @param {String} userAgent
   * @returns {Boolean}
   */

  function isMicrosoftBrowser(userAgent) {
    var userAgentPatterns = ['MSIE ', 'Trident/', 'Edge/'];
    return new RegExp(userAgentPatterns.join('|')).test(userAgent);
  }
  /*
   * IE has rounding bug rounding down clientHeight and clientWidth and
   * rounding up scrollHeight and scrollWidth causing false positives
   * on hasScrollableSpace
   */


  var ROUNDING_TOLERANCE = isMicrosoftBrowser(w.navigator.userAgent) ? 1 : 0;
  /**
   * changes scroll position inside an element
   * @method scrollElement
   * @param {Number} x
   * @param {Number} y
   * @returns {undefined}
   */

  function scrollElement(x, y) {
    this.scrollLeft = x;
    this.scrollTop = y;
  }
  /**
   * returns result of applying ease math function to a number
   * @method ease
   * @param {Number} k
   * @returns {Number}
   */


  function ease(k) {
    return 0.5 * (1 - Math.cos(Math.PI * k));
  }
  /**
   * indicates if a smooth behavior should be applied
   * @method shouldBailOut
   * @param {Number|Object} firstArg
   * @returns {Boolean}
   */


  function shouldBailOut(firstArg) {
    if (firstArg === null || _typeof(firstArg) !== 'object' || firstArg.behavior === undefined || firstArg.behavior === 'auto' || firstArg.behavior === 'instant') {
      // first argument is not an object/null
      // or behavior is auto, instant or undefined
      return true;
    }

    if (_typeof(firstArg) === 'object' && firstArg.behavior === 'smooth') {
      // first argument is an object and behavior is smooth
      return false;
    } // throw error when behavior is not supported


    throw new TypeError('behavior member of ScrollOptions ' + firstArg.behavior + ' is not a valid value for enumeration ScrollBehavior.');
  }
  /**
   * indicates if an element has scrollable space in the provided axis
   * @method hasScrollableSpace
   * @param {Node} el
   * @param {String} axis
   * @returns {Boolean}
   */


  function hasScrollableSpace(el, axis) {
    if (axis === 'Y') {
      return el.clientHeight + ROUNDING_TOLERANCE < el.scrollHeight;
    }

    if (axis === 'X') {
      return el.clientWidth + ROUNDING_TOLERANCE < el.scrollWidth;
    }
  }
  /**
   * indicates if an element has a scrollable overflow property in the axis
   * @method canOverflow
   * @param {Node} el
   * @param {String} axis
   * @returns {Boolean}
   */


  function canOverflow(el, axis) {
    var overflowValue = w.getComputedStyle(el, null)['overflow' + axis];
    return overflowValue === 'auto' || overflowValue === 'scroll';
  }
  /**
   * indicates if an element can be scrolled in either axis
   * @method isScrollable
   * @param {Node} el
   * @param {String} axis
   * @returns {Boolean}
   */


  function isScrollable(el) {
    var isScrollableY = hasScrollableSpace(el, 'Y') && canOverflow(el, 'Y');
    var isScrollableX = hasScrollableSpace(el, 'X') && canOverflow(el, 'X');
    return isScrollableY || isScrollableX;
  }
  /**
   * finds scrollable parent of an element
   * @method findScrollableParent
   * @param {Node} el
   * @returns {Node} el
   */


  function findScrollableParent(el) {
    while (el !== d.body && isScrollable(el) === false) {
      el = el.parentNode || el.host;
    }

    return el;
  }
  /**
   * self invoked function that, given a context, steps through scrolling
   * @method step
   * @param {Object} context
   * @returns {undefined}
   */


  function step(context) {
    var time = now();
    var value;
    var currentX;
    var currentY;
    var elapsed = (time - context.startTime) / SCROLL_TIME; // avoid elapsed times higher than one

    elapsed = elapsed > 1 ? 1 : elapsed; // apply easing to elapsed time

    value = ease(elapsed);
    currentX = context.startX + (context.x - context.startX) * value;
    currentY = context.startY + (context.y - context.startY) * value;
    context.method.call(context.scrollable, currentX, currentY); // scroll more if we have not reached our destination

    if (currentX !== context.x || currentY !== context.y) {
      w.requestAnimationFrame(step.bind(w, context));
    }
  }
  /**
   * scrolls window or element with a smooth behavior
   * @method smoothScroll
   * @param {Object|Node} el
   * @param {Number} x
   * @param {Number} y
   * @returns {undefined}
   */


  function smoothScroll(el, x, y) {
    var scrollable;
    var startX;
    var startY;
    var method;
    var startTime = now(); // define scroll context

    if (el === d.body) {
      scrollable = w;
      startX = w.scrollX || w.pageXOffset;
      startY = w.scrollY || w.pageYOffset;
      method = original.scroll;
    } else {
      scrollable = el;
      startX = el.scrollLeft;
      startY = el.scrollTop;
      method = scrollElement;
    } // scroll looping over a frame


    step({
      scrollable: scrollable,
      method: method,
      startTime: startTime,
      startX: startX,
      startY: startY,
      x: x,
      y: y
    });
  } // ORIGINAL METHODS OVERRIDES
  // w.scroll and w.scrollTo


  w.scroll = w.scrollTo = function () {
    // avoid action when no arguments are passed
    if (arguments[0] === undefined) {
      return;
    } // avoid smooth behavior if not required


    if (shouldBailOut(arguments[0]) === true) {
      original.scroll.call(w, arguments[0].left !== undefined ? arguments[0].left : _typeof(arguments[0]) !== 'object' ? arguments[0] : w.scrollX || w.pageXOffset, // use top prop, second argument if present or fallback to scrollY
      arguments[0].top !== undefined ? arguments[0].top : arguments[1] !== undefined ? arguments[1] : w.scrollY || w.pageYOffset);
      return;
    } // LET THE SMOOTHNESS BEGIN!


    smoothScroll.call(w, d.body, arguments[0].left !== undefined ? ~~arguments[0].left : w.scrollX || w.pageXOffset, arguments[0].top !== undefined ? ~~arguments[0].top : w.scrollY || w.pageYOffset);
  }; // w.scrollBy


  w.scrollBy = function () {
    // avoid action when no arguments are passed
    if (arguments[0] === undefined) {
      return;
    } // avoid smooth behavior if not required


    if (shouldBailOut(arguments[0])) {
      original.scrollBy.call(w, arguments[0].left !== undefined ? arguments[0].left : _typeof(arguments[0]) !== 'object' ? arguments[0] : 0, arguments[0].top !== undefined ? arguments[0].top : arguments[1] !== undefined ? arguments[1] : 0);
      return;
    } // LET THE SMOOTHNESS BEGIN!


    smoothScroll.call(w, d.body, ~~arguments[0].left + (w.scrollX || w.pageXOffset), ~~arguments[0].top + (w.scrollY || w.pageYOffset));
  }; // Element.prototype.scroll and Element.prototype.scrollTo


  Element.prototype.scroll = Element.prototype.scrollTo = function () {
    // avoid action when no arguments are passed
    if (arguments[0] === undefined) {
      return;
    } // avoid smooth behavior if not required


    if (shouldBailOut(arguments[0]) === true) {
      // if one number is passed, throw error to match Firefox implementation
      if (typeof arguments[0] === 'number' && arguments[1] === undefined) {
        throw new SyntaxError('Value could not be converted');
      }

      original.elementScroll.call(this, // use left prop, first number argument or fallback to scrollLeft
      arguments[0].left !== undefined ? ~~arguments[0].left : _typeof(arguments[0]) !== 'object' ? ~~arguments[0] : this.scrollLeft, // use top prop, second argument or fallback to scrollTop
      arguments[0].top !== undefined ? ~~arguments[0].top : arguments[1] !== undefined ? ~~arguments[1] : this.scrollTop);
      return;
    }

    var left = arguments[0].left;
    var top = arguments[0].top; // LET THE SMOOTHNESS BEGIN!

    smoothScroll.call(this, this, typeof left === 'undefined' ? this.scrollLeft : ~~left, typeof top === 'undefined' ? this.scrollTop : ~~top);
  }; // Element.prototype.scrollBy


  Element.prototype.scrollBy = function () {
    // avoid action when no arguments are passed
    if (arguments[0] === undefined) {
      return;
    } // avoid smooth behavior if not required


    if (shouldBailOut(arguments[0]) === true) {
      original.elementScroll.call(this, arguments[0].left !== undefined ? ~~arguments[0].left + this.scrollLeft : ~~arguments[0] + this.scrollLeft, arguments[0].top !== undefined ? ~~arguments[0].top + this.scrollTop : ~~arguments[1] + this.scrollTop);
      return;
    }

    this.scroll({
      left: ~~arguments[0].left + this.scrollLeft,
      top: ~~arguments[0].top + this.scrollTop,
      behavior: arguments[0].behavior
    });
  }; // Element.prototype.scrollIntoView


  Element.prototype.scrollIntoView = function () {
    // avoid smooth behavior if not required
    if (shouldBailOut(arguments[0]) === true) {
      original.scrollIntoView.call(this, arguments[0] === undefined ? true : arguments[0]);
      return;
    } // LET THE SMOOTHNESS BEGIN!


    var scrollableParent = findScrollableParent(this);
    var parentRects = scrollableParent.getBoundingClientRect();
    var clientRects = this.getBoundingClientRect();

    if (scrollableParent !== d.body) {
      // reveal element inside parent
      smoothScroll.call(this, scrollableParent, scrollableParent.scrollLeft + clientRects.left - parentRects.left, scrollableParent.scrollTop + clientRects.top - parentRects.top); // reveal parent in viewport unless is fixed

      if (w.getComputedStyle(scrollableParent).position !== 'fixed') {
        w.scrollBy({
          left: parentRects.left,
          top: parentRects.top,
          behavior: 'smooth'
        });
      }
    } else {
      // reveal element in viewport
      w.scrollBy({
        left: clientRects.left,
        top: clientRects.top,
        behavior: 'smooth'
      });
    }
  };
} // global


smoothScrollPolyfill();

},{}],8:[function(require,module,exports){
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!
 * in-view 0.6.1 - Get notified when a DOM element enters or exits the viewport.
 * Copyright (c) 2016 Cam Wiegert <cam@camwiegert.com> - https://camwiegert.github.io/in-view
 * License: MIT
 */
!function (t, e) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) && "object" == (typeof module === "undefined" ? "undefined" : _typeof(module)) ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) ? exports.inView = e() : t.inView = e();
}(void 0, function () {
  return function (t) {
    function e(r) {
      if (n[r]) return n[r].exports;
      var i = n[r] = {
        exports: {},
        id: r,
        loaded: !1
      };
      return t[r].call(i.exports, i, i.exports, e), i.loaded = !0, i.exports;
    }

    var n = {};
    return e.m = t, e.c = n, e.p = "", e(0);
  }([function (t, e, n) {
    "use strict";

    function r(t) {
      return t && t.__esModule ? t : {
        "default": t
      };
    }

    var i = n(2),
        o = r(i);
    t.exports = o["default"];
  }, function (t, e) {
    function n(t) {
      var e = _typeof(t);

      return null != t && ("object" == e || "function" == e);
    }

    t.exports = n;
  }, function (t, e, n) {
    "use strict";

    function r(t) {
      return t && t.__esModule ? t : {
        "default": t
      };
    }

    Object.defineProperty(e, "__esModule", {
      value: !0
    });

    var i = n(9),
        o = r(i),
        u = n(3),
        f = r(u),
        s = n(4),
        c = function c() {
      if ("undefined" != typeof window) {
        var t = 100,
            e = ["scroll", "resize", "load"],
            n = {
          history: []
        },
            r = {
          offset: {},
          threshold: 0,
          test: s.inViewport
        },
            i = (0, o["default"])(function () {
          n.history.forEach(function (t) {
            n[t].check();
          });
        }, t);
        e.forEach(function (t) {
          return addEventListener(t, i);
        }), window.MutationObserver && addEventListener("DOMContentLoaded", function () {
          new MutationObserver(i).observe(document.body, {
            attributes: !0,
            childList: !0,
            subtree: !0
          });
        });

        var u = function u(t) {
          if ("string" == typeof t) {
            var e = [].slice.call(document.querySelectorAll(t));
            return n.history.indexOf(t) > -1 ? n[t].elements = e : (n[t] = (0, f["default"])(e, r), n.history.push(t)), n[t];
          }
        };

        return u.offset = function (t) {
          if (void 0 === t) return r.offset;

          var e = function e(t) {
            return "number" == typeof t;
          };

          return ["top", "right", "bottom", "left"].forEach(e(t) ? function (e) {
            return r.offset[e] = t;
          } : function (n) {
            return e(t[n]) ? r.offset[n] = t[n] : null;
          }), r.offset;
        }, u.threshold = function (t) {
          return "number" == typeof t && t >= 0 && t <= 1 ? r.threshold = t : r.threshold;
        }, u.test = function (t) {
          return "function" == typeof t ? r.test = t : r.test;
        }, u.is = function (t) {
          return r.test(t, r);
        }, u.offset(0), u;
      }
    };

    e["default"] = c();
  }, function (t, e) {
    "use strict";

    function n(t, e) {
      if (!(t instanceof e)) throw new TypeError("Cannot call a class as a function");
    }

    Object.defineProperty(e, "__esModule", {
      value: !0
    });

    var r = function () {
      function t(t, e) {
        for (var n = 0; n < e.length; n++) {
          var r = e[n];
          r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
        }
      }

      return function (e, n, r) {
        return n && t(e.prototype, n), r && t(e, r), e;
      };
    }(),
        i = function () {
      function t(e, r) {
        n(this, t), this.options = r, this.elements = e, this.current = [], this.handlers = {
          enter: [],
          exit: []
        }, this.singles = {
          enter: [],
          exit: []
        };
      }

      return r(t, [{
        key: "check",
        value: function value() {
          var t = this;
          return this.elements.forEach(function (e) {
            var n = t.options.test(e, t.options),
                r = t.current.indexOf(e),
                i = r > -1,
                o = n && !i,
                u = !n && i;
            o && (t.current.push(e), t.emit("enter", e)), u && (t.current.splice(r, 1), t.emit("exit", e));
          }), this;
        }
      }, {
        key: "on",
        value: function value(t, e) {
          return this.handlers[t].push(e), this;
        }
      }, {
        key: "once",
        value: function value(t, e) {
          return this.singles[t].unshift(e), this;
        }
      }, {
        key: "emit",
        value: function value(t, e) {
          for (; this.singles[t].length;) {
            this.singles[t].pop()(e);
          }

          for (var n = this.handlers[t].length; --n > -1;) {
            this.handlers[t][n](e);
          }

          return this;
        }
      }]), t;
    }();

    e["default"] = function (t, e) {
      return new i(t, e);
    };
  }, function (t, e) {
    "use strict";

    function n(t, e) {
      var n = t.getBoundingClientRect(),
          r = n.top,
          i = n.right,
          o = n.bottom,
          u = n.left,
          f = n.width,
          s = n.height,
          c = {
        t: o,
        r: window.innerWidth - u,
        b: window.innerHeight - r,
        l: i
      },
          a = {
        x: e.threshold * f,
        y: e.threshold * s
      };
      return c.t > e.offset.top + a.y && c.r > e.offset.right + a.x && c.b > e.offset.bottom + a.y && c.l > e.offset.left + a.x;
    }

    Object.defineProperty(e, "__esModule", {
      value: !0
    }), e.inViewport = n;
  }, function (t, e) {
    (function (e) {
      var n = "object" == _typeof(e) && e && e.Object === Object && e;
      t.exports = n;
    }).call(e, function () {
      return this;
    }());
  }, function (t, e, n) {
    var r = n(5),
        i = "object" == (typeof self === "undefined" ? "undefined" : _typeof(self)) && self && self.Object === Object && self,
        o = r || i || Function("return this")();
    t.exports = o;
  }, function (t, e, n) {
    function r(t, e, n) {
      function r(e) {
        var n = x,
            r = m;
        return x = m = void 0, E = e, w = t.apply(r, n);
      }

      function a(t) {
        return E = t, j = setTimeout(h, e), M ? r(t) : w;
      }

      function l(t) {
        var n = t - O,
            r = t - E,
            i = e - n;
        return _ ? c(i, g - r) : i;
      }

      function d(t) {
        var n = t - O,
            r = t - E;
        return void 0 === O || n >= e || n < 0 || _ && r >= g;
      }

      function h() {
        var t = o();
        return d(t) ? p(t) : void (j = setTimeout(h, l(t)));
      }

      function p(t) {
        return j = void 0, T && x ? r(t) : (x = m = void 0, w);
      }

      function v() {
        void 0 !== j && clearTimeout(j), E = 0, x = O = m = j = void 0;
      }

      function y() {
        return void 0 === j ? w : p(o());
      }

      function b() {
        var t = o(),
            n = d(t);

        if (x = arguments, m = this, O = t, n) {
          if (void 0 === j) return a(O);
          if (_) return j = setTimeout(h, e), r(O);
        }

        return void 0 === j && (j = setTimeout(h, e)), w;
      }

      var x,
          m,
          g,
          w,
          j,
          O,
          E = 0,
          M = !1,
          _ = !1,
          T = !0;

      if ("function" != typeof t) throw new TypeError(f);
      return e = u(e) || 0, i(n) && (M = !!n.leading, _ = "maxWait" in n, g = _ ? s(u(n.maxWait) || 0, e) : g, T = "trailing" in n ? !!n.trailing : T), b.cancel = v, b.flush = y, b;
    }

    var i = n(1),
        o = n(8),
        u = n(10),
        f = "Expected a function",
        s = Math.max,
        c = Math.min;
    t.exports = r;
  }, function (t, e, n) {
    var r = n(6),
        i = function i() {
      return r.Date.now();
    };

    t.exports = i;
  }, function (t, e, n) {
    function r(t, e, n) {
      var r = !0,
          f = !0;
      if ("function" != typeof t) throw new TypeError(u);
      return o(n) && (r = "leading" in n ? !!n.leading : r, f = "trailing" in n ? !!n.trailing : f), i(t, e, {
        leading: r,
        maxWait: e,
        trailing: f
      });
    }

    var i = n(7),
        o = n(1),
        u = "Expected a function";
    t.exports = r;
  }, function (t, e) {
    function n(t) {
      return t;
    }

    t.exports = n;
  }]);
});

},{}],9:[function(require,module,exports){
"use strict";

require("./in-view.min.js");

require("./modernizr-custom.3.6.0.js");

},{"./in-view.min.js":8,"./modernizr-custom.3.6.0.js":10}],10:[function(require,module,exports){
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-csstransforms-csstransforms3d-csstransitions-cssvhunit-cssvwunit-flexbox-flexboxlegacy-inlinesvg-objectfit-svgasimg-svgclippaths-video-setclasses !*/
!function (e, n, t) {
  function r(n, t, r) {
    var o;

    if ("getComputedStyle" in e) {
      o = getComputedStyle.call(e, n, t);
      var i = e.console;
      if (null !== o) r && (o = o.getPropertyValue(r));else if (i) {
        var s = i.error ? "error" : "log";
        i[s].call(i, "getComputedStyle returning null, its possible modernizr test results are inaccurate");
      }
    } else o = !t && n.currentStyle && n.currentStyle[r];

    return o;
  }

  function o(e, n) {
    return e - 1 === n || e === n || e + 1 === n;
  }

  function i(e, n) {
    return _typeof(e) === n;
  }

  function s() {
    var e, n, t, r, o, s, a;

    for (var l in _) {
      if (_.hasOwnProperty(l)) {
        if (e = [], n = _[l], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length)) for (t = 0; t < n.options.aliases.length; t++) {
          e.push(n.options.aliases[t].toLowerCase());
        }

        for (r = i(n.fn, "function") ? n.fn() : n.fn, o = 0; o < e.length; o++) {
          s = e[o], a = s.split("."), 1 === a.length ? Modernizr[a[0]] = r : (!Modernizr[a[0]] || Modernizr[a[0]] instanceof Boolean || (Modernizr[a[0]] = new Boolean(Modernizr[a[0]])), Modernizr[a[0]][a[1]] = r), S.push((r ? "" : "no-") + a.join("-"));
        }
      }
    }
  }

  function a(e) {
    var n = E.className,
        t = Modernizr._config.classPrefix || "";

    if (j && (n = n.baseVal), Modernizr._config.enableJSClass) {
      var r = new RegExp("(^|\\s)" + t + "no-js(\\s|$)");
      n = n.replace(r, "$1" + t + "js$2");
    }

    Modernizr._config.enableClasses && (n += " " + t + e.join(" " + t), j ? E.className.baseVal = n : E.className = n);
  }

  function l() {
    return "function" != typeof n.createElement ? n.createElement(arguments[0]) : j ? n.createElementNS.call(n, "http://www.w3.org/2000/svg", arguments[0]) : n.createElement.apply(n, arguments);
  }

  function f(e, n) {
    if ("object" == _typeof(e)) for (var t in e) {
      z(e, t) && f(t, e[t]);
    } else {
      e = e.toLowerCase();
      var r = e.split("."),
          o = Modernizr[r[0]];
      if (2 == r.length && (o = o[r[1]]), "undefined" != typeof o) return Modernizr;
      n = "function" == typeof n ? n() : n, 1 == r.length ? Modernizr[r[0]] = n : (!Modernizr[r[0]] || Modernizr[r[0]] instanceof Boolean || (Modernizr[r[0]] = new Boolean(Modernizr[r[0]])), Modernizr[r[0]][r[1]] = n), a([(n && 0 != n ? "" : "no-") + r.join("-")]), Modernizr._trigger(e, n);
    }
    return Modernizr;
  }

  function u(e) {
    return e.replace(/([a-z])-([a-z])/g, function (e, n, t) {
      return n + t.toUpperCase();
    }).replace(/^-/, "");
  }

  function c() {
    var e = n.body;
    return e || (e = l(j ? "svg" : "body"), e.fake = !0), e;
  }

  function d(e, t, r, o) {
    var i,
        s,
        a,
        f,
        u = "modernizr",
        d = l("div"),
        p = c();
    if (parseInt(r, 10)) for (; r--;) {
      a = l("div"), a.id = o ? o[r] : u + (r + 1), d.appendChild(a);
    }
    return i = l("style"), i.type = "text/css", i.id = "s" + u, (p.fake ? p : d).appendChild(i), p.appendChild(d), i.styleSheet ? i.styleSheet.cssText = e : i.appendChild(n.createTextNode(e)), d.id = u, p.fake && (p.style.background = "", p.style.overflow = "hidden", f = E.style.overflow, E.style.overflow = "hidden", E.appendChild(p)), s = t(d, e), p.fake ? (p.parentNode.removeChild(p), E.style.overflow = f, E.offsetHeight) : d.parentNode.removeChild(d), !!s;
  }

  function p(e, n) {
    return !!~("" + e).indexOf(n);
  }

  function v(e, n) {
    return function () {
      return e.apply(n, arguments);
    };
  }

  function h(e, n, t) {
    var r;

    for (var o in e) {
      if (e[o] in n) return t === !1 ? e[o] : (r = n[e[o]], i(r, "function") ? v(r, t || n) : r);
    }

    return !1;
  }

  function g(e) {
    return e.replace(/([A-Z])/g, function (e, n) {
      return "-" + n.toLowerCase();
    }).replace(/^ms-/, "-ms-");
  }

  function m(n, o) {
    var i = n.length;

    if ("CSS" in e && "supports" in e.CSS) {
      for (; i--;) {
        if (e.CSS.supports(g(n[i]), o)) return !0;
      }

      return !1;
    }

    if ("CSSSupportsRule" in e) {
      for (var s = []; i--;) {
        s.push("(" + g(n[i]) + ":" + o + ")");
      }

      return s = s.join(" or "), d("@supports (" + s + ") { #modernizr { position: absolute; } }", function (e) {
        return "absolute" == r(e, null, "position");
      });
    }

    return t;
  }

  function y(e, n, r, o) {
    function s() {
      f && (delete $.style, delete $.modElem);
    }

    if (o = i(o, "undefined") ? !1 : o, !i(r, "undefined")) {
      var a = m(e, r);
      if (!i(a, "undefined")) return a;
    }

    for (var f, c, d, v, h, g = ["modernizr", "tspan", "samp"]; !$.style && g.length;) {
      f = !0, $.modElem = l(g.shift()), $.style = $.modElem.style;
    }

    for (d = e.length, c = 0; d > c; c++) {
      if (v = e[c], h = $.style[v], p(v, "-") && (v = u(v)), $.style[v] !== t) {
        if (o || i(r, "undefined")) return s(), "pfx" == n ? v : !0;

        try {
          $.style[v] = r;
        } catch (y) {}

        if ($.style[v] != h) return s(), "pfx" == n ? v : !0;
      }
    }

    return s(), !1;
  }

  function w(e, n, t, r, o) {
    var s = e.charAt(0).toUpperCase() + e.slice(1),
        a = (e + " " + R.join(s + " ") + s).split(" ");
    return i(n, "string") || i(n, "undefined") ? y(a, n, r, o) : (a = (e + " " + A.join(s + " ") + s).split(" "), h(a, n, t));
  }

  function C(e, n, r) {
    return w(e, t, t, n, r);
  }

  var S = [],
      _ = [],
      T = {
    _version: "3.6.0",
    _config: {
      classPrefix: "",
      enableClasses: !0,
      enableJSClass: !0,
      usePrefixes: !0
    },
    _q: [],
    on: function on(e, n) {
      var t = this;
      setTimeout(function () {
        n(t[e]);
      }, 0);
    },
    addTest: function addTest(e, n, t) {
      _.push({
        name: e,
        fn: n,
        options: t
      });
    },
    addAsyncTest: function addAsyncTest(e) {
      _.push({
        name: null,
        fn: e
      });
    }
  },
      Modernizr = function Modernizr() {};

  Modernizr.prototype = T, Modernizr = new Modernizr();
  var x = "CSS" in e && "supports" in e.CSS,
      b = "supportsCSS" in e;
  Modernizr.addTest("supports", x || b);
  var P = {}.toString;
  Modernizr.addTest("svgclippaths", function () {
    return !!n.createElementNS && /SVGClipPath/.test(P.call(n.createElementNS("http://www.w3.org/2000/svg", "clipPath")));
  });
  var E = n.documentElement,
      j = "svg" === E.nodeName.toLowerCase();
  Modernizr.addTest("inlinesvg", function () {
    var e = l("div");
    return e.innerHTML = "<svg/>", "http://www.w3.org/2000/svg" == ("undefined" != typeof SVGRect && e.firstChild && e.firstChild.namespaceURI);
  });
  var z;
  !function () {
    var e = {}.hasOwnProperty;
    z = i(e, "undefined") || i(e.call, "undefined") ? function (e, n) {
      return n in e && i(e.constructor.prototype[n], "undefined");
    } : function (n, t) {
      return e.call(n, t);
    };
  }(), T._l = {}, T.on = function (e, n) {
    this._l[e] || (this._l[e] = []), this._l[e].push(n), Modernizr.hasOwnProperty(e) && setTimeout(function () {
      Modernizr._trigger(e, Modernizr[e]);
    }, 0);
  }, T._trigger = function (e, n) {
    if (this._l[e]) {
      var t = this._l[e];
      setTimeout(function () {
        var e, r;

        for (e = 0; e < t.length; e++) {
          (r = t[e])(n);
        }
      }, 0), delete this._l[e];
    }
  }, Modernizr._q.push(function () {
    T.addTest = f;
  }), Modernizr.addTest("svgasimg", n.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1"));
  var N = T.testStyles = d;
  N("#modernizr { height: 50vh; }", function (n) {
    var t = parseInt(e.innerHeight / 2, 10),
        i = parseInt(r(n, null, "height"), 10);
    Modernizr.addTest("cssvhunit", o(i, t));
  }), N("#modernizr { width: 50vw; }", function (n) {
    var t = parseInt(e.innerWidth / 2, 10),
        i = parseInt(r(n, null, "width"), 10);
    Modernizr.addTest("cssvwunit", o(i, t));
  });
  var L = "Moz O ms Webkit",
      R = T._config.usePrefixes ? L.split(" ") : [];
  T._cssomPrefixes = R;

  var O = function O(n) {
    var r,
        o = prefixes.length,
        i = e.CSSRule;
    if ("undefined" == typeof i) return t;
    if (!n) return !1;
    if (n = n.replace(/^@/, ""), r = n.replace(/-/g, "_").toUpperCase() + "_RULE", r in i) return "@" + n;

    for (var s = 0; o > s; s++) {
      var a = prefixes[s],
          l = a.toUpperCase() + "_" + r;
      if (l in i) return "@-" + a.toLowerCase() + "-" + n;
    }

    return !1;
  };

  T.atRule = O;
  var A = T._config.usePrefixes ? L.toLowerCase().split(" ") : [];
  T._domPrefixes = A, Modernizr.addTest("video", function () {
    var e = l("video"),
        n = !1;

    try {
      n = !!e.canPlayType, n && (n = new Boolean(n), n.ogg = e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, ""), n.h264 = e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, ""), n.webm = e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""), n.vp9 = e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/, ""), n.hls = e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/, ""));
    } catch (t) {}

    return n;
  });
  var I = {
    elem: l("modernizr")
  };

  Modernizr._q.push(function () {
    delete I.elem;
  });

  var $ = {
    style: I.elem.style
  };
  Modernizr._q.unshift(function () {
    delete $.style;
  }), T.testAllProps = w, T.testAllProps = C, Modernizr.addTest("flexbox", C("flexBasis", "1px", !0)), Modernizr.addTest("csstransforms3d", function () {
    return !!C("perspective", "1px", !0);
  }), Modernizr.addTest("csstransitions", C("transition", "all", !0)), Modernizr.addTest("flexboxlegacy", C("boxDirection", "reverse", !0)), Modernizr.addTest("csstransforms", function () {
    return -1 === navigator.userAgent.indexOf("Android 2.") && C("transform", "scale(1)", !0);
  });

  var U = T.prefixed = function (e, n, t) {
    return 0 === e.indexOf("@") ? O(e) : (-1 != e.indexOf("-") && (e = u(e)), n ? w(e, n, t) : w(e, "pfx"));
  };

  Modernizr.addTest("objectfit", !!U("objectFit"), {
    aliases: ["object-fit"]
  }), s(), a(S), delete T.addTest, delete T.addAsyncTest;

  for (var V = 0; V < Modernizr._q.length; V++) {
    Modernizr._q[V]();
  }

  e.Modernizr = Modernizr;
}(window, document);

},{}],11:[function(require,module,exports){
/*! npm.im/object-fit-images 3.2.4 */
'use strict';

var OFI = 'bfred-it:object-fit-images';
var propRegex = /(object-fit|object-position)\s*:\s*([-.\w\s%]+)/g;
var testImg = typeof Image === 'undefined' ? {style: {'object-position': 1}} : new Image();
var supportsObjectFit = 'object-fit' in testImg.style;
var supportsObjectPosition = 'object-position' in testImg.style;
var supportsOFI = 'background-size' in testImg.style;
var supportsCurrentSrc = typeof testImg.currentSrc === 'string';
var nativeGetAttribute = testImg.getAttribute;
var nativeSetAttribute = testImg.setAttribute;
var autoModeEnabled = false;

function createPlaceholder(w, h) {
	return ("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='" + w + "' height='" + h + "'%3E%3C/svg%3E");
}

function polyfillCurrentSrc(el) {
	if (el.srcset && !supportsCurrentSrc && window.picturefill) {
		var pf = window.picturefill._;
		// parse srcset with picturefill where currentSrc isn't available
		if (!el[pf.ns] || !el[pf.ns].evaled) {
			// force synchronous srcset parsing
			pf.fillImg(el, {reselect: true});
		}

		if (!el[pf.ns].curSrc) {
			// force picturefill to parse srcset
			el[pf.ns].supported = false;
			pf.fillImg(el, {reselect: true});
		}

		// retrieve parsed currentSrc, if any
		el.currentSrc = el[pf.ns].curSrc || el.src;
	}
}

function getStyle(el) {
	var style = getComputedStyle(el).fontFamily;
	var parsed;
	var props = {};
	while ((parsed = propRegex.exec(style)) !== null) {
		props[parsed[1]] = parsed[2];
	}
	return props;
}

function setPlaceholder(img, width, height) {
	// Default: fill width, no height
	var placeholder = createPlaceholder(width || 1, height || 0);

	// Only set placeholder if it's different
	if (nativeGetAttribute.call(img, 'src') !== placeholder) {
		nativeSetAttribute.call(img, 'src', placeholder);
	}
}

function onImageReady(img, callback) {
	// naturalWidth is only available when the image headers are loaded,
	// this loop will poll it every 100ms.
	if (img.naturalWidth) {
		callback(img);
	} else {
		setTimeout(onImageReady, 100, img, callback);
	}
}

function fixOne(el) {
	var style = getStyle(el);
	var ofi = el[OFI];
	style['object-fit'] = style['object-fit'] || 'fill'; // default value

	// Avoid running where unnecessary, unless OFI had already done its deed
	if (!ofi.img) {
		// fill is the default behavior so no action is necessary
		if (style['object-fit'] === 'fill') {
			return;
		}

		// Where object-fit is supported and object-position isn't (Safari < 10)
		if (
			!ofi.skipTest && // unless user wants to apply regardless of browser support
			supportsObjectFit && // if browser already supports object-fit
			!style['object-position'] // unless object-position is used
		) {
			return;
		}
	}

	// keep a clone in memory while resetting the original to a blank
	if (!ofi.img) {
		ofi.img = new Image(el.width, el.height);
		ofi.img.srcset = nativeGetAttribute.call(el, "data-ofi-srcset") || el.srcset;
		ofi.img.src = nativeGetAttribute.call(el, "data-ofi-src") || el.src;

		// preserve for any future cloneNode calls
		// https://github.com/bfred-it/object-fit-images/issues/53
		nativeSetAttribute.call(el, "data-ofi-src", el.src);
		if (el.srcset) {
			nativeSetAttribute.call(el, "data-ofi-srcset", el.srcset);
		}

		setPlaceholder(el, el.naturalWidth || el.width, el.naturalHeight || el.height);

		// remove srcset because it overrides src
		if (el.srcset) {
			el.srcset = '';
		}
		try {
			keepSrcUsable(el);
		} catch (err) {
			if (window.console) {
				console.warn('https://bit.ly/ofi-old-browser');
			}
		}
	}

	polyfillCurrentSrc(ofi.img);

	el.style.backgroundImage = "url(\"" + ((ofi.img.currentSrc || ofi.img.src).replace(/"/g, '\\"')) + "\")";
	el.style.backgroundPosition = style['object-position'] || 'center';
	el.style.backgroundRepeat = 'no-repeat';
	el.style.backgroundOrigin = 'content-box';

	if (/scale-down/.test(style['object-fit'])) {
		onImageReady(ofi.img, function () {
			if (ofi.img.naturalWidth > el.width || ofi.img.naturalHeight > el.height) {
				el.style.backgroundSize = 'contain';
			} else {
				el.style.backgroundSize = 'auto';
			}
		});
	} else {
		el.style.backgroundSize = style['object-fit'].replace('none', 'auto').replace('fill', '100% 100%');
	}

	onImageReady(ofi.img, function (img) {
		setPlaceholder(el, img.naturalWidth, img.naturalHeight);
	});
}

function keepSrcUsable(el) {
	var descriptors = {
		get: function get(prop) {
			return el[OFI].img[prop ? prop : 'src'];
		},
		set: function set(value, prop) {
			el[OFI].img[prop ? prop : 'src'] = value;
			nativeSetAttribute.call(el, ("data-ofi-" + prop), value); // preserve for any future cloneNode
			fixOne(el);
			return value;
		}
	};
	Object.defineProperty(el, 'src', descriptors);
	Object.defineProperty(el, 'currentSrc', {
		get: function () { return descriptors.get('currentSrc'); }
	});
	Object.defineProperty(el, 'srcset', {
		get: function () { return descriptors.get('srcset'); },
		set: function (ss) { return descriptors.set(ss, 'srcset'); }
	});
}

function hijackAttributes() {
	function getOfiImageMaybe(el, name) {
		return el[OFI] && el[OFI].img && (name === 'src' || name === 'srcset') ? el[OFI].img : el;
	}
	if (!supportsObjectPosition) {
		HTMLImageElement.prototype.getAttribute = function (name) {
			return nativeGetAttribute.call(getOfiImageMaybe(this, name), name);
		};

		HTMLImageElement.prototype.setAttribute = function (name, value) {
			return nativeSetAttribute.call(getOfiImageMaybe(this, name), name, String(value));
		};
	}
}

function fix(imgs, opts) {
	var startAutoMode = !autoModeEnabled && !imgs;
	opts = opts || {};
	imgs = imgs || 'img';

	if ((supportsObjectPosition && !opts.skipTest) || !supportsOFI) {
		return false;
	}

	// use imgs as a selector or just select all images
	if (imgs === 'img') {
		imgs = document.getElementsByTagName('img');
	} else if (typeof imgs === 'string') {
		imgs = document.querySelectorAll(imgs);
	} else if (!('length' in imgs)) {
		imgs = [imgs];
	}

	// apply fix to all
	for (var i = 0; i < imgs.length; i++) {
		imgs[i][OFI] = imgs[i][OFI] || {
			skipTest: opts.skipTest
		};
		fixOne(imgs[i]);
	}

	if (startAutoMode) {
		document.body.addEventListener('load', function (e) {
			if (e.target.tagName === 'IMG') {
				fix(e.target, {
					skipTest: opts.skipTest
				});
			}
		}, true);
		autoModeEnabled = true;
		imgs = 'img'; // reset to a generic selector for watchMQ
	}

	// if requested, watch media queries for object-fit change
	if (opts.watchMQ) {
		window.addEventListener('resize', fix.bind(null, imgs, {
			skipTest: opts.skipTest
		}));
	}
}

fix.supportsObjectFit = supportsObjectFit;
fix.supportsObjectPosition = supportsObjectPosition;

hijackAttributes();

module.exports = fix;

},{}]},{},[5]);
