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

  document.querySelector(
    ".watch-hour"
  ).style.transform = `rotate(${degreeHour}deg)`;
  document.querySelector(
    ".watch-min"
  ).style.transform = `rotate(${degreeMin}deg)`;
  document.querySelector(
    ".watch-sec"
  ).style.transform = `rotate(${degreeSec}deg)`;
}

// 1秒ごとで十分（10秒単位の更新があるため）
setInterval(getElements, 1000);
