var a;
a = 0;

if (a || a === 0) {
    console.log('Coś tam jest');
} else {
    console.log('Nic tam nie ma');
}


function greet(name) {
    name = name || '<Twoje imię tutaj>'; // Wartość domyślna
    console.log('Witaj ' + name);
}

greet('Jacek');
greet(0); // Zero 
greet();

console.log(libraryName);