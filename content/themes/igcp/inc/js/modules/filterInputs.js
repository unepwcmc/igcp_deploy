export default function filterInputs() {
  const els = {
    checkboxes: Array.prototype.slice.call(
      document.querySelectorAll('.flt-Filters input[type="checkbox"]')
    ),
    radios: Array.prototype.slice.call(
      document.querySelectorAll('.flt-Filters input[type="radio"]')
    )
  };

  els.checkboxes.forEach(checkbox => {
    const label = checkbox.parentElement;
    const catItem = label.parentElement;

    checkbox.style.display = 'none';

    label.classList.add('flt-Filters_Checkbox');


    catItem.insertBefore(checkbox, catItem.childNodes[0]);

    label.addEventListener('click', (e) => {
      const checkbox = e.target.previousElementSibling;
      checkbox.checked = !checkbox.checked;
    })
  })

  els.radios.forEach(radio => {
    const label = radio.parentElement;
    const catItem = label.parentElement;

    radio.style.display = 'none';

    label.classList.add('flt-Filters_Radio');


    catItem.insertBefore(radio, catItem.childNodes[0]);

    label.addEventListener('click', (e) => {
      els.radios.forEach(radio => {
        radio.checked = false;
      })
      e.target.previousElementSibling.checked = true;
    })
  })
}
