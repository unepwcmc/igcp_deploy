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

  // els.hasChildren.forEach(item => {
  //   item.addEventListener("click", e => {
  //     item.classList.toggle("open");
  //   });
  //   item.querySelector('a').addEventListener('click', e => {
  //     e.stopPropagation();
  //   });
  // });



  els.hasChildren.forEach(function(item) {
    item.addEventListener('click', function(e){
      // Grab blocks
      const openItem = document.querySelector('[data-drawer] .menu-item-has-children.open')
      const currentItem = e.target

      // Check if openitem exists
      // Remove from open item if exists
      if (openItem) {
        // If open item is clicked item
        if (openItem == currentItem) {
          // Add remove open class
          currentItem.classList.remove('open')
        } else {
          // Remove open class from open item
          openItem.classList.remove('open')
          // Add open class to clicked item
          currentItem.classList.add('open')
        }
      } else {
        // Add open class to current item
        currentItem.classList.add('open')
      }

    })

    Array.prototype.slice.call(
      item.querySelectorAll("a")
    ).forEach(link => {
      link.addEventListener('click', e => {
        e.stopPropagation();
      });
    })

  })
}
