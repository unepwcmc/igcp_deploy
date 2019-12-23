export default function modal() {
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
}
