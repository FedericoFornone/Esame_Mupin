function search_artifact() {
    let input = document.getElementById("searchbar").value;
    input = input.toLowerCase();
    const artifactSections = document.querySelectorAll(".artifact");

    artifactSections.forEach((el) => {
        if (!el.innerHTML.toLowerCase().includes(input)) {
            el.style.display = "none";
        } else {
            el.style.display = "block";
            const itemSections = el.querySelectorAll(":scope  .artifact-item");
            itemSections.forEach((e) => {
                if (!e.innerHTML.toLocaleLowerCase().includes(input)) {
                    e.style.display = "none";
                } else {
                    e.style.display = "list-item";
                }
            });
        }
    });
}
