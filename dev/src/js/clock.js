function getElements() {
  const time = new Date();
  const hour = time.getHours();
  const minute = time.getMinutes();
  const second = time.getSeconds();

  // 時針：分と秒まで含めて滑らか
  const degreeHour = (hour % 12) * 30 + minute * 0.5 + second * (0.5 / 60);

  // 分針：10秒ごとに1°進む
  const degreeMin =
    minute * 6 + // 1分＝6°
    Math.floor(second / 10) * 1; // 10秒＝1°

  const degreeSec = (second / 60) * 360;

  watchHour.style.transform = `rotate(${degreeHour}deg)`;
  watchMin.style.transform = `rotate(${degreeMin}deg)`;
  watchSec.style.transform = `rotate(${degreeSec}deg)`;
}

// 時計はトップページにだけある。時計がないページでは動かさない
// （以前は全ページで1秒ごとに動かしていて、時計のないページでエラーになっていた）
const watchHour = document.querySelector(".watch-hour");
const watchMin = document.querySelector(".watch-min");
const watchSec = document.querySelector(".watch-sec");

if (watchHour && watchMin && watchSec) {
  // 1秒ごとで十分（10秒単位の更新があるため）
  setInterval(getElements, 1000);
}
