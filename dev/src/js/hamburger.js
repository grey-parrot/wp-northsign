document.addEventListener("DOMContentLoaded", function () {
  // ハンバーガーメニュー
  //--------------------------------------------
  /*
  【ハンバーガーメニューScriptの改修について】
  １．メニューの開閉判定にclassを使っていたものを、ボタンに設定されたaria-expandedの値を使用するように変更しています。.classList.contains()の値はboolean値ですが、getAttribute('aria-expanded')の値は文字列としての'true','false'が入ってくるので、if文の評価式を文字列判定に変更する必要があるところがハマりどころです。
  ２．if文の中では.is-openを付け外ししていたものを、必要なariaの値の付け替えに変更しているだけで、基本的なロジックは対策前と同じです。
  ３．今回のサンプルではグローバルナビのソースをPC/SPで共有しているため、ブレイクポイントをまたいでUIが変化した際にaria-hiddenの値を付け替えたり、スマホ用UIレイアウトの初期化をする処理も加えています。
  */

  const hamburger = document.querySelector(".hamburger");
  const gnav = document.querySelector(".gnav");

  // ハンバーガーメニューボタンがクリックされた時
  hamburger.addEventListener("click", function () {
    // aria-expandedの値を変数expandedに格納
    const expanded = this.getAttribute("aria-expanded");

    // もし expanded が 'false'だったら（メニューが非表示・開く操作）
    // 【重要】ariaの値はbooleanではなく文字列なので評価式の記述が変わります
    if (expanded === "false") {
      // 対象メニューの展開ステートをtrueにし、labelを「閉じる」に変更
      this.setAttribute("aria-expanded", "true");
      this.setAttribute("aria-label", "メニューを閉じる");
      // メニューのhiddenステートをfalseにしてメニューを表示
      gnav.setAttribute("aria-hidden", "false");
      gnav.style.display = "block"; // slideDown()の代わりに表示

      // もし expanded が 'true'だったら（メニューが展開済・閉じる操作）
    } else {
      // 対象メニューの展開ステートをfalseにし、labelを「開く」に変更
      this.setAttribute("aria-expanded", "false");
      this.setAttribute("aria-label", "メニューを開く");
      // メニューのhiddenステートをtrueにしてメニューを閉じる
      gnav.setAttribute("aria-hidden", "true");
      gnav.style.display = "none"; // slideUp()の代わりに非表示
    }
  });

  //ブレイクポイントをまたいだときの挙動
  //今回のグロナビはPC/SPソース共有なので、ブレイクポイントをまたいだ時にaria属性も動的に設定する必要がある。ハンバーガーはSPレイアウト時しか表示されないので768px以上の場合の処理は不要
  const mediaQuery = window.matchMedia("(min-width: 768px)");

  function handleBreakpointChange(event) {
    if (event.matches) {
      // PC用の初期表示
      gnav.setAttribute("aria-hidden", "false");
      gnav.style.display = "block";
    } else {
      // SP用の初期表示
      hamburger.setAttribute("aria-expanded", "false");
      hamburger.setAttribute("aria-label", "メニューを開く");
      gnav.setAttribute("aria-hidden", "true");
      gnav.style.display = "none";
    }
  }

  // 初期状態の表示を設定
  handleBreakpointChange(mediaQuery);

  // メディアクエリの変更を監視
  mediaQuery.addEventListener("change", handleBreakpointChange);
});
