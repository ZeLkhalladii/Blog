function strict() {

    var winH = window.height(),
        upperH = '.upper-bar'.innerHeight(),
        navH = ('.navbar').innerHeight();
    ('#slider').innerHeight(winH - (upperH + navH));


};
console.log('slider');