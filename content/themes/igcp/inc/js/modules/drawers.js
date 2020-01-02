export default function drawers() {
  const els = {
    body: document.querySelector("body"),
    drawer: document.querySelector("[data-drawer]"),
    menuToggle: document.querySelector("[data-drawer-menu-toggle]"),
    closeButton: document.querySelector("[data-drawer-menu-close]"),
    overlay: document.querySelector("[data-drawers-overlay]"),
    hasChildren: Array.prototype.slice.call(
      document.querySelectorAll("[data-drawer] .menu-item-has-children")
    )
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

  els.hasChildren.forEach(item => {
    item.addEventListener("click", e => {
      item.classList.toggle("open");
    });
    item.querySelector('a').addEventListener('click', e => {
      e.stopPropagation();
    });
  });
}
