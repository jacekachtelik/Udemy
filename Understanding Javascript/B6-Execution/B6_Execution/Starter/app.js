console.log(a);
var a = "Witaj Świecie!";
console.log(a);

if (a === undefined) {
    console.log('a jest wartości udefined');
} else {
    console.log('a posiada wartość: ' + a);
}

function b() {
    console.log('Wywołanie b');
}

b();
var f;
function fnb() {
    var d = "Zmienna d w funkcji";
    f = "zmienna f zadeklarowana globalnie, wartość nadan w fnb()";
    console.log(d);
}

function fna() {
    fnb();
    var c = "Zmienna c w funcji";
    console.log(c);
}
fna();
var b = "zmienna b globalna";
var c = "zmienna c globalna";
console.log(b);
console.log(c);
var e = "zmienna e globalna";
console.log(e);
console.log('Zmienna f',f);

