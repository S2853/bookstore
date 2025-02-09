document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const bookItems = document.querySelectorAll(".book-item");

    searchInput.addEventListener("input", function () {
        const searchText = searchInput.value.toLowerCase();

        bookItems.forEach(book => {
            const title = book.querySelector("p strong").innerText.toLowerCase();
            if (title.includes(searchText)) {
                book.style.display = "block";
            } else {
                book.style.display = "none";
            }
        });
    });
});
