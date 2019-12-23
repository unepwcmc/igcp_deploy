export default function drawers() {
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
