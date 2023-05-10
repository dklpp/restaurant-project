let searchButton = document.querySelector("#search"); //select html id=search
let searchTermInput = document.querySelector("#searchTerm");

searchButton.addEventListener("click", () => { //add action
    console.log("button pressed");
    sendApiRequest();
})

async function sendApiRequest() {
    let APP_ID = "098085f0";
    let API_KEY = "b820718927635b860b5c289f4567a5ff";
    let searchTerm = searchTermInput.value; // Get the value from the input field
    let response = await fetch(`https://api.edamam.com/search?app_id=${APP_ID}&app_key=${API_KEY}&q=${searchTerm}`);
    let data = await response.json();
    console.log(data);
    useApiData(data);
}

function useApiData(data) {
    let recipes = data.hits; // Get all the recipes from the API response
    let content = document.querySelector("#content");
    content.innerHTML = ''; // Clear previous results

    recipes.forEach(recipe => {
        let recipeCard = document.createElement('div');
        recipeCard.classList.add('recipe-card');
        recipeCard.style.width = '18rem';
        recipeCard.innerHTML = `
            <img class="card-img-top" src="${recipe.recipe.image}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">${recipe.recipe.label}</h5>
                <p class="card-text">${recipe.recipe.source}</p>
                <a href="${recipe.recipe.url}" class="btn btn-primary">Check the recipe</a>
            </div>
        `;

        content.appendChild(recipeCard);
    });
}