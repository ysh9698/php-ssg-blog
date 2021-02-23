let target = document.querySelector(".text-1");
let stringArr = ["'세종누리'는 세종시의 모든 정보를 한 눈에 볼 수 있도록 만든 어플입니다. 세종시 방문이 처음이거나, 막상 어디로 갈지 찾아보려니 몰라서 막막한 사람들을 위해 세종시의 모든 것을 정리하여 담았습니다."];
let selectString = stringArr[Math.floor(Math.random() * stringArr.length)];
let selectStringArr = selectString.split("");

function randomString() {
  let stringArr = ["'세종누리'는 세종시의 모든 정보를 한 눈에 볼 수 있도록 만든 어플입니다. 세종시 방문이 처음이거나, 막상 어디로 갈지 찾아보려니 몰라서 막막한 사람들을 위해 세종시의 모든 것을 정리하여 담았습니다."];
let selectString = stringArr[Math.floor(Math.random() * stringArr.length)];
let selectStringArr = selectString.split("");
  
  return selectStringArr;
}

// 타이핑 리셋
function resetTyping() {
  target.textContent = "";
  dynamic(randomString());
}

// 한 글자씩 텍스트 출력 함수
function dynamic(randomArr) {
  if(randomArr.length > 0) {
    target.textContent += randomArr.shift();
    setTimeout(function() {
      dynamic(randomArr);
    },50);
  }else {
    setTimeout(resetTyping, 7000);
  }
}

dynamic(randomString());

gsap.registerPlugin(ScrollTrigger);

const tl1 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .contribution",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl1.from(
  ".wrap > .contribution",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl2 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .logo_introdution",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl2.from(
  ".wrap > .logo_introdution",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl3 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .color_pallete",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl3.from(
  ".wrap > .color_pallete",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl4 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .typography",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl4.from(
  ".wrap > .typography",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl5 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .prototype",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl5.from(
  ".wrap > .prototype",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl6 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .login",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl6.from(
  ".wrap > .login",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl7 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .main_page",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl7.from(
  ".wrap > .main_page > .main_page-1",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl8 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .main_page",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl8.from(
  ".wrap > .main_page > .main_page-2",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl9 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .detail",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl9.from(
  ".wrap > .detail > .detail-1",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl10 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .detail",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl10.from(
  ".wrap > .detail > .detail-2",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl11 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .detail",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl11.from(
  ".wrap > .detail > .detail-3",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl12 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .search",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl12.from(
  ".wrap > .search",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl13 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .bookmark",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl13.from(
  ".wrap > .bookmark > .bookmark-1",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);

const tl14 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .bookmark",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl14.from(
  ".wrap > .bookmark > .bookmark-2",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl15 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .mypage",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl15.from(
  ".wrap > .mypage",
  {
    x: 500,
    opacity: 0
  },
  "-=1"
);

const tl16 = gsap.timeline({
  scrollTrigger: {
    trigger: ".wrap > .epilogue",
    markers: true,
    start: "top 100%-=450",
    toggleActions: "restart none none reverse"
  }
});

tl16.from(
  ".wrap > .epilogue",
  {
    x: -500,
    opacity: 0
  },
  "-=1"
);