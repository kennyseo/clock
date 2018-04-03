var count;

var text_6 = "열한두세다여섯일곱네여덟아홉시이삼사자정오십일이삼사오육칠팔구분.".split("");
var text_7 = "오전후열한두세다여섯일곱여덟네아홉시이삼사자정오십일이삼사오육칠팔구분이삼사오십일이삼사오육칠팔구".split("");
var pos = [];
// [always on], [am, pm], hour-ten, [hour 1~9], min-ten, [min 2-5 over 10], [min 1-9], [12:00], [24:00], sec-ten, [sec 2-5 over 10], [sec 1-9]
pos[6] = [[1, 18, 35], [2, 3], 4, [[5], [6], [7], [13], [8, 10], [9, 10], [11, 12], [14, 15], [16, 17]], 25, [19, 20, 21, 24], [26, 27, 28, 29, 30, 31, 32, 33, 34], [23, 24], [22, 23]];
pos[7] = [pos[6][0], pos[6][1], pos[6][2], [pos[6][3][0], pos[6][3][1], pos[6][3][2], [15], pos[6][3][4], pos[6][3][5], pos[6][3][6], [13, 14], pos[6][3][8]], 			pos[6][4], pos[6][5], pos[6][6], pos[6][7], pos[6][8], 40, [36, 37, 38, 39], [41, 42, 43, 44, 45, 46, 47, 48, 49]];

function resize() {
	w = $(window).width();
	h = $(window).height();

	size = (w > h) ? h : w;
	cell_sz = size / count;

	$(".row div").width(cell_sz).height(cell_sz).css({lineHeight:cell_sz+"px", fontSize:cell_sz*0.9, textAlign:"center"});
	for(i=2 ; i<=count ; i++) {
		$(".row div:nth-child("+count+"n+"+i+")").css("margin-left", cell_sz*(i-1));
		for(j=1 ; j<=count ; j++) {
			$(".row div:nth-child("+((i-1)*count+j)+")").css("margin-top", cell_sz*(i-1));
		}
	}

	if(w > h) $("#wrap").css("margin-left", (w - cell_sz*count) / 2);
	else $("#wrap").css("margin-top", (h - cell_sz*count) / 2);
}

function init_clock() {
	if(location.hash.charAt(1) == "6") count = 6;
	else count = 7;
	if(location.hash.charAt(2) == "b") $("body").addClass("black");;


	text = (count == 6) ? text_6 : text_7;
	ih = "", ix=0;
	ih += "<section class='row'>";
	for(j=0 ; j<count*count ; j++, ix++) ih += "<div class='off'>"+((text[ix]==".")?"&nbsp;":text[ix])+"</div>";
	ih += "</section>";

	$("#wrap").html(ih);


	resize();
}

function display() {
	D = new Date();
	h = D.getHours();
	m = D.getMinutes();
	s = D.getSeconds();

	$("div").addClass("off");

	if(h == 0 && m == 0 && (count == 7 && s == 0)) {
		for(i in pos[count][7]) $("#wrap div:nth-child("+pos[count][0][i]+")").removeClass("off");
	}
	else if(h == 12 && m == 0 && (count == 7 && s == 0)) {
		for(i in pos[count][6]) $("#wrap div:nth-child("+pos[count][0][i]+")").removeClass("off");
	}
	else {
		for(i in pos[count][0]) $("#wrap div:nth-child("+pos[count][0][i]+")").removeClass("off");
		if(h < 12) $("#wrap div:nth-child("+pos[count][1][0]+")").removeClass("off");
		else       $("#wrap div:nth-child("+pos[count][1][1]+")").removeClass("off");
		h = (h > 12) ? h-12 : ((h == 0) ? 12 : h);
		if(h >= 10 && h <= 12) $("#wrap div:nth-child("+pos[count][2]+")").removeClass("off");
		for(i in pos[count][3][(h%10)-1]) $("#wrap div:nth-child("+pos[count][3][(h%10)-1][i]+")").removeClass("off");

		if(m >= 10) $("#wrap div:nth-child("+pos[count][4]+")").removeClass("off");
		m10 = (m - (m%10)) / 10;
		if(m10 >= 2) $("#wrap div:nth-child("+pos[count][5][m10-2]+")").removeClass("off");
		if(m%10 != 0) $("#wrap div:nth-child("+pos[count][6][(m%10)-1]+")").removeClass("off");
		if(m == 0) $("#wrap div:nth-child("+pos[count][0][2]+")").addClass("off");

		if(count == 6) return;

		if(s >= 10) $("#wrap div:nth-child("+pos[count][9]+")").removeClass("off");
		s10 = (s - (s%10)) / 10;
		if(s10 >= 2) $("#wrap div:nth-child("+pos[count][10][s10-2]+")").removeClass("off");
		if(s%10 != 0) $("#wrap div:nth-child("+pos[count][11][(s%10)-1]+")").removeClass("off");
	}
}

$(function() { init_clock(); display(); $(window).resize(resize); setInterval(display, 1000); });
