export default function filterList() {
  const els = {
    filters: Array.prototype.slice.call(document.querySelectorAll('.lyt-Sidebar .searchandfilter input[type="checkbox"]:checked')),
    clearButton: document.querySelector('.lyt-Sidebar .flt-Filters_Button')
  }

  if (els.filters.length > 0) {
    const clearLink = els.clearButton.getAttribute('href')
    const clearText = els.clearButton.innerHTML

    const filtersListDiv = document.createElement('div');
    filtersListDiv.classList.add('arc-FiltersList');

    const ul = document.createElement('ul');
    ul.classList.add('arc-FiltersList_Items');

    els.filters.forEach(filter => {
      const li = document.createElement('li');
      li.classList.add('arc-FiltersList_Item');
      const span = document.createElement('span');
      span.classList.add('arc-FiltersList_Filter');
      const str = filter.nextSibling.innerHTML.trim();
      span.innerHTML = str;
      li.appendChild(span);
      ul.appendChild(li);
    })

    const li = document.createElement('li');
    li.classList.add('arc-FiltersList_Item', 'arc-FiltersList_Item-clear');
    const a = document.createElement('a');
    a.setAttribute('href', clearLink)
    a.classList.add('arc-FiltersList_Link')
    a.innerHTML = clearText
    a.setAttribute('title', clearText)
    li.appendChild(a);
    ul.appendChild(li);

    const filtersListTitle = document.createElement('p');
    filtersListTitle.innerHTML = 'Currently Filtered By:';
    filtersListTitle.classList.add('arc-FiltersList_Title');

    filtersListDiv.appendChild(filtersListTitle);
    filtersListDiv.appendChild(ul);

    const filtersToggle = document.querySelector('.flt-Filters_Toggle');
    filtersToggle.parentNode.insertBefore(filtersListDiv, filtersToggle.nextSibling);
  }
}
