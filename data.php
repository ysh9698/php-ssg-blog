<?php
$siteTitle = "디자이너 YSH";

// 게시물 7
$article7 = [];
$article7["id"] = 7;
$article7["title"] = "HTML 7일차";
$article7["regDate"] = "2020-01-18 18:18:12";
$article7["writerName"] = "윤승현";
$article7["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article7["body"] = <<<EOT

# 메타데이터
- title : 브라우저의 제목 표시줄이나 페이지 탭에 보여지는 문서의 제목을 설정.
- base : HTML 문서에 포함된 모든 상대 URL들의 기준 URL을 설정. 한 문서에 하나의 base 요소만 포함 가능함.
- link : 외부 리소스의 연결 및 현재 문서와의 관계를 명시.
- meta : 기타 메타데이터 요소로 나타낼 수 없는 데이터를 나타내기 위해 설정.

# 메타데이터 예시
```codepen
https://codepen.io/Yun_SH/embed/bGwzReg?height=450&theme-id=dark&default-tab=html,result&editable=true
```

# 참고영상
```youtube
phu8gdbVMyo
```

# 참고영상 2
```youtube
zO5zHxX2lNI
```
EOT;

// 게시물 6
$article6 = [];
$article6["id"] = 6;
$article6["title"] = "HTML 6일차";
$article6["regDate"] = "2020-01-17 20:39:43";
$article6["writerName"] = "윤승현";
$article6["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article6["body"] = <<<EOT

# 미디어 태그
- img : 이미지를 설정.
- audio : 소리 콘텐츠를 설정.
- video : 동영상 콘텐츠를 설정.
- figure : 이미지나 삽화, 도표 등의 영역을 설정.
- figcaption : figure 에 포함되어 이미지나 삽화 등의 설명을 표시.(Figure Caption)

# 참고영상
```youtube
V_ogge8xfDs
```
EOT;

// 게시물 5
$article5 = [];
$article5["id"] = 5;
$article5["title"] = "HTML 5일차";
$article5["regDate"] = "2020-01-16 17:46:25";
$article5["writerName"] = "윤승현";
$article5["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article5["body"] = <<<EOT

# a, strong, span, br
- a : 다른 페이지, 파일, 이메일 주소 등 다른 URL로 연결할 수 있는 하이퍼링크를 설정.
- strong : 의미의 중요성을 나타내기 위해 사용.
- span : div 태그 처럼 본질적으로는 아무 의미도 나타내지 않는 콘텐츠 영역을 설정.
- br : 줄바꿈을 설정.

# a, strong, span, br 예시
```codepen
https://codepen.io/Yun_SH/embed/XWjoQpb?height=450&theme-id=dark&default-tab=html,result&editable=true
```
EOT;

// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "HTML 4일차";
$article4["regDate"] = "2020-01-15 22:17:32";
$article4["writerName"] = "윤승현";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article4["body"] = <<<EOT
# nav, address, div
- nav : 다른 페이지 링크를 제공하는 영역을 설정.
- address : body, article, footer 등에서 연락처 정보를 제공하기 위해 사용.
- div : 가장 자주 쓰이는 태그이며 콘텐츠 영역을 설정.

# ol, ul, li 태그
```html
<ol></ol> : 정렬된 목록을 설정.
<li></li> : 항목을 설정.
```

# ol, ul, li 태그 예시
```codepen
https://codepen.io/Yun_SH/embed/rNMoBgZ?height=450&theme-id=dark&default-tab=html,result&editable=true
```

# 참고영상
```youtube
3dKSNMPH7IY
```
EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "HTML 3일차";
$article3["regDate"] = "2020-01-14 22:17:32";
$article3["writerName"] = "윤승현";
$article3["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article3["body"] = <<<EOT
# 비어있는 태그
- HTML에는 닫히는 개념이 없는 태그들이 있음.

# 예시 - 닫히는 개념이 없는 비어있는 태그
```html
<비어있는 태그>
  <비어있지 않은 태그></비어있지 않은 태그>
```

# header, footer, main
```codepen
https://codepen.io/Yun_SH/embed/KKgrmGZ?height=450&theme-id=dark&default-tab=html,result&editable=true
```

# article, section, aside
```codepen
https://codepen.io/Yun_SH/embed/bGwQWZR?height=450&theme-id=dark&default-tab=html,result&editable=true
```
EOT;

// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "HTML 2일차";
$article2["regDate"] = "2020-01-13 21:24:17";
$article2["writerName"] = "윤승현";
$article2["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article2["body"] = <<<EOT
# 부모와 자식 요소
- 태그 A가 태그 B의 콘텐츠로 사용될 시에, 태그 B는 태그 A의 부모 요소, 태그 A는 태그 B의 자식 요소라고 함.

# 예시 - 부모와 자식 요소 태그
```html
<부모태그>
  <자식태그></자식태그>
</부모태그>
```
# 부모와 자식 요소 태그 2
```codepen
https://codepen.io/Yun_SH/embed/bGwmZjm?height=450&theme-id=dark&default-tab=html,result&editable=true
```

# 참고영상
```youtube
jdc-7VMNf9g
```
EOT;

// 게시물 1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "HTML 1일차";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "윤승현";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-1"></use></svg>';
$article1["body"] = <<<EOT
# HTML의 개념
- HTML(Hyper Text Markup Language)
- 페이지의 제목, 문단, 표, 이미지, 동영상 등을 정의하고 그 구조와 의미를 부여하는 정적 언어로 웹의 구조를 담당함.
- 건물의 뼈대, 무대에서의 배우 개념으로 볼 수 있음.
  
# 예시 - HTML 기본 문법
```html
<div></div>
<div>구성요소</div>
```

# 태그의 기본 형태
```codepen
https://codepen.io/Yun_SH/embed/KKgGgVd?height=450&theme-id=dark&default-tab=html,result&editable=true
```
  
# 속성과 값
```codepen
https://codepen.io/Yun_SH/embed/NWROrVV?height=450&theme-id=dark&default-tab=html,result&editable=true
```

# 참고영상
```youtube
V5lz1CCyhtI
```
EOT;

if ( isset($articleId) ) {
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
}