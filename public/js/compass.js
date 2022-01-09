document.addEventListener('DOMContentLoaded', async function(){
    const questions = await fun();
    const buttons = [...document.querySelectorAll('.compass button')];
    var questionAnswer = [];
    var currentQuestion = 0;
    const span = document.querySelector('.current_question');
    buttons.forEach(element => {
        element.addEventListener('click', function(){
            const value = element.value;
            if (questionAnswer.length < questions.length) {
                questionAnswer.push(value);
            }
            if (questionAnswer.length >= questions.length) {
                document.querySelector('input[type="hidden"]').value = questionAnswer.join(',');
                document.querySelector('form').submit();
                return;
            }

            if (currentQuestion >= 0) {
                document.querySelector(".fa-chevron-circle-left").style.display = "inline-block";
            }
            const span = document.querySelector('.current_question');
            const id = span.innerHTML.trim();
            
            currentQuestion++;
            span.innerHTML = currentQuestion + 1;

            document.querySelector('.current_title').innerHTML = questions[currentQuestion].description;
        })
    }) 
    document.querySelector(".fa-chevron-circle-left").addEventListener('click', function(){
        questionAnswer.pop();
        currentQuestion--;
        span.innerHTML = currentQuestion + 1;
        document.querySelector('.current_title').innerHTML = questions[currentQuestion].description;
        if (currentQuestion <= 0) {
            document.querySelector(".fa-chevron-circle-left").style.display = "none";
        }
    });
}
)
async function fun(){
    const data = await fetch("/questions", {
    method: "POST",
    })  
    .then(response => response.json())
    return data;
}
function changeButtonType(buttons){
    buttons.forEach(button => button.type = 'submit');
}