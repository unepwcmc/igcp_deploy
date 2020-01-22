export default function searchbar() {
  const els = {
    searchBar: document.querySelector(".hd-Header [data-searchbar]"),
    searchBarToggle: document.querySelector(".hd-Header [data-searchbar-toggle]"),
    searchForm: document.getElementById('searchform')
  };

  els.searchBarToggle.addEventListener('click', e => {
    els.searchBar.classList.toggle('hd-Search_Bar-active');

    if (els.searchBar.classList.contains('hd-Search_Bar-active')) {
      setTimeout(() => {
        els.searchBar.querySelector('.hd-Search_Input').focus();
      }, 600);
    }
  })

  els.searchBar.addEventListener('keydown', e => {
    if (event.which == 13 || event.keyCode == 13) {
      els.searcForm.submit();
    }
  })
}
