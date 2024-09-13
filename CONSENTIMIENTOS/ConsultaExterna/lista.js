function toggleDropdown(dropdownId) {
  var dropdown = document.getElementById("dropdown" + dropdownId);
  var otherDropdown = document.getElementById("dropdown" + (dropdownId === 1 ? 2 ? 3 ? 4 : 1 : 2 : 3 ));
  if (dropdown.style.display === "block") {
    dropdown.style.display = "none";
  } else {
    dropdown.style.display = "block";
    otherDropdown.style.display = "none";
  }
}

