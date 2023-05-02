
document.querySelector(".dropdown-menu").addEventListener('click',(event)=>{
    const newGenre = event.target.textContent;
    document.querySelector(".btn").textContent = newGenre
})