const notif=document.getElementById("notif");
const voirCREATEUR=document.getElementById("voirCREATEUR");
const cashtout=document.getElementById("cashtout")
voirCREATEUR.addEventListener("click",()=>{
    document.getElementById("camion").style.display="block"
    cashtout.style.display="none"
    voirCREATEUR.addEventListener("click",()=>{
        document.getElementById("camion").style.display="none"
        cashtout.style.display="block"
    })
})
notif.addEventListener("click",()=>{
    document.getElementById("notif1").style.display="block"
    cashtout.style.display="none"
    document.getElementById("camion").style.display="none"
})
const ok =document.getElementById("ok")
ok.addEventListener("click",()=>{
    cashtout.style.display="block"
    document.getElementById("notif1").style.display="none"
    
})
const moya=document.getElementById("moya");
moya.addEventListener("click",()=>{
    alert("Impossible de vous connectez pour l'instant !")
})
const moya1=document.getElementById("moya1");
moya1.addEventListener("click",()=>{
    alert("Impossible de vous connectez pour l'instant !")
})
const moya2=document.getElementById("moya2");
moya2.addEventListener("click",()=>{
    alert("Impossible de vous connectez pour l'instant !")
})