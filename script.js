//variables to get the classes that i want to toggle visiibilty on

const navToggle = document.querySelector('.nav-toggle');
const links = document.querySelector('.links');


//event listener and function to toggle the links on the hamburger menu
navToggle.addEventListener('click', function () {
    links.classList.toggle('show-links');
});

const speech = new SpeechSynthesisUtterance;

function Voiceover(text){
    
    let voices = speechSynthesis.getVoices;
    
    // let convert = document.getElementById("make").innerText;
    
    
    speech.text = text;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    speech.voice = voices[0];
    window.speechSynthesis.speak(speech);
}

function Stop(){
    window.speechSynthesis.cancel(speech);
}


// kept getting Uncaught SyntaxError: Invalid or unexpected token when
// I called the Voiceover() function in the button onclick event.
// it kept thinking the closing tags for the button were wrong.
// So I made an onclick even in the JS and attached it to each button individually.  

//i created a variable and grabbed the element id of the text I wanted read out
//then I used one of the categories in my JSON file to create a unique id
//added an onclick event to that and called the voiceover function adding
//the variable I just created into it's parameter so it reads it out
let speech002 = document.getElementById('SCP-002').innerText;
document.getElementById('one').onclick = () => Voiceover(speech002);


let speech003 = document.getElementById('SCP-003').innerText;
document.getElementById('two').onclick = () => Voiceover(speech003);


let speech004 = document.getElementById('SCP-004').innerText;
document.getElementById('three').onclick = () => Voiceover(speech004);


let speech005 = document.getElementById('SCP-005').innerText;
document.getElementById('four').onclick = () => Voiceover(speech005);


let speech006 = document.getElementById('SCP-006').innerText;
document.getElementById('five').onclick = () => Voiceover(speech006);


