document.addEventListener("DOMContentLoaded", () => {
  const scrollTopBtn = document.querySelector("[data-scroll-top]");
  if (!scrollTopBtn) return;

  const SHOW_Y = 1200;

  // スクロール監視
  window.addEventListener("scroll", () => {
    scrollTopBtn.classList.toggle("is-visible", window.scrollY > SHOW_Y);
  });

  // クリック時にトップへ
  scrollTopBtn.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});
