let mus = document.getElementById("m");
let m = document.querySelectorAll(".m");
let v = document.querySelectorAll(".v");

function togglePlay() {
    return mus.paused ? mus.play() : mus.pause();
};
m.forEach(function (mu) {
    let vo = document.querySelectorAll(".voice");
    mu.onplay = function () {
        console.log("暫停");
        vo.forEach(function (voi) {
            voi.src = "images/music_off_b.png";
            console.log(voi);
        })
        // document.getElementById("voice").src = "images/music_off_b.png";
    }
    mu.onpause = function () {
        console.log("播放");
        vo.forEach(function (voi) {
            voi.src = "images/music_on_b.png";
        })
        // document.getElementById("voice").src = "images/music_on_b.png";
    }
})
v.forEach(function (vi) {
    vi.onplaying = function () {
        mus.pause();
        // console.log("test");
    }
    vi.onpause = function () {
        // console.log("play");
        mus.play();
    }
})