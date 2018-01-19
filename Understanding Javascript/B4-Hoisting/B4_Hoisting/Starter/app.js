// Hoisting - wywołanie funkcji, zmiennej wcześniej niż jest to zadeklarowane.
b();
console.log(a);

var a = 'Witaj Świecie!';

function b() {
    console.log('Wywołanie b');
}