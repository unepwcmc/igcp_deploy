export default function drawers() {
  const els = {
    body: document.querySelector("body"),
    drawers: [].slice.call(document.querySelectorAll("[data-drawer]")),
    overlay: document.querySelector('.drw-Drawers_Overlay'),
    hasChildren: Array.prototype.slice.call(
      document.querySelectorAll("[data-drawer] .menu-item-has-children")
    )
  };

  els.overlay.addEventListener('click', e => {
    const activeDrawer = document.querySelector('.drw-Drawer-active');
    if (activeDrawer) {
      activeDrawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    }
  });

  els.drawers.forEach(function(drawer) {
    const drawerName = drawer.dataset.drawer;
    const drawerEls = {
      menuToggle: document.querySelector(
        `[data-drawer-toggle="${drawerName}"]`
      ),
      closeButton: drawer.querySelector("[data-drawer-menu-close]")
    };

    drawerEls.menuToggle.addEventListener("click", function() {
      drawer.classList.add("drw-Drawer-active");
      els.body.classList.add("utl-DrawerActive");
    });

    drawerEls.closeButton.addEventListener("click", function() {
      drawer.classList.remove("drw-Drawer-active");
      els.body.classList.remove("utl-DrawerActive");
    });

    if (drawerName == 'filter') {
      drawer.querySelector('.drw-Drawer_Submit').addEventListener('click', e => {
        e.preventDefault();
        drawer.querySelector('form.searchandfilter').submit();
      })
    }
  });

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
