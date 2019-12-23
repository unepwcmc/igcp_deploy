export default function searchbar() {
  const els = {
    searchBar: document.querySelector(".hd-Header [data-searchbar]"),
    searchBarToggle: document.querySelector(".hd-Header [data-searchbar-toggle]")
  };

  els.searchBarToggle.addEventListener('click', e => {
    els.searchBar.classList.toggle('hd-Search_Bar-active');
  })
}
