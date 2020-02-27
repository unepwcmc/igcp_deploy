export default function caseStudyNav() {
  const els = {
    navlist: document.querySelector('.cst-Nav_Items'),
    headings: Array.prototype.slice.call(
      document.querySelectorAll("h4[id]")
    ),
    top: document.querySelector('.ent-Entry_Body')
  }

  els.headings.forEach(heading => {
    const title = heading.textContent

    const listItem = document.createElement('li');
    listItem.classList.add('cst-Nav_Item');
    const listItemLink = document.createElement('a');
    listItem.appendChild(listItemLink)

    listItemLink.textContent = heading.textContent
    listItemLink.classList.add('cst-Nav_Link');
    listItemLink.setAttribute('href', `#${heading.id}`)

    els.navlist.appendChild(listItem)
  })

  els.top.id = 'top'
}
