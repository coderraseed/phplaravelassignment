
  // Toggle search bar when search icon is clicked
    var searchIcon = document.getElementById("search-icon");
    var searchForm = document.getElementById("search-form");

    searchIcon.addEventListener("click", function() {
        searchForm.classList.toggle("d-none");
  });
