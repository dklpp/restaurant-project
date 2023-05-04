const express = require('express');

const app = express();

app.get("/", (req, res) => {
    res.send("Welcome to myshop");
})

app.get("/about", (req, res) => {
    res.send("Welcome to about page");
})

app.listen(6000, () => {
    console.log("Server is running on port 6000");
})