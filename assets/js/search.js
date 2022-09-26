const resultsContainerElement = document.querySelector("#results")
const searchForm = document.querySelector("form")

searchForm.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(searchForm);
    const search = formData.get("search")

    const response = await fetch(`/api/search?q=${search}`);
    const results = await response.json();

    const resultsElements = results.map(result => `<div>${result.title}</div>`)

    resultsContainerElement.innerHTML = resultsElements.join("");
})
