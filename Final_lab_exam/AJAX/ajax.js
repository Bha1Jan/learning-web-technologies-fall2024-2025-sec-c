document.addEventListener("DOMContentLoaded", function () {
   
    const searchInput = document.getElementById("searchEmployer");
    const resultContainer = document.getElementById("searchResults");

    searchInput.addEventListener("keyup", function () {
        const query = searchInput.value.trim();
        
        if (query.length > 0) {
            
            const xhr = new XMLHttpRequest();
            xhr.open("GET", `Controller/searchEmployer.php?query=${encodeURIComponent(query)}`, true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    resultContainer.innerHTML = xhr.responseText;
                } else {
                    console.error("Error fetching search results");
                }
            };

            xhr.send();
        } else {
            resultContainer.innerHTML = ""; 
        }
    });
});
