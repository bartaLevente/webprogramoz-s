const quizData = [
    {
        question: "Who is considered the greatest heavyweight boxer of all time?",
        options: ["Muhammad Ali", "Mike Tyson", "Joe Louis", "Rocky Marciano"],
        correctAnswer: "Muhammad Ali"
    },
    // Add more questions in a similar format
];

let currentQuestion = 0;
let currentAnswer = 0;
let score = 0;

const questionContainer = document.getElementById("question-container");
const optionsContainer = document.getElementById("options-container");
const nextButton = document.getElementById("next-button");

function loadQuestion() {
    const currentQuizData = quizData[currentQuestion];
    questionContainer.innerText = currentQuizData.question;

    optionsContainer.innerHTML = "";
    currentQuizData.options.forEach((option) => {
        const button = document.createElement("button");
        button.innerText = option;
        button.classList.add("option-btn");
        
        button.addEventListener("click", updateAnswer);
        optionsContainer.appendChild(button);
    });
    
    nextButton.addEventListener("click", checkAnswer);
}
function updateAnswer(e){
    currentAnswer= e.target.innerText;
    let pulyak = document.getElementById("options-container").children
    for (let pulya = 0; pulya < pulyak.length; pulya++) {
        pulyak[pulya].style.backgroundColor = "rgb(160,0,0)";
    }
    e.target.style.backgroundColor = "rgb(100,0,0)";
    nextButton.classList.remove("hide");
}


function checkAnswer(e) {
    const currentQuizData = quizData[currentQuestion];

    if (currentAnswer === currentQuizData.correctAnswer) {
        score++;
    }
    nextButton.classList.add("hide");
    nextQuestion();
}

function disableOptions() {
    const optionButtons = document.querySelectorAll(".option-btn");
    optionButtons.forEach((button) => {
        button.disabled = true;
    });
}

function nextQuestion() {
    currentQuestion++;

    if (currentQuestion < quizData.length) {
        loadQuestion();
        resetOptions();
        nextButton.classList.add("hide");
    } else {
        showResults();
    }
}

function resetOptions() {
    const optionButtons = document.querySelectorAll(".option-btn");
    optionButtons.forEach((button) => {
        button.disabled = false;
        button.classList.remove("disabled");
    });
}

function showResults() {
    questionContainer.innerText = `Your Score: ${score} out of ${quizData.length}`;
    optionsContainer.innerHTML = "";
    nextButton.classList.add("hide");
}

document.addEventListener("DOMContentLoaded", loadQuestion);
