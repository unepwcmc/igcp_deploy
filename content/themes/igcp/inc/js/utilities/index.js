export function scrollToLink() {
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

export function scrollTo(offsetTop) {
  window.scroll({
    behavior: "smooth",
    left: 0,
    top: offsetTop
  });
}

export function offset(el) {
  const rect = el.getBoundingClientRect(),
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  return rect.top + scrollTop;
}
