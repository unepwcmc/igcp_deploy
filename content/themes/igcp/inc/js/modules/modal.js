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
        modalTrigger.addEventListener("click", function(e) {
          e.preventDefault();
          modal.classList.add("mod-Modal-active");
          els.body.classList.add("utl-DrawerActive");

          const card = this.parentElement;

          if (modalName == 'team') {
            const memberData = {
              name: card.querySelector('[data-member-name]').textContent,
              jobtitle: card.querySelector('[data-member-jobtitle]').textContent,
              bio: card.querySelector('[data-member-bio]').innerHTML,
              email: card.querySelector('[data-member-email]').textContent,
              location: card.querySelector('[data-member-location]').textContent,
              image: card.querySelector('[data-member-image] img').getAttribute('src')
            }
            console.log(memberData);

            modal.querySelector('[data-modal-name]').textContent = memberData.name
            modal.querySelector('[data-modal-jobtitle]').textContent = memberData.jobtitle
            modal.querySelector('[data-modal-bio]').innerHTML = memberData.bio
            modal.querySelector('[data-modal-email]').textContent = memberData.email
            modal.querySelector('[data-modal-location]').textContent = memberData.location
            modal.querySelector('[data-modal-image]').setAttribute('src', memberData.image)
          }
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
