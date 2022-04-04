var video = document.querySelector(".video");

var juice = document.querySelector(".green-juice");
video.addEventListener("timeupdate", function() {
	var juicePos = video.currentTime / video.duration;
	juice.style.width = juicePos * 100 +"%";
	if(video.ended) {
		btn.className = "play";
	}
});

var btn = document.getElementById("play-pause");
function togglePlayPause() {
	if(video.paused) {
		document.getElementById("play-pause").innerHTML ="pause"
		video.play();
	} else {
		document.getElementById("play-pause").innerHTML ="play_arrow"
		video.pause();
	}
}

btn.onclick = function() {
	togglePlayPause();
};

window.SetVolume = function(val)
{
    console.log('Before: ' + video.volume);
    video.volume = val / 100;
    console.log('After: ' + video.volume);
}