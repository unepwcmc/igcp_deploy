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
        closeButtons: Array.prototype.slice.call(
          modal.querySelectorAll("[data-modal-close]")
        ),
        modalName: modal.querySelector('[data-modal-name]'),
        modalJobTitle: modal.querySelector('[data-modal-jobtitle]'),
        modalBio: modal.querySelector('[data-modal-bio]'),
        modalEmail: modal.querySelector('[data-modal-email]'),
        modalEmailText: modal.querySelector('[data-modal-email] span'),
        modalLocation: modal.querySelector('[data-modal-location]'),
        modalLocationText: modal.querySelector('[data-modal-location] span'),
        modalImage: modal.querySelector('[data-modal-image]')
      };

      modalEls.modalTriggers.forEach(function(modalTrigger) {
        modalTrigger.addEventListener("click", function(e) {
          e.preventDefault();
          modal.classList.add("mod-Modal-active");
          // els.body.classList.add("utl-DrawerActive");

          // When the modal is shown, we want a fixed body
          document.body.style.top = `-${window.scrollY}px`;
          document.body.style.right = '0px';
          document.body.style.left = '0px';
          document.body.style.position = 'fixed';


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

            modalEls.modalName.textContent = memberData.name
            modalEls.modalJobTitle.textContent = memberData.jobtitle
            modalEls.modalBio.innerHTML = memberData.bio

            if (memberData.email != '') {
              modalEls.modalEmail.classList.add('show')
              modalEls.modalEmailText.textContent = memberData.email
            } else {
              modalEls.modalEmail.classList.remove('show')
              modalEls.modalEmailText.textContent = ''
            }

            if (memberData.location != '') {
              modalEls.modalLocation.classList.add('show')
              modalEls.modalLocationText.textContent = memberData.location
            } else {
              modalEls.modalLocation.classList.remove('show')
              modalEls.modalLocationText.textContent = ''
            }

            modalEls.modalImage.setAttribute('src', memberData.image)
          }
        });
      });

      modalEls.closeButtons.forEach(closeButton => {
        closeButton.addEventListener("click", () => {
          modal.classList.remove("mod-Modal-active");
          // els.body.classList.remove("utl-DrawerActive");

          // When the modal is hidden...
          const scrollY = document.body.style.top;
          document.body.style.position = '';
          document.body.style.top = '';
          document.body.style.right = '';
          document.body.style.left = '';
          window.scrollTo(0, parseInt(scrollY || '0') * -1);
          console.log("Modal hidden: ", parseInt(scrollY || '0') * -1);
        });
      })
    });

    // els.modalClose.addEventListener("click", e => {
    //   els.modal.classList.remove("mod-Modal-active");
    //   document.body.classList.remove("utl-DrawerActive");
    // });
}
