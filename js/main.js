const listItem = document.querySelectorAll('.sidebar-list li');

listItem.forEach((item) => {
    item.addEventListener("click", () =>{
        let isActive =item.classList.contains("active");
        listItem.forEach((el) => {
         el.classList.remove("active");
         
        });
        if(isActive) item.classList.remove("active");
        else item.classList.add("active");

    });
});
let sidebar = document.querySelector(".side-bar");
let sidebarbtn = document.querySelector(".bx-menu");

sidebarbtn.addEventListener("click", ()=>{
   sidebar.classList.toggle("close");
} );

