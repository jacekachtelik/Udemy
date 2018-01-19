function b() {
//    var myVar;
    console.log(myVar);
}

function a() {
    var myVar = 2;
//    console.log(myVar);
    b();
}

var myVar = 1;
//console.log(myVar);
a();
//console.log(myVar);

// Moje testy

function fnc() {
    console.log('Zmienna vr w funkcji fnc',vr);
}


function fna() {
    var vr = 2;
    console.log('Zmienna vr w funkcji fna',vr);
    fnb();
    
    function fnb() {
        console.log('Zmienna vr w funkcji fnb',vr);
        fnc();
    }

}

var vr = 1;
fna();
console.log(vr);
//fnb(); // Error Nopt defined
//console.log(vr);
