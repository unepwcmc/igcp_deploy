import objectFitImages from 'object-fit-images';

import './vendor';

import { offset, scrollTo, scrollToLink} from './utilities';
import smoothScrollPolyfill from './utilities/smoothscroll-polyfill';

import caseStudyNav from './modules/caseStudyNav';
import drawers from './modules/drawers';
import modal from './modules/modal';
import searchbar from './modules/searchbar';

(function() {
  window.addEventListener("DOMContentLoaded", function() {
    Init();
  });

  // Debounce function - taken from https://gist.github.com/nmsdvid/8807205
  const debounceEvent = (callback, time = 20, interval) => (...args) =>
    clearTimeout(interval, (interval = setTimeout(callback, time, ...args)));

  function Init() {
    document.body.classList.add("loaded");
    const isHomePage = document.body.classList.contains("home");
    const isCaseStudy = document.body.classList.contains("page-template-page-casestudy");

    if (isCaseStudy) {
      window.addEventListener("scroll", caseStudyNavScroll);
      caseStudyNav();
    }

    window.addEventListener("scroll", headerScroll);
    drawers();
    modal();
    searchbar();
    smoothScrollPolyfill();
    scrollToLink();
    objectFitImages();
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

  // For navigation under hero on Case Study pages
  const caseStudyNavScroll = debounceEvent(function() {
    const header = document.querySelector(".hd-Header");
    const hero = document.querySelector(".cst-Hero");
    const nav = document.querySelector(".cst-Nav");

    let headerHeight = header.offsetHeight;
    let heroHeight = hero.offsetHeight;
    let heroOffsetTop = hero.offsetTop + heroHeight - headerHeight;

    if (
      document.body.scrollTop > heroOffsetTop ||
      document.documentElement.scrollTop > heroOffsetTop
    ) {
      nav.classList.add("cst-Nav-fixed");
    } else {
      nav.classList.remove("cst-Nav-fixed");
    }
  });

})();
