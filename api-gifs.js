let button = document.querySelector("#getData");

button.addEventListener("click", () => {
    sendApiRequest();
});

async function sendApiRequest() {
    let userInput = document.querySelector("#input").value;
    let response = await fetch(`https://api.giphy.com/v1/gifs/search?api_key=Sa2eM4D8d7QbKHR5AiBkziCYEA5IYDj7&q=${userInput}`);
    let gifs = await response.json();
    console.log(gifs);
    useApiData(gifs);
};

function useApiData(gifs) {
    document.querySelector("#wrapper").innerHTML = `
    <img class = "img" src = "${gifs.data[0].images.original.url} ">
    <p class="name">${gifs.data[0].title}</p>`
}
