const searchBars = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
userList = document.querySelector(".users .users-list");

searchBtn.onclick = () => {
    searchBars.classList.toggle("active");
    searchBars.focus();
    searchBtn.classList.toggle("active"); 
}
setInterval(() => {
    //let's start Ajax
    let xhr = new XMLHttpRequest(); 
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                userList.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500); //this function will frequently after 500ms