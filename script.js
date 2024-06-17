function navigateToPage(page) {
    window.location.href = page;
}
let image=Array.from(document.getElementsByClassName('card-img-top'));
let lik=Array.from(document.getElementsByClassName('card-title'));
let play=document.getElementById("play");
let bar=document.getElementById("bar");
let front=document.getElementById("front");
let back=document.getElementById("back");
let gifi=document.getElementById("gifi");
let demo=document.getElementById("demo");
let dis=document.getElementById("dis");

let ind=1;
const audio=new Audio("public/1.mp3");

const arr= {
    1:"Salaar",
    2:"Bheemlanayak",
    3:"RRR",
    4:"Tiger 3",
    5:"Guntur Kaaram",
    6:"Joe",
    7:"Good Night",
    8:"Hanuman",
    9:"Papa Meri jaan",
    10:"Lutt Putt Gaya",
    11:"Tere Raasta",
    12:"Mumbai Ke Hero",
    13:"Ratan Lambiyan",
    14:"Nijamene Chebutunna",
    15:"Apudo Ipudo",
    16:"Ee Rathale",
    17:"You're My MLA",
    18:"Ye Mera Jaha",
    19:"English",
    20:"Vachindamma",
    21:"Kumkumala",
    22:"Oke Oka Lokam",
    23:"Tiger ka Hukum",
    24:"Kodaka Koteswarao",
    25:"Mastaru Mastaruu",
    26:"Shreya Ghosal",
    27:"KS Chitra",
    28:"SPB Hits",
    29:"Vandemataram",
    30:" Agiri Nandini",
    31:"Ranjhanaa",
    32:"Dandelions",
    33:"Whenever Wherever",
    34:"Music",
    35:"joyful",
    36:"Rotten",
    37:"Twisted",
    38:"criminal",
    39:"horror",
    40:"Gulabi Sadi",
    41:"Punjabi",
    42:"Varaha Roopam"
    };


//clicking image
image.forEach((value)=>{
value.addEventListener('click',(v)=>{
ind=parseInt(v.target.id);
play.classList.add('fa-pause-circle');
gifi.style.opacity=1;
audio.src=`public/${ind}.mp3`;
audio.currentTime=0;
demo.innerHTML=arr[ind];
audio.play();
})
})

let x=0;
lik.forEach((value)=>{
    value.addEventListener('click',(v)=>{
    x=parseInt(v.target.id);
    console.log(x);
    dis.innerHTML=x;
    })
    })



//play and pause
play.addEventListener('click', ()=>{            
if(audio.paused || audio.currentTime<=0 ){
audio.play();                               
play.classList.remove('fa-play-circle'); 
play.classList.add('fa-pause-circle');  
gifi.style.opacity=1;
}
else{
audio.pause();
play.classList.remove('fa-pause-circle');
play.classList.add('fa-play-circle');
gifi.style.opacity=0;
}
})

//progress bar
audio.addEventListener('timeupdate', ()=>{
bar.value=parseInt((audio.currentTime/audio.duration)*100);
})

bar.addEventListener('change', ()=>{
audio.currentTime=bar.value*audio.duration/100;
})

//forward and backward button
back.addEventListener('click', ()=>{
if(ind<=0){
ind=0;
}
else{
ind=ind-1;
}
audio.src=`public/${ind}.mp3`;
demo.innerHTML=arr[ind];
audio.currentTime = 0;
play.classList.remove('fa-play-circle'); 
play.classList.add('fa-pause-circle'); 
audio.play();
})
front.addEventListener('click', ()=>{
if(ind>=9){
ind=0;
}
else{
ind=ind+1;
}
audio.src=`${ind}.mp3`;
demo.innerHTML=arr[ind];
audio.currentTime = 0;
audio.play();
})

//Search Functionality
function search() {
    let find = document.getElementById('find').value.toUpperCase();
    let song = document.querySelectorAll('.card');
    let l = document.getElementsByTagName('h6');
    for(var i = 0;i<=l.length;i++){
    let a=song[i].getElementsByTagName('h6')[0];
    let val=a.innerHTML || a.innerText || a.textContent;
    if(val.toUpperCase().indexOf(find) > -1) {
    song[i].style.display="";
    }
    else
    {
    song[i].style.display="none";
    }
    }
    }