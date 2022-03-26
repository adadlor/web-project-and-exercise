//poyo
console.log("Exécution du programe principal");

//1
const Ex1 = document.querySelectorAll("#ingredients li");
var msg = "J'ai trouvé "+ Ex1.length +" inggrédients : \n";
for (var i = 0; i < Ex1.length; i++) {
    msg += Ex1[i].textContent + "\n";
}
console.log(msg);

//2
const Ex2 = document.getElementById("elemEx2");
console.log(Ex2.textContent);
Ex2.classList.remove("control");
Ex2.classList.add("inverse");

//3
document.getElementById("reussite").textContent = ("ha ok, j'ai compris !");
console.log(document.getElementById("dog").getAttribute('alt'));
document.getElementById("legendeDog").textContent = document.getElementById("dog").getAttribute('alt');
 
//4
document.getElementById("boutonEffacerEx4").addEventListener("click", () => {
    console.log("Evénement détécté !");
    document.getElementById("figureEx4").classList.add("invisible");
    document.getElementById("boutonDoubleEx4").textContent = "Montrer";
});
document.getElementById("boutonAfficherEx4").addEventListener("click", () => {
    document.getElementById("figureEx4").classList.remove("inisible");
    document.getElementById("boutonDoubleEx4").textContent = "Masquer";
});
document.getElementById("boutonDoubleEx4").addEventListener("click", () => {
    if (!document.getElementById("figureEx4").classList.contains("invisible")) {
        document.getElementById("figureEx4").classList.add("invisible");
        document.getElementById("boutonDoubleEx4").textContent = "Montrer";
        sit = false;
    }
    else {
        document.getElementById("figureEx4").classList.remove("invisible");
        document.getElementById("boutonDoubleEx4").textContent = "Masquer";
        sit = true;
    }
})

//5
const Ex5 = document.querySelectorAll(".liste_tetes li");
Ex5.forEach(element => element.classList.add("penche"));
document.querySelectorAll("h2").forEach(element => element.classList.add("elargi"));

//6
document.querySelector("#ex6 p img").addEventListener("click", () => {
        document.querySelector("#ex6 p img").classList.add("penche");   
});
const Ex6 = document.querySelectorAll(".liste_tetes li")
Ex6.forEach(element => {
    element.addEventListener("click", () => {
        element.classList.add("penche");
    });
});
document.querySelector(".penche").addEventListener("click",() => {
    this.classList.remove("penche");
})
