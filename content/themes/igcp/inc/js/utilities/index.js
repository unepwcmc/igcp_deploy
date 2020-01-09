export function offset(el) {
  const rect = el.getBoundingClientRect(),
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return rect.top + scrollTop;
}

export function scrollTo(offsetTop) {
  window.scroll({
    behavior: "smooth",
    left: 0,
    top: offsetTop
  });
}

export function scrollToLink() {
  const els = {
    links: [].slice.call(document.querySelectorAll('a[href^="#"]'))
  };

  // If using case study page template, then need to equate for case study nav bar
  const isCaseStudy = document.body.classList.contains("page-template-page-casestudy");

  const headerHeight = document.querySelector('.hd-Header').offsetHeight;

  els.links.forEach(function(link) {
    const linkHref = link.getAttribute("href").slice(1);

    if (linkHref !== "") {
      link.addEventListener("click", function(e) {
        const linkEl = document.getElementById(linkHref);
        const linkElOffsetTop = offset(linkEl);

        e.preventDefault();

        if (isCaseStudy) {
          const navHeight = document.querySelector('.cst-Nav').offsetHeight;
          scrollTo(linkElOffsetTop - headerHeight - navHeight);
        } else {
          scrollTo(linkElOffsetTop - headerHeight);
        }
      });
    } else {
      link.addEventListener("click", function(e) {
        e.preventDefault();

        scrollTo(0);
      });
    }
  });
}
