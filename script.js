const btns = document.querySelectorAll(".btn");
const value = document.querySelector(".value");
const increaseBy = document.querySelector("#increaseby-value")
let number = 0;

btns.forEach(function(btn) {
    btn.addEventListener("click", function(e){
        let styles = e.currentTarget.classList;
        const increase = styles.contains("increase");
        const reset = styles.contains("reset");
        const decrease = styles.contains("decrease");
        if (increase) {
            number += Number(increaseBy.value);
            value.textContent = number;
            } 
            else if (decrease) {
                number -= Number(increaseBy.value)
                value.textContent = number;
                } 
                else if (reset) {
                    number = 0;
                    value.textContent = number;
                    }
        if (number > 0) {
            value.style.color = "#9ACD32";
         }
            else if (number < 0) {
                value.style.color = "#FF4500";
              }
                else {
                    value.style.color = "#FFBB01"
                 }
    })
})

/* "#FF4500" 

"#9ACD32" */