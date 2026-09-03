const displayAnswer = () => {
  document.querySelectorAll(".js-ques").forEach((ques) => {
    ques.addEventListener("click", () => {
      const quesTxt = ques.firstElementChild;
      const answer = ques.nextElementSibling;
      const isOpen = answer.classList.toggle("is-open");
      quesTxt.classList.toggle("active");
      answer.style.height = isOpen ? `${answer.scrollHeight}px` : "0px";
    });
  });
};

// DOM読み込み後
document.addEventListener("DOMContentLoaded", displayAnswer);
