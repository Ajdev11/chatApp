const searchBars = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");

searchBtn.onclick = () => {
    searchBars.classList.toggle("active");
    searchBars.focus();
    searchBtn.classList.toggle("active"); 
}