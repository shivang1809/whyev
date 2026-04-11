const newsList = document.querySelector('.newsList')
let url = "https://newsapi.org/v2/everything?language=en&q=ev&apiKey=734dae6207c447a19e6e247d2f436590"
fetch(url) .then((res) => {
    return res.json()
}).then((data) => {
    data.articles.forEach(article => {
       let li = document.createElement('li');
       let a = document.createElement('a');

       a.setAttribute('href', article.url);
       a.setAttribute('target', '_blank');
       a.textContent = article.title;
       li.appendChild(a);
       newsList.appendChild(li);
    });
})