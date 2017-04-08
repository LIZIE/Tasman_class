function resize() {
    var widths = window.innerWidth;
    if (widths <= 480) {
        var heights = window.innerHeight;
        //console.log(heights);
        document.getElementById("header").style.height = heights + 'px';
        // console.log("dddd"+document.getElementById("header").style.height);
    } else{
    	document.getElementById("header").style.height = "700px";
    	
    }

}
window.onresize = function() {
    resize();
};
