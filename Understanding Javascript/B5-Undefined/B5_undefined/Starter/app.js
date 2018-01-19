// Hoisting - wywołanie funkcji, zmiennej wcześniej niż jest to zadeklarowane.
//b();
//console.log(a);

//var a = 'Witaj Świecie!';
var a;
console.log(a);

if (a === undefined) {
    console.log('a jest wartości udefined');
} else {
    console.log('a posiada wartość: ' + a);
}
//function b() {
//    console.log('Wywołanie b');
//}